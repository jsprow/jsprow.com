$(function() {
  var now = new Date();
  var weekday = new Array(7);
  weekday[0] = "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";

  var checkTimeMat = function() {
    var today = weekday[now.getDay()];
    var timeDivMat = document.getElementById('timeDivMat');
    var dayOfWeek = now.getDay();
    var hour = now.getHours();
    var minutes = now.getMinutes();

    //add AM or PM
    var suffix = hour >= 12 ? "PM" : "AM";

    // add 0 to one digit minutes
    if (minutes < 10) {
      minutes = "0" + minutes
    };

    if ((dayOfWeek == 1 || dayOfWeek == 2 || dayOfWeek == 3 || dayOfWeek == 4) && hour >= 9 && hour <= 21) {
      hour = ((hour + 11) % 12 + 1); //i.e. show 1:15 instead of 13:15
      timeDivMat.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re open!';
      timeDivMat.className = 'open';
    } 
    
    else if ((dayOfWeek == 0) && hour >= 12 && hour <= 18) {
      hour = ((hour + 11) % 12 + 1);
      timeDivMat.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re open!';
      timeDivMat.className = 'open';
    } 
    
    else {
      if (hour == 0 || hour > 12) {
        hour = ((hour + 11) % 12 + 1); //i.e. show 1:15 instead of 13:15
      }
      timeDivMat.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re closed!';
      timeDivMat.className = 'closed';
    }
  };

  var currentDay = weekday[now.getDay()];
  var currentDayID = "." + currentDay; //gets todays weekday and turns it into id
  $(currentDayID).toggleClass("today"); //hightlights today in the view hours modal popup

  setInterval(checkTimeMat, 1000);
  checkTimeMat();

  var checkTimeKal = function() {
    var today = weekday[now.getDay()];
    var timeDivKal = document.getElementById('timeDivKal');
    var dayOfWeek = now.getDay();
    var hour = now.getHours();
    var minutes = now.getMinutes();

    //add AM or PM
    var suffix = hour >= 12 ? "PM" : "AM";

    // add 0 to one digit minutes
    if (minutes < 10) {
      minutes = "0" + minutes
    };

    if ((dayOfWeek == 1 || dayOfWeek == 2 || dayOfWeek == 3 || dayOfWeek == 4) && hour >= 9 && hour <= 21) {
      hour = ((hour + 11) % 12 + 1); //i.e. show 1:15 instead of 13:15
      timeDivKal.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re open!';
      timeDivKal.className = 'open';
    } 
    
    else if ((dayOfWeek == 0) && hour >= 12 && hour <= 18) {
      hour = ((hour + 11) % 12 + 1);
      timeDivKal.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re open!';
      timeDivKal.className = 'open';
    } 
    
    else {
      if (hour == 0 || hour > 12) {
        hour = ((hour + 11) % 12 + 1); //i.e. show 1:15 instead of 13:15
      }
      timeDivKal.innerHTML = today + ' ' + hour + ':' + minutes + suffix + ' - We\'re closed!';
      timeDivKal.className = 'closed';
    }
  };

  var currentDay = weekday[now.getDay()];
  var currentDayID = "#" + currentDay; //gets todays weekday and turns it into id
  $(currentDayID).toggleClass("today"); //hightlights today in the view hours modal popup

  setInterval(checkTimeKal, 1000);
  checkTimeKal();
});