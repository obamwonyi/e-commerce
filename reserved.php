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
          <!---------------------replacing static item price with product_price --------------->
          <p class="item_price_p">$<?php echo $an_item[0]["product_price"]; ?></p>
      </div>
</div>


<?php   }                                                      ?>



