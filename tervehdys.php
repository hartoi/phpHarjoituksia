<html><head><title>Otsikko</title></head>
<body>
<?php
if( isset($_GET['nimi']) ) {
echo "<h1>Moi ";
echo $_GET['nimi'];
echo "</h1>";
echo var_dump($_GET['nimi']);
}
else {
echo "<p>Moi muukalainen</p>";
}
?>
</body>
</html>