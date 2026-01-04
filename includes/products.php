<?php
require_once "config.php";
include "header.php";

$category = $_GET['category'] ?? 'all';
?>
<div class="container-fluid  products-available">
 <div class="category-scroll">
     <a href="products.php?category=electronics" class="image-link">
      <div class="card" style="width: 8rem;">
      
       <img src= "../assets/images/mobiletabs.png" class="card-img-top" alt="...">
         <div class="card-body text-bg">
           <p class="card-text">Mobiles & Tabs</p>
         </div>
   </div></a>
    <a href="products.php?category=fashion" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/fashion.png" class="card-img-top" alt="...">
      <div class="card-body text-bg">
       <p class="card-text">Fashion</p>
      </div>
   </div></a>
    <a href="products.php?category=kids" class="image-link"><div class="card" style="width: 8rem;">
      <img src= "../assets/images/kidslogo.png" class="card-img-top" alt="...">
      <div class="card-body text-bg">
       <p class="card-text">Kids Fashion</p>
       </div>
    </div> </a>
    <a href="products.php?category=footwear" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/footwearlogo.png" class="card-img-top" alt="...">
      <div class="card-body text-bg">
       <p class="card-text">Footwear</p>
      </div>
    </div></a>  
   <a href="products.php?category=kitchen" class="image-link"> <div class="card" style="width: 8rem;">
     <img src= "../assets/images/kitchenlogo.png" class="card-img-top" alt="...">
      <div class="card-body text-bg">
       <p class="card-text">Kitchen Utensils</p>
      </div>
    </div></a>  
    <a href="products.php?category=beauty" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/beautylogo.png" class="card-img-top" alt="...">
      <div class="card-body text-bg">
        <p class="card-text">Beauty</p>
      </div>
    </div> </a>
    <a href="products.php?category=bags" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/bagsaccessorieslogo.png" class="card-img-top" alt="...">
       <div class="card-body text-bg">
       <p class="card-text">Bags</p>
     </div>
    </div> </a> 
    <a href="products.php?category=electronics" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/electronicslogo.png" class="card-img-top" alt="...">
     <div class="card-body text-bg">
       <p class="card-text">Electronics</p>
     </div>
   </div> </a> 
   <a href="products.php?category=furniture" class="image-link"><div class="card" style="width: 8rem;">
     <img src= "../assets/images/furniturelogo.png" class="card-img-top" alt="...">
     <div class="card-body text-bg">
       <p class="card-text">Furniture</p>
     </div>
   </div> </a>
   <a href="products.php?category=books" class="image-link"><div class="card" style="width: 8rem;">
    <img src= "../assets/images/bookslogo.png" class="card-img-top" alt="...">
     <div class="card-body text-bg">
       <p class="card-text">Books</p>
     </div>
   </div>  </a>
 </div> 
</div>

<!-- products available section ends here -->
 <!--products section starts here-->
<section id="Electronics">
<div class="container-fluid">
  <div class="category-scroll" style="padding-right:51%">

<?php
$products = [
  ["name" => "Smartphone A", "price" => "299", "image" => "../assets/images/cell1.png", "category"=>"electronics"],
  ["name" => "Tablet B", "price" => "399", "image" => "../assets/images/cell2.png", "category"=>"electronics"],
  ["name" => "Smartphone C", "price" => "499", "image" => "../assets/images/cell3.png", "category"=>"electronics"],
  ["name" => "Tablet D", "price" => "599", "image" => "../assets/images/cell4.png", "category"=>"electronics"],
  ["name" => "Smartphone A", "price" => "299", "image" => "../assets/images/cell1.png", "category"=>"electronics"],
  ["name" => "Tablet B", "price" => "399", "image" => "../assets/images/cell2.png", "category"=>"electronics"],
  ["name" => "Smartphone C", "price" => "499", "image" => "../assets/images/cell3.png", "category"=>"electronics"],
  ["name" => "Tablet D", "price" => "599", "image" => "../assets/images/cell4.png", "category"=>"electronics"],
];

$id = 1;
foreach ($products as $product) {

  if ($category !== 'all' && $product['category'] !=="electronics") {
    continue;
  }

?>
  <div class="col-md-3">
    <div class="card mb-4" style="width:10rem; height:20rem;">
     <img src="<?= $product['image'] ?>" class="card-img-top"
     style="height:10rem; object-fit:contain;">
       <div class="card-body d-flex flex-column text-center">
        
        <h6 class="card-title" style="min-height:40px;">
         <?= $product['name'] ?>
        </h6>

        <p class="card-text">₹<?= $product['price'] ?></p>

        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="<?= $id ?>">
          <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
          <input type="hidden" name="price" value="<?= $product['price'] ?>">
          <input type="hidden" name="image" value="<?= $product['image'] ?>">

          <button type="submit" class="btn btn-warning btn-sm mt-auto">
            Add to Cart
          </button>
        </form>
      </div>
    </div>
  </div>
<?php
  $id++;
}
?>
  </div>
</div>  
</section>
<!--products section ends here-->

 <!--Fashion section starts here-->
<section id="Fashion">
<div class="container-fluid">
  <div class="category-scroll" style="padding-right:51%">

<?php
$products = [
  ["name" => "Smartphone A", "price" => "299", "image" => "../assets/images/cell1.png", "category"=>"fashion"],
  ["name" => "Tablet B", "price" => "399", "image" => "../assets/images/cell2.png", "category"=>"fashion"],
  ["name" => "Smartphone C", "price" => "499", "image" => "../assets/images/cell3.png", "category"=>"fashion"],
  ["name" => "Tablet D", "price" => "599", "image" => "../assets/images/cell4.png", "category"=>"fashion"],
  ["name" => "Smartphone A", "price" => "299", "image" => "../assets/images/cell1.png", "category"=>"fashion"],
  ["name" => "Tablet B", "price" => "399", "image" => "../assets/images/cell2.png", "category"=>"fashion"],
  ["name" => "Smartphone C", "price" => "499", "image" => "../assets/images/cell3.png", "category"=>"fashion"],
  ["name" => "Tablet D", "price" => "599", "image" => "../assets/images/cell4.png", "category"=>"fashion"],
];

$id = 1;
foreach ($products as $product) {

  if ($category !== 'all' && $product['category'] !=="fashion") {
    continue;
  }

?>
  <div class="col-md-3">
    <div class="card mb-4" style="width:10rem; height:20rem;">
     <img src="<?= $product['image'] ?>" class="card-img-top"
     style="height:10rem; object-fit:contain;">
       <div class="card-body d-flex flex-column text-center">
        
        <h6 class="card-title" style="min-height:40px;">
         <?= $product['name'] ?>
        </h6>

        <p class="card-text">₹<?= $product['price'] ?></p>

        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="<?= $id ?>">
          <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
          <input type="hidden" name="price" value="<?= $product['price'] ?>">
          <input type="hidden" name="image" value="<?= $product['image'] ?>">

          <button type="submit" class="btn btn-warning btn-sm mt-auto">
            Add to Cart
          </button>
        </form>
      </div>
    </div>
  </div>
<?php
  $id++;
}
?>
  </div>
</div>  
</section>
<!--Fashion section ends here-->


  