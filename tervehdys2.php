
<html><head><title>Otsikko</title></head>
<body>
<?php
if( isset($_GET['nimi']) ) {
    if( $_GET['nimi'] == "sirpa" ){
        echo "<img width='100%' src='https://upload.wikimedia.org/wikipedia/commons/8/85/Sky-3.jpg'>";
    }
    else{
        echo "<h1>Moi ";
        echo $_GET['nimi'];
        echo "<br/>";
        echo strtolower($_GET['nimi']);
        echo "</h1>";
    }
}
else {
echo "<p>Moi muukalainen</p>";
}
?>
</body>
</html>
