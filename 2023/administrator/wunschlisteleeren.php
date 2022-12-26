<?php include ("header.php");?>
<?php include ("db.php");?>
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
<p style="float: right;"><a href="/kuvb/index.php"/>zur Wunschuebersicht</a>
<h1>Wunschbaum Aktion der  - Liste leeren</h1>

<?php

// post method wunsch eintragen:
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


echo ("Wunschliste wurde komplett geleert");
 $sqlu = "TRUNCATE wunschliste";
 
 
 
$ergu = $db->query($sqlu);


// Erfolgsmeldung:
echo ("
<div class = \"alert alert-success\" style=\"text-align: center;\">
         <p>Wunschliste geleert...</p>
      </div>
");


}




?>
<form method="post" action="wunschlisteleeren.php" name="wuenscheerfuellenform"/>
<p>Dies wird alle Wuensche aus der Liste leeren....


<input type="submit" value="gesamte Liste leeren und löschen zum neu eintragen"/><br>

</form>



</div>
</div>

</div> <!-- div contenttext -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>


