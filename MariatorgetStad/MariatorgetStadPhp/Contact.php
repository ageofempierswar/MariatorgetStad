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
                    <a class="btn btn-primary btn-lg col-xs-12 col-sm-12 col-md-5" href="/">Hem</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Contact.php">Offert</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Service.php">Tjänster</a>
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Referenses.html">Referenser</a>
                </div>
            </div>
        </header>





        <div id="content" style="height:1000px;margin-top:20px;">
            <h1>Offert</h1>
            <br />
            <form action="SendContact.php" method="POST">

                <div class="form-horizontal">

                    <label for="HumanName" class="Contact-label">Ditt namn:</label>
                    <div>
                        <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="HumanName" name="HumanNames" rows="8" type="text" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="HumanName" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-horizontal">

                    <label for="Phone" class="Contact-label">Telefon/Mobil:</label>
                    <div>
                        <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Phone" name="phone" rows="8" type="text" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="phone" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-horizontal">

                    <label for="Foretage" class="Contact-label">Företagsnamn/Privat:</label>
                    <div>
                        <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Foretage" name="foretage" rows="8" type="text" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="foretage" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div id="contact">
                    <div class="form-horizontal">

                        <label for="EmailAdress" class="Contact-label">Din Email</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-email="Fel Adress, prova igen (example@gmail.com)" data-val-required="Email får inte lov att vara tom" id="EmailAdress" name="EmailAdress" rows="8" type="email" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="EmailAdress" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-horizontal">

                        <label for="Foretage" class="Contact-label">Ort:</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Foretage" name="foretage" rows="8" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="foretage" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-horizontal">

                        <label for="Foretage" class="Contact-label">Ange städintervall / Engångs:</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Foretage" name="foretage" rows="8" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="foretage" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-horizontal">

                        <label for="Foretage" class="Contact-label">Städyta (kvm):</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Foretage" name="foretage" rows="8" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="foretage" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div>
                        
                        <label for="Flyttstädning" style="font-size: 20px; width: 115px; margin: 10px;">Flyttstädning</label>
                        <input data-val="true" data-val-required="The Flyttstädning field is required." htmlattributes="{ class = form-control }" id="Flyttstädning" name="Flyttstädning" type="checkbox" value="true" />
                        <input name="Flyttstädning" type="hidden" value="false" />



                        <label for="Kontorsstädning" style="font-size: 20px;  width: 155px; margin: 10px;">Kontorsstädning</label>
                        <input data-val="true" data-val-required="The Kontorsstädning field is required." htmlattributes="{ class = form-control }" id="Kontorsstädning" name="Kontorsstädning" type="checkbox" value="true" />
                        <input name="Kontorsstädning" type="hidden" value="false" />


                        <label for="Trappstädning" style="font-size: 20px;  width: 130px; margin: 10px;">Trappstädning</label>
                        <input data-val="true" data-val-required="The Trappstädning field is required." htmlattributes="{ class = form-control }" id="Trappstädning" name="Trappstädning" type="checkbox" value="true" />
                        <input name="Trappstädning" type="hidden" value="false" />

                        <label for="Fönsterputsning" style="font-size: 20px; width: 150px; margin: 10px;">Fönsterputsning</label>
                        <input data-val="true" data-val-required="The Fönsterputsning field is required." htmlattributes="{ class = form-control }" id="Fönsterputsning" name="Fönsterputsning" type="checkbox" value="true" />
                        <input name="Fönsterputsning" type="hidden" value="false" />

                        <br />

                        <label for="Byggstädning" style="font-size: 20px;  width: 130px; margin: 10px;">Byggstädning</label>
                        <input data-val="true" data-val-required="The Byggstädning field is required." htmlattributes="{ class = form-control }" id="Byggstädning" name="Byggstädning" type="checkbox" value="true" />
                        <input name="Byggstädning" type="hidden" value="false" />


                        <label for="Polishbehandling" style="font-size: 20px;  width: 160px; margin: 10px;">Polishbehandling</label>
                        <input data-val="true" data-val-required="The Polishbehandling field is required." htmlattributes="{ class = form-control }" id="Polishbehandling" name="Polishbehandling" type="checkbox" value="true" />
                        <input name="Polishbehandling" type="hidden" value="false" />

                        <label for="Övrigt" style="font-size: 20px;  width: 60px; margin: 10px;">Övrigt</label>
                        <input data-val="true" data-val-required="The Städning field is required." htmlattributes="{ class = form-control }" id="Övrigt" name="Övrigt" type="checkbox" value="true" />
                        <input name="Övrigt" type="hidden" value="false" />

                    </div>


                    <div class="form-horizontal">


                        <label for="Message" class="Contact-label">Övrigt</label>


                        <div>
                            <textarea class="form-control text-box multi-line" data-val="true" data-val-maxlength="The field Message must be a string or array type with a maximum length of &#39;1000&#39;." data-val-maxlength-max="1000" id="Message" name="Message" rows="8"></textarea>
                            <span class="field-validation-valid text-danger TextAreaLocker" data-valmsg-for="Message" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>

                <div class="submit">
                    <div id="submit" class="form-group">
                        <div>
                            <input type="submit" class="btn btn-default" name="submit" value="Skicka" />
                        </div>
                    </div>
                </div>
            </form>
            <br class="clear" />

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
