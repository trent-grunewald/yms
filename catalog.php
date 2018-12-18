<!DOCTYPE html>
<?php 

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

<div class="section page">
  <h1><?php echo $pageTitle ?></h1>

  <ul>
  <?php
  foreach($catalog as $media) {
    echo "<li>" . $media . "</li>";
  }
  ?>
  </ul>
</div>
  

<?php include("footer.php"); ?>