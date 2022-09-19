<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/landing_page.css" />
    <link rel="stylesheet" href="../css/shopping_cart.css" />
    <link rel="stylesheet" href="../css/mobile.css" />
    <link rel="stylesheet" href="../css/sign_in.css"/>
  </head>
  <body>

    <!---------------this is the beginning of the header section, it will be available for most of the e_commerce page ----------------->
    <header>
      <div class="div_before_nav">
        <div class="div_before_nav_first_div" >
          <p>
            <button class="sign_in_button">
              <a href="/signup" class="login_link">Sign Up<span><img src="../assets/svgs/signin2.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
        </div>

        <div class="div_before_nav_links">
          <p>
            <button class="login_button">
              <a href="/login" class="login_link">Login<span><img src="../assets/svgs/open.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
          <p>
            <button class="wish_list_button">
              <a href="/wish_list" id="wishlist_button" class="login_link">Wishlist<span><img src="../assets/svgs/wishlist2.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
          
        </div>
      </div>
      <nav class="nav">
        <div class="mobile_shopee">Mobile Shopee</div>
        <ul class="nav_ul">
          <li><a href="">On Site</a></li>
          <li>
            <a href="#"></a>
            Category
          </li>
          <li>
            <select name="" id="">
              <option value=""><a href="">Products</a></option>
              <option value=""><a href=""></a></option>
              <option value=""><a href=""></a></option>
              <option value=""><a href=""></a></option>
            </select>
          </li>
          <li><a href="#">Blog</a></li>
          <li>
            <select name="" id="">
              <option value="">
                <a href=""></a>
                Category
              </option>
              <option value=""><a href=""></a></option>
              <option value=""><a href=""></a></option>
              <option value=""><a href=""></a></option>
            </select>
          </li>
          <li>
            <a href="#"></a>
            Comming Soon
          </li>
        </ul>

        <div class="shoping_cart">
          <p>
            <div class="shopping_cart_div">
              <a class="shopping_cart_button" href="./templates/shopping_cart.html" ><img src="../assets/svgs/shopping_cart1.svg" alt="" srcset="" class="shopping_cart"></a>
              <span class="shopping_cart_value">0</span>
            </div>

          </p>
        </div>
      </nav>
    </header>


  <!----------------setting the cooking for this page  ----------------------------->
  <?php if(isset($_SESSION["registered"])) { setcookie("registered", "true" , time() + 86400); } ?> 

    <!--------------------------------the pop up message section -------------------------------------------------> 
    <section class="popup popup_display_off">
      <div class="popup_div">
        <div class="popup_main_box">
          <div class="close_popup">
            <button id="img_button" class="img_button">
              <img id="close_button" class="close_img" src="../assets/close_popup.svg" alt="" srcset="">
            </button>
          </div>
          <div class="popup_message">
            <p class="popup_message_p  popup_message_p_main">Please login to your account</p>
            <p>
            <button class="login_button">
              <a href="/login" class="login_link remove_underline_login">Login<span><img src="../assets/svgs/open.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
          </div>
        </div>
      </div>
    </section>
    <!-------------------------------the pop up message section ending ---------------------------------------------------> 
    

    <!--------------------------------the pop up message for wishlist section -------------------------------------------------> 
    <section class="popup_wishlist popup_display_off">
      <div class="popup_div">
        <div class="popup_main_box">
          <div class="close_popup">
            <button id="img_button2" class="img_button">
              <img id="close_button2" class="close_img" src="../assets/close_popup.svg" alt="" srcset="">
            </button>
          </div>
          <div class="popup_message">
            <p class="popup_message_p  popup_message_p_main">Please login to see your wishlist</p>
            <p>
            <button class="login_button">
              <a href="/login" class="login_link remove_underline_login">Login<span><img src="../assets/svgs/open.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
          </div>
        </div>
      </div>
    </section>
    <!-------------------------------the pop up message for wishlist section ending ---------------------------------------------------> 
    
    <!--------------------------------the pop up message for wishlist section -------------------------------------------------> 
    <section class="popup_addToCart popup_display_off">
      <div class="popup_div">
        <div class="popup_main_box">
          <div class="close_popup">
            <button id="img_button3" class="img_button">
              <img id="close_button3" class="close_img" src="../assets/close_popup.svg" alt="" srcset="">
            </button>
          </div>
          <div class="popup_message">
            <p class="popup_message_p  popup_message_p_main">Please Login to add an Item to your Cart</p>
            <p>
            <button class="login_button">
              <a href="/login" class="login_link remove_underline_login">Login<span><img src="../assets/svgs/open.svg" alt="" srcset="" class="login_icon"></span></a>
            </button>
          </p>
          </div>
        </div>
      </div>
    </section>
    <!-------------------------------the pop up message for wishlist section ending ---------------------------------------------------> 
    


    @{template}@



    <footer class="footer">
      <div class="footer_div">
        <div class="footer_div_section_one">
          <h3 class="footer_header">Mobile Shopee</h3>
          <p class="footer_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quis.</p>
        </div>


        <div class="footer_div_section_two">
          <h3>Newslatter</h3>
          <form action="" class="subscribe_form">
            <input type="email" name="email" id="" class="sub_input" placeholder="Email*">
            <button class="subscribe_button">subscribe</button>
          </form>
        </div>



        <div class="footer_div_section_three">
          <h3 class="footer_header">Mobile Shopee</h3>
          <ul class="footer_ul">
            <li><a href="">About Us</a></li>
            <li><a href="">Delivery Information</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms & Conditions</a></li>
          </ul>
        </div>

        <div class="footer_div_section_three">
          <h3 class="footer_header">Mobile Shopee</h3>
          <ul class="footer_ul">
            <li><a href="">My Account</a></li>
            <li><a href="">Order History</a></li>
            <li><a href="">Which List</a></li>
            <li><a href="">Newslatters</a></li>
          </ul>
        </div>

      </div>

      

      <div class="copy_write">
        <h3>&#169;Copyrights 2022 Designed by <span class="name">Destiny Obamwonyi</span></h3>
      </div>
    </footer>



    <script src="../js/landing_page.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/signup.js"></script>
  </body>
</html>

<?php 
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

?>