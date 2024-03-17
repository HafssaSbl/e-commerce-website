<?php 
require("src/function.php"); 
if(isset($_POST['id']) && isset($_POST['qte'])) {
    $id = escape_string($_POST['id']);
    $qte = escape_string($_POST['qte']);
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = query($sql);
    $product = fetch_array($result);
    if($_SESSION['products_'.$id]['product'] == $_POST['product'])
    {
        $message = "vous avez deja ce produit a votre panier";
        redirect("cart.php?message=".$message);
    }else {
        if ($product['qte']< $qte) {
            $message = "la quantite disponible en stock est :" .$product['qte'];
            redirect("cart.php?message=".$message);
        }else {
            $_SESSION['products_'.$product['id']] = array(
                'id'=>$product['id'],
                'product'=>$product['titre'],
                'prix'=>$product['prix'],
                'qte'=>$qte,
                'total'=>$product['prix'] * $qte,
            );
            $_SESSION['totaux'] += $_SESSION['products_'.$product['id']]['total'];
    $_SESSION['count'] += 1;
    redirect("cart.php");
        }
    }
}

