<?php include ("header.php");?>
<?php include ("db.php");?>
<body>
<link href="/kuvb/css/index.css" type="text/css" rel="stylesheet"/>
<?php /*include ("header.php"); */?>
<body>


<div class="container content">

<div class="row">
<div class="col-md-12">

<div class="christbaumkugelimage">
<img src="/kuvb/img/christbaumkugel.jpg"/>
</div>
<p style="float: right;"><a href="/kuvb/index.php"/>zur Wunschuebersicht</a>
<h3>Wunschbaum Aktion der KUVB ADMIN BEREICH</h3>


<a href="wunschlisteleeren.php">Link um die Wunschliste nach einem Jahr komplett zu leeren (auf folgender Seite zu best&auml;tigen)</a>
<br><br>
<h4>Anleitung zum Konvertieren der Excel Liste des Heims: </h4> <br>
<p>zuerst mit Excel oeffnen, alle unnoetigen Spalten rausloeschen. <br>
weitere Spalten einfuegen je nach Tabelle <br>
dann in CSV exportieren <br>
https://www.convertcsv.com/csv-to-sql.htm
dann importieren in die DB <br>
dann oben manuell ein paar Spalten bearbeiten so dass es passt
<br>
unten bei Tabel generator wunschliste als Table Name <br>
Quotes MySQL rein<br>
insert multiple rows at once rein und dann nur oben noch die Spaltennamen eintragen, dann gehts. <br>
das heisst oben die wunsch spalten noch eintragen. <br>
dann mit suhcen und ersetzen die anführungsstirche in gedit weg machen <br>
dann selbst noch ein paar falsche Spalten wegbauen <br>
am besten importieren und alle die mit gruen markiert sind, sind in der falschen Spalte, das muss geaendert werden <br>
</p>
<br><br>
Die Vorlage f&uuml;r die Wunschliste als vorgefertigte Excel Datei, die sich einfach in das System einlesen l&auml;sst (fuer 2023)
findet man unter: <br><a href="/kuvb/administrator/wunschliste_vorlage.xls">
/kuvb/administrator/wunschliste_vorlage.xls </a> 
oder unter: <br>
<br> <a href="/kuvb/administrator/wunschliste.csv">Wunschlistea als CSV</a>

<br><br>
Ende

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


