<header id="header" class="parallax-window" data-parallax="scroll" data-image-src="images/main-bg.png" >
  <div class="container main-info">
    <div class="col-xs-4 phone-block">
      <div class="phone-icon"><img src="images/header-phone-icon.png" alt=""></div>
      <div class="phone"><span class="code">863 </span>261 756</div>
    </div>
    <div class="col-xs-4 heading">
      <h1>Первый - мужской</h1>
    </div>
    <div class="col-xs-4 socmedia-links">
      <ul>
        <li>
          <a class='facebook social' href=""></a>
        </li>
        <li>
          <a href="" class='inst social' ></a>
        </li>
        <li>
          <a href="" class='vk social'></a>
        </li>
        <li>
          <a href="" class='twit social'></a>
        </li>
        <li>
          <a href="#" class='pinit social'></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12"><a href="#menu" type="button" data-toggle="collapse" data-target="#main-menu" aria-expanded="false" id="toggle" class="navbar-toggle navbar-btn collapsed"><span></span></a>
      <div id="main-menu" class="collapse navbar-collapse site-nav">
        <ul class="main-manu menu">
          <li><a href="#section-2">О нас</a></li>
          <li><a href="#section-3">Услуги</a></li>
          <li><a href="#section-4">Салон</a></li>
          <li><a href="#section-5">Новости</a></li>
          <li><a href="#section-6">Товары</a></li>
          <li><a href="#section-7">Вопрос/ответ</a></li>
          <li><a href="#section-8">Отзывы</a></li>
          <li><a href="#section-9">Контакты</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-12">
      <div class="header-main logo">
      </div>
    </div>
    <div class="col-md-12">
      <button class="button_header button button--ujarak button--border-thin button--text-thick"><a class='zapic_linc' href="" data-toggle="modal" data-target="#zapic">Записаться</a></button>
    </div>
  </div>
</header>
<div class="section section-1">
  <div class="container">
    <h3> Барбершоп</h3>
    <p class="desc">Барбершоп - это место для мужчин, ценящих хороший сервис, серьезный подход и знающих толк во вкусе.</p><img src="" alt="" class="like">
  </div>
  <div class="container section-1-footer-conteiner">
    <div class="footer">
      <div class="container footer-containter">
        <div class="col-xs-3 footer-item"><img src="images/placemark.png" alt="">
          <h3>Адрес</h3>
          <div class="sub-info">Ростов-на-Дону, ул. Соколова, 39</div>
        </div>
        <div class="col-xs-3 footer-item"><img src="images/phone-icon.png" alt="">
          <h3>Контактный телефон</h3>
          <div class="sub-info">+7 (863) 261-756</div>
        </div>
        <div class="col-xs-3 footer-item"><img src="images/clock.png" alt="">
          <h3>Режим работы</h3>
          <div class="sub-info">Каждый день с 9-00 до 21-00</div>
        </div>
        <div class="col-xs-3 footer-item"><img src="images/mess.png" alt="">
          <h3>Оставить отзыв</h3>
          <div class="sub-info">Поделитесь впечатлениями</div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div id="section-2" class="hidden-sm hidden-xs section section-2 parallax-window" data-parallax="scroll" data-image-src="/images/section-2-bg.png">
  <div class="container">
    <div class="about-us-block">
      <h3>О нас</h3>
      <p class="desc"><span class="main-cap">Б</span>арбершоп - это место для мужчин, ценящих хороший сервис, серьезный подход и знающих толк во вкусе. Барбершоп - это место для мужчин, ценящих хороший сервис, серьезный подход и знающих толк во вкусе.</p>
    </div>
  </div>
</div>
<div id="section-3" class="section section-3">
  <div class="container">
    <div class="services">
      <h3 class="border-heading">Услуги</h3>
      <p class="desc">Проконсультироваться по поводу интересующей Вас услуги Вы можете позвонив по номеру +7 (863) 261-756, а также заказав обратный звонок.</p><a href="tel:+7863261756"><img src="images/phone-3-icon.png" alt="" class="services-phone-icon"></a>
    </div>
  </div>
  <div class="slider-block">
    <button type="button" data-role="none" style="display: block;" aria-label="Previous" role="button" class="slick-prev slick-arrow">Previous</button>
    <? foreach($img as $im): ?>
    <div class="col-xs-2"><img src="img/<?= $im->src?>" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn"><a href="" data-toggle="modal" data-target="#servicesModal">подробнее</a></p>
      </div>
    </div>
    <? endforeach; ?>
  </div>
  <div class="container">
    <div class="services">
      <div class="col-xs-12"><a href="" class="services-enroll-btn" data-toggle="modal" data-target="#zapic">

        Записаться<img src="images/arrow-bot.png" alt=""></a>

      </div>
    </div>
  </div>
  <? include "modal/zapic.php"  ?>
</div>
<div id="section-4" class="section section-4">
  <div class="container">
    <div class="salon">
      <h3 class="border-heading">Салон</h3>
    </div>
  </div>
  <div class="slider-block">
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
  </div>
</div>
<div id="section-5" class="section section-5">
  <div class="container">
    <div class="news">
      <h3 class="border-heading">Новости</h3>
      <p class="desc">Делитесь своими фотографиями в социальных сетях.</p>
    </div>
  </div>
  <div class="slider-block">
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt=""></div>
  </div>
