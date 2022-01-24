<?php

require 'layout/header.php';
require './lib/functions.php';

$pets = get_pets();
$message = 'All the love, none of the crap!';
$pupCount = count($pets);
?>




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
                        <?php
                        if (!array_key_exists('weight', $pet) || $pet['weight'] == "") {
                            echo 'Unknown';
                        } else
                            echo $pet['weight']; ?> lbs,

                        <?php echo $pet['age']; ?>

                    </blockquote>
                    <p> 
                        <?php echo $pet['bio']; ?>
                    </p>
                 </div>
                    <?php } ?>
            </div>
        <hr>

<?php
   require 'layout/footer.php';

