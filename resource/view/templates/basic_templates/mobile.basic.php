
<section class="mobile">
<div class="mobile_img_div">
  <div class="mobile_phone">
    <img src="../assets/products/{id}.png" alt="" srcset="" class="mobile_phone_img">
  </div>
  
  <div class="large_button_div">
    <button class="buy_button">Proceed to Buy Product</button>
    <button class="add_to_cart_button">Add to Cart</button>
  </div>
</div>


<div class="mobile_text_div">
  <div class="mobile_text_div1">
    <h3 class="mobile_item_name"><?php echo $item_details[0]["product_name"] ; ?></h3>
    <p>by <?php echo $item_details[0]["product_brand"]; ?></p>
    <p class="mobile_star_p">
      <span class="mobile_star_p_div">
          <span  class="mobile_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="mobile_star_img"></span>
          <span  class="mobile_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="mobile_star_img"></span>
          <span  class="mobile_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="mobile_star_img"></span>
          <span  class="mobile_stars"><img src="../assets/svgs/gold_star.svg" alt="" srcset="" class="mobile_star_img"></span>
          <span  class="mobile_stars"><img src="../assets/svgs/plain_star.svg" alt="" srcset="" class="mobile_star_img"></span>
      </span>
      <span class="item_star_p_ratings">20594 ratings</span>

  </p>
  </div>



  <div class="mobile_text_div2">
    <div class="mobile_price">
      <p><span class="mrp">MRP:<strike>$<?php echo $price = $item_details[0]["product_price"]; ?></strike></span> </p>
      <p>Deal Price <span class="m_price">$<?php echo  $ninth =  $price - ((10 * $price) / 100); ?></span> including all taxes.</p>
      <p>You Save <span class="m_price">%10</span></p>
    </div>
    <div class="delivery_info">

      <div class="delivery_info_div">
        <div class="mobile_img">
          <a class="mobile_img_link" href="./templates/shopping_cart.html" ><img src="../assets/svgs/replace.svg" alt="" srcset="" class="delivery_icon"></a>
        </div>
        <div class="mobile_text">
          <p class="mobile_text_p">10 Days Replacement</p>
        </div>
      </div>
 
      <div class="delivery_info_div">
        <div class="mobile_img">
          <a class="mobile_img_link" href="./templates/shopping_cart.html" ><img src="../assets/svgs/delivery_truck.svg" alt="" srcset="" class="delivery_icon"></a>
        </div>
        <div class="mobile_text">
          <p class="mobile_text_p">Daily Tuition Delivered</p>
        </div>
      </div>

      <div class="delivery_info_div">
        <div class="mobile_img">
          <a class="mobile_img_link" href="./templates/shopping_cart.html" ><img src="../assets/svgs/warranty_icon.svg" alt="" srcset="" class="delivery_icon"></a>
        </div>
        <div class="mobile_text">
          <p class="mobile_text_p">1 Year Warranty</p>
        </div>
      </div>

    </div>

  </div>

  <div class="mobile_text_div3">
    <p>Delivery By : Mar 29 - Apr 1</p>
    <p>Sold by <a class="daily_electronics" href="#">Daily Electronics</a> ( 4.5 out of 5 | 18,198 ratings ) </p>
    <p><span class="location_icon_span"><img src="../assets/svgs/location_icon.svg" alt="" class="location_icon"></span> Deliver To Customer - 424201 </p>
    <p class="mobile_color_selection_p">color:

      <span class="mobile_colors">
       <button class="available_color color1"></button>
       <button class="available_color color2"></button>
       <button class="available_color color3"></button>
      </span>

      <span class="quantity_input_form">
        Qty: 
        <span class="form add_margin">
          <button class="input_add input_button">-</button>
          <input type="text" id="quantity_input" class="quantity_input" value="1">
          <button class="input_drop input_button">+</button>
      </span>
      </span>

    </p>

    <p class="available_sizes_p">
      Size : 
      <span class="available_sizes">
        <span class="mobile_item_size">4GB RAM</span>
        <span class="mobile_item_size">6GB RAM</span>
        <span class="mobile_item_size">8GB RAM</span>
      </span>
    </p>
  </div>
</div>
</section>



<!-------------------------this is the section for product description ---------------------------->
<section class="product_description">
<h2 class="product_description_header">Product Description</h2>
<div class="product_description_text">
  <p class="product_description_p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum neque unde esse veniam perspiciatis necessitatibus
     eaque maiores! Nemo fugiat asperiores voluptatum repudiandae cumque deleniti blanditiis? Quidem tempore 
     doloremque asperiores labore dolor dolorem aut nemo fugit iusto. Quia id tempora laudantium error laborum, qui animi, 
     vel fugiat nemo dolores aperiam. Quam nobis saepe animi accusamus labore, itaque ullam dolor ducimus fuga reiciendis 
     consequatur eligendi commodi tenetur dolorem dolorum dolores. Inventore ipsam iure facilis, dicta beatae quae? Asperiores labore quibusdam, 
    sint dolores eius quas eveniet nisi non itaque quod soluta saepe, accusantium dolorem possimus vel minima ipsa porro harum deleniti odit dolore.
  </p>

  <p class="product_description_p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum neque unde esse veniam perspiciatis necessitatibus
     eaque maiores! Nemo fugiat asperiores voluptatum repudiandae cumque deleniti blanditiis? Quidem tempore 
     doloremque asperiores labore dolor dolorem aut nemo fugit iusto. Quia id tempora laudantium error laborum, qui animi, 
     vel fugiat nemo dolores aperiam. Quam nobis saepe animi accusamus labore, itaque ullam dolor ducimus fuga reiciendis 
     consequatur eligendi commodi tenetur dolorem dolorum dolores. Inventore ipsam iure facilis, dicta beatae quae? Asperiores labore quibusdam, 
    sint dolores eius quas eveniet nisi non itaque quod soluta saepe, accusantium dolorem possimus vel minima ipsa porro harum deleniti odit dolore.
  </p>
</div>
</section>


<?php 

// echo "<pre>";
// print_r($products);
// print_r($item_details);
// echo "<pre>";

?>


<div class="scroll_menu_header"><h2>Top Sale</h2></div>
<section class="scroll_menu">

<div class="scroll_menu_button">
  <button   onclick="scrollR()"> <img src="../assets/svgs/left-arrow-7300.svg" alt="" srcset="" class="button_svg"> </button>
</div>

<div class="main_scroller">


<?php foreach($products as $item) {  ?>  

<div class="item_div">
  <div class="img_div">
    <a href="<?php echo $item["id"];?>"><!--current chenge -->
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
    <p class="item_div_paragraph"><button class="item_button"><a class="buy_button_reset" href="<?php echo $item["id"];?>">buy</a></button></p>
  </div>
</div>

<?php                                     } ?>

</div>

<div class="scroll_menu_button">
  <button  onclick="scrollL()"><img src="../assets/svgs/right-arrow-7299.svg" alt="" srcset="" class="button_svg"></button>
</div>
</section>