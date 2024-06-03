  <!-- <form action="{{route('add-reminder')}}" method="get">
    <button type="submit" class="add">Add reminder</button>
  </form> -->

@extends('core.sidebar')

@push('styles')
<style>
</style>
@endpush

@section('content')
    <div id='calendar' class="h-100 w-100">

    </div>
@endsection

@push('scripts')
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
@endpush