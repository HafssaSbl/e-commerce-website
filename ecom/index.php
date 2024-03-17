<?php include("src/header.php"); ?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
         <div class="col-md-4 mt-3 mx-3">
         <div class="card">
            <div class="card-body">
               <h3 class="card-header text-white" style="background-color: Black;"><i class="fa fa-map-marker" aria-hidden="true"></i> Ville</h3>
               <ul class="list-group">
                  <li class="list-group-item"> CasaBlanca
                     <spane class="badge p-2 text-white float-right" style="background-color: Black;">14</spane>
                  </li>
                  <li class="list-group-item">Rabat
                     <spane class="badge p-2 text-white float-right" style="background-color: Black;">2</spane>
                  </li>
                  <li class="list-group-item">Oujda
                     <spane class="badge p-2 text-white float-right" style="background-color: Black;">3</spane>
                  </li>
                  <li class="list-group-item">Tanger
                     <spane class="badge p-2 text-white float-right" style="background-color: Black;">8</spane>
                  </li>
                  <li class="list-group-item">Jadida
                     <spane class="badge p-2 text-white float-right" style="background-color: Black;">4</spane>
                  </li>
               </ul>
            </div>
         </div>
         </div>
              
         <div class="col-md-7 mt-3 " style="padding-bottom: 30px;">
         <div class="card">
            <div class=" card-body">
               <h3 class="card-header text-white" style="background-color: Black;"><i class="fa fa-list" aria-hidden="true"></i> boutique</h3>
              <div class="card-deck">
            
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
