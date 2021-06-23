<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/f3def74b7a.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div> 
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About me</a></li>
                <li><a href="#services" class="menu-btn">Projecten</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Collaborations</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- Home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>              
                <div class="text-2">Bart Hermans</div>
                <div class="text-3">en ik ben een <span class="typing"></span></div>
            </div>
        </div> 
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/Bart.png" alt="#">
                </div>
                <div class="colomn right">
                    <div class="text">Ik ben Bart en ik ben een <span class="typing-2"></span></div>
                    <p>Ik volg nu een opleiding om een Software Developer te worden. Ik leer op de opleiding om website en apps te maken, maar ik leer ook hoe ik goed kan communiceren en samenwerken met mijn team. Je kan ook mijn curriculum vetea bekijken, dit kan je doen om op de knop hieronder te klikken.</p>
                    <a href="downloads/curriculum vitae Bart Hermans.pdf">Download cv</a>
                </div>
            </div>
        </div>
    </section>

    <!-- service section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Projecten</h2>
            <div class="serv-content">
                <?php
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $select = "SELECT titel, tekst, logo  from projecten";
                    $result = mysqli_query($connection,$select);

                    while ($row = mysqli_fetch_array($result)){
                        $titel  = $row['titel'];
                        $tekst  = $row['tekst'];
                        $logo   = $row['logo'];
                        echo '<div class="card">
                                <div class="box">
                                    <i class="' . $logo . '"></i>
                                    <div class="text">' . $titel .'</div>
                                    <p>' . $tekst . '</p>           
                                </div>
                            </div>';
                    }

                ?>

            </div>
        </div>
    </section>

    <!-- Skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mijn skills & ervaring</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, nulla non velit repellat quam iste aut ipsum qui quod adipisci rerum cupiditate incidunt, odit tempora! Accusantium ipsum voluptate reprehenderit eligendi, veritatis nulla ipsa reiciendis earum deleniti perferendis iusto. Blanditiis vero at autem fugiat delectus voluptatem molestiae facilis laborum asperiores magnam? Voluptas iusto mollitia doloremque aliquid consequuntur totam necessitatibus amet ducimus, minima facilis? Maxime facere, quibusdam asperiores quidem repellendus voluptatum harum rerum eum dolor fugit magni exercitationem assumenda? Ex, laborum! Eum!</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <?php
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $select = "SELECT skillNaam, skillPercentage, afkorting  from skills";
                    $result = mysqli_query($connection,$select);

                    while ($row = mysqli_fetch_array($result)){
                        $skillNaam          = $row['skillNaam'];
                        $skillPercentage    = $row['skillPercentage'];
                        $afkorting    = $row['afkorting'];

                        echo '
                            <style>
                            .skills-content .right .' . $afkorting . '::before{
                                width: ' . $skillPercentage . '%;
                              }
                            </style>
                            <div class="bars">
                                <div class="info">
                                    <span>' . $skillNaam . '</span>
                                    <span>' . $skillPercentage . '%</span>
                                </div>
                                <div class="line ' . $afkorting . '"></div>
                            </div>';
                            
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <!-- teams section start  -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Collaborations</h2>
            <div class="carousel owl-carousel">
                <?php
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $select = "SELECT afbeelding, titel, tekst  from collaborations";
                    $result = mysqli_query($connection,$select);

                    while ($row = mysqli_fetch_array($result)){
                        $afbeelding = $row['afbeelding'];
                        $titel = $row['titel'];
                        $tekst = $row['tekst'];
                        echo '<div class="card">
                                <div class="box">
                                    <img src="' . $afbeelding . '" alt="">
                                    <div class="text">' . $titel . '</div>
                                    <p>' . $tekst . '</p>
                                </div>
                            </div>';

                    }

                ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Je kan in contact met me komen via de onderstaande contact gegevens of je kan mij een berichtje sturen.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Bart Hermans</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">
                                    <div class="head">Address</div>
                                    <div class="sub-title">IJmuiden</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">
                                    <div class="head">Email</div>
                                    <div class="sub-title">Bart@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Me</div>
                    <form action="index.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="naam" placeholder="Naam" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="field email">
                                <input type="text" name="telefoonnummer" placeholder="Telefoonnummer">
                            </div>

                        <div class="fields">
                            <div class="field name">
                                <input type="text"name="bedrijfsnaam" placeholder="Bedrijfsnaam">
                            </div>
                            <div class="field email">
                                <input type="text" name="vestigingsplaats" placeholder="Vestigingsplaats">
                            </div>
                        </div>

                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="adres" placeholder="Adres">
                            </div>
                            <div class="field email">
                                <input type="text" name="postcode" placeholder="Postcode">
                            </div>
                        </div>

                            <div class="field">
                                <input type="text" name="onderwerp" placeholder="Onderwerp" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Uitleg" name="uitleg" required></textarea>
                            </div>
                            <div class="button-area">
                                <button name="submit" type="submit">Send Message</button>
                            </div>
                    </form>

                    <?php
                    	$invoerfouten = array();

                        if(isset($_POST['submit'])){
                            $naam               = $_POST['naam'];
                            $email              = $_POST['email'];
                            $telefoonnummer     = $_POST['telefoonnummer'];
                            $bedrijfsnaam       = $_POST['bedrijfsnaam'];
                            $vestigingsplaats   = $_POST['vestigingsplaats'];
                            $adres              = $_POST['adres'];
                            $postcode           = $_POST['postcode'];
                            $onderwerp          = $_POST['onderwerp'];
                            $uitleg             = $_POST['uitleg'];

                            $tijd = date("Y-m-d H:i:s");

                            //controleren
                            if(empty($naam))
                            {
                                array_push($invoerfouten,"Een naam is verplicht");
                            }
                            if(empty($email))
                            {
                                array_push($invoerfouten,"Een email is verplicht");
                            }
                            else
                            {
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    array_push($invoerfouten,"Het email adres is ongeldig");
                                  }
                            }
                            if(empty($onderwerp))
                            {
                                array_push($invoerfouten,"Een onderwerp is verplicht");
                            }
                            if(empty($uitleg))
                            {
                                array_push($invoerfouten,"Een uitleg is verplicht");
                            }
                            if(!ctype_alpha($vestigingsplaats))
                            {
                                array_push($invoerfouten,"Het vestigingsplaats is ongeldig");
                            }

                            $masker = "/^[1-9][0-9]{3}[A-Z]{2}$/";
                            if(preg_match($masker, $postcode) == false)
                            {
                                array_push($invoerfouten,"De postcode is ongeldig");
                            }

                            $masker = "/^[0][6][0-9]{8}$/";
                            if(preg_match($masker, $telefoonnummer) == false)
                            {
                                array_push($invoerfouten,"Het telefoonnummer is ongeldig");
                            }


                            if (count($invoerfouten) == 0){
                                $connection = mysqli_connect("localhost","root","","portfolio");	
                                $sql = "insert into berichten(naam,email,telefoonnummer,bedrijfsnaam,vestigingsplaats,adres,postcode,onderwerp,uitleg,tijd) values 
                                                ('$naam','$email','$telefoonnummer','$bedrijfsnaam','$vestigingsplaats','$adres','$postcode','$onderwerp','$uitleg','$tijd')";
                                mysqli_query($connection, $sql);
                                
                            }
                            else{
                                foreach ($invoerfouten as $invoerfout){
                                    echo "<div style=color:red>" . $invoerfout  ."</div>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start  -->
    <footer>
        <span>Created By <a href="#">Bart Hermans </a> | <span class="far fa-copyright"></span>2021 all rights reserved</span>
    </footer>
    

    <script src="script.js"></script>
</body>
</html>