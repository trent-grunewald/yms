<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

<?php 
include("inc/library.php");
include("inc/functions.php");

$pageTitle = "Your Media Shelf";
$section = null;

include("inc/header.php"); 

?>
      <div class="section catalog random">
  
        <div class="wrapper">
  
          <h2>May we suggest something?</h2>
  
          <ul class="items">

            <?php
           // Returns 4 random items from the Catalog array

            $randomize = array_rand($catalog,4);

            foreach($randomize as $id) {
              echo get_item_html($id,$catalog[$id]);
            }
            ?>
          </ul>
  
        </div>
  
      </div>
  
    </div>
<?php include("inc/footer.php"); ?>

</body>
</html>