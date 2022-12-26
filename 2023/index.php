<?php include ("header.php");?>
<?php include ("db.php");?>
<body>
<link href="/lkkllklkkl/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>
<?php include ("navbar.php");?>
<div class="container content" style="margin-left: 3%;">
<br>
<div class="row">
<div class="col-md-12">
<img src="/iooi/img/kuvblogo.jpg"/>
<br>
<div class="christbaumkugelimage">
<img src="/iooi/img/christbaumkugel.jpg"/>
</div>
</div>
</div>

</div>
<?php 
$db = new mysqli ($dbhost,$dbusername,$dbpassword, $dbdatabase);
$sqlcountall = "SELECT * FROM wunschliste";
if ($ergcountall=mysqli_query($db,$sqlcountall)) { $rowcountall=mysqli_num_rows($ergcountall); }  // Gesamtzahl der Wünsche
$sqlcountgreen = "SELECT * FROM wunschliste WHERE  wunscherfuellen='JA'";
if ($ergcountgreen=mysqli_query($db,$sqlcountgreen)) { $rowcountgreen=mysqli_num_rows($ergcountgreen); }  // nur gruene erfuellte Wünsche
$sqlcountred = "SELECT * FROM wunschliste WHERE  wunscherfuellen='NEIN' OR wunscherfuellen=''";
if ($ergcountred=mysqli_query($db,$sqlcountred)) { $rowcountred=mysqli_num_rows($ergcountred); }  // nur gruene erfuellte Wünsche
?>

<h1 style=" text-align: center; font-size: 48px;">Wunschbaum Aktion der </h1>
<h1 style=" text-align: center; font-size: 20px;">(Gesamtzahl der W&uuml;nsche: <?php echo($rowcountall);?> // davon erf&uuml;llt: <?php echo($rowcountgreen);?> // noch nicht erf&uuml;llt: <?php echo($rowcountred);?>)</h1>
<br><br>


 <script src="/pp/css/countdown/example/countDown.min.js"></script>
    <link href="/ppp/css/countdown/example/style.css" media="all" rel="stylesheet" />
    
<?php
// ALLE ERFÜLLT
if ($rowcountred == 0)
{

echo (" <div class = \"alert alert-success\" style=\"text-align: center; font-size: 50px;\"> <b> Alle W&uuml;nsche wurden erf&uuml;llt :) Vielen Dank! Wir w&uuml;nschen frohe Weihnachten und einen guten Rutsch ins Neue Jahr!</b> </div> ");
include ("countdown.php");
}
?>


<div class="alert alert-danger" style="margin-left: 50px; margin-right: 50px; text-align: center;" role="alert">
<br> <b style="font-size: 25px;">ACHTUNG, einige W&uuml;nsche mussten am 02.12.2022 / 21.08h geändert werden.</b> <br>
Es wurde eine neue Liste vom Institut &uuml;bersandt. <br>
Die Änderungen finden Sie, sofern Sie sich bereits eingetragen haben unter der Spalte &Auml;nderung rechts auf der Hauptseite. <br>
Sie k&ouml;nnen mit Strg + F (Eingabefeld f&uuml;r die Suche erscheint im Browser meist unten links) Ihren Namen bzw. den Wunsch in der Liste suchen lassen. <br>
Sofern Sie sich f&uuml;r einen Wunsch bereits eingetragen haben, der ge&auml;ndert wurde, wurde Ihr Name entfernt, tragen Sie sich bitte erneut ein. <br> <br>
Sofern Sie von einer Wunsch&auml;nderung betroffen sind, pr&uuml;fen Sie bitte mit der Suche mit Strg + F , ob ggf. ein anderes Kind diesen &uuml;bernommen hat. <br>
Sofern dies nicht der Fall ist und Sie den Gegenstand bereits erworben haben, setzen Sie sich bitte mit Fr. Keim in Verbindung. <br><br>
&Auml;nderungen k&ouml;nnen Sie mit der Suche mit Strg + F (Eingabefeld f&uuml;r die Suche erscheint im Browser meist unten links) und dem Wort Achtung (siehe rechte Spalte) in der Liste suchen lassen.  <b> Vielen Dank f&uuml;r Ihr Engagement!</b><br>
</div>

<div class="alert alert-info" role="alert" style="margin-left: 50px; margin-right: 50px; text-align: center; font-size: 18px;">
Information und Bestell-Link f&uuml;r die Sternenhimmelprojektoren mit den  Wunschnummern: 36,43,90, 101 und 119: <br>
<u><a href="https://www.amazon.de/-/en/Projector-Function-Control-Starlight-Children/dp/B09KY1HWRW/ref=sr_1_21?crid=3LPE3QEOFB6BT&keywords=sternenhimmel+projektor&qid=1669717599&sprefix=ster%2Caps%2C111&sr=8-21">zum Sternenhimmelprojektor bei Amazon</a></u> <br>
</div>

<?php
// post method wunsch eintragen:
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
// hole Variablen:
$wunschidfrompost = $_POST["wunschlisteid"];
//echo ("Die gewählte Wunschnummer ist: ".$wunschidfrompost."<br>");
$wunscherfuellerfrompost = $_POST["wuenscheerfuellereintragen"];
//echo ("Sie haben sich als Wunscherfüller eingetragen ".$wunscherfuellerfrompost."<br>");

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
echo (" <div class = \"alert alert-danger\" style=\"text-align: center;\"> <p>Dieser Wunsch ist bereits vergeben! Wählen Sie einen anderen nicht vergebenen Wunsch aus!</p> </div> ");
}
 if ($wunscherfuellerbelegt == "")
{ //echo ("Der Wunsch kann von Ihnen erfüllt werden..."); // sende an Datenbank:
$db = new mysqli ($dbhost,$dbusername,$dbpassword, $dbdatabase);
$sql = "UPDATE wunschliste SET wunscherfueller='$wunscherfuellerfrompost', wunscherfuellen='JA' WHERE wunschnummer='$wunschidfrompost'";
$db->query($sql);
// Erfolgsmeldung:
echo (" <div class = \"alert alert-success\" style=\"text-align: center;\"> <p>Sie wurden als Wundscherfüller für die Nr. $wunschidfrompost erfolgreich eingetragen. Vielen Dank $wunscherfuellerfrompost!</p> </div> ");
}

} // post Schluss klammer

