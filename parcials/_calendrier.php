<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title></title>
  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
     <link rel="stylesheet" href="css/bootstrap.min.css">
 
     <link rel="stylesheet" href="css/mdb.min.css">
  
     <link rel="stylesheet" href="js/vendor/fullcalendar-3.10.0/fullcalendar.min.css">

	<title></title>
</head>
<body>

	 <main>
    <div class="container-fluid">

    
      <section>

        <div class="row">

          <div class="col-md-12">
            <div id="calendar"></div>
          </div>

          
        </div>
        

      </section>
      

    </div>
  </main>
  



  
  <script src="js/jquery-3.3.1.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
 
  <script type="text/javascript" src="js/bootstrap.js"></script>
 
  <script type="text/javascript" src="js/mdb.min.js"></script>
 
  <script type="text/javascript" src="../../js/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
 
  <script type="text/javascript" src="../../js/vendor/fullcalendar-3.10.0/fullcalendar.min.js"></script>
  
  <script>
    
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });
    $(document).ready(function () {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2019-03-30',
        navLinks: true, 
        editable: true,
        eventLimit: true, 
        events: [{
            title: 'All Day Event',
            start: '2019-03-01'
          },
          {
            title: 'Long Event',
            start: '2019-03-07',
            end: '2019-03-10'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2019-03-09T16:00:00'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2019-03-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2019-03-11',
            end: '2019-03-13'
          },
          {
            title: 'Meeting',
            start: '2019-03-12T10:30:00',
            end: '2019-03-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2019-03-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2019-03-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2019-03-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2019-03-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2019-03-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'https://google.com/',
            start: '2019-03-28'
          }
        ]
      })
    });

  </script>




</body>
</html>