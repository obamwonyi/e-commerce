
      <!-------------------This is the beginning of the section for added shopping cart items----------------------------------->

      <section class="shopping_cart_section">
          <h2 class="shopping_cart_section_header">Shopping Cart</h2>

          <div class="shopping_cart_items">

            <!--------------items on shopping cart division ----------------------------------->
            <!-----------------each shopping cart item container ---------------------------------->
            <div class="item_container">
                <!-------------------------container for the items section ------------------------------>

                    <?php foreach( $_SESSION["all_fetched_items"] as $an_item ) { ?>


                    <!----------------------another item inside the shopping cart item ------------------->
                    <div class="shopping_cart_items_div">
                        <div class="shopping_cart_item">
                            <div class="item_img_div">
                                <!------------------------replacing the image number with the id -------------------->
                                <img src="../assets/products/<?php echo $an_item[0]["id"]; ?>.png" alt="" class="item_img">
                            </div>

                            <div class="item_info_div">
                                <!---------------------replace the static product name with product_name ---------------->
                                <h3 class="item_name"><?php echo $an_item[0]["product_name"]; ?></h3>
                                <!-------------------replacing the by value with brand name --------------------------> 
                                <p class="buy_item">Buy <?php echo $an_item[0]["product_brand"]; ?></p>
                                <p class="item_star_p">
                                    <span class="item_star_p_div">
                                        <?php 
                                        {
                                            $item_rating = $an_item[0]["product_rating"];
                                            $no_rating = 5 - $item_rating;

                                            for($i = 0 ; $i < $item_rating; $i++)
                                            {
                                                echo ' <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span> ';
                                            }

                                            for($x = 0; $x < $no_rating; $x++)
                                            {
                                                echo ' <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span> ';
                                            }
                                        }
                                        ?>
                                    </span>
                                </p>
                                    <span class="item_link">
                                        <span>this will hold the delete form </span>
                                    </span>
                                </p>
                            </div>

                        </div>


                        <div class="item_price">
                            <!---------------------replacing static item price with product_price --------------->
                            <p class="item_price_p">$<?php echo $an_item[0]["product_price"]; ?></p>
                        </div>
                    </div>


                    <?php   }                                                      ?>


                <!----------------closing of the containers for the items section ------------------------>
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






      <!-------------------------------new phones section ------------------------------------------>
      <h2 class="scroll_menu_header">New Phones</h2>
      <section class="scroll_menu">

        <div class="scroll_menu_button">
          <button   onclick="scrollR()"> <img src="../assets/svgs/left-arrow-7300.svg" alt="" srcset="" class="button_svg"> </button>
        </div>
  
        <div class="main_scroller">
  
  
        

        <?php foreach($products as $item) {  ?>  

<div class="item_div">
  <div class="img_div">
    <a href="phones/<?php echo $item["id"];?>"><!--current chenge -->
      <img src="../assets/products/<?php echo $item["id"];?>.png" alt="" srcset="" class="item">
    </a>
  </div>
  <div class="item_text">
    <p  class="item_div_paragraph"><?php echo $item["product_name"] ;?></p>
    <p class="star_rating">
        <?php 
        {
            $item_rating = $item["product_rating"];
            $no_rating = 5 - $item_rating;

            for($i = 0 ; $i < $item_rating; $i++)
            {
                echo ' <span  class="star_rating_span"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="gold_star_icon"></span> ';
            }

            for($x = 0; $x < $no_rating; $x++)
            {
                echo ' <span  class="star_rating_span"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="plain_star_icon"></span> ';
            }
        }
        ?>
    </p>
    <p  class="item_div_paragraph"><span>$<?php echo $item["product_price"];?></span></p>
    <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="phones/<?php echo $item["id"];?>">buy</a></button></p>
  </div>
</div>

<?php                              }  ?>
  
  
        </div>
  
        <div class="scroll_menu_button">
          <button  onclick="scrollL()"><img src="../assets/svgs/right-arrow-7299.svg" alt="" srcset="" class="button_svg"></button>
        </div>
      </section>
  
  
