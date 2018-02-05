<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helpdesk Bos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage"><img src="images/hd_bos.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">DE OPDRACHT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#formulier">PROBLEEMFORMULIER</a></li>
                <li><a href="#probleemtabel">PROBLEEMTABEL</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Helpdesk Bos</h1>
    <p>Dé oplossing voor uw computer problemen</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
<!-- php coding (begin) -->
<?php
$servername = "localhost";
$username = "tom";
$password = "admin1234";
$dbname = "Helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 

echo "<link rel='stylesheet' type='text/css' href='style.css' />";?>

            <h2>De opdracht</h2><br>
            <h4>De opdracht luidt dat er een webpagina geproduceert wordt waarbij de gebruiker problemen in kan voeren van een bedrijf en daarop weer een
            oplossing voor kan verzinnen. Dit wordt zo gepland dat wij voor elk een lijst hebben voor elk probleem met een bijpassende oplossing voor de klant.</h4>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-info-sign logo"></span>
        </div>
    </div>
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>Wat bieden wij aan?</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-question-sign logo-small"></span>
            <h4>Problemen uitzoeken</h4>
            <p>Voor zowel elk probleem wat u heeft hebben wij een oplossing. Enig uitzoekwerk zal er zeker bij horen.</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-ok-circle logo-small"></span>
            <h4>Oplossing vinden</h4>
            <p>Voor het vinden van oplossingen gaan wij zelf als bedrijf kijken op veschillende manieren die u maar kan bedenken en verder.</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-comment logo-small"></span>
            <h4>Snelle response</h4>
            <p>Wij gaan uiteraard grondig en spoedig te werk om u zo snel mogelijk te helpen met uw problemen.</p>
        </div>
    </div>
</div>

<!-- Container (Form Section) -->
<div id="formulier" class="container-fluid bg-grey">
    <h2 class="text-center">Probleemformulier</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Graag de verplichte velden invullen, dan wordt er zo spoedig mogelijk contact met u opgenomen.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Groningen, NL </p>
            <p><span class="glyphicon glyphicon-phone"></span> (050) 720 0225 </p>
            <p><span class="glyphicon glyphicon-envelope"></span> ronald.bos@key2publish.com </p>
        </div>
        <form action="action_page.php" method="post">
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="u_name" placeholder="Naam" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="company" name="u_company" placeholder="Bedrijfsnaam" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="u_email" placeholder="E-mailadres" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="phone" name="u_telephone" placeholder="Telefoonnummer" type="text" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="u_problem" placeholder="Probleemomschijving" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
      </form>
    </div>
</div>

<div id="probleemtabel" class="container">
  <h2>Problementabel</h2>
  <p>Lijst met de problemen van bedrijven</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Klant</th>
        <th>Problemen</th>
        <th>Oplossingen</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>&copy; Tom Roelfsema | Key2Publish</p>
</footer>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>