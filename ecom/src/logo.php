<div class="row">
                 <div class="col-md-4 mt-2">
                     <a href="index.php" class="bin btn-link ">
                        <span class="text-danger display-4 "><i class="fa fa-shopping-basket" aria-hidden="true"></i><h3>SblShopping</h3></span>
                       <!-- <span class="text-danger display-4"><h5>.com</h5></span>-->
                      </a>
                  </div>

            <div class="col-md-8 mt-5">

                <div class="float-right">
                   <div class="dropdown">
                       <a class="btn btn-link dropdown-toggle" style="color:black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Compte
                        </a>
                        <?php
                        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true ) :
                        ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item "><i class="fa fa-user " ></i>
                            <?php
                            echo $_SESSION['nom'];
                            ?>
                            </a>
                           <a class="dropdown-item" href="logout.php" ><i class="fa fa-sign-out " ></i> déconnexion</a> 
                        </div>
                        <?php
                        else:
                        ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="inscription.php"><i class="fa fa-user-plus " ></i> Inscription</a>
                           <a class="dropdown-item" href="conexion.php"><i class="fa fa-sign-in " ></i> Connexion</a> 
                        </div>
                        <?php
                        endif;
                        ?>
                   </div>
                </div>

                <div class="float-right">
                     <div class="dropdown">
                       <a class="btn btn-link dropdown-toggle " style="color:black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-shopping-cart " aria-hidden="true" ></i>  Panier
                       </a>
                        <div class="dropdown-menu" style="color:black" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="cart.php"> <?php echo !empty($_SESSION['count']) ? $_SESSION['count']: "" ?> Produit(s)</a>
                        </div>
                     </div>
                </div>
            </div>
         </div>