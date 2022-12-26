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
<h1 style="font-size: 48px;">Wunschbaum Aktion der  - W&uuml;nsche &auml;ndern 1</h1>

<?php
$db = new mysqli ($dbhost,$dbusername,$dbpassword, $dbdatabase);
?>
<form method="post" action="wunschbearbeiten2.php?wunschidfrompost=$wunschlisteid" name="wunschaendernform">

Ich m&ouml;chte den Wunsch mit der folgenden Nummer ändern:  
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

<br>

<input type="submit" value="Wunsch &auml;ndern"/>
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


