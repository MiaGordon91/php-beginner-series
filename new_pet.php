<?php
    require 'layout/header.php';
    require './lib/functions.php';
?>

<?php
//    var_dump($_POST);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         if (isset($_POST['name'])) {
             $name = $_POST['name'];
         } else {
             $name = '';
         }

         if (isset($_POST['breed'])) {
             $breed = $_POST['breed'];
         } else {
             $breed = '';
         }

         if (isset($_POST['age'])) {
             $age = $_POST['age'];
         } else {
             $age = '';
         }

         if (isset($_POST['weight'])) {
             $weight = $_POST['weight'];
         } else {
             $weight = '';
         }

         if (isset($_POST['bio'])) {
             $bio = $_POST['bio'];
         } else {
             $bio = '';
         }

     $pets = get_pets();
     $newPet = array(
         "name" => $name,
        "breed" => $breed,
        "age" => $age,
        "weight" => $weight,
        "bio" => $bio,
        "filename" => "",
     );

     $pets[] = $newPet;
     $json = json_encode($pets, JSON_PRETTY_PRINT);
     file_put_contents( './data/pets.json', $json);

//     var_dump($name); var_dump($breed); var_dump($age);
//     var_dump($weight); var_dump($bio);die;
 }
?>

<div class ="container">
    <div class="row">

        <h1>Post your pet!</h1>

        <form action="/new_pet.php" method="POST">
            <div class="form-group">
                <label for="pet-name" class="control-label"> Pet name: </label>
                <input type="text" name="name" id="pet-name" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="pet-breed" class="control-label"> Breed: </label>
                <input type="text" name="breed" id="pet-breed" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="pet-age" class="control-label"> Age: </label>
                <input type="text" name="age" id="pet-age" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="pet-weight" class="control-label"> Weight: </label>
                 <input type="text" name="weight" id="pet-weight" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="pet-bio" class="control-label"> About Me: </label>
                <input type="text" name="bio" id="pet-bio" class="form-control"><br>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-heart"></span>
                Add Pet!
            </button>
        </form>
        </div>
    </div>

<?php require 'layout/footer.php'; ?>