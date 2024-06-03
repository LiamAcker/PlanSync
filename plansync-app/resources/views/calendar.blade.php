<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
         initialView: 'dayGridMonth',
          events:'/fetch-reminders'
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
  <form action="{{route('add-reminder')}}" method="get">
    <button type="submit" class="add">Add reminder</button>
  </form>
    
    <div id='calendar'></div>


  </body>
</html>