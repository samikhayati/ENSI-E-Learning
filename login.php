
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);




if (isset($_POST["nom"]) && isset($_POST["prenom"])  && isset($_POST["adr"]) && isset($_POST["pwd"])) {
    if(strlen($_POST["pwd"])<8){
        $variable = 2;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    }
    if (!ctype_alpha($_POST["nom"])) {
        $variable = 3;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    } 
    if (!ctype_alpha($_POST["prenom"])) {
        $variable = 4;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    } 
    if(!isset($_POST["cond"])){
        $variable = 5;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    }
    if(!filter_var($_POST["adr"], FILTER_VALIDATE_EMAIL)){
        $variable = 6;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    }
        
    if($_POST["mdouble"]==null){
        $mdouble=false;
    }
    else{
        $mdouble=true;
    }

    $date=$_POST["y"]."-".$_POST["m"]."-".$_POST["j"];

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adr = $_POST["adr"];
    $pwd= $_POST["pwd"];
    $_POST["cond"];
    try { 
    $r=$pdo->exec('INSERT INTO users (nom, prenom, genre, password, adress, date, redoublant)   
    VALUES("'.$_POST["nom"].'", "'.$_POST["prenom"].'", "'.$_POST["gender"].'", "'.$_POST["pwd"].'", "'.$_POST["adr"].'", "'.$date.'", "'.$mdouble.'")');  //insert into the database
     if ($r !== false) {
        // If the execution was successful, perform this action
        header("Location: page5.html");
        exit(); // Make sure to exit after redirecting
    } else {
        // If an error occurred, perform this action
        throw new Exception("Database operation failed"); // Throw an exception to be caught in the catch block
    }
    }catch (PDOException $e) {
        $variable = 0;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();
    }


} 
else{
    $variable = 1;
        header("Location: page7.php?var=" . urlencode($variable));
        exit();

}
?>
