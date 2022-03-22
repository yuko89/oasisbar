<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sample.css" type="text/css">
  </head>
<body>
<div class="p-fixed" style="opacity:1;height: 100px!important;background-color: black;">
  <h1 class="p-fixed__logo ">
    <a href="/">
    <img src="{{ secure_asset('image/oasisbar_logo.jpeg') }}" style="width: 150px;">
    </a>
      <title>OASISBAR</title>
  </h1>
  <div class="p-fixed__link">
        <span></span>
    <div class="p-fixed__link__item hide600">
      <a href="#service" style="padding-top: 18px;">
      <p>SERVICE</p>
      </a>
    </div>
    <span></span>
    <div class="p-fixed__link__item hide600">
      <a href="#menu" style="padding-top: 18px;">
      <p>MENU</p>
      </a>
    </div>
    <span></span>
    <div class="p-fixed__link__item hide600">
      <a href="#access" style="padding-top: 18px;">
      <p>ACCESS</p>
      </a>
    </div>
    <span></span>
    <div class="p-fixed__link__item hide600">
      <a href="/reserve" style="padding-top: 18px;">
      <p>RESERVE</p>
      </a>
    </div>
    <span></span>
    <div class="p-fixed__link__item js-contact-btn">
      <a href="/contact" style="padding-top: 18px;">
      <p>CONTACT</p>
      </a>
    </div>
    <span></span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function(){
    $('a[href^="#"]').click(function() {
      let speed = 500;
      let href= $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
  });
</script>
</div>
</body>
</html>

<main id="js-container" class="p-container">
  
