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
                    <a class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-5" href="Service.php">Service</a>
                </div>
            </div>
        </header>






                <div id="contact">
                    <div class="form-horizontal">

                        <label for="EmailAdress" class="Contact-label">Din Email</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-email="Fel Adress, prova igen (example@gmail.com)" data-val-required="Email får inte lov att vara tom" id="EmailAdress" name="EmailAdress" rows="8" type="email" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="EmailAdress" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-horizontal">

                        <label for="Subject" class="Contact-label">&#196;mne</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="Ämne får inte lov att vara tom" id="Subject" name="Subject" rows="8" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Subject" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-horizontal">


                        <label for="Message" class="Contact-label">Meddelande</label>

                        <label for="Message" class="Contact-label">Message</label>

                        <div>
                            <textarea class="form-control text-box multi-line" data-val="true" data-val-maxlength="The field Message must be a string or array type with a maximum length of &#39;1000&#39;." data-val-maxlength-max="1000" id="Message" name="Message" rows="8"></textarea>
                            <span class="field-validation-valid text-danger TextAreaLocker" data-valmsg-for="Message" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div id="submit" class="form-group">
                    <div>
                        <input type="submit" class="btn btn-default" name="submit" value="Skicka" />
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
