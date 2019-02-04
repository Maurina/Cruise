<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cabot Cruises: <?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link href="slick/slick.css" rel="stylesheet">
        <link href="slick/slick-theme.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
<div class="headerLimited">
       <header>
          
            <figure class="logo">
                <img src="images/logo1x.png" alt="logo"
                    srcset="images/logo1x.png 1x, images/logo2x.png 2x, images/logo3x.png 3x">
            </figure>
        <a class="number" href="tel:+1-800-555-1234">(800) 555-1234</a>
       </header>
</div><!--end headerLimited-->       

    <div class="navBar">
        <nav class="clearfix">
            <button id="hamburgerBtn"></button>
                <ul id="primaryNav" class="closed">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="cruise.php">Cruises</a></li>
                    <li class="parent"><a href="#">Agents</a>
                        <ul>
                            <li><a href="emmit.php">Emmit Smith</a></li>
                            <li><a href="anne.php">Anne Bennet</a></li>
                        </ul>
                    </li>
                    <li><a href="booking.php">Booking</a></li>
                </ul>
        
            <div class="searchBox">
                <form action="/action_page.php" class="search">
                    <input type="search" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!--end searchBox-->
        </nav>
    </div><!--end navBar-->

<main>