<!DOCTYPE html>
  <html lang="en">
  <head>
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
  </head>
  <body>
  
    <div class="header">
  
      <div class="wrapper">
  
        <h1 class="branding-title"><a href="/">My Media Shelf</a></h1>
  
        <ul class="nav">
          <!-- The PHP adds the class "on" (The css underline) if the condition statement is met, otherwise it removes it. -->
                  <li class="books <?php if ($section == "books") {echo " on";} ?>"><a href="catalog.php?cat=books">Books</a></li>
                  <li class="movies <?php if ($section == "movies") {echo " on";} ?>"><a href="catalog.php?cat=movies">Movies</a></li>
                  <li class="music <?php if ($section == "music") {echo " on";} ?>"><a href="catalog.php?cat=music">Music</a></li>
                  <li class="suggest"><a href="suggest.php">Suggest</a></li>
              </ul>
  
      </div>
  
    </div>
  
    <div id="content">