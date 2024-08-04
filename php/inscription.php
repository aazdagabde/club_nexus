<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="../css/style.css">


    <!--===============================================================================================-->	
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div >
    <header>
        <h1>Club Nexus: Gestion des Clubs Scolaires</h1>
        <button class="menu-toggle" aria-label="Toggle Menu" onclick="toggleMenu()">☰</button>
        <nav>
            <ul class="menu" id="menu">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about-me">À propos de moi</a></li>
                <li class="dropdown">
                    <a href="#technologies">Technologies utilisées</a>
                    <ul class="dropdown-content">
                        <li><a href="#html">HTML</a></li>
                        <li><a href="#css">CSS</a></li>
                        <li><a href="#js">JavaScript</a></li>
                        <li><a href="#php">PHP</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header></div>
    <div >
        

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                        <span class="login100-form-title">
                            Inscription
                        </span>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name=" nom" placeholder="NOM">
                            <span class="focus-input100"></span>
                        </div>


                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name="prenom" placeholder="Prenom">
                            <span class="focus-input100"></span>
                        </div>


                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                           date de Naissance 
                           <input class="input100" type="date" name="Dateniss" placeholder="Date Naiss">
                            <span class="focus-input100"></span>
                            
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="Text" name=" YourEmail" placeholder="Code Massar/CNE">
                            <span class="focus-input100"></span>
                        </div>



                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name=" YourEmail" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name="filier" placeholder="filier">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input10" type="checkbox" name="pass" placeholder="">
                            <label for="input10"> je respecte les <a href="#">condition d utilisation</a></label>
                            
                        </div>
                    <br><br>
    
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                               inscription
                            </button>
                        </div>
    
                        <div class="flex-col-c p-t-170 p-b-40">
                            <span class="txt1 p-b-9">
                                Do you have an account?
                            </span>
    
                            <a href="login.php" class="txt3">
                                loging now
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="../vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="../vendor/bootstrap/js/popper.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="../vendor/daterangepicker/moment.min.js"></script>
        <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="../vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="../js/main.js"></script>

</body>
<footer>
    <p>&copy; 2024 Gestion des Clubs Scolaires. Tous droits réservés.</p>
</footer>
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('show');
    }
</script>
</html>