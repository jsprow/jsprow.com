<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>A Simple PHP Form</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <link rel="stylesheet" href="php/style.css">

</head>
<body>
  <section>
    <input id="tab-one" type="radio" name="grp" checked="checked"/>
    <label class="tab-label" for="tab-one">Form</label>
      <div class="content">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method=post>
            <h3>What's your favorite naughty word?</h3>
          <label class="dropdown" for="YourName"><p>My <span>name</span> is:</p>
            <select name="YourName">
              <?php
                $con = mysqli_connect('localhost', "root", "root", "form");

                if ($con === false) {
                  echo "Error connecting";
                };

                $sql = mysqli_query($con, "SELECT name FROM names ORDER BY name ASC");

                while ($row = mysqli_fetch_array($sql)) {
                  echo "<option name=\"name\" value=\"" . $row['name'] . "\">" . $row['name'] . "</option>";
                };
              ?>
           </select>
          </label>
          <label for="FavoriteWord"><p>...and this is my <span>dirty word</span>:</p>
            <input type="text" name="FavoriteWord">
          </label>
          <button type="submit" name="submitWord">That's Right!</button>
        </form>
        <?php
          if (isset($_POST['submitWord'])) {
            $YourName     = $_REQUEST['YourName'];
            $FavoriteWord = $_REQUEST['FavoriteWord'];

            $sql = "INSERT INTO badwords (your_name, favorite_word) VALUES ('$YourName', '$FavoriteWord')";

            if ($con->query($sql) === TRUE) {
              echo "You put the thing in the thing";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
          };
          mysqli_close($con);
        ?>
     </div>
    <input id="tab-two" type="radio" name="grp" />
    <label class="tab-label" for="tab-two">New Name</label>
      <div class="content">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method=post>
          <h3>Add someone's name to the naughty list</h3>
          <label for="NewName"><p>And the next <span>contestant</span> is...</p>
            <input type="text" name="NewName">
          </label>
          <button type="submit" name="submitName">Who Knew?!</button>
        </form>
        <?php
          $con = mysqli_connect('localhost', "root", "root", "form");

          if ($con === false) {
            echo "Error connecting";
          };
          if ($_POST) {
            if (isset($_POST['submitName'])) {
              $NewName = $_REQUEST['NewName'];

              $sql = "INSERT INTO names (name) VALUES ('$NewName')";

              if ($con->query($sql) === TRUE) {
                echo "You put the thing in the thing";
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
            };
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
          };
        ?>
       </div>
      <input id="tab-three" type="radio" name="grp" />
      <label class="tab-label" for="tab-three">Summary</label>
        <div class="content">
          <?php
            $sql = "SELECT your_name, favorite_word FROM badwords WHERE ((your_name IS NOT NULL AND your_name != '' ) AND (favorite_word IS NOT NULL AND favorite_word != '' )) ";

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
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>" . $row['your_name'] . "</td>" . "<td>" . $row['favorite_word'] . "</td></tr>";
                    }
                  } else {
                    echo "0 results";
                  };
                  mysqli_close($con);
                ?>
           </tbody>
          </table>
        </div>
      </section>
</body>
</html>
