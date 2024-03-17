<?php 
include("src/header.php"); 
$id = escape_string($_GET['id']);
$sql = "SELECT * FROM products WHERE category_id = '$id'";
$result = query($sql);
$product = fetch_array($result);
?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
         <div class="col-md-12  ">
         <?php
         if ($product != null):
         ?>
        <div class="card-deck">
        <div class="card">
            <div class="card-body">
               <h3 class="card-header text-white" style="background-color: Black;"><i class="fa fa-list" aria-hidden="true"></i> boutique</h3>
                   <div class="card-deck md-1">
                  
                   <div class="card">
                  <div class="card-body">
                   <div class="card-img-top">
                   <img src="src/imgs/<?php echo"{$product['image']} "; ?>" class="img-fluid" alt="Responsive image">
                   <h4 class="card-title"></h4>
                   <p><span class="badge badge-success"> <?php echo $product['prix']; ?>  </span class="text-danger"><span>   <del class="text-danger">900Dhs </del></span></p>
                  <p class="lead card-text"><?php echo $product['description']; ?></p>
                  <p><a href="product.php" style="color:#000000;" class="btn btn-outline-dark btn-link ">Voir</a></p>
                   </div>
                   </div>
                   </div>
            
            </div>
         </div></div>
         <?php
         else:
         ?>
         <div class="alert alert-info " style="text-align: center;">Aucun produit trouver</div>
         <?php
         endif;
         ?>
         
         </div>
   
   </div>
</div>

          

<?php include("src/footer.php"); ?>