</div>
<div id="section-6" class="section section-6">
  <div class="container">
    <div class="goods">
      <h3 class="border-heading">Товары</h3>
      <p class="desc">Поддерживайте красоту волос и здоровье кожи с проффесиональными средствами по уходу. Все представленые товары Вы можете приобрести в нашем салоне.</p>
    </div>
  </div>
  <div class="slider-block">
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn">подробнее</p>
      </div>
    </div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn">подробнее</p>
      </div>
    </div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn">подробнее</p>
      </div>
    </div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn">подробнее</p>
      </div>
    </div>
    <div class="col-xs-2"><img src="images/salon-slider-item.png" alt="">
      <div class="desc-block">
        <h5>Стрижка</h5>
        <p class="more-btn">подробнее</p>
      </div>
    </div>
  </div>
</div>
<div id="section-7" class="section section-7">
  <div class="container">
    <div class="faq">
      <h3 class="border-heading">Вопрос/ответ</h3>
      <div class="col-md-6 border-col">
        <h4>FAQ</h4>
        <div class="answer-block border-block firstAnswer">
          <? if(!empty($questions)):?>
          <p class="question"><?  echo $questions[0]->question; ?></p>
          <p class="answer"><?  echo $questions[0]->answer; ?></p>
          <? endif;?>
        </div>
        <div class="answer-block secondAnswer">
          <? if(!empty($questions[1])):?>
          <p class="question"><?  echo $questions[1]->question; ?></p>
          <p class="answer"><?  echo $questions[1]->answer; ?></p>
          <? endif;?>
        </div>
        <div class="more"><a class='hover_link' href="#">Еще ответы
          <div class="reload-btn"><img class='rotate' src="images/reload-icon.png" alt=""></div></a></div>
      </div>
      <div class="col-md-6">
        <h4>Задать вопрос</h4>
        <form action=" " method="post" id='question_form'>
          <input type="text" placeholder="Имя" name='Qname' class = 'Qname'>
          <input type="email" placeholder="e-mail" name='email' class = 'email'>
          <input type="text" placeholder="Телефон" name='Qphone' class = 'Qphone'>
          <input type="text" placeholder="Ваш вопрос" class="question-input question" name='question' class = 'question comment'>
          <input class='hover_link' type="submit" value="отправить" id='qBtn'><img src="images/arrow-bot.png" alt="">
          <p class='msg_quest'></p>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="section-8" class="section section-8">
  <div class="container">
    <div class="review">
      <h3 class="border-heading">Отзывы</h3>
      <div class="col-md-6 border-col">
        <div class="review-item border-block firstReview">
          <? if(!empty($reviews)):?>
          <div class="name"><?= $reviews[0]->name; ?></div>
          <div class="date"><?= $reviews[0]->date; ?></div>
          <div class="text"><?= $reviews[0]->review; ?></div>
          <? endif; ?>
        </div>
        <div class="review-item secondReview">
          <? if(!empty($reviews)):?>
          <div class="name"><?= $reviews[1]->name; ?></div>
          <div class="date"><?= $reviews[1]->date; ?></div>
          <div class="text"><?= $reviews[1]->review; ?></div>
          <? endif; ?>
        </div>
        <div class="more reviewUpdate"><a class='hover_link' href="">Еще отзывы
          <div class="reload-btn"><img class= 'rotate' src="images/reload-icon.png" alt=""></div></a></div>
      </div>
      <div class="col-md-6">
        <div class="review-item border-block thirdReview">
          <? if(!empty($reviews)):?>
          <div class="name"><?= $reviews[2]->name; ?></div>
          <div class="date"><?= $reviews[2]->date; ?></div>
          <div class="text"><?= $reviews[2]->review; ?></div>
          <? endif; ?>
        </div>
        <div class="make-review">
          <a href="" data-toggle="modal" data-target="#myModal">
            <h4 class='hover_link' >Оставить отзыв</h4>
            <p class="desc">

              Поделитесь своими впечатлениями!
              <br>Ваше мнение очень важно для нас
            </p><img src="images/arrow-bot.png" alt=""></a>
        </div>

        <? include "modal/myModal.php" ?>
      </div>
    </div>
  </div>
</div>
<div id="section-9" class="section section-9">
  <div class="container">
    <div class="contacts">
      <h3 class="border-heading">Контакты</h3>
    </div>
  </div>
  <div class="map-block">
    <div id="map" style="width: 100%; height: 450px"></div>
  </div>
  <div class="container">
    <div class="contacts">
      <div class="contacts-menu">
        <ul role="tablist" class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <img src="images/placemark.png" alt=""></a>
          </li>
          <li role="presentation">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <img src="images/phone-icon.png" alt=""></a>
          </li>
          <li role="presentation">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"> <img src="images/clock.png" alt=""></a>
          </li>
          <li role="presentation">
            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"> <img src="images/mess.png" alt=""></a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="home" role="tabpanel" class="tab-pane active">
            <h4>Адрес  </h4>
            <p class="desc">Ростов-на-Дону, ул. Соколова, 39</p>
          </div>
          <div id="profile" role="tabpanel" class="tab-pane">
            <h4>Контактный телефон</h4>
            <p class="desc">+7 (863) 261 - 756</p>
          </div>
          <div id="messages" role="tabpanel" class="tab-pane">
            <h4>Режим работы</h4>
            <p class="desc">Каждый день с 9-00 до 21-00</p>
          </div>
          <div id="settings" role="tabpanel" class="tab-pane">
            <h4>Оставить отзыв</h4>
            <p class="desc">Поделитесь впечатлениями</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="scroll-up-block">
      <a href="#header"><img src="images/arrow-top.png" alt=""></a>
    </div>
    <div class="logo"></div>
    <div class="copyright-block">c 2015 - барбершоп
    </div>
  </div>
</footer>



<? include "modal/servicesModal.php" ?>

