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
    

    document.addEventListener('DOMContentLoaded', ()=>{
        
                    
                    //ajax request
                    $.ajax({
                        url:'event/getRecentEvent',
                        success:(result)=>
                        {
                            let evenements= result.resultat;
                            let agenda =[];
                            for(let i=0; i<evenements.length; i++)
                            {
                                let actu =
                                {
                                        title: evenements[i].title_pub,
                                        start: evenements[i].start_date_pub,
                                        end:evenements[i].end_date_pub,
                                        backgroundColor: evenements[i].id_type_pub==1?'#39CE13':'#E5C80E',
                                        url: 'http://localhost:8000/publication/getById/'+evenements[i].id_pub,
                                        
                                };
                                agenda.push(actu);
                            }
                            //add agenda
                            let calendarEl = document.getElementById('calendar');
                            let calendar = new FullCalendar.Calendar(calendarEl, {
                                plugins: [ 'interaction', 'dayGrid' ],
                                defaultDate: new Date(),
                                editable: true,
                                eventLimit: true, // allow "more" link when too many events
                                events: agenda
                            });
                            calendar.render();
                            
                        }
                    });
    });
    

</script>
@endsection
