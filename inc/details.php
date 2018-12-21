<?php 
include("inc/library.php");
include("inc/functions.php");

//Updates page Title and section class based on filter;
if (isset($_GET["id"])){
  $id = $_GET["id"];
  if(isset($catalog[$id])){
    $item = $catalog[$id];
  }
}

if (!isset($item)){
  header("location:catalog.php");
  exit;
}

//page title and section class defaults;
$pageTitle = $item["title"];
$section = null;

include("inc/header.php"); 
?>

<div class="section page">
  <div class="wrapper">
  <div class="breadcrumbs">
    <a href="catalog.php">All Shelfs</a>
      &gt; <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?>">
      <?php echo $item["category"]; ?></a>
      &gt; <?php echo $item["title"]; ?>
  </div>
  <div class="media-picture">
    <span>
      <img src="<?php echo $item["cover"]; ?>" alt="<?php echo $item["title"]; ?>">
    </span>
    </div>
    
    <div class="media-details">
      <h1><?php echo $item["title"]; ?></h1>
      <table>
        <tr>
          <th>Category</th>
          <td><?php echo $item["category"]; ?></td>
        </tr>
        <tr>
          <th>Genre</th>
          <td><?php echo implode(", ",$item["genre"]); ?></td>
        </tr>
        <tr>
          <th>Format</th>
          <td><?php echo implode(", ",$item["format"]); ?></td>
        </tr>
        <tr>
          <th>Year</th>
          <td><?php echo $item["year"]; ?></td>
        </tr>
        <?php
        if(strtolower($item["category"]) == "books") {
          ?>
          <tr>
          <th>Authors</th>
          <td><?php echo implode(", ",$item["author"]); ?></td>
        </tr>
        <tr>
          <th>Publisher</th>
          <td><?php echo implode(", ",$item["publisher"]); ?></td>
        </tr>
        <tr>
          <th>ISBN</th>
          <td><?php echo $item["isbn"]; ?></td>
        </tr>
        <?php
        }
        elseif(strtolower($item["category"]) == "movies") {
          ?>
          <tr>
          <th>Director</th>
          <td><?php echo $item["director"]; ?></td>
        </tr>
        <tr>
          <th>Screenplay</th>
          <td><?php echo implode(", ",$item["screenplay"]); ?></td>
        </tr>
        <?php
        }
        elseif(strtolower($item["category"]) == "music") {
          ?>
          <tr>
          <th>Title</th>
          <td><?php echo $item["title"]; ?></td>
        </tr>
          <tr>
          <th>Album</th>
          <td><?php echo $item["album"]; ?></td>
        </tr>
        <tr>
          <th>Artist</th>
          <td><?php echo implode(", ",$item["artist"]); ?></td>
        </tr>
        <?php
        }
        ?>
        
      </table>
    </div>
  </div>
</div>