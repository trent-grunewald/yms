<?php

function get_item_html($id,$item) {
  $output = "<li><a href='#'><img src='" 
  . $item["cover"] . "' alt='" 
  . $item["title"] . "'  />" 
  . "<p>View Details</p>"
  . "</a></li>";
  return $output;
}


// filters based on category and sorts by title
function array_category($catalog, $category) {
  $output = array();

  foreach($catalog as $id => $item) {
    if($category == null OR strtolower($category) == strtolower($item["category"])) {
      $sort = $item["title"];
      $sort = ltrim($sort,"the ");
      $sort = ltrim($sort,"a ");
      $sort = ltrim($sort,"an ");
    $output[$id] = $sort;
    }
}
asort($output);
return array_keys($output);
}

?>