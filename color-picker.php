<!DOCTYPE html>
<html>
  <head>
  <!-- This should be the only file needed in order to get the Color Picker widget to work. Some things to make sure of... include this file in main page... set css variables for changeable color objects -->
    <style>
      :root {
        --background:#CCCCCC;
        --background-dark:#8f8f8f;
        --foreground:#EDEDED;
        --foreground-dark:#a6a6a6;
        --shadows:#581D26;
        --shadows-dark:#3e141b;
        --accents:#CE8146;
        --accents-dark:#905a31;
        --fonts:#333333;
        --fonts-dark:#242424;
      }
      .controls {
        position: fixed;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        z-index: 30;
      }
      .controls-box {
        order: 0;
        display: flex;
        transform: translateY(-2em);
        transition: transform 0.2s;
      }
      #controls-button { position: absolute; visibility: hidden; }
      #controls-button:checked ~ .controls-box {
        transform: translateY(-0.2em);
        transition: transform 0.2s;
      }
      .controls-button {
        order: 1;
        background-color: #BBB;
        color: #EEE;
        width: 1em;
        height: 1em;
        padding: 0.5em;
      }
      .controls-button:hover {
        background-color: #EEE;
        color: #BBB;
      }
      .chevron::before {
        border-style: solid;
        border-width: 0.25em 0.25em 0 0;
        content: '';
        display: inline-block;
        height: 0.45em;
        left: 0.15em;
        position: relative;
        top: 0.15em;
        transform: rotate(-45deg);
        vertical-align: top;
        width: 0.45em;
      }
      .ch-down::before {
        top: 0;
        transform: rotate(135deg);
      }
      .controls input[type="color"] {
        width: 4em;
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
      }
      .controls-label {
        display: inline-block;
        width: 6em;
        height: 1.5em;
        padding: 0.25em;
        margin: 0;
        font-size: 1em;
        text-align: center;
        color: white;
        text-shadow: 0 0 1px #444;
      }
      .controls-label p {
        color: #DDD;
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
      }
      .controls-label:hover {
        transform: translateY(0.2em);
        transition: transform 0.2s;
      }
      /* Make sure to set variables in CSS of target page */
      #background-label { background: linear-gradient(var(--background) 80%, var(--background-dark)); }
      #foreground-label { background: linear-gradient(var(--foreground) 80%, var(--foreground-dark)); }
      #shadows-label { background: linear-gradient(var(--shadows) 80%, var(--shadows-dark)); }
      #accents-label { background: linear-gradient(var(--accents) 80%, var(--accents-dark)); }
      #fonts-label { background: linear-gradient(var(--fonts) 80%, var(--fonts-dark)); }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
      $(function() {
        // get the inputs
        const inputs = [].slice.call(document.querySelectorAll('.controls input'));
        const labels = [].slice.call(document.querySelectorAll('.controls label'));
        // listen for changes
        inputs.forEach(input => input.addEventListener('change', handleUpdate));

        function handleUpdate() {
          var label = this.parentElement;
          document.documentElement.style.setProperty('--${this.id}', this.value);
          label.style.setProperty('background-color', this.value);
        }
        function ColorShade(hex, lum) {
          // validate hex string
          hex = String(hex).replace(/[^0-9a-f]/gi, '');
          if (hex.length < 6) {
            hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
          }
          lum = lum || 0;
          // convert to decimal and change luminosity
          var rgb = "#", c, i;
          for (i = 0; i < 3; i++) {
            c = parseInt(hex.substr(i*2,2), 16);
            c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
            rgb += ("00"+c).substr(c.length);
          }
          return rgb;
        }

        $('#background').change(function() {
          var bodyStyle = window.getComputedStyle(document.body);
          var background = bodyStyle.getPropertyValue('--background');
          var backgroundDark = ColorShade(background, -0.3);
          document.body.style.setProperty('--background-dark', backgroundDark);
          $('#background-label span').html("background<p>" + background + "</p>");
          return
        });
        $('#foreground').change(function() {
          var bodyStyle = window.getComputedStyle(document.body);
          var foreground = bodyStyle.getPropertyValue('--foreground');
          var foregroundDark = ColorShade(foreground, -0.3);
          document.body.style.setProperty('--foreground-dark', foregroundDark);
          $('#foreground-label span').html("foreground<p>" + foreground + "</p>");
          return
        });
        $('#shadows').change(function() {
          var bodyStyle = window.getComputedStyle(document.body);
          var shadows = bodyStyle.getPropertyValue('--shadows');
          var shadowsDark = ColorShade(shadows, -0.3);
          document.body.style.setProperty('--shadows-dark', shadowsDark);
          $('#shadows-label span').html("shadows<p>" + shadows + "</p>");
          return
        });
        $('#accents').change(function() {
          var bodyStyle = window.getComputedStyle(document.body);
          var accents = bodyStyle.getPropertyValue('--accents');
          var accentsDark = ColorShade(accents, -0.3);
          document.body.style.setProperty('--accents-dark', accentsDark);
          $('#accents-label span').html("accents<p>" + accents + "</p>");
          return
        });
        $('#fonts').change(function() {
          var bodyStyle = window.getComputedStyle(document.body);
          var fonts = bodyStyle.getPropertyValue('--fonts');
          var fontsDark = ColorShade(fonts, -0.3);
          document.body.style.setProperty('--fonts-dark', fontsDark);
          $('#fonts-label span').html("fonts<p>" + fonts + "</p>");
          return
        });

      });
    </script>
  </head>
  <body>
    <div class="controls">
      <input type="checkbox" id="controls-button">      
      <label for="controls-button" class="controls-button"><span class="chevron ch-down"></span></label>
      <div class="controls-box">
        <label id="background-label" class="controls-label" for="background">
          <span>background</span>
          <input type="color" id="background" name="background" value="#CCCCCC">
        </label>
        <label id="foreground-label" class="controls-label" for="foreground">
          <span>foreground</span>
          <input type="color" id="foreground" name="foreground" value="#EDEDED">
        </label>
        <label id="shadows-label" class="controls-label" for="shadows">
          <span>shadows</span>
          <input type="color" id="shadows" name="shadows" value="#581D26">
        </label>
        <label id="accents-label" class="controls-label" for="accents">
          <span>accents</span>
          <input type="color" id="accents" name="accents" value="#CE8146">
        </label>
        <label id="fonts-label" class="controls-label" for="fonts">
          <span>fonts</span>
          <input type="color" id="fonts" name="fonts" value="#333333">
        </label>
      </div>
    </div>
  </body>
</html>    
