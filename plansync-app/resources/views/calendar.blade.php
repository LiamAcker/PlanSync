  <!-- <form action="{{route('add-reminder')}}" method="get">
    <button type="submit" class="add">Add reminder</button>
  </form> -->

@extends('core.sidebar')

@push('styles')
<style>
.popper,
.tooltip {
  position: absolute;
  z-index: 9999;
  background: #FFC107;
  color: black;
  width: 150px;
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  padding: 10px;
  text-align: center;
}
</style>
@endpush

@section('content')
    <div id='calendar' class="h-100 w-100">

    </div>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events:'/fetch-reminders',
          eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit'
          },
          displayEventTime: true,
          eventDidMount: function(info) {
            $(info.el).popover({
              title: info.event.title,
              placement: 'top',
              trigger: 'hover',
              content: info.event.extendedProps.description,
            });
          },
            eventClick: function(info) {
      window.location.href = '/edit-reminder/' + info.event.id;
          }
        });
        calendar.render();
      });
    </script>
    
@endpush