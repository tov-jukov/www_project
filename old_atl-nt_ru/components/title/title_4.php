<div class="body_hider"></div>

<div id="phone_header">
  <p id="phone_number"><span class="smaller">(3435)</span> 92-29-92</p>
  <p id="phone_offer">Позвоните прямо сейчас!</p>
</div>

<section id="title">
  <div class="container">
    
    <header>
      <img id="logo" src="img/grader/logo.png">
      <!--
      <p id="org_name_1">АвтоТранс</p>
      <p id="org_name_2">Логистикс</p>
      -->
    </header>
  
    <img id="title_arrow" src="img/arrow.png">

    <h1>
      Качественный Отсев<br> <span class="smaller">за 2 часа по ценам производителя</span>
    </h1>

    <p id="offer">
      <span class="orange">Бесплатная доставка</span>
      <br>
      <span>по Нижнему Тагилу</span>
    </p>

    <div id="menus_wrapper">
      
      <div id="materials">
        
        <h3>Выберите материал:</h3>

        <h4>Отсев</h4>
        <div class="material_row">            
          <div class="col col_20" data-value="Отсев: Гранитный">Отсев<br>Гранитный</div>
          <div class="col col_20" data-value="Отсев: Шлаковый">Отсев<br>Шлаковый</div>
          <div class="col col_20" data-value="Отсев: Зелёный">Отсев<br>Зелёный</div>
          <div class="col col_20" data-value="Отсев: Горный">Отсев<br>Горный</div>
          <div class="col col_20" data-value="Отсев: Семечка">Семечка</div>
          <div class="clearfix"></div>
        </div>

        <div class="menu_button_wrapper">
          <button id="materials_submit">Готово</button>
        </div>

        <div class="clearfix"></div>

      </div>

      <div id="tonns">
        
        <h3>Укажите количество тонн</h3>

        <div class="tonns_row">
          <div class="col col_2"><div class="inner" data-value="1">1 тонна</div></div>
          <div class="col col_2"><div class="inner" data-value="2">2 тонны</div></div>
          <div class="col col_2"><div class="inner" data-value="3">3 тонны</div></div>
          <div class="col col_2"><div class="inner" data-value="4">4 тонны</div></div>
          <div class="col col_2"><div class="inner" data-value="5">5 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="10">10 тонн</div></div>
          <div class="clearfix"></div>
        </div>

        <div class="tonns_row">
          <div class="col col_2"><div class="inner" data-value="15">15 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="20">20 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="25">25 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="30">30 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="35">35 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="40">40 тонн</div></div>
          <div class="clearfix"></div>
        </div>

        <div class="tonns_row">
          <div class="col col_2"><div class="inner" data-value="50">50 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="60">60 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="70">70 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="80">80 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="90">90 тонн</div></div>
          <div class="col col_2"><div class="inner" data-value="100">100 тонн</div></div>
          <div class="clearfix"></div>
        </div>

        <div class="menu_button_wrapper">
          
          <div id="tonns_count">
            <p>Количество:</p>
            <input type="text" placeholder="0">
            <p>тонн</p>
          </div>

          <button id="tonns_submit">Готово</button>
        
        </div>

        <div class="clearfix"></div>

      </div>

    </div>

    <form id="order" action="send.php" method="post">
      
      <input type="hidden" name="key" value="<?=$_SESSION['key_a']?>">
      <p id="form_header">закажи прямо сейчас</p>

      <div class="col col_3 white_block">
        <div class="inner" id="select_materials">
          Выберите материал
        </div>
      </div>

      <div class="col col_3 white_block">
        <div class="inner" id="select_tonns">
          Сколько тонн?
        </div>
      </div>
      
      <div class="col col_6 inputs_wrapper">
        <input type="text" placeholder="Введите номер телефона" name="phone" id="_phone">
        <button disabled="" class="bg-orange" id="send_1">Поехали!</button>
      </div>
    
      <div class="clearfix"></div>
    </form>

    <p id="form_info">* Полученная информация не будет использоваться третьими лицами и нужна исключительно для установки контакта.</p>

    <a href="#deeper">
      <div id="go_deeper">
        <img src="img/arrow_down.png">
        <div>
          <p>
            Узнайте больше
          </p>
        </div>
      </div>
    </a>

  </div>
</section>

