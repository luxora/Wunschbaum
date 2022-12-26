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
<p style="float: right;"><a href="/uvb/index.php"/>zur Wunschuebersicht</a><br>
<h1 style="font-size: 48px;">Wunschbaum Aktion der  - Wunsch ändern 3</h1>

<?php


// post method wunsch eintragen:

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
echo ("Datenänderung festgestellt, Post Method zum Datenupdate ausgeführt... <br>");
// hole Variablen:
$wunschid = $_POST["wunschidinput"];
$gruppe = $_POST["gruppeinput"];
$kind = $_POST["kindinput"];
$alter = $_POST["alterinput"];
$wunsch = $_POST["wunschinput"];
$namewunscherfueller = $_POST["wunscherfuellerinput"];
$namewunscherfuellen = $_POST["wunscherfuelleninput"];
$wunscherfuellerbestaetigt = $_POST["wunscherfuellerbestaetigtinput"];
echo ("Variablen erfolgreich von den Eingabefeldern abgeholt... <br>");
 $sqlu = "UPDATE wunschliste SET wunschid='$wunschid', gruppe='$gruppe', kind='$kind', alter='$alter', wunsch='$wunsch', wunscherfueller='$namewunscherfueller',  wunscherfuellen='$namewunscherfuellen', wunscherfuellerbestaetigt='$wunscherfuellerbestaetigt' WHERE wunschnummer='$wunschid' ";
 echo ("SQL Query erstellt <br>");
 
$ergu = $db->query($sqlu) or die("Fehler beim UPDATE im - db query Zeile 43");

// Erfolgsmeldung:
echo ("
<div class = \"alert alert-success\" style=\"text-align: center;\">
         <p>Wunsch in der Liste (Nummer $wunschid) erfolgreich ge&auml;ndert. Vielen Dank!</p>
      </div>
");


}

?>


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


