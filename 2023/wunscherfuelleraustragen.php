<?php include ("header.php");?>
<?php include ("navbar.php");?>
<?php include ("db.php");?>
<body>
<link href="/pppp/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>


<div class="container content">

<div class="row">
<div class="col-md-12">

<div class="christbaumkugelimage">
<img src="/pppp/img/christbaumkugel.jpg"/>
</div>
<p style="float: right;"><a href="/ppp/index.php"/>zur Wunschuebersicht</a>
<h1 style="font-size: 48px;">Wunschbaum Aktion der pppp - als Erfüller wieder austragen</h1>

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

echo ("Sie werden von der Wunsch ID ".$wunschid." wieder ausgetragen...");
 $sqlu = "UPDATE wunschliste SET wunscherfueller='', wunscherfuellen='', wunscherfuellerbestaetigt = '' WHERE wunschnummer=$wunschid";
 
 
 
$ergu = $db->query($sqlu);


// Erfolgsmeldung:
echo ("
<div class = \"alert alert-success\" style=\"text-align: center;\">
         <p>Sie wurden als Wunscherfüller wieder ausgetragen. :(</p>
      </div>
");


}




?>
<form method="post" action="wunscherfuelleraustragen.php" name="wuenscheerfuellenform"/>
<p>Austragen von einem zur Erfüllung bereits eingetragenen Wunsch 


<table class="wunschtable" border="0">

<tr><td>Ihre Wunsch ID aus der Sie sich wieder austragen möchten:</td><td>	

<select name="wunschidinput" style="padding: 10px;">
<?php
 $sqlz = "SELECT  * FROM wunschliste  WHERE NOT wunscherfueller='' ORDER BY wunschnummer ASC";
$ergz = $db->query($sqlz);

while ($rowz = $ergz->fetch_array ())
{

$wunschnummer = $rowz['wunschnummer'];
$kind = $rowz['kind'];
$age = $rowz['age'];
$wunsch = $rowz['wunsch'];
$wunscherfueller = $rowz['wunscherfueller'];
$gruppe = $rowz['wunscherfuellen'];
$wunscherfuellerbestaetigt = $rowz['wunscherfuellerbestaetigt'];

echo ("<option value=\"$wunschnummer\">$wunschnummer -- $wunscherfueller -- $wunsch</option>");
}?>
</select>



</td></tr>
</table> <br>
<input type="submit" value="mich aus der Liste wieder entfernen"/><br>

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


