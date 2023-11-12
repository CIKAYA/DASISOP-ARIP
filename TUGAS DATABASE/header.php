<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Arkana Riang Kail Indah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

    </head>
    <body >
        <?php
        include './class/joran.php';
        $joran_obj = new Joran();
        ?>  

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="./assets/images/ce.jpg" alt="CE" class="tlogo"> </li> <!--  -->
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        
        <center>

            <img src="data:image/png;base64,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" alt="">
        </center>