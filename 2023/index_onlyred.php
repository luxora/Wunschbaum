<?php include ("header.php");?>
<?php include ("db.php");?>
<body>
<link href="/pp/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>

<?php include ("navbar.php");?>

<br>
<div class="row">
<div class="col-md-12">
<img src="/pp/img/lllogo.jpg"/>
<br>
<div class="christbaumkugelimage">
<img src="/pp/img/christbaumkugel.jpg"/>
</div>
</div>
</div>

<h1 style=" text-align: center; font-size: 48px;">Wunschbaum Aktion der ppp</h1>
<?php include ("kopfbereich_vor_wunsch_erfuellen.php"); ?>
<div class="container content" style="margin-left: 3%;">
<h4>Ich m&ouml;chte einen Wunsch erf&uuml;llen <br>(derzeit werden nur W&uuml;nsche angezeigt, die noch nicht erf&uuml;llt wurden):</h4><br>
Bitte suchen Sie den Wunsch aus der Liste heraus, den Sie erf&uuml;llen m&ouml;chten. Mit einem Klick auf einen Filter (oben) k&ouml;nnen Sie die Liste auf die noch nicht erf&uuml;llten W&uuml;nsche beschr&auml;nken. <br>
Ich m&ouml;chte mich eintragen für den Wunsch Nummer: 
<?php

// post method wunsch eintragen:
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
// hole Variablen:
$wunschidfrompost = $_POST["wunschlisteid"];
echo ("Die gewählte Wunschnummer ist: ".$wunschidfrompost."<br>");
$wunscherfuellerfrompost = $_POST["wuenscheerfuellereintragen"];
echo ("Sie haben sich als Wunscherfüller eingetragen ".$wunscherfuellerfrompost."<br>");

 $sqlu = "SELECT  * FROM wunschliste WHERE wunschnummer='$wunschidfrompost'";
$ergu = $db->query($sqlu);

while ($rowu = $ergu->fetch_array ())
{

$wunscherfuellerbelegt = $rowu['wunscherfueller'];

}
if ($wunscherfuellerbelegt == null) // d.h. noch gar keine angababen
{
// nix
}
 if ($wunscherfuellerbelegt != "")
{

// fehler:
echo ("
<div class = \"alert alert-danger\" style=\"text-align: center;\">
         <p>Dieser Wunsch ist bereits vergeben! Wählen Sie einen anderen nicht vergebenen Wunsch aus!</p>
      </div>
");

}
 if ($wunscherfuellerbelegt == "")
{
echo ("Der Wunsch kann von Ihnen erfüllt werden...");
// sende an Datenbank:
$db = new mysqli ($dbhost,$dbusername,$dbpassword, $dbdatabase);
$sql = "UPDATE wunschliste SET wunscherfueller='$wunscherfuellerfrompost', wunscherfuellen='JA' WHERE wunschnummer='$wunschidfrompost'";
$db->query($sql);

// Erfolgsmeldung:
echo ("
<div class = \"alert alert-success\" style=\"text-align: center;\">
         <p>Sie wurden als Wundscherfüller für die Nr. $wunschidfrompost erfolgreich eingetragen. Vielen Dank $wunscherfuellerfrompost!</p>
      </div>
");

}

}




?>
<form method="post" action="index_onlyred.php" name="wuenscheerfuellen"/>

<select name="wunschlisteid" style="padding: 10px;">
<?php
 $sqlz = "SELECT  * FROM wunschliste WHERE wunscherfuellen='NEIN' OR wunscherfuellen='' ORDER BY wunschnummer ASC"; // d.h. zeige nur die an, die noch nicht erfuellt sind
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

echo ("<option>$wunschnummer</option>");
}?>
</select>
 --- Wunscherfüller: -- 
<input name="wuenscheerfuellereintragen" placeholder="Rudolph The Red-Nose Reindeer"></p><input style="padding: 15px; padding-left: 90px; padding-right: 90px; " type="submit" value="Wunsch erfüllen"/><br>
</form>
<br>

<table class="wunschtable" border="1">
<th><p>Wunschnummer:</p></th>
<th><p>Gruppe:</p></th>
<th><p>Kind:</p></th>
<th><p>Alter:</p></th>
<th><p>Wunsch:</p></th>
<th><p>Name Wunscherfüller:</p></th>
<th><p>Wunsch erfüllen:</th>
<th><p>Wunschänderung:</th>
<tr>

<style>
td p
{
font-weight: bold; font-size: 30px;}
</style>

<?php
 $sql = "SELECT  * FROM wunschliste WHERE wunscherfuellen='NEIN' OR wunscherfuellen='' ORDER BY wunschnummer ASC";
$erg = $db->query($sql);

while ($row = $erg->fetch_array ())
{

$wunschnummer = $row['wunschnummer'];
$gruppe = $row['gruppe'];
$kind = $row['kind'];
$age = $row['age'];
$wunsch = $row['wunsch'];
$wunscherfueller = $row['wunscherfueller'];
$wunscherfuellen = $row['wunscherfuellen'];
$wunscherfuellerbestaetigt = $row['wunscherfuellerbestaetigt'];

if ($wunscherfueller !="")
{
$color = "green";
}
else { $color = "red";
}
 

echo ("<td><p style=\"color: $color\">".$wunschnummer."</p></td>".
"<td><p style=\"color: $color\">".$gruppe."</p></td>".
"<td><p style=\"color: $color\">".$kind."</p></td>".
"<td><p style=\"color: $color\">".$age."</p></td>".
"<td><p style=\"color: $color\">".$wunsch."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfueller."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfuellen."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfuellerbestaetigt."</p></td>");

echo ("</tr>");
}
?>
</form>
</tr>



</table>





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


