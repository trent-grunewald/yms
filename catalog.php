<!DOCTYPE html>
<?php 
include("inc/library.php");
include("inc/functions.php");

//page title and section class defaults;
$pageTitle = "Full Catalog";
$section = null;

//Updates page Title and section class based on filter;
if (isset($_GET["cat"])){
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); 
?>

<div class="section catalog page">
  <h1><?php echo $pageTitle ?></h1>

  <ul class="items">
<!-- Creates media list from the library.php page -->
  <?php
  $categories = array_category($catalog, $section);

  foreach($categories as $id) {
    echo get_item_html($id,$catalog[$id]);
  }
  ?>

  </ul>
</div>
  

<?php include("footer.php"); ?>