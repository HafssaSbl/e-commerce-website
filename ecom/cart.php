
<?php include("src/header.php"); 

?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
         <div class="col-md-12 ">
                    
                  <?php
                  $item_name = 1;
                  $item_number = 1;
                  $amount =1;
                  $quantity = 1;
                     if (isset($_GET['message'])) {
                        echo ' <div class="alert alert-danger">'.$_GET['message'].'</div>';
                     }
                     ?>

                     <di class="card mt-5">
                     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="hafssasabil@gmail.com">
                     
                     <table class="table table-hover">
                     <?php
                     foreach ($_SESSION as $name => $product) :
                     ?>
                      <?php
                     if (substr($name,0,9) == "products_"):
                    
                     ?>
                     <header>
                     <th>Produit</th>
                     <th>Prix</th>
                     <th>Qte</th>
                     <th>Total</th>
                     <th>Action</th>
                     </header>
                     <tbody>

                        <td>
                        <?php echo !empty($product['product']) ? $product['product']: "" ?>
                        </td>
                        <td>
                        <?php echo !empty($product['prix']) ? $product['prix']: "" ?>
                        </td>
                        <td>
                        <?php echo !empty($product['qte']) ? $product['qte']: "" ?>
                        </td>
                        <td>
                        <?php echo !empty($product['total']) ? $product['total']: "" ?>
                        </td>
                        <td>
                        <a href="delete.php?id=<?php echo !empty($_SESSION['id']) ? $_SESSION['id']: "" ?>&prix=<?php echo !empty($_SESSION['prix']) ? $_SESSION['prix']: "" ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                        <input type="hidden" name="item_name_<?php echo $item_name?> " value="<?php echo !empty($product['product']) ? $product['product']: "" ?>">
                        <input type="hidden" name="item_number_<?php echo $item_number?> " value="<?php echo !empty($product['id']) ? $product['id']: "" ?>">
                        <input type="hidden" name="amount_<?php echo $amount?> " value="<?php echo !empty($product['prix']) ? $product['prix']: "" ?>">
                        <input type="hidden" name="quantity<?php echo $quantity ?> " value="<?php echo !empty($product['qte']) ? $product['qte']: "" ?>">
                        <?php
                        $item_name ++;
                        $item_number ++;
                        $amount ++;
                        $quantity ++;
                        ?>
                     </tbody>
                     </table>
                    
                     <?php
                     endif;
                     ?>
                     <?php
                     endforeach;
                     ?>
                     
                     <?php
                     if (isset($_SESSION['totaux']) && $_SESSION['totaux'] > 0):
                     ?>
                       <button style=" height: 40px;" type="submit" name="upload" class="bnt btn-success mx-5 mt-4"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> valider vous achat</button>
                     <?php
                     endif;
                     ?>
                     
                     </form>
                     
         </div>
         
         <div class="row">
       
       <div class="col-md-4 mt-5 ml-auto">
       <table class="table table-bordered ">
       <thead>
       <th>Produit</th>
       <th>Total HT</th>
       </thead>
       <tbody>
       <td>
       <?php echo !empty($_SESSION['count']) ? $_SESSION['count']: "" ?>
       </td>
       <td>
       <?php echo !empty($_SESSION['totaux']) ? $_SESSION['totaux'].'dh': "" ?>
       </td>
       </tbody>
       </table>
       </div>
       </div>
         </div>
        
         
</div>


          

<?php include("src/footer.php"); ?>
