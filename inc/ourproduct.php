<section class="our-products-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Featured Products</p>
            <h2><span>Our Product</span> Are Highest Quality</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">
<?php
$select = $conn->query("SELECT * FROM product LIMIT 10");
$fetch = $select->fetchAll(PDO::FETCH_OBJ);
$count = $select->rowCount();

if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $name = $key->name;
    $origin = $key->origin;
    $toa = $key->toa;
    $desc = $key->desc;
    $price = $key->price;
    $pic = $key->pic;

    $image = "http://localhost/livestock/products/$pic";
?>

<!-- Single Product Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
            <!-- Product Thumbnail -->
            <div class="product-thumbnail">
              <img src="<?php echo $image ?>" alt="">
              <!-- Product Meta Data -->
              <div class="product-meta-data">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" onclick="pro('<?php echo $image ?>', '<?php echo $name ?>', '<?php echo $price ?>', '<?php echo $id ?>')"><i class="icon_cart_alt"></i></a>
                <a href="#" data-toggle="modal" data-target="#accept<?php echo $id ?>" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="product-desc text-center pt-4">
              <a href="#" class="product-title"><?php echo $name ?></a>
              <h6 class="price">(NGN) <?php echo $price ?></h6>
            </div>
          </div>
        </div>

<?php
  }
}
?>
        

      </div>

      <div class="row">
        <div class="col-12">
          <div class="gotoshop-btn text-center wow fadeInUp" data-wow-delay="900ms">
            <a href="shop.php" class="btn famie-btn">Go to Store</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <p class="modal-title" id="myModalLabel" style="color: black; text-align: center; text-transform: capitalize; font-weight: bolder;">Details</p>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>
                     <div class="modal-body">
                        <img src="products/<?php echo $pic ?>" width="100%">
                        <hr>
                    <p style="font-size: 50px; text-transform: capitalize;"><b><?php echo $name; ?></b></p>
                    <p><b>Origin:</b> <?php echo $origin; ?></p>
                    <p><b>Type of Animal:</b> <?php echo $toa; ?></p>
                    <p><b>Description:</b> <?php echo $desc; ?></p>
                    <p><b>Price:</b> <?php echo $price; ?></p>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>