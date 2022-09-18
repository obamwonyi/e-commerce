<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/landing_page.css" />
    <link rel="stylesheet" href="../css/shopping_cart.css" />
    <link rel="stylesheet" href="../css/mobile.css" />
    <!---
    <link rel="stylesheet" href="../../../../public/css/login.css">
  -->
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body> 
<!-- please note : this page was loaded with out a layout use one if necessary ---> 


<section class="form_section">

    <div class="form_div">
      <div class="top_login_form_div">
        <div class="logo">
          <h1>LOGO</h1>
        </div>
        <div class="welcome_text">
          <h2>Welcome Back</h2>
        </div>
        <div class="login_text">
          <div class="login_text_div">
            <h2>Log In</h2>
          </div>
          
        </div>
      </div>
      <div class="middle_login_form_div">
        <form action="/login" class="login_form" method="POST">
        <input type="hidden" name="csrf" value="{{ csrf() }}">
          <input class="email" type="text" name="email" placeholder="Email">
          @if($_SESSION['errors'])
              <p class="error_message">{!! $_SESSION['errors']['email'][0] !!}</p>
              @endif
          <input class="password" name="password" type="password" placeholder="Password">
          @if($_SESSION['errors'])
              <p class="error_message">{!! $_SESSION['errors']['password'][0] !!}</p>
              @endif
          <div class="remember_me_and_forgot_password">
            <div class="remember">
              <input class="checkbox_input" type="checkbox">
              <label class="checkbox_label"  for="remember_me">Remember me</label>
            </div>
            <div class="forgot_password">
              <a href="#">Forgot password</a>
            </div>
          </div>
          <input class="submit_button" type="submit" value="Log In">
        </form>
      </div>
      <div class="bottom_login_form_div">
        <div class="sign_in_link">
          <p>Don't have an account? <a class="sign_in_link_a" href="/signup">Sign Up</a></p>
        </div>
      </div>
    </div>

</section>

<?php 
  $_SESSION['errors'] = null;
?>


  </body>

</html>