<?php include ("header.php");?>
<?php include ("db.php");?>
<?php include ("navbar.php");?>
<body>
<link href="/XXX/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>

<div class="container content" style="margin-left: 3%;">
<br>
<div class="row">
<div class="col-md-12">
<img src="/XX/img/XXXlogo.jpg"/>
<br>
<div class="christbaumkugelimage">
<img src="/XXX/img/christbaumkugel.jpg"/>
</div>
</div>
</div>

<h1 style="font-size: 48px;">Wunschbaum Aktion der XXX</h1>
<br><br>
Diese Seite generiert aus der Wunschliste Beschriftungs-Schilder f&uuml;r die P&auml;ckchen der Kinder.<br><br>




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

echo ("<p style=\"border: 2px black solid; background-color: #ffffff; margin-bottom: 30px; padding-top: 10px; padding-bottom: 10px; text-align: center;\">");
echo (

"	Frohe Weihnachten<br>
	liebe/r $kind ($gruppe) <br>
 	w&uuml;nscht Dir $wunscherfueller <br>
 	"
 	
);
echo ("</p>");

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


