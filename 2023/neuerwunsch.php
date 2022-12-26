<?php include ("header.php");?>
<?php include ("navbar.php");?>
<?php include ("db.php");?>
<body>
<link href="/ppp/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>


<div class="container content">

<div class="row">
<div class="col-md-12">

<div class="christbaumkugelimage">
<img src="/ppp/img/christbaumkugel.jpg"/>
</div>
<p style="float: right;"><a href="/ppp/index.php"/>zur Wunschuebersicht</a>
<h1 style="font-size: 48px;">Wunschbaum Aktion der ppp - neue Wünsche eintragen</h1>

<?php

// post method wunsch eintragen:
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
// hole Variablen:
$wunschid = $_POST["wunschidinput"];
$gruppe = $_POST["gruppeinput"];
$kind = $_POST["kindinput"];
$alter = $_POST["alterinput"];
$wunsch = $_POST["wunschinput"];
$namewunscherfueller = $_POST["wunscherfuellerinput"];


 $sqlu = "INSERT INTO wunschliste (wunschnummer, gruppe, kind, age, wunsch, wunscherfueller, wunscherfuellen, wunscherfuellerbestaetigt) VALUES ('$wunschid','$gruppe','$kind','$alter','$wunsch', '$namewunscherfueller','NEIN', 'NEIN')";
 
 
 
$ergu = $db->query($sqlu);


// Erfolgsmeldung:
echo ("
<div class = \"alert alert-success\" style=\"text-align: center;\">
         <p>Wunsch in die Liste  erfolgreich eingetragen. Vielen Dank!</p>
      </div>
");


}




?>
<form method="post" action="neuerwunsch.php" name="wuenscheerfuellenform"/>
<p>Bitte beachten Sie, dass Sie mit einem Eintrag auf dieser Seite keinen Wunsch der Liste erf&uuml;llen k&ouml;nnen. <br>
Die Wunscherf&uuml;llung aus der Liste k&ouml;nnen Sie direkt auf der Hauptseite vornehmen. <br> (der Link rechts oben namens zur Wunschuebersicht f&uuml;hrt Sie dorthin zur&uuml;ck)
Diese Seite ist dazu da, neue W&uuml;nsche unten an die Liste anzuf&uuml;gen, falls einer vergessen wurde. <br>
Diese Seite ist nicht von Besch&auml;ftigten der ppp zu benutzen. <br>
Besch&auml;ftigte der KUVB benutzen bitte zum Eintragen f&uuml;r die W&uuml;nsche die Hauptseite. (dort k&ouml;nnen Sie im Feld &uuml;ber Wunsch erf&uuml;llen Ihren Namen eintragen) <br>
<br>
Neuen Wunsch unten an die Liste anf&uuml;gen: <br>


<table class="wunschtable" border="0">
<?php 
// prüfe nächste freie wunsch id:

   
    // query to fetch Username and Password from
    // the table geek
$query="SELECT * FROM wunschliste";
      
    // Execute the query and store the result set
    $result = mysqli_query($db, $query);
      
    if ($result)
    {
        // it return number of rows in the table.
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
			$anzahlzeilen = $row;
              }
        // close the result.
        mysqli_free_result($result);
    }
  



echo ($ergu);
$anzahlzeilenplus = $anzahlzeilen + 1;
?>
<tr><td>nächste Wunsch ID:</td><td>	<input type="text" name="wunschidinput" readonly value="<?php echo ($anzahlzeilenplus);?>"/></td></tr>
<tr><td>Gruppe</td><td>	<input type="text" name="gruppeinput"/></td></tr>
<tr><td>Kind</td><td> <input type="text" name="kindinput"/> </td></tr>
<tr><td>Alter</td> <td>   <input type="text" name="alterinput"/>  </td></tr>
<tr><td>Wunsch</td> <td>  <input type="text" name="wunschinput"/>  </td></tr>
<tr><td>Name Wunscherfüller schon bekannt (Namen angeben, sonst leer)</td><td>   <input type="text" name="wunscherfuellerinput"/>   </td></tr>
<tr><td>Wunsch erfüllen (JA eingeben wenn bekannt, sonst leer lassen)</td><td>   <input type="text" name="wunscherfuelleninput"/>   </td></tr>
</table> <br>
<input type="submit" value="zur Liste hinzufügen"/><br>

</form>



</div>
</div>

</div> <!-- div contenttext -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <?php include ("footer.php");?>
</body>
</html>


