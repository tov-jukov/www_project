<?

session_start();
define('Q', chr(13));




#               .---===≡≡≡  BY R.L. 2015  ≡≡≡===---.



             
require_once 'config.php';
require_once 'class/class.php';

$clean = new Clean;

$key = $clean->parameter($_POST['key']);
if($key!=$_SESSION['key_a']) exit;

$user = new User;

if(isset($_POST['valid'])) {
     $phone = $clean->phone($_POST['valid']);
     echo $phone;   
     exit;
}

if(isset($_POST['hg_'])) {
     $hg = $clean->txt($_POST['hg_']);
     $mt = $clean->txt($_POST['mt_']);
     $phone = $clean->phone($_POST['phone']);
     if($phone == '') exit;
     $order = $mt.' в количестве '.$hg.'т.';
     $user->order($phone, $order);
     header('Location: success.php');
     exit;
}

if(isset($_POST['tel'])) {
     $phone = $clean->phone($_POST['phone']);
     if($phone == '') exit;
     $user->sendmail($phone);
     header('Location: success.php');
     exit;     
}


?>