<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-18
 * Time: 18:48
 */ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakta Oss - Mariatorget Städ</title>
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link href="Content/site.css" rel="stylesheet"/>

    <script src="Scripts/modernizr-2.6.2.js"></script>
    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/jquery.validate.min.js"></script>
    <script src="Scripts/jquery.validate.unobtrusive.min.js"></script>



</head>
<body>
<div id="wrap">
    <div class="container body-content">

        <header class="header">
            <div class=" container">

                <div class="col-md-6 col-lg-6 col-sm-12"><img  src="Images/Mariatorget_Logo.png" class="LogoImage" /></div>

                <div class="col-md-6 col-lg-6 col-sm-12 ButtonGroupCustom">
                    <a class="btn btn-primary btn-lg col-xs-12 col-sm-12 col-md-5" href="index.php">Hem</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Contact.php">Offert</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Service.php">Tjänster</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Referenses.html">Referenser</a>
                </div>
            </div>
        </header>





       <div id="content" style="margin-top:20px;">
            <h1>Tjänster</h1>
           <h2>Detta är de tjänster som vi har att erbjuda.</h2>
            <br />
            <form action="SendContact.php"  method="POST">
                <div id="serviceList">
                    <div class="col-sm-6 col-md-6">
                        <div id="serviceChoice" class="form-group">
                            <div>
                                <h2>
                                    <label for="Cleaning" style="font-size: 20px; width: 100px; margin: 10px;">St&#228;dning</label>
                                  
                                </h2>
                            </div>
                            <ul class="service">
                                <li>
                                    <p>Butikstädning</p>
                                </li>
                                <li>
                                    <p>Byggstädning</p>
                                </li>
                                <li>
                                    <p>Flyttstädning</p>
                                </li>
                                <li>
                                    <p>Industristädning</p>
                                </li>
                                <li>
                                    <p>Kontorstädning</p>
                                </li>
                                <li>
                                    <p>Skola och Förskola städning</p>
                                </li>
                                <li>
                                    <p>Trappstädning</p>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">

                        <div id="serviceChoice" class="form-group">
                            <div>
                                <h2>
                                    <label for="Maintenance" style="font-size: 20px; width: 100px; margin: 10px;">Underh&#229;ll</label>
                                  
                                </h2>
                            </div>
                            <ul class="service">
                                <li>
                                    <p>Golvvård</p>
                                </li>
                                <li>
                                    <p>Matt-tvätt</p>
                                </li>
                                <li>
                                    <p>Fönsterputsning</p>
                                </li>
                                <li>
                                    <p>Storstädning</p>
                                </li>
                                <li>
                                    <p>Textiltvätt</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
        <br />

        <footer class="footer" style="font-size:16px;">
            Du kan ringa oss på detta nummer: <a>042-453 67 97</a><br />
            Du kan också hitta oss på  <a href="https://www.facebook.com/Mariatorget-St%C3%A4d-264586960552292/?fref=ts">facebook</a><br />
            info at <a>info@mariatorgetstad.se</a><br />
            Copyright &copy; 2016 <a href="http://www.hbgdatorservice.se/">Helsingborgs Datorservice AB</a><br />
        </footer>
    </div>
</div>

<script src="Scripts/jquery-1.10.2.js"></script>

<script src="Scripts/bootstrap.js"></script>
<script src="Scripts/respond.js"></script>



<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Chrome","requestId":"83ad2e5ab3f44d7797db8868e55c6ca4"}
</script>
<script type="text/javascript" src="http://localhost:49486/f3a08689087e428fb3d172cb2e1464ec/browserLink" async="async"></script>
<!-- End Browser Link -->

</body>
</html>
