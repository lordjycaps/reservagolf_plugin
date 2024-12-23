$(document).ready(function() {
    $('.datepicker').datepicker({
      maxDate: new Date(),
      yearRange: 'c-10:c+10',
      minDate: new Date()
    });
  });