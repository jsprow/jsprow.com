<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A Simple PHP Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <a id="form"></a>
  <a id="newname"></a>
  <a id="table"></a>
  <nav>
    <ul>
      <li class="navbutton nava">
        <a href="#newname">New Name</a>
      </li>
      <li class="navbutton navb">
        <a href="#form">Form</a>
      </li>
      <li class="navbutton navc">
        <a href="#table">Table</a>
      </li>
    </ul>
  </nav>
  <section class="shade">
    <img class="arrow" src="Black_Down_Arrow.png">
    <div class="bar bar1"></div>
  </section>
  <section class="first">
    <div class="content">
      <h1>New Name</h1>
      <form id="submitName" class="submitName" method="post">
        <h3>Add someone's name to the naughty list</h3>
        <label for="newName">
          <p>And the next <span>contestant</span> is...</p>
        </label>
        <input type="text" id="newName" name="newName">
        <div class="buttondiv">
          <button id="nameButton" name="submitName" type="submit">Who Knew?!</button>
        </div>
      </form>
    </div>
  </section>
  <section class="second">
    <div class="bar bar2"></div>
    <div class="content">
      <h1>Form</h1>
      <form id="submitWord" action="" method=post>
        <h3>What's your favorite naughty word?</h3>
        <label class="dropdown" for="yourName">
          <p>My <span>name</span> is:</p>
        </label>
        <select name="yourName">
<?php
require 'submit.php';

$getNames = mysqli_query($con, "SELECT name FROM names ORDER BY name ASC");

while ($row = mysqli_fetch_array($getNames)) {
    echo "<option name=\"name\" value=\"" . $row['name'] . "\">" . $row['name'] . "</option>";
}
;
?>
        </select>
        <label for="FavoriteWord">
          <p>...and this is my <span>dirty word</span>:</p>
        </label>
        <input type="text" name="FavoriteWord">
        <div class="buttondiv">
          <button type="submit" name="submitWord">That's Right!</button>
        </div>
      </form>
    </div>
    <div class="bar bar3"></div>
  </section>
  <section class="third">
    <div class="content">
      <h1>Table</h1>
      <table>
        <thead>
          <tr>
            <th>It's name</th>
            <th>A naughty word</th>
          </tr>
<?php
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = ucwords($row['name']);
        $word = ucwords($row['word']);
        echo "<tr><td>" . $name . "</td>" . "<td>" . $word . "</td></tr>";
    }
} else {
    echo "0 results";
}
;?>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <script type="text/javascript">
    $(function() {
        $('#nameButton').on('click', function() {

          $("#submitName").css('opacity', '0.5'); //dim submit button

          var myData = 'newName='+ $("#newName").val(); //build a post data structure
          jQuery.ajax({
            type: "POST", // HTTP method POST or GET
            url: "submit.php", //Where to make Ajax calls
            dataType:"text", // Data type, HTML, json etc.
            data:myData, //Form variables
            success:function(response){
              console.log(response);
              $("#newName").val(''); //empty text field on successful
              $("#submitName").css('opacity', '1'); //un-dim submit button

            },
            error:function (xhr, ajaxOptions, thrownError){
              $("#submitName").css('opacity', '0.5'); //un-dim submit button
              console.log(thrownError);
            }
          });
        });
      $(window).scroll(function() {
        var height = $(window).scrollTop();
        var position = $('.second').position().top;
        if (position <= height) {
          $('.first').css('display', 'none');
          $('.third').css('display', 'flex');
        };
        if (position > height) {
          $('.first').css('display', 'flex');
          $('.third').css('display', 'none');
        };
      });
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    });
  </script>
</body>

</html>
