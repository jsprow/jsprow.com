<html>
  <head>
    <script type="text/javascript" src="quickstart.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=checkAuth">
    </script>
  </head>
  <body>

    <div id="authorize-div" style="display: none">
      <span>Authorize access to Google Sheets API</span>
      <!--Button for the user to click to initiate auth sequence -->
      <button id="authorize-button" onclick="handleAuthClick(event)">
        Authorize
      </button>
    </div>

    <form action="">
      <label for="student">Student</label>
      <select id="student" name="student"></select>
      <button id="checkIn" type="button">Check In</button>
    </form>

    <table id="response">

    </table>

    <pre id="output"></pre>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>
      $(function(){
        $('#checkIn').click(function() {
          var CLIENT_ID = '622968992067-f87dlrguock5gmaq97g4hl6tutiqkvgj.apps.googleusercontent.com';

          var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

          function checkAuth() {
            gapi.auth.authorize(
              {
                'client_id': CLIENT_ID,
                'scope': SCOPES.join(' '),
                'immediate': true
              }, handleAuthResult);
          }

          function handleAuthResult(authResult) {
            var authorizeDiv = document.getElementById('authorize-div');
            if (authResult && !authResult.error) {
              // Hide auth UI, then load client library.
              authorizeDiv.style.display = 'none';
              loadSheetsApi();
            } else {
              // Show auth UI, allowing the user to initiate authorization by
              // clicking authorize button.
              authorizeDiv.style.display = 'inline';
            }
          }

          function handleAuthClick(event) {
            gapi.auth.authorize(
              {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
              handleAuthResult);
            return false;
          }

          function loadSheetsApi() {
            var discoveryUrl =
                'https://sheets.googleapis.com/$discovery/rest?version=v4';
            gapi.client.load(discoveryUrl).then(postData);
          }
          
          //REST Request
          var restRequest = gapi.client.request({
            'path': 'https://people.googleapis.com/v1/people/me/connections',
            'params': {'sortOrder': 'LAST_NAME_ASCENDING'}
          });

          function postData() {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
                    callback(xmlHttp.responseText);
            }
            xmlHttp.open("POST", "https://sheets.googleapis.com/v4/spreadsheets/1srov7uFqHLOSNcewUWLPa9SitbmlMuXBgN6c-uJKLYE/values/ajaxResponse!A1%3AB1:append?insertDataOption=INSERT_ROWS&valueInputOption=RAW&key=622968992067-f87dlrguock5gmaq97g4hl6tutiqkvgj.apps.googleusercontent.com", true);
            xmlHttp.send("null");
          }
        });
      });
    </script>
  </body>
</html>
