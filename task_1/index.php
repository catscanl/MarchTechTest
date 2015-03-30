<?php
// File with php functions
include "functions.php";

// This is the locale the broswer sends
$userLocale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
$pageLang = getLangage($userLocale);
include "lang/" . $pageLang . ".php";
?>


<!DOCTYPE html>
<html lang="<?php echo $pageLang; ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SCEE developer test - Cathy Scanlon</title>

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 block1">
                </div>
                <div class="col-xs-8 block2"> 
                    <div class="col-sm-6">
                        <img src="images/section_image.png">
                    </div>
                    <div class="col-sm-6">
                        <div class="main_title">
                            <p><?php echo $lang['main_title'] ?></p>
                        </div>
                        <div class="section_title">
                            <p><?php echo $lang['section_title'] ?></p>
                        </div>
                        <div class="copy">
                            <p><?php echo $lang['section_para1'] ?></p>
                        </div>
                        <div class="copy">
                            <p><?php echo $lang['section_para2'] ?></p>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-2 block3">
                </div>
            </div>
        </div>
    </div>

  </body>
</html>
