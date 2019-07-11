<?php
/* To run the page in termninal:
   1. open terminal and cd to the assignment dir (opensooqTask)
   2. run the following command: 
      php -S localhost:8000
   3. Then open browser and go to localhost:8000
*/

include_once 'Helper.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="style/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link href="style/style.css" rel="stylesheet">
    <title>Opensooq | Backend Task</title>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="form">
          <form class= "cal-distance">
            <h2 class="form-title">Enter 2 Strings to find levenshtein distance</h2>
            <div class="form-group input-string">
              <input type="text" class="form-control input-string" id="first-string"
                placeholder="Enter First String" name="firstString" minlength="1">
            </div>

            <div class="form-group input-string">
              <input type="text" class="form-control input-string" id="second-string"
                placeholder="Enter Second String" name="secondString" minlength="1">
            </div>
            
            <div class="output-box">
              <label>Result: </label>
              <output name="distance">
                <?php
                  $str1= $_GET['firstString'];
                  $str2= $_GET['secondString'];
                  echo helper::distanceHelper(2,$str1,$str2);
                ?>
              </output>
            </div>

            <button type="submit" class="btn btn-default submit-btn">find levenshtein distance
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>