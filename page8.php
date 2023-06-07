<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel='stylesheet' type='text/css' media='screen' href='home.css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="background-color: white;">
        <img src="logo ensi e learning.jpg" alt="site logo" id="logo">
    </div>
    <div class="div1" >  
        <form action="page8.php" method="POST">


        <table>
            <tr>
                <td><label for="adr" class="insctext"> Adresse E-mail:</label></td>
                <td><input type="email" name="adr" id="adr" class="inscinput emailinput"  placeholder="votre mail" required></td>
            </tr>
            
            <tr>
                <td><label for="pwd" class="insctext">Mot de passe:</label> <span> &nbsp </span></td>
                <td><input type="password" name="pwd" id="pwd" placeholder="8 charactéres au minimum" class="inscinput emailinput"  minlength="8" required ></td>
            </tr>
            
            
    
            
        </table>    
            <h1 class="insctext smallitalic" style="color: red; display:none;">  mot de passe ou adresse e-mail incorrect !! </h1>
            
            <br>
            <input type="submit" value="se connecter" class="submitbutton" onmouseover="movsb(this)" onmouseout="motsb(this)" >
        </form>

    </div>
    <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>
    <section id="info">
        <div >
         
          <table >
              <tr>
                  <th colspan=2>ETABLISSEMENT</th>
                  <th>  FORMATION  </th>
                  <th colspan="2">CONTACTEZ-NOUS
                     
                  </th>
              </tr>
              <tr>
                  <th rowspan="4">
                       <img src="adresse.png" id="icon">
  
                  </th>
                  <th rowspan="4">Campus Universitaire de la Manouba - 2010 Tunisie</th>
              </tr>
              <tr>
                  <th>||1</th>
                  
                  <th> <img src="tel.png" id="icon"></th>
  
                  <th>71 600 449</th>
              
              </tr>
              <tr >
                  <th>||2</th>
                  <th> <img src="pngwing.com.png" id="icon"></th>
                 
                  <th><a id="mail" href=mailto:enseignate@ensi-uma.tn >enseignate@ensi-uma.tn</a> </th>
              </tr>   
              <tr>
                  <th>||3</th>
              </tr>
  
          </table>
       </div>
       <div >
          <button class="en"><a href="page2.html"> en savoir plus <span style="color: black; font-size: larger;"> </span>  </a></button>
      
       </div>
       <div>
        <form>
            <p>Besoin d'aide ou souhaitez-vous nous suggérer quelque chose ?</p>
            <label for="comment" onclick="CommentAndSubButtonDisplay()" onmouseover="movct(this)" onmouseout="motct(this)"> Écrivez un commentaire!</label>
            <textarea name="comment" id="comment" style="width: 600px; height: 150px; display: none; font-size: 17px; border-radius: 8px;">
            </textarea>
            <input type="submit" value="envoyer" class="submitbutton" onmouseover="movsb(this)" onmouseout="motsb(this)" style="font-size: 20px; margin-top: 0; display: none;">
        </form>
    </div>
      </section>
      <?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);

if(isset($_POST['pwd']) && isset($_POST['adr'])){
$query = "SELECT COUNT(*) FROM users WHERE password='" . $_POST['pwd'] . "' AND adress='" . $_POST['adr'] . "'";
$stmt = $pdo->prepare($query);
$stmt->execute();
$columnValue = $stmt->fetchColumn();
if($columnValue==1){
    header("Location: page5.html");
    exit();
}
else{
    echo "<script type='text/javascript'>";
    echo "document.getElementsByTagName('h1')[0].style.display='block';";
    echo "</script>";
}


}








?>

    



    <script src="script.js"></script>
</body>
</html>