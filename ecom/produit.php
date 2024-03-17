<?php include("src/header.php"); ?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
              
         <div class="col-md-12  ">
         <div class="card">
            <div class="card-body">
               <h3 class="card-header text-white" style="background-color: Black;"><i class="fa fa-list" aria-hidden="true"></i> boutique</h3>
                   <div class="card-deck md-1">
                  
            <?php
            $sql="SELECT * FROM products";
            $result= query($sql);
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
            ?>
              
            </div>

         </div>
         </div>
         </div>
   </div>
</div>

          

<?php include("src/footer.php"); ?>
