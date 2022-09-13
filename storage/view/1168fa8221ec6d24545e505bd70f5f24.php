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
    <link rel="stylesheet" href="../css/sign_in.css">
  </head>
  <body> 


    <section class="form_section">

        <div class="form_div">
          <div class="top_login_form_div">
            <div class="logo">
              <h1>LOGO</h1>
            </div>
            <div class="welcome_text">
              <h2>Sign Up</h2>
            </div>
            <div class="login_text">
              <div class="login_text_div">
                <h3>Sign Up With a valid Mail</h3>
              </div>
              
            </div>
          </div>
          <div class="middle_login_form_div">
            <form action="/signup" class="login_form" method="POST">
              <input type="hidden" name="hidden">
              <input class="email" type="text" name="email" placeholder="Email">
              <?php if($_SESSION['errors']): ?>
              <p class="error_message"><?php print  $_SESSION['errors']['email'][0] ; ?></p>
              <?php endif; ?>
              <input class="password" name="password" type="password" placeholder="Password">
              <?php if($_SESSION['errors']): ?>
              <p class="error_message"><?php print  $_SESSION['errors']['password'][0] ; ?></p>
              <?php endif; ?>
              <div class="remember_me_and_forgot_password">
                <div class="remember">
                  <input class="checkbox_input" name="useragreement"  type="checkbox">
                  <label class="checkbox_label" for="remember_me">Accept user agreement</label>
                  <a href="/user_agreement" class="user_agreement">User Agreement</a>
                </div>
                <!-- <div class="forgot_password">
                  <a href="#">Forgot password</a>
                </div> -->
              </div>
              <input class="submit_button" type="submit" value="Sign Up">
            </form>
          </div>
          <div class="bottom_login_form_div">
            <div class="sign_in_link">
              <p>Already have an account? <a class="sign_in_link_a" href="/login">Log In</a></p>
            </div>
          </div>
        </div>
    
    </section>


    <section class="popup popup_display_off">
      <div class="popup_div">
        <div class="popup_main_box">
          <div class="close_popup">
            <button id="img_button" class="img_button">
              <img id="close_button" class="close_img" src="../assets/close_popup.svg" alt="" srcset="">
            </button>
          </div>
          <div class="popup_message">
            <p class="popup_message_p">Please accept the user agreement</p>
          </div>
        </div>
      </div>
    </section>


    <?php 
      $_SESSION['errors'] = null;
    ?>


    <script src="../js/signup.js"></script>
  </body>

  </html>

    
