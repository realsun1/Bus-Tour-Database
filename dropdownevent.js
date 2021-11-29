window.onload = function() {
    prepareListener();
   }
   function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickacountry");
    droppy = document.getElementById("passengerbooking");
    droppy.addEventListener("change",getEvent);
   }
   function getEvent() {
    this.form.submit();
   }
   