<!DOCTYPE html>
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
