<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>A Simple PHP File</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <link rel="stylesheet" href="php/style.css">

</head>
<body>
  <!-- <?php include "php/header.php"; ?> -->
  <section>
    <input id="tab-one" type="radio" name="grp" checked="checked"/>
    <label class="tab-label" for="tab-one">Form</label>
      <div>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method=post>
          <label for="YourName">My name is:
            <select name="YourName">
              <?php
                $con = mysqli_connect('localhost', "root", "root", "form");

                if($con === false) {
                  echo "Error connecting";
                };

                $sql = mysqli_query($con, "SELECT name FROM names ORDER BY name ASC");

                while ($row = mysqli_fetch_array($sql)) {
                  echo "<option name=\"name\" value=\"" . $row['name'] . "\">". $row['name'] . "</option>";
                };
                $YourName = $_REQUEST['YourName'] ;
                $FavoriteWord = $_REQUEST['FavoriteWord'] ;

                $sql = "INSERT INTO badwords (your_name, favorite_word) VALUES ('$YourName', '$FavoriteWord')";

                if ($con->query($sql) === TRUE) {
                  echo "You put the thing in the thing";
                } else {
                  echo "Error: " . $sql . "<br>" . $con->error;
                }
              ?>
            </select>
          </label>
          <label for="FavoriteWord">This is my word:
            <input type="text" name="FavoriteWord">
          </label>
          <input class="button" type="submit" name="submit" value="That's Right!">
        </form>
      </div>
    <input id="tab-two" type="radio" name="grp" />
    <label class="tab-label" for="tab-two">Results</label>
      <div>
        </div>
      <input id="tab-three" type="radio" name="grp" />
      <label class="tab-label" for="tab-three">Summary</label>
        <div>
          <?php
            if ($_POST) {
              $con = mysqli_connect('localhost', "root", "root", "form");

              if($con === false) {
                echo "Error connecting";
              };

              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            };

            $sql = "SELECT your_name, favorite_word FROM badwords WHERE (your_name IS NOT NULL AND your_name != '' ) ";

            $result = $con->query($sql);
          ?>
          <table>
            <thead>
              <tr>
                <th>It's name</th>
                <th>A naughty word</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if ($result->num_rows > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['your_name'] . "</td>" . "<td>" . $row['favorite_word'] . "</td></tr>";
                  }
                } else {
                    echo "0 results";
                  };
                $con->close();
              ?>
            </tbody>
          </table>
        </div>
      </section>
</body>
</html>
