<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/landing_page.css" />
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
            <a href="" class="login_link">Login <span><img src="./assets/svgs/login_icon.svg" alt="" srcset="" class="login_icon"></span></a>
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
              <a class="shopping_cart_button" href="./templates/shopping_cart.html" ><img src="./assets/svgs/shopping_cart1.svg" alt="" srcset="" class="shopping_cart"></a>
              <span class="shopping_cart_value">0</span>
            </div>

          </p>
        </div>
      </nav>
    </header>

    <!--------------------------this is the ending of the header section, this section is to be available for most page --------------------->

    <!------------------the carousel container for the banners -------------->
    <section class="banner_container">
      <!-------------------this is the division for the banner -->
      <div class="banner_div"></div>

      <div class="banner_nav_button">
        <button id="button1" class="banner_button"></button>
        <button id="button2" class="banner_button_off"></button>
        <button id="button3" class="banner_button_off"></button>
      </div>
    </section>





    <div class="scroll_menu_header"><h2>Top Sale</h2></div>
    <section class="scroll_menu">

      <div class="scroll_menu_button">
        <button   onclick="scrollR()"> <img src="./assets/svgs/left-arrow-7300.svg" alt="" srcset="" class="button_svg"> </button>
      </div>

      <div class="main_scroller">

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/1.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Galaxy S6 edge</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/2.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi Note 4</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/3.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 3</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/4.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 4</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/5.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 5</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/6.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 6</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/7.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 7</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/8.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 8</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/9.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Galaxy S6</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/10.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Galaxy S7</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/11.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Redmi 11</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/12.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Iphone 6</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>

        <!-------------------div for and item-------------------------------------------------------------------------->
        <div class="item_div">
          <div class="img_div">
            <img src="./assets/products/13.png" alt="" srcset="" class="item">
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph">Iphone 6 pro</p>
            <p class="star_rating">
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
              <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
            </p>
            <p  class="item_div_paragraph"><span>$90</span></p>
            <p class="item_div_paragraph"><button class="item_button">buy</button></p>
          </div>
        </div>


      </div>

      <div class="scroll_menu_button">
        <button  onclick="scrollL()"><img src="./assets/svgs/right-arrow-7299.svg" alt="" srcset="" class="button_svg"></button>
      </div>
    </section>




<!-------------------------This section is for the special items to be sorted by their individual links --------------------------->



    <section class="special_price">
      <div class="special_price_header">
        <div class="special_price_header_div">
          <h2 class="special_price_heading">Special Price</h2>
        </div>
        <ul class="special_price_ul">
          <li class="special_price_li"><a href="" class="special_price_a">All Brand</a></li>
          <li class="special_price_li"><a href="" class="special_price_a">Apple</a></li>
          <li class="special_price_li"><a href="" class="special_price_a">Redmi</a></li>
          <li class="special_price_li"><a href="" class="special_price_a">Samsung</a></li>
        </ul>
      </div>

      <div class="special_price_items">


        <!----------------------------a row in the special items section to carry 5 items par row -->
        <div class="special_price_items_row">


          <!------------------item for the all product section -->
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/1.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/2.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/3.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/4.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/5.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          
        </div>

        <!----------------------------a row in the special items section to carry 5 items par row -->
        <div class="special_price_items_row">


          <!------------------item for the all product section -->
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/6.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/7.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/8.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/9.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/10.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          
        </div>
        <!----------------------------a row in the special items section to carry 5 items par row -->
        <div class="special_price_items_row">


          <!------------------item for the all product section -->
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/11.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/12.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          <div class="item_div">
            <div class="img_div">
              <img src="./assets/products/13.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Iphone 6</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="./assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
          
        </div>
      </div>
    </section>



<!------------------------This section is for the blog navigation --------------------------->
      <div class="blog_header">
        <h2>Latest Blogs</h2>
      </div>
    <section class="blog_section">

      <div class="blog_div">
        <div class="blog_div_header">
          <h2>Upcomming Blogs</h2>
        </div>
        <div class="blog_div_img">
          <img src="./assets/blog/blog1.jpg" alt="">
        </div>
        <div  class="blog_div_text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
             id debitis quam reprehenderit accusamus ad iste, voluptatum 
             perspiciatis. Minus, labore?
          </p>
        </div>
        <div class="blog_div_link">
          <a href="">Go Blog Page</a>
        </div>
      </div>      

      <div class="blog_div">
        <div class="blog_div_header">
          <h2>Upcomming Blogs</h2>
        </div>
        <div class="blog_div_img">
          <img src="./assets/blog/blog2.jpg" alt="">
        </div>
        <div  class="blog_div_text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
             id debitis quam reprehenderit accusamus ad iste, voluptatum 
             perspiciatis. Minus, labore?
          </p>
        </div>
        <div class="blog_div_link">
          <a href="">Go Blog Page</a>
        </div>
      </div>      

      <div class="blog_div">
        <div class="blog_div_header">
          <h2>Upcomming Blogs</h2>
        </div>
        <div class="blog_div_img">
          <img src="./assets/blog/blog3.jpg" alt="">
        </div>
        <div  class="blog_div_text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
             id debitis quam reprehenderit accusamus ad iste, voluptatum 
             perspiciatis. Minus, labore?
          </p>
        </div>
        <div class="blog_div_link">
          <a href="">Go Blog Page</a>
        </div>
      </div>      
    </section>


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



    <script src="./js/app.js"></script>
  </body>
</html>
