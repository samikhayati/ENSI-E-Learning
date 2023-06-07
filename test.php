<?php
 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
  
    
        $objet = " Un Commentaire Envoyé\n";
        $texte = "Cher(e), " . $nom . " , " . $prenom . "\n";
        $texte .= "Votre commentaire est mis en consideration\n";
    
        
        mail($mail, $objet, $texte);
   
?>
