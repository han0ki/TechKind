<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>TeshKind</title>

 <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
      <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.icon" />
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>


 <script src="https://api-maps.yandex.ru/2.1/?apikey=<d925b50c-a629-4e5b-bc0f-59303da74991>&lang=ru_RU" type="text/javascript">

    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper grey darken-3">
      <div class="row">
      <div class="container">
      <a href="#" class="brand-logo"><img class="gab" src="img/668.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons" style="margin-top:-11px">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="font-size:20px;width:100%;" href="index.php">Главная</a></li>
        <li><a style="font-size:20px;width:100%;" href="onas.php">Наши преимущества</a></li>
        <li><a style="font-size:20px;width:100%;" href="forma.php">Связаться со специалистом</a></li>
      </ul>
<ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Главная</a></li>
        <li><a href="onas.php">Наши преимущества</a></li>
        <li><a href="forma.php">Связаться со специалистом</a></li>
        
      </ul>
   </div>
    
  </nav>
<div class="nana" >
<div class="container">
  <div class="forma" style="padding:10px; ">
    <div class="title" style="text-align:center;padding: 40px 0 35px;">
      
        <h3>Связь со специалистом</h3>
      
    </div>
<div class="row">
    <form  method="post"  id="contactForm">
      <div class="row">
        <div class="input-field col m6 s12">
          <i class="material-icons prefix" >account_box</i>
          <input id="first_name"  type="text" class="validate" name="first_name">
          <label for="first_name">Имя</label>
        </div>
        <div class="input-field col m6 s12">
          <i class="material-icons prefix" >account_box</i>
          <input id="last_name" type="text"  class="validate" name="last_name">
          <label for="last_name">Фамилия</label>
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col m6 s12">
          <i class="material-icons prefix" >alternate_email</i>
          <input id="email" type="email"  class="validate" name="email">
          <label for="email">Ваша почта</label>
        </div>
     
      <div class="input-field col m6 s12">
          <i class="material-icons prefix" >phone</i>
          <input id="icon_telephone"  type="tel" class="validate" name="tel">
          <label for="icon_telephone">Ваш номер телефона</label>
        </div>
         </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix" >message</i>
          <textarea id="textarea1"  class="materialize-textarea" name="textarea1"></textarea>
          <label for="textarea1">Опишите вашу проблему</label>
        </div>
        <div class="knp" style="text-align: center;">
        <button class="btn waves-effect waves-light green darken-3 " type="submit" name="submit" style="width: 100%;border: 1px solid white;border-radius: 10px;" >Отправить сообщение
    <i class="material-icons right">send</i>
  </button>
   <?php
require_once 'contr.php';
?>
  </div>

    </form>
    
  </div>
</div>
</div>
</div></div></div></div></nav>
</div> 
<div id="map" ><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af2fb64bca8df533cfd159b58b991d69474ea17d30766125171ae4a2abbb4b3c2&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>






<section class="mock">
    <div class="mock1">
        <div class="container">
            <p class="mk1"><b>Ответим на ваши вопросы прямо сейчас</b></p>
            <div class="mock2">
            <p class="mk2"><b>Напишите нам:</b></p>
            <div class="icons2">
       <a href=""><i class="fab fa-vk"></i></a>
       <a href=""><i class="fab fa-telegram" ></i></a>
       <a href=""><i class="fab fa-whatsapp"></i></a>
    </div>
            <p class="mk3"><b>Или приходите в наш офис по адресу:</b></p>
            <p class="mk4"><b><i class="fas fa-map-marked-alt"></i>г.Шумерля ул.Некрасова д.62</b></p>
            </div>
        </div>
    </div>
</section>


 <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TeshKind</h5>
                <p class="grey-text text-lighten-4">Ремонт цифровой техники </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Информация о нас</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">VK</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">WhatsApp</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Telegram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-3">
            <div class="container" style="    margin-top: -40px;">
            © 2019 Все права защищены
            </div>
          </div>
        </footer>


<script src="https://www.google.com/recaptcha/api.js?render=6LeE2J4UAAAAANd8072irunM8gzA_sta8YLYjaz3"></script>

<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LeE2J4UAAAAANd8072irunM8gzA_sta8YLYjaz3', {action: 'homepage'}).then(function(token) {
         
      });
  });
  </script>




<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="ajax.js"></script>
  
<script src="js/script.js"></script>
</body>
</html>