<?php 

// This IF statement checks to see if the request method is post, if it is, it will submit the page and run the block below
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $suggestion = trim(filter_input(INPUT_POST, "suggest", FILTER_SANITIZE_SPECIAL_CHARS));

    if($name == ""|| $email == "" || $suggestion =="") {
      echo "Please fill in the required fields";
      exit;
    }

    if($_POST["address"] != "") {
      echo "Bad form input";
      exit;
    }

    echo "<pre>";
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Suggestion: " . $suggestion . "\n";
    echo $email_body;
    echo "</pre>";

    $pageTitle = "Thanks Bro!";
    $section = null;

    // THIS IS SUPER IMPORTANT FOR FORM SUBMISSION!!!!!!
    // This is what will prevent the user from resubmitting data,
    // it will redirect them to the thanks.php page after submitting so card and submit data isn't submitted twice!
    // status=thanks - returns the custom thank you message after submitting
    header("location:suggest.php?status=thanks");
}

$pageTitle = "Create a Media Shelf";

include("inc/header.php"); 

?>

<div class="section page">
<div class="wrapper">
  <h1>Send me a message</h1>

  <!-- This is the message that is displayed after a form submit, if the status == "Thanks"; -->
  <?php if(isset($_GET["status"]) &&  $_GET["status"] == "thanks") {
    echo "<p>Thanks! I will check look at your stupid suggestion shortly.</p>";
  } else { ?>
  
  <p>Let me know if you think there is something missing</p>

    <form method="post" action="suggest.php">
    <table>
      <tr>
        <th><label for="name">Name</label></th>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <th><label for="email">Email</label></th>
        <td><input type="text" name="email" id="email"></td>
      </tr>
      <tr>
        <th><label for="suggest">Suggestion Details</label></th>
        <td><textarea name="suggest" id="suggest" cols="30" rows="10"></textarea></td>
      </tr>
      <!-- This will help filter out bots -->
      <tr style="display:none">
        <th><label for="address">Address</label></th>
        <td><input type="text" name="address" id="address"><p>Please leave this field blank</p></td>
      </tr>

    </table>
    <input type="submit" value="Send" />
     
    </form> 
    <?php 
  } 
  ?>
  </div>
</div>

<?php include("inc/footer.php"); ?>