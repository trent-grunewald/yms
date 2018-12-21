<?php 

$pageTitle = "Create a Media Shelf";

include("inc/header.php"); 

?>

<div class="section page">
<div class="wrapper">
  <h1>Send me a message</h1>
  <p>Let me know if you think there is something missing</p>

    <form method="post" action="process.php">
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
    </table>
    <input type="submit" value="Send" />
    
            
    </form>
  </div>
</div>

<?php includ("inc/footer.php"); ?>