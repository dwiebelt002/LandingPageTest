<?php

session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page Test - Professional Painters</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4 style="color:blue"> &nbsp; PROFESSIONAL PAINTERS</h4>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <h4 style="color:red">CALL &nbsp; </h4>
                    </li>
                    <li>
                        <h4 style="color:blue">555-123-4567</h4>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Header -->
    <div class="intro-header">
        <div class="container">

        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-12">
                        <h2><span class="redText">PROFESSIONAL </span><span class="blueText">PAINTERS</span></h2>
                        <h3 style="color:blue">OF LARGO, CLEARWATER, TAMPA</h3>
                        <hr class="intro-divider">
                        <h4 style="color:blue">We Care About More Than Paint!</h4>
                        <br>
                </div>
            </div>

            <div class="adbanner">
                <div class="container">
                    <h5>SCHEDULE YOUR FREE ESTIMATE</h5>
                    <h5>TO REDEEM PROMO CODE FOR</h5>
                    <h2>$150 OFF</h2>
                    <h8>ANY JOB OF $3000 OR MORE!</h8>
                    <br>
                </div>
            </div>

            <?php if(!empty($errors)): ?>
            <div class="panel">
                <ul>
                    <li><?php echo implode('</li><li>', $errors) ?></li>
                </ul>
            </div>
        <?php endif; ?>
<br>
                <form class="form-inline" action="mailer.php" method="POST">
                          
                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name"><?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
                          </div>
                </form>
                <br>
                <form class="form-inline" action="mailer.php" method="POST">

                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control" id="email"><?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>
                          </div>
                </form>
                <br>
                <form class="form-inline" action="mailer.php" method="POST">
                          <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="phone" class="form-control" name="phone" id="phone"><?php echo isset ($fields['phone'])? e($fields['phone']):''?>
                          </div>
                  <br><br>       
                          <button type="submit" name="submit" value="submit" method="POST" id="submit" class="btn btn-default"><strong>Save $150</strong></button>
                    
                </form>
<br>
<br>
                <div class="promisebanner">
                <div class="container">
                    <span class="glyphicon glyphicon glyphicon-ok-circle"></span>
                    <h9>Quality</h9>
                    <span class="glyphicon glyphicon glyphicon-ok-circle"></span>
                    <h9>Professional</h9>
                    <span class="glyphicon glyphicon glyphicon-ok-circle"></span>
                    <h9>Flexible</h9>
            </div>
        </div>

    </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <!-- Page Content -->
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-10 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Professional Painters</h2>
                    <h4>Tackeling Residential & Commercial Painting Projects</h4>
                    <br>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <br>
                    <h4>Why Clients Choose to Hire Our Teams</h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Quisque pulvinar diam non ultrices tincidunt.</li>
                        <li>Fusce tempus lorem sed nisl condimentum semper.</li>
                        <li>Quisque luctus lectus et massa iaculis semper.</li>
                    </ul>
                    <br>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
<footer>
    <h4>SCHEDULE YOUR FREE ESTIMATE! CALL 555-123-4567</h4>
</footer>

</body>

</html>

<?php
unset($_SESSION['errors']);

?>