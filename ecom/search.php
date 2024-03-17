
<div class="container" >
   <div class="card main bg-light">
   <?php 
include("src/header.php"); 

?>

   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
              
         <div class="col-md-12  ">
         <div class="card">
            <div class="card-body">
               <h3 class="card-header text-white" style="background-color: Black;"><i class="fa fa-list" aria-hidden="true"></i> boutique</h3>
                   <div class="card-deck md-1">
                  
            <?php
            $search = isset($_POST['search']) ? escape_string($_POST['search']): "";
            $sql = "SELECT * FROM products WHERE titre LIKE '%$search%' ";
            $result = query($sql);
            if ($result->num_rows > 0):
            while($row = fetch_array($result)):
            ?>
              
             <div class="card">
             <div class="card-body">
              <div class="card-img-top">
              <img src="src/imgs/<?php echo"{$row['image']} "; ?>" class="img.fluid" alt="t-shirt">
              </div>
              <p> </p>
              <h4 class="card-title">
             <?php echo"{$row['titre']} "; ?>
              </h4>
              <p><span class="badge badge-success"> <?php echo $row['prix']; ?> dhs</span class="text-danger"><span>   <del class="text-danger">700dhs</del></span></p>
             <p class="lead card-text"><?php echo $row['description']; ?></p>
             <p><a href="product.php?id=<?php echo $row['id'];?>" style="color:#000000;" class="btn btn-outline-dark btn-link ">Voir</a></p>
             </div>
             </div>
             <?php
            endwhile;
         else:
            ?>
            <div class="alert alert-info mt-3 mx-auto " style="text-align: center;">Aucun produit trouver</div>
              <?php
           endif;
            ?>
            </div>

         </div>
         </div>
         </div>
   </div>
</div>

          
          

<?php include("src/footer.php"); ?>
