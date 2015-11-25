<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Calendar Widget that will make your day</title>
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
    <!-- Respomsive slider -->
    <link href="css/responsive-calendar.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
    </div>
    <script src = 'dist/css/jquery-1.11.2.min.js'></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2015-03',
          events: {
            "2013-03-20": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>
  </body>
</html>