  $(document).ready(function() {
    $('#panel').on('click', function() {
      $('#content').toggle(1000);
    });
  });

    let noon = 12;

    let showCurrentTime = function () {
      let localTime = document.getElementById('local-time');
      let message = document.getElementById('content-message');
      let currentTime = new Date();

      let hours = currentTime.getHours();
      let minutes = currentTime.getMinutes();
      let meridian;

      if (hours <= 11) {
        message.innerText = "Good Morning!";
        meridian = "AM";
      } else {
        meridian = "PM";
      }

      if (hours >= 18) {
        message.innerText = "Good Evening!";
      }

      if (hours >= noon && hours < 18) {
        message.innerText = "Good Afternoon!";
      }

      if (hours > noon) {
        hours = hours - 12;
      }

      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      let clockTime = hours + ":" + minutes + " " + meridian + " " + "(CST)";
      localTime.innerText = clockTime;
    };

    showCurrentTime();

    let updateClock = function() {
      let time = new Date().getMinutes();

    };

    updateClock();

    let oneMinute = 60000;
    setInterval(updateClock, oneMinute);

 
  