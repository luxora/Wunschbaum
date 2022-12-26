<?php include ("header.php");?>
<?php include ("navbar.php");?>
<?php include ("../db.php");?>
<body>
<link href="//css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>


<div class="container content">

<div class="row">
<div class="col-md-12">

<div class="christbaumkugelimage">
<img src="//img/christbaumkugel.jpg"/>
</div>
<p style="float: right;"><a href="//administrator/index.php"/>zur Startseite des Adminbereichs</a> <br>
<p style="float: right;"><a href="//index.php"/>zur Wunschuebersicht</a><br>
<h1 style="font-size: 48px;">Wunschbaum Aktion der  - Wunsch ändern 2</h1>




<?php
$wunschidfrompost = $_POST['wunschlisteid'];
echo ("geaendert wird Nummer: ".$wunschidfrompost."<br>");

$db = new mysqli ($dbhost,$dbusername,$dbpassword, $dbdatabase);
$sqlz = "SELECT  * FROM wunschliste WHERE wunschnummer='$wunschidfrompost'";
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
}?>

<form method="post" action="wunschbearbeiten3.php" name="wuenscheerfuellenform"/>
<br>

<tr><td>zu &auml;ndernde Wunsch ID:</td><td>	
<input type="text" name="wunschidinput" readonly value="<?php echo($wunschidfrompost);?>"/></td></tr><br>
<tr><td>Gruppe bisher:</td><td>	<input type="text" name="gruppeinput" value="<?php echo($gruppe);?>"/></td></tr><br>
<tr><td>Kind bisher:</td><td> <input type="text" name="kindinput" value="<?php echo($kind);?>"/> </td></tr><br>
<tr><td>Alter bisher:</td> <td>   <input type="text" name="alterinput" value="<?php echo($age);?>"/>  </td></tr><br>
<tr><td>Wunsch bisher:</td> <td>  <input type="text" name="wunschinput" value="<?php echo($wunsch);?>"/>  </td></tr><br>
<tr><td>Name Wunscherfüller schon bekannt (Namen angeben, sonst leer) bisher:</td><td>   <input type="text" name="wunscherfuellerinput" value="<?php echo ($wunscherfueller);?>"</td></tr><br>
<tr><td>Wunsch erfüllen (JA eingeben, sofern Sie im Feld Name Wunscherf&uuml;ller einen Namen eingetragen haben) bisher</td><td>   <input type="text" name="wunscherfuelleninput" value="<?php echo ($wunscherfuellen);?>"/> </td></tr><br>
<tr><td>Wunsch erfüller bestätigt (leer lassen, Spalte dient nur fuer Aenderungen zur Anzeige im Sytem) bisher</td><td>   <input type="text" name="wunscherfuellerbestaetigtinput" value="<?php echo ($wunscherfuellerbestaetigt);?>"/>   </td></tr><br>

</table> <br>
<input type="submit" value="die obigen Werte, die ich gerade geändert habe in die Liste übernehmen"/><br>

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


