<?php

$petsJson = file_get_contents('./resources/pets.json');
$pets = json_decode($petsJson, true);

$pet1 = array(
    'name' => 'Dior',
    'age' => '3 years',
    'breed' => 'Dalmatian',
    'weight' => 9,
    'bio' => 'Loves to sleep',
    'filename' => 'pet1.png'
);

$pet2 = array(
    'name' => 'Rex',
    'age' => '3 years',
    'breed' => 'Cockapoo',
    'weight' => 9,
    'bio' => 'Loves to sleep',
    'filename' => 'pet2.png'
);

$pet3 = array(
    'name' => 'Cookie',
    'age' => '3 years',
    'breed' => 'Pug',
    'weight' => 9,
    'bio' => 'Loves to sleep',
    'filename' => 'pet3.png'
);

$dexter = array(
    'name' => 'Dexter',
    'age' => '3 years',
    'breed' => 'Pug',
    'weight' => 9,
    'bio' => 'Loves to sleep',
    'filename' => 'pet3.png'
);


$pets = array($pet1, $pet2, $pet3, $dexter);
    var_dump($pets);die();

$message = 'All the love, none of the crap!';
$pupCount = count($pets);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupNMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupNMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <h1><?php echo $message ?> </h1>
            <h2>We have <?php echo $pupCount ?> pups friends! </h2>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the
                hero unit and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>


        <div class="container">
            <div class="row">
                <?php foreach ($pets as $pet) { ?>
                 <div class="col-md-4 pet-list-item">
                    <h2><?php echo $pet['name']; ?></h2>

                    <img src="/images/<?php echo $pet['filename']; ?>" class="img-rounded"/>

                    <blockquote class="pet_info">
                        <span class="label label-info"><?php echo $pet['breed']; ?> </span>
                        <br>
                        <?php echo $pet['age']; ?>
                        <?php echo $pet['weight']; ?> lbs
                    </blockquote>

                    <p> 
                    <?php echo $pet['bio']; ?> 
                    </p>

                    </div>
                    <?php } ?>
            </div>
        <hr>




                <footer>
            <p>&copy; AirPupNMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
