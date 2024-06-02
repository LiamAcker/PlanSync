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
        //   events: [
        //     {
        //         title: 'Event 1',
        //         start: '2024-06-01'
        //     },
        //     {
        //         title: 'Event 2',
        //         start: '2024-06-02'
        //     }

        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>