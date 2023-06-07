<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel='stylesheet' type='text/css' media='screen' href='home.css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header >
        <img src="logo ensi e learning.jpg" alt="site logo" id="logo">
    </header>
    <section class="div1" >  
        <p>(<span id="star">*</span>)Chemin Obligatoire</p>
        <form action="login.php" method="POST" >
            <table id="t">
                <tr>
                    <td><label for="nom" class="insctext"><span id="star">*</span>Nom: </label> <span></td>
                    <td><input type="text"name="nom" id="nom" class="inscinput" ></td>
                </tr>

                <tr>
                    <td><label for="prenom" class="insctext"><span id="star">*</span>Prénom: </label></td>
                    <td><input type="text"name="prenom" id="prenom" class="inscinput" ></td>
                </tr>
                <tr>
                    <td><label for="genre" class="insctext"> Genre:</label></td>
                </tr> 
                 <tr>  
                    <td><input type="radio" name="gender" id="homme" checked  class="smalbtn" value="0">
                    <label for="homme" class="insctext"> homme</label></td>
                
                    <td><input type="radio" name="gender" id="femme"  class="smalbtn" value="1">
                    
                        <label for="femme"class="insctext"> femme</label> 
                    </td>
                </tr>
                <tr>
                
                    <td><label for="adr" class="insctext"><span id="star">*</span> Adresse email:</label></td>
                    <td><input type="text" name="adr" id="adr" class="inscinput emailinput"  placeholder="votre mail" ></td>
                </tr>
                <tr>
                    <td><label for="pwd" class="insctext"><span id="star">*</span>Mot de passe:</label> <span> &nbsp </span></td>
                    <td><input type="password" name="pwd" id="pwd" placeholder="8 charactéres au minimum" class="inscinput emailinput"   ></td>
                </tr>
                <tr>
                    <td><label for="ddn" class="insctext"> Date de naissance:</label></td>
                    <td>
                        <select name="j" id="ddn" class="inscdnsbuttonsmall"> 
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        <option value="7"> 7</option>
                        <option value="8"> 8</option>
                        <option value="9"> 9</option>
                        <option value="10"> 10</option>
                        <option value="11"> 11</option>
                        <option value="12"> 12</option>
                        <option value="13"> 13</option>
                        <option value="14"> 14</option>
                        <option value="15"> 15</option>
                        <option value="16"> 16</option>
                        <option value="17"> 17</option>
                        <option value="18"> 18</option>
                        <option value="19"> 19</option>
                        <option value="20"> 20</option>
                        <option value="21"> 21</option>
                        <option value="22"> 22</option>
                        <option value="23"> 23</option>
                        <option value="24"> 24</option>
                        <option value="25"> 25</option>
                        <option value="26"> 26</option>
                        <option value="27"> 27</option>
                        <option value="28"> 28</option>
                        <option value="29"id="j29"> 29</option>
                        <option value="30" id="j30"> 30</option>
                        <option value="31" id="j31"> 31</option>
        
                     </select>
                    
                        <select name="m" id="ddn" onclick="selectmonth()" class="inscdnsbuttonsmall">
                            <option value="1" id="1m" > 1</option>
                            <option value="2" id="2m"> 2</option>
                            <option value="3" id="3m"> 3</option>
                            <option value="4" id="4m"> 4</option>
                            <option value="5" id="5m"> 5</option>
                            <option value="6" id="6m"> 6</option>
                            <option value="7" id="7m"> 7</option>
                            <option value="8" id="8m"> 8</option>
                            <option value="9" id="9m"> 9</option>
                            <option value="10" id="10m"> 10</option>
                            <option value="11" id="11m"> 11</option>
                            <option value="12" id="12m"> 12</option>
            
                        </select>
            
                        <select name="y" id="ddn" class="inscdnsbuttonslarge">
                            <option value="1990"> 1990 </option>
                            <option value="1991"> 1991 </option>
                            <option value="1992"> 1992 </option>
                            <option value="1993"> 1993 </option>
                            <option value="1994"> 1994 </option>
                            <option value="1995"> 1995 </option>
                            <option value="1996"> 1996 </option>
                            <option value="1997"> 1997 </option>
                            <option value="1998"> 1998 </option>
                            <option value="1999"> 1999 </option>
                            <option value="2000"> 2000 </option>
                            <option value="2001"> 2001 </option>
                            <option value="2002"> 2002 </option>
                            <option value="2003"> 2003 </option>
                            <option value="2004"> 2004 </option>
                            <option value="2005"> 2005 </option>
                            <option value="2006"> 2006 </option>
                            <option value="2007"> 2007 </option>
                            <option value="2008"> 2008 </option>
                            <option value="2009"> 2009 </option>
                            <option value="2010"> 2010 </option>
                        </select>
                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="mdouble" class="insctext"> Redoublant </label>
            <input type="checkbox" id="mdouble" name="mdouble" class="smalbtn">
                    </td>
                </tr>
        
            </table>
           <div style="margin-left: 150px; margin-top: 20px;">
                <label for="cond" class="smallitalic" > J'accepte les termes et conditions</label>
                <input type="checkbox" id="cond" name="cond"   class="smalbtn">

            </div>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  le nom existe déjà!! </h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  il y a un champ vide!! </h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  le mot de passe nécessite au moins 8 caractères!! </h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;"> Le nom n'est pas valide. Il ne doit contenir que des caractères alphabétiques!! </h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  Le prénom n'est pas valide. Il ne doit contenir que des caractères alphabétiques!! </h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  vous devez accepter les termes et conditions pour créer votre compte!!</h1>
            <h1 class="insctext smallitalic" style="color: red; display:none;">  ce n'est pas un email valide</h1>
            
            
            <input type="submit" value="s’inscrire" class="submitbutton" onmouseover="movsb(this)" onmouseout="motsb(this)" style="float: left;">
            <input type="reset"class="submitbutton resetbtn" onmouseover="movsb(this)" onmouseout="motsb(this)">
 
        </form>
   
    </section>
     
    <br> <br>
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
    if (isset($_GET["var"])) {

            echo "<script type='text/javascript'>";
            echo "document.getElementsByTagName('h1')[".$_GET["var"]."].style.display='block';";
            echo "</script>";

    } 
    ?>
    <script src="script.js"></script>


    


</body>
</html>