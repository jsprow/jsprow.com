<!DOCTYPE html>
<html>

<head>
  <title>Ajax Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="content">
    <img src="einstein.jpg" alt="Einstein">
    <button id="request">Learn More About Albert Einstein</button>
    <div id="bio">
      <?php
        $user = 'root';
        $password = 'hyha2527';
        $db = 'einstein';
        $host = 'localhost';
        $port = 8889;

        $con = mysqli_init();
        $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

        if ($con === false) {
          echo "Error connecting";
        };
        $sql = "SELECT fact FROM bio WHERE (fact IS NOT NULL AND fact != '' ) ";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $fact = ucwords($row['fact']);
            print '<p id="phpfact">' . $fact . '</p>';
          }
        } else {
          print "0 results";
        };
        mysqli_close($con);
      ?>
    </div>
  </div>
  <div class="content">
    <form method="post" action="">
      <textarea type="text" name="fact"></textarea>
      <button id="fact_submit" type="submit" name="fact_submit">Tell Us a Fact About Al</button>
      <?php
        $user = 'root';
        $password = 'hyha2527';
        $db = 'einstein';
        $host = 'localhost';
        $port = 8889;

        $con = mysqli_init();
        $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

        if ($con === false) {
          echo "Error connecting";
        };

        if ($_POST) {
          if (isset($_POST['fact_submit'])) {
            $fact = $_REQUEST['fact'];

            $sql = "INSERT INTO bio (fact) VALUES ('$fact')
              ON DUPLICATE KEY UPDATE fact=fact";

            if ($con->query($sql) === FALSE) {
              echo "Error: " . $sql . "<br>" . $con->error;
            };
          };
        };
        mysqli_close($con);
      ?>
    </form>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(function() {
        var ajaxSubmit = function(formEl) {
          var url = $(formEl).attr('action');
          var data = $(formEl).serializeArray();
          $.ajax({
            url: url,
            data: data,
            dataType: 'json',
            success: function() {
              if(rsp.success) {
                alert('form has been posted successfully');
                e.preventDefault();
              }
            }
          });
          return false;
        };
        $('#fact_submit').click(function() {
          $('#bio').load('einstein.php');
        })
      });
    </script>
</body>

</html>
