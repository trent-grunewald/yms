<?php

function get_item_html($id,$item) {
  $output = "<li><a href='#'><img src='" 
  . $item["cover"] . "' alt='" 
  . $item["title"] . "'  />" 
  . "<p>View Details</p>"
  . "</a></li>";
  return $output;
}


// filters based on category
function array_category($catalog, $category) {
  if($category == null) {
    return array_keys($catalog);
  }
  $output = array();

  foreach($catalog as $id => $item) {
    if(strtolower($category) == strtolower($item["category"])) {

    $output[] = $id;
    }
}
return $output;
}

?>