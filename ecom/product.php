<?php include("src/header.php"); ?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
         <div class="col-md-6 mx-5  ">

         <?php
                 $id = escape_string($_GET['id']);
                 $sql = "SELECT * FROM products WHERE id= '$id'";
                 $result = query($sql);
                 $row = fetch_array($result);
                 ?>
        
        <div class="card-body">
               <div class="card-img-top mt-2">
               
               <img src="src/imgs/<?php echo"{$row['image']} "; ?>" style="width: 100%;" class="img-fluid" alt="Responsive image">
               <p> </p>
               <h4 class="card-title"><?php echo"{$row['titre']} "; ?></h4>
               <p><span class="badge badge-success"> <?php echo $row['prix']; ?> dhs </span class="text-danger"><span>   <del class="text-danger">900Dhs </del></span></p>
              <p class="lead card-text"><?php echo $row['description']; ?></p>
            
     </div>
     </div>
     </div>
     <div class="col-md-4 mt-5">
     <form action="checkout.php" method="post">
     <div class="form-group">
     <label for="qte">QTE*</label>
     <input style="width: 30%;" type="number" name="qte" class="form-control" value="1">
     <input type="hidden" name="product" value="<?php echo $row['titre']; ?>">
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <div class="input-group mt-4">
            <button name="submit" style="color:white;"  class="btn badge-success">ajouter au panier</button>
        </div>
     </div>
     </form>
     
     </div>

   </div>
</div>

          

<?php include("src/footer.php"); ?>
