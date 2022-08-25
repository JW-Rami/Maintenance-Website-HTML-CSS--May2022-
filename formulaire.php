<?php
if(isset($_POST['envoyer'])){
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];


    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!empty($Message)){

            require_once "config.php";

            // $rows = $pdo->prepare("SELECT * FROM BDD_Website WHERE Email=?");
            // $rows->execute(array($Email));

            // $count = $rows->rowCount();

            // $time = time();

            $req = $pdo->prepare("INSERT INTO BDD_Website(Email, Message) VALUES(?, ?)");
            $req->execute(array($Email, $Message));

            unset($Email);
            unset($Message);  
        }else{
            $erreur="<span>Veuillez saisir un message</span>";
        }
    }else {
        $erreur="<span>Veuillez saisir un email valide</span>";
    }
}
?>