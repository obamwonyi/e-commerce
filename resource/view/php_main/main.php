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
  </head>
  <body>

    <!---------------this is the beginning of the header section, it will be available for most of the e_commerce page ----------------->
    <header>
      <div class="div_before_nav">
        <div class="div_before_nav_first_div">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
            praesentium!
          </p>
        </div>

        <div class="div_before_nav_links">
          <p>
            <a href="" class="login_link">Login <span><img src="../assets/svgs/login_icon.svg" alt="" srcset="" class="login_icon"></span></a>
          </p>
          <p><a href="">Wishlist</a></p>
          
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


    <?php print $contents ; ?>


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



    <script src="../js/app.js"></script>
  </body>
</html>