?>
<form method="post" action="index.php" name="wuenscheerfuellen"/>
<?php include ("kopfbereich_vor_wunsch_erfuellen.php"); ?>
<div class="container content" style="margin-left: 3%;">
<h4>Ich m&ouml;chte einen Wunsch erf&uuml;llen:</h4><br>
Bitte suchen Sie den Wunsch aus der Liste heraus, den Sie erf&uuml;llen m&ouml;chten. Mit einem Klick auf einen Filter (oben) k&ouml;nnen Sie die Liste auf die noch nicht erf&uuml;llten W&uuml;nsche beschr&auml;nken. <br>
Ich m&ouml;chte mich eintragen für den Wunsch Nummer:  
<select name="wunschlisteid" style="padding: 10px;">
<?php
 $sqlz = "SELECT  * FROM wunschliste ORDER BY wunschnummer ASC";
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
 --- Wunscherfüller (Vor- und Nachname): -- 
<input name="wuenscheerfuellereintragen" placeholder="Rudolph The Red-Nose Reindeer"></p><input style="padding: 15px; padding-left: 90px; padding-right: 90px; " type="submit" value="Wunsch erfüllen"/> (<--- bitte eigenen Vor und Nachnamen im Feld oben eintragen und dann auf den Button Wunsch erf&uuml;llen klicken).<br>
<br>Wenn Sie sich versehentlich hier eingetragen haben und Ihren Namen als Wunscherf&uuml;ller wieder aus der Liste entfernen wollen, so k&ouml;nnen Sie ganz nach oben scrollen. In der schwarzen Men&uuml;leiste (im oberen Bereich dieser Seite) befindet sich die Option, sich als Wunscherf&uuml;ller wieder auszutragen.<br>
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
<style> td p { font-weight: bold; font-size: 30px;}</style>

<?php
$sql = "SELECT  * FROM wunschliste";
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
$wunscherfuellerbestaetigt = $row['wunscherfuellerbestaetigt']; // ist die Wunschänderungsspalte

if ($wunscherfueller !="")
{
$color = "green";
}
else { $color = "red";
}
echo (
"<td><p style=\"color: $color\">".$wunschnummer."</p></td>".
"<td><p style=\"color: $color\">".$gruppe."</p></td>".
"<td><p style=\"color: $color\">".$kind."</p></td>".
"<td><p style=\"color: $color\">".$age."</p></td>".
"<td><p style=\"color: $color\">".$wunsch."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfueller."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfuellen."</p></td>".
"<td><p style=\"color: $color\">".$wunscherfuellerbestaetigt."</p></td>"
);
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
