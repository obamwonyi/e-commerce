<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/landing_page.css">
    <link rel="stylesheet" href="../css/shopping_cart.css">
</head>
<body>

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
                <button class="shopping_cart_button"><img src="../assets/svgs/shopping_cart1.svg" alt="" srcset="" class="shopping_cart"></button>
                <span class="shopping_cart_value">0</span>
              </div>

            </p>
          </div>
        </nav>
      </header>


      <!-------------------This is the beginning of the section for added shopping cart items----------------------------------->

      <section class="shopping_cart_section">
          <h2 class="shopping_cart_section_header">Shopping Cart</h2>

          <div class="shopping_cart_items">

            <!--------------items on shopping cart division ----------------------------------->
            <!-----------------each shopping cart item container ---------------------------------->
            <div class="item_container">



              <div class="shopping_cart_items_div">
                <div class="shopping_cart_item">
                    <div class="item_img_div">
                        <img src="../assets/products/1.png" alt="" class="item_img">
                    </div>

                    <div class="item_info_div">
                        <h3 class="item_name">Samsung Galaxy S10</h3>
                        <p class="buy_item">Buy Redmi</p>
                        <p class="item_star_p">
                            <span class="item_star_p_div">
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="item_star_img"></span>
                            </span>
                            <span class="item_star_p_ratings">20594 ratings</span>

                        </p>
                        <p class="item_input">
                            <span class="form">
                                <button class="input_add input_button">-</button>
                                <input type="text" id="quantity_input" class="quantity_input" value="1">
                                <button class="input_drop input_button">+</button>
                            </span>
                            <span class="item_link">
                                <a href="" class="item_link_a">Delete</a>
                                <a href="" class="item_link_a">Save For Latter</a>
                            </span>
                        </p>
                    </div>

                </div>


                <div class="item_price">
                    <p class="item_price_p">$150.50</p>
                </div>
            </div>



            <!----------------------another item inside the shopping cart item ------------------->
              <div class="shopping_cart_items_div">
                <div class="shopping_cart_item">
                    <div class="item_img_div">
                        <img src="../assets/products/2.png" alt="" class="item_img">
                    </div>

                    <div class="item_info_div">
                        <h3 class="item_name">Samsung Galaxy S10</h3>
                        <p class="buy_item">Buy Redmi</p>
                        <p class="item_star_p">
                            <span class="item_star_p_div">
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="item_star_img"></span>
                            </span>
                            <span class="item_star_p_ratings">20594 ratings</span>

                        </p>
                        <p class="item_input">
                            <span class="form">
                                <button class="input_add input_button">-</button>
                                <input type="text" id="quantity_input" class="quantity_input" value="1">
                                <button class="input_drop input_button">+</button>
                            </span>
                            <span class="item_link">
                                <a href="" class="item_link_a">Delete</a>
                                <a href="" class="item_link_a">Save For Latter</a>
                            </span>
                        </p>
                    </div>

                </div>


                <div class="item_price">
                    <p class="item_price_p">$150.50</p>
                </div>
            </div>


          </div>



            <!----------------total price of the items on shopping cart division -->
            <div class="shopping_cart_total_div">
                <div class="total_cart_div_top">
                  <p class="top_total_div_p"> <span class="no_free_delivery_span"><img src="../assets/svgs/cancel_icon.svg" alt="" class="no_free_delivery_icon"></span> We do not offer free Delivery.</p>
                </div>

                <div class="total_cart_div_bottom">
                  <p>Subtotal[2 items]: <span class="subtotal_price">301.00</span></p>
                  <button class="total_button">Proceed To Buy</button>
                </div>
            </div>

          </div>

      </section>





       <!----------------------This is the beginning of the section for whishlist items ------------------------------------------>
      <section class="shopping_cart_section whishlist">
          <h2 class="shopping_cart_section_header">Wishlist</h2>

          <div class="shopping_cart_items">

            <!--------------items on shopping cart division ----------------------------------->
            <!-----------------each shopping cart item container ---------------------------------->
            <div class="item_container">



              <div class="shopping_cart_items_div">
                <div class="shopping_cart_item">
                    <div class="item_img_div">
                        <img src="../assets/products/3.png" alt="" class="item_img">
                    </div>

                    <div class="item_info_div">
                        <h3 class="item_name">Samsung Galaxy S10</h3>
                        <p class="buy_item">Buy Redmi</p>
                        <p class="item_star_p">
                            <span class="item_star_p_div">
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="item_star_img"></span>
                                <span  class="item_stars"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="item_star_img"></span>
                            </span>
                            <span class="item_star_p_ratings">20594 ratings</span>

                        </p>
                        <p class="item_input">
                            <span class="item_link">
                                <a href="" class="item_link_a">Delete</a>
                                <a href="" class="item_link_a">Add To Cart</a>
                            </span>
                        </p>
                    </div>

                </div>


                <div class="item_price">
                    <p class="item_price_p">$150.50</p>
                </div>
            </div>

          </div>

      </section>
    

      <!-------------------------------new phones section ------------------------------------------>
      <h2 class="scroll_menu_header">New Phones</h2>
      <section class="scroll_menu">

        <div class="scroll_menu_button">
          <button   onclick="scrollR()"> <img src="../assets/svgs/left-arrow-7300.svg" alt="" srcset="" class="button_svg"> </button>
        </div>
  
        <div class="main_scroller">
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/1.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_out_of_stock_button">sold</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/2.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/3.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/4.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/5.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/6.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/7.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/8.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/9.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/10.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/11.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
          <!-------------------div for and item-------------------------------------------------------------------------->
          <div class="item_div">
            <div class="img_div">
              <img src="../assets/products/12.png" alt="" srcset="" class="item">
            </div>
            <div class="item_text">
              <p  class="item_div_paragraph">Galaxy S6 edge</p>
              <p class="star_rating">
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span>
                <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span>
              </p>
              <p  class="item_div_paragraph"><span>$90</span></p>
              <p class="item_div_paragraph"><button class="item_button">buy</button></p>
            </div>
          </div>
  
         
  
  
        </div>
  
        <div class="scroll_menu_button">
          <button  onclick="scrollL()"><img src="../assets/svgs/right-arrow-7299.svg" alt="" srcset="" class="button_svg"></button>
        </div>
      </section>
  
  



      <!----------------------the footer section of the page --------------------------------------------->
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