@extends('template.master_template')
@section('page-title')
   Events
@endsection
@section('custom-css')
    <link href='{{url('plugins/core/main.css')}}' rel='stylesheet' />
    <link href='{{url('plugins/daygrid/main.css')}}' rel='stylesheet' />
    <style>
    #calendar {
    max-width: 900px;
    margin: 0 auto;
    }
    </style>
@endsection
@section('content-page')
    <div class="row">
        <div id='calendar'></div>
    </div>
@endsection
@section('custom-scripts')
    <script src='{{url('plugins/core/main.js')}}'></script>
    <script src='{{url('plugins/interaction/main.js')}}'></script>
    <script src='{{url('plugins/daygrid/main.js')}}'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid' ],
                defaultDate: new Date(),
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2020-02-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2020-02-07',
                        end: '2020-02-10'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-02-09T16:00:00'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-02-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2020-02-11',
                        end: '2020-02-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-02-12T10:30:00',
                        end: '2020-02-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2020-02-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-02-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2020-02-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2020-02-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2020-02-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2020-02-28'
                    }
                ]
            });

            calendar.render();
        });

    </script>
@endsection
