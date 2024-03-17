<?php 
 $sql = "SELECT * FROM categories";
 $result = query($sql);
?>
<nav class="navbar navbar-expand-lg text-white mt-4" style="background-color: Black;">
  <a class="navbar-brand text-white" href="index.php">Acceuil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        catégorie
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php 
        while($categories = fetch_array($result)):
        ?>
          <a class="dropdown-item bg-light" href="categorie.php?id=<?php echo"{$categories['id']} "; ?>"><?php echo"{$categories['titre']} "; ?></a>
          
          <?php
          endwhile;
          ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="produit.php">Produit <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">Contact</a>
      </li>
    </ul>
   
    <form action="#" method="post" class="form-inline my-2 my-lg-0 ml-auto">
    <input type="text" name="search" placeholder="recherche" class="form-control" aria-label="Search">
    <button class="btn btn-outline-danger mx-1"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    
  </div>
</nav>