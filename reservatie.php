<!DOCTYPE html>
<html>
<head>
    <title>De Gouden Kater</title>
    <link rel="stylesheet" href="style.php" media="screen">  
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
</head>
<body>
    
<nav>
        <table class="nav">
            <tr>
                <td><a href="index.html">Hom<span>e</span></a> /</td>
                <td><a href="menu.html">M<span>e</span>nu</a> /</td>
                <td><a href="restaurant.html">R<span>e</span>staurant</a> /</td>
                <td><a href="contact.html">Cont<span>a</span>ct</a> /</td>
                <td><a href="reserveren.html">Res<span>e</span>rver<span>e</span>n</a></td>
            </tr>        
        </table>   
    </nav>
    
    <div class="d1"></div>
    <div class="d2">U<span>w</span> Res<span>e</span>rv<span>a</span>t<span>ie</span></div>
    <div class="d3"></div>












<?php
if(isset($_POST["submit"])) {
    
if(empty($_POST["fname"])) {    
    echo "First name is required<br/>";    
}
    
if(empty($_POST["lname"])) {    
    echo "Last name is required<br/>";
}
    
if(empty($_POST["time"])) {    
    echo "Time is required<br/>";
}
    
if(empty($_POST["date"])) {    
    echo "Date is required<br/>";
}
}

$voornaam = $_POST["fname"];
$achternaam = $_POST["lname"];
$tijd = $_POST["time"];
$datum = $_POST["date"];
?>

<div class="confbox">
    <div class="htmltxt">
    
Beste, <?php echo "<span class='restxt'>".$voornaam." ".$achternaam."</span>";?> uw reservatie voor <?php echo "<span class='restxt'>".$datum."</span>";?> om <?php echo "<span class='restxt'>".$tijd."</span>";?> is bevestigd.  
    
    </div>
</div>
    
    <div class="terug"><a href=index.html>Klik hier om terug te gaan naar Home</a></div>

<footer class="footer">Openingstijden / Adres / Privacy Policy / Sitemap</footer>
    
    </body>
</html>