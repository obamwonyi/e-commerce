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



<!-----------------------------Output testing --------------------------------------------------> 

<?php 


// echo "<pre>";
// print_r($apple);
// print_r($samsung);
// print_r($redmi);
// echo "<pre>";


?>

<!--------------------------end of Output testing --------------------------------------------------> 


    <div class="scroll_menu_header"><h2>Top Sale</h2></div>
    <section class="scroll_menu">

      <div class="scroll_menu_button">
        <button   onclick="scrollR()"> <img src="../assets/svgs/left-arrow-7300.svg" alt="" srcset="" class="button_svg"> </button>
      </div>

      <div class="main_scroller">

        <!-------------------div for and item-------------------------------------------------------------------------->


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




<!-------------------------This section is for the special items to be sorted by their individual links --------------------------->



    <section class="special_price">
      <div class="special_price_header">
        <div class="special_price_header_div">
          <h2 class="special_price_heading">Special Price</h2>
        </div>
        <ul class="special_price_ul">
          <li class="special_price_li"><a href="" id="all" class="special_price_a">All Brand</a></li>
          <li class="special_price_li"><a href="" id="apple" class="special_price_a">Apple</a></li>
          <li class="special_price_li"><a href="" id="redmi" class="special_price_a">Redmi</a></li>
          <li class="special_price_li"><a href="" id="samsung" class="special_price_a">Samsung</a></li>
        </ul>
      </div>
      <!-----------------end of the header ---------------------------------------------->




      <!---------------------this section is for all ---------------------------------------> 
      <div class="special_price_items" id="special_all">
        <!----------------------------a row in the special items section to carry 5 items par row -->
        <?php $z = 0 ; ?>
        <?php $count_product = count($products); ?>

        <?php for($n = ceil(count($products)/5); $n > 0; $n--) { ?>

        <div class="special_price_items_row">

          <!------------------item for the all product section -->
          <?php for($p = 0; $p < 5; $p++) { ?>

            <?php if(!isset($products[$z])) { break ;} ?>
          <div class="item_div">
          <div class="img_div">
            <a href="phones/<?php echo $products[$z]["id"];?>"><!--current chenge -->
              <img src="../assets/products/<?php echo $products[$z]["id"];?>.png" alt="" srcset="" class="item">
            </a>
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph"><?php echo $products[$z]["product_name"] ;?></p>
            <p class="star_rating">
                <?php 
                {
                    $product_rating = $products[$z]["product_rating"];
                    $no_rating = 5 - $product_rating;
                    for($i = 0 ; $i < $product_rating; $i++)
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
            <p  class="item_div_paragraph"><span>$<?php echo $products[$z]["product_price"];?></span></p>
            <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="phones/<?php echo $products[$z]["id"];?>">buy</a></button></p>
          </div>
        </div>
        <?php   $z += 1;                            }?>
        </div>
        <?php                                               } ?>
        <!---------------------end of a row ------------------------------------>

        </div>
        <!----------------------------------end of all section ------------------------------------> 




        <!-------------------------this section is for apple ---------------------------------------> 


        <div class="special_price_items" id="special_apple">
        <!----------------------------a row in the special items section to carry 5 items par row -->
        <?php $appleCount = 0 ; ?>

        <?php $count_product = count($apple); ?>

        <?php for($n = ceil(count($apple)/5); $n > 0; $n--) { ?>

        <div class="special_price_items_row">

          <!------------------item for the all product section -->
          <?php for($p = 0; $p < 5; $p++) { ?>

            <?php if(!isset($apple[$appleCount])) { break ;} ?>
          <div class="item_div">
          <div class="img_div">
            <a href="phones/<?php echo $apple[$appleCount]["id"];?>"><!--current chenge -->
              <img src="../assets/products/<?php echo $apple[$appleCount]["id"];?>.png" alt="" srcset="" class="item">
            </a>
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph"><?php echo $apple[$appleCount]["product_name"] ;?></p>
            <p class="star_rating">
                <?php 
                {
                    $apple_rating = $apple[$appleCount]["product_rating"];
                    $no_rating = 5 - $apple_rating;
                    for($i = 0 ; $i < $apple_rating; $i++)
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
            <p  class="item_div_paragraph"><span>$<?php echo $apple[$appleCount]["product_price"];?></span></p>
            <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="phones/<?php echo $apple[$appleCount]["id"];?>">buy</a></button></p>
          </div>
        </div>
        <?php   $appleCount += 1;                            }?>
        </div>
        <?php                                               } ?>
        <!---------------------end of a row ------------------------------------>

        </div>

        <!---------------------------the end of apple section --------------------->


        <!-------------------redmi section ------------------------------------------->

        <div class="special_price_items" id="special_redmi">
        <!----------------------------a row in the special items section to carry 5 items par row -->
        <?php $redmiCount = 0 ; ?>

        <?php $count_product = count($redmi); ?>

        <?php for($n = ceil(count($redmi)/5); $n > 0; $n--) { ?>

        <div class="special_price_items_row">

          <!------------------item for the all product section -->
          <?php for($p = 0; $p < 5; $p++) { ?>

            <?php if(!isset($redmi[$redmiCount])) { break ;} ?>
          <div class="item_div">
          <div class="img_div">
            <a href="phones/<?php echo $redmi[$redmiCount]["id"];?>"><!--current chenge -->
              <img src="../assets/products/<?php echo $redmi[$redmiCount]["id"];?>.png" alt="" srcset="" class="item">
            </a>
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph"><?php echo $redmi[$redmiCount]["product_name"] ;?></p>
            <p class="star_rating">
                <?php 
                {
                    $redmi_rating = $redmi[$redmiCount]["product_rating"];
                    $no_rating = 5 - $redmi_rating;
                    for($i = 0 ; $i < $redmi_rating; $i++)
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
            <p  class="item_div_paragraph"><span>$<?php echo $redmi[$redmiCount]["product_price"];?></span></p>
            <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="phones/<?php echo $redmi[$redmiCount]["id"];?>">buy</a></button></p>
          </div>
        </div>
        <?php   $redmiCount += 1;                            }?>
        </div>
        <?php                                               } ?>
        <!---------------------end of a row ------------------------------------>

        </div>

        <!--------------------------------end of redmi section ------------------------> 


        <!------------------------------samsung section ------------------------> 

        <div class="special_price_items" id="special_samsung">
        <!----------------------------a row in the special items section to carry 5 items par row -->
        <?php $samsungCount = 0 ; ?>

        <?php $count_product = count($samsung); ?>

        <?php for($n = ceil(count($samsung)/5); $n > 0; $n--) { ?>

        <div class="special_price_items_row">

          <!------------------item for the all product section -->
          <?php for($p = 0; $p < 5; $p++) { ?>

            <?php if(!isset($samsung[$samsungCount])) { break ;} ?>
          <div class="item_div">
          <div class="img_div">
            <a href="phones/<?php echo $samsung[$samsungCount]["id"];?>"><!--current chenge -->
              <img src="../assets/products/<?php echo $samsung[$samsungCount]["id"];?>.png" alt="" srcset="" class="item">
            </a>
          </div>
          <div class="item_text">
            <p  class="item_div_paragraph"><?php echo $samsung[$samsungCount]["product_name"] ;?></p>
            <p class="star_rating">
                <?php 
                {
                    $samsung_rating = $samsung[$samsungCount]["product_rating"];
                    $no_rating = 5 - $samsung_rating;
                    for($i = 0 ; $i < $samsung_rating; $i++)
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
            <p  class="item_div_paragraph"><span>$<?php echo $samsung[$samsungCount]["product_price"];?></span></p>
            <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="phones/<?php echo $samsung[$samsungCount]["id"];?>">buy</a></button></p>
          </div>
        </div>
        <?php   $samsungCount += 1;                            }?>
        </div>
        <?php                                               } ?>
        <!---------------------end of a row ------------------------------------>

        </div>

        <!---------------------------end of samsung section ----------------------------> 


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
          <img src="../assets/blog/blog1.jpg" alt="">
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
          <img src="../assets/blog/blog2.jpg" alt="">
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
          <img src="../assets/blog/blog3.jpg" alt="">
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
