<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'maildb';

$conn = mysqli_connect($host, $user, $pass, $db);

$mailMsg = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $navn = $_POST['navn'];
    $email = $_POST['email'];
    $melding= $_POST['melding'];

    if(!empty($navn) && !empty($email) && !empty($melding)) {
        $conn->query("INSERT INTO mails (navn, epost, melding) VALUES('$navn', '$email','$melding')");

        $mailMsg = 'Melding sendt!';
    } else {
        $mailMsg = '* Du må fylle inn alle feltene';
    }

}





?>

<!DOCTYPE html>
<html lang="no" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hjem - Nordtech</title>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="100">
    
<nav class="navbar">
    <section class="navsection">
        <div class="logo">
            <a href="#home">Nordtech</a>
        </div>
        <div onclick="hamburger();" class="hamburger">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="headers nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Om oss</a></li>
            <li><a href="#gallery">Galleri</a></li>
            <li><a href="#contact">Kontakt oss</a></li>
        </div>
        <div class="hamburgermeny nav" id="ham">
            <li><a href="#home" onclick="hamburger();">Home</a></li>
            <li><a href="#about" onclick="hamburger();">Om oss</a></li>
            <li><a href="#gallery" onclick="hamburger();">Galleri</a></li>
            <li><a href="#contact" onclick="hamburger();">Kontakt oss</a></li>
        </div>
    </section> 
</nav>

<div class="hero">
    <img src="img/bakgrunn/kafe.jpg" alt="Hero image">
    <section>
        <h1>Nordtech</h1>
        <p>Fremtidens innovasjon starter her</p>
        <a href="#about">Lær mer</a>
    </section>
</div>

<div class="about" id="about">
    <section>
        <div class="grid-item left">
            <img src="img/oss/oss.png" alt="Bilde av en hånd som holder en penn">
        </div>
        <div class="grid-item right">
            <div class="us">
                <h1>Om oss</h1>
                <div class="line"></div>
                <p>Nordtech er fremtiden. Vi jobber kontinuerlig til å løfte teknologi på det høyeste nivå.</p>
                <h2>Hvorfor velge oss?</h2>
                <div class="reason">
                    <p><i class="fa fa-check" aria-hidden="true"></i> Nye teknologier</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Moderne utstyr</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Topp kundeservice</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Bred kunnskap</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Brukervennlige</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Høyt Kvalitet</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Global</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Flere valg</p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="gallery" id="gallery">
    <section>
        <h1>Galleri</h1>
        <div class="line"></div>
        <div class="pics">
            <img src="img/galleri/pc3.jpg" alt="">
            <img src="img/galleri/pc5.jpg" alt="">
            <img src="img/galleri/tablett1.jpg" alt="">
            <img src="img/galleri/pc7.jpg" alt="">
            <img src="img/galleri/tablett3.jpg" alt="">
            <img src="img/galleri/mobil1.jpg" alt="">
            <img src="img/galleri/skjerm1.jpg" alt="">
            <img src="img/galleri/skjerm3.jpg" alt="">
            <img src="img/galleri/pc1.jpg" alt="">
        </div>
    </section>
</div>

<div class="contact" id="contact">
    <section>

        <div class="contactinfo-grid">
            <div class="grid-item left">
                <h1>Kontakt oss</h1>
                <div class="line"></div>
                <p>Vennligst fyll inn skjema</p>
                <form action="index.php#contact" method="post">
                    <div class="formgrid">
                        <input class="name" type="text" placeholder="Navn" name="navn">
                        <input class="email" type="email" placeholder="E-post" name="email">
                        <textarea class="msg" type="text" placeholder="Melding" name="melding"></textarea>
                    </div>
                    <p style="color:white;"><?php print($mailMsg) ?> </p>
                    
                    <input class="button" type="submit" value="Send melding">
                </form>
            </div>
            <div class="grid-item right">
                <div class="contactinfo">
                    <h2>Kontakt informasjon</h2>
                    <div class="contacts">
                        <div class="item">
                            <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Adresse</h3>
                            <p>Hadselveien 35<br>8450 Stokmarknes</p>
                        </div>
                        <div class="item">
                            <h3><i class="fa fa-phone" aria-hidden="true"></i> Telefon</h3>
                            <p>+47 11223344</p>
                        </div>
                        <div class="item">
                            <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> Epost</h3>
                            <p>service@nordtech.no</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="line"></div>
        
        <div class="contacticons">
            <a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="https://youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>

    </section>
</div>

<footer>
    <p>Nordtech AS 2022</p>
</footer>

</body>
</html>

