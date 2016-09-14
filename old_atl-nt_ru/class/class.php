<?php

if(Q!=chr(13)) exit;



#               .---===≡≡≡  BY R.L. 2015  ≡≡≡===---.




class Database {
     private $dbname;
     private $dbhost;
     private $dbuser;
     private $dbpass;
     public $conn;
    function __construct() {
          $this->dbname = DBNAME;
          $this->dbhost = DBHOST;
          $this->dbuser = DBUSER;
          $this->dbpass = DBPASS;
          $this->conn = new mysqli(
               $this->dbhost, $this->dbuser, $this->dbpass, $this->dbname
          );
          $this->conn->query('SET NAMES utf8');
     }
}

class Clean {
     public function number($data) {
          $str = array(chr(8),chr(13),'"',"'",";","/","*","script","<",">","+","javascript","java");
          return substr(@ereg_replace('[^0-9]','',$data), 0, 10);
     }
     public function parameter($data) {
          $str = array(chr(8),chr(13),'"',"'",";","/","*","script","<",">","+","javascript","java");
          $data = substr(mb_strtolower($data,'utf-8'), 0, 32);
          $ret = trim(htmlspecialchars(str_replace($str, '', $data)));
          $ret = empty($ret) ? false : $ret;
          return $ret;
     }
     public function phone($data) {
          $data = @ereg_replace('[^0-9]','',$data);
          strlen($data)==11 ? $a = '+7 ('.substr($data, 1, 3).') '.substr($data, 4, 3).'-'.substr($data, 7, 4) : false;
          return $a;
     }
     public function txt($data) {
          $data = preg_replace('/\"(.*?)\"/is', '«$1»',$data);
          $data = preg_replace('/\'(.*?)\'/is', '«$1»',$data);
          $str = array("script","javascript","java");
          $data = substr($data, 0, 16384);
          return trim(str_replace($str, '', $data));          
     } 
     public function url($data) {
          $str = array(chr(8),chr(13),'"',"'",";","/","*","script", "<",">","+","javascript","java",".","р-н","район","INSERT","DROP","TRUNCATE","«","»","_");
          $data = trim(htmlspecialchars(str_replace($str, '', $data)));
          $data = urlencode(mb_strtolower($data,'utf-8'));
          return $data;
     }               
}

class User {
     public function sendmail($data) {
          $clean = new Clean;
          $to = "<".MAIL.">";
          $subject = "У нас клиент ! т.".$data;
          $message = 'Поступила заявка на обратный звонок с сайта. Данные заказчика:<br />';
          $message .= 'Телефон - <b>'.$data.'</b><br /><br />';
          $message .= 'Заявка поступила '.date('d.m.Y').' в '.date('H:i').' МСК';
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=utf-8\r\n";
          $headers .= "From: ".FROMNAME." <".FROM.">\r\n";
          $headers .= "Cc: ".FROM."\r\n";
          $headers .= "Bcc: ".FROM."\r\n";
          mail($to, $subject, $message, $headers);
          $db = new Database;
          $db->conn->query('
               UPDATE `visitors`
               SET `phone` = "'.$data.'"
               WHERE `key` = "'.$_SESSION['key_a'].'"
          ');
          $txt = $clean->url('+'.$data.' хочу: обратный звонок');
          return $this->sendsms($txt);           
     }
     public function order($phone, $order) {

          $clean = new Clean;
          $subject = 'У нас клиент ! '.$phone;
          $message = '<h2>Поступила заявка c сайта.</h2><br />';
          $message .= 'Заказано: '.$order.'<br />';
          $message .= 'Заявка поступила '.date('d.m.Y').' в '.date('H:i').' МСК<br /><br />';
          $message .= 'Телефон заказчика: <b>'.$phone.'</b><br />';
          $to = '<'.MAIL.'>';
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=utf-8\r\n";
          $headers .= "From: ".FROMNAME." <".FROM.">\r\n";
          $headers .= "Cc: ".FROM." \r\n";
          $headers .= "Bcc: ".FROM."\r\n";
          
          $n = mail($to, $subject, $message, $headers);

          $db = new Database;
          $ret = $db->conn->query('
               SELECT `id`,`orders` FROM `visitors` WHERE `key` = "'.$_SESSION['key_a'].'"
          '); 
          $data = $ret->fetch_assoc();
          $data['orders'] =+ 1;         

          $db->conn->query('
               INSERT INTO `orders`
               VALUES (
                    NULL,
                    "'.$data['id'].'",
                    "'.$order.'",
                    "",
                    "'.time().'"
               )
          ');
          $last = $db->conn->insert_id;
          $db->conn->query('
               UPDATE `visitors`
               SET `phone` = "'.$phone.'",
                   `lastorderid` = "'.$last.'",
                   `lastorder` = "'.time().'",
                   `orders` = "'.$data['orders'].'"
               WHERE `key` = "'.$_SESSION['key_a'].'"
          ');

          $txt = $clean->url('+'.$phone.' хочу: '.$order);
          return $this->sendsms($txt);    
     }     
     public function sendsms($text) {
           $data = fopen('http://sms.ru/sms/send?api_id=b0819739-ab59-0a04-add6-9574433be6b6&to=7'.PHONE.'&text='.$text, 'r');
           fclose($data);          
     }
     public function detect() {
          if(isset($_COOKIE['atlnt'])) {
               $clean = new Clean;
               $key = $clean->parameter($_COOKIE['atlnt']);
               $db = new Database;
               $ret = $db->conn->query('
                    SELECT *
                    FROM `visitors`
                    WHERE `key` = "'.$key.'"
               ');    
               $data = $ret->fetch_assoc();
               $_SESSION['key_a'] = md5(time()+'RL_thebestcoder!');
               setcookie('atlnt', $_SESSION['key_a'], time()+22118400);
               $visits = $data['visits'] + 1;
               $db->conn->query('
                    UPDATE `visitors`
                    SET `visits` = "'.$visits.'",
                        `key` = "'.$_SESSION['key_a'].'",
                        `lastvisit` = "'.time().'"
                    WHERE `id` = "'.$data['id'].'"    
               ');              
          } else {
               $_SESSION['key_a'] = md5(time()+'RL_thebestcoder!');
               setcookie('atlnt', $_SESSION['key_a'], time()+22118400);
               $db = new Database();
               $db->conn->query('
                    INSERT INTO `visitors`
                    VALUES (
                         NULL,
                         "",
                         "'.$_SESSION['key_a'].'",
                         "1",
                         "'.time().'",
                         "",
                         "",
                         ""
                    )
               ');
               return;
          }
     }
}

?>