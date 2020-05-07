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
    
    button {
    width:150px !important;
	border: 1px solid #fff !important;
	padding: 20px;
	outline: none;
	font-size: 16px;
	margin-top: 30px;
    margin-left: 10px;
    background: none;
	border-radius: 12px;
	-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.2);
	-webkit-transition: 300ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
}
button>a{
    font-size: 18px !important;
}
button:hover {
    color: #c00d0d !important;
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
}
button {
	border: 1px solid #fff !important;
	padding: 20px;
	outline: none;
	font-size: 12px;
	margin-top: 30px;
    margin-left: 0px;
    background: none;
	border-radius: 12px;
}
button>a{
    font-size: 16px !important;
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
                                        backgroundColor: evenements[i].id_type_pub==1?`background: rgba(4, 17, 121, 1.0);
background: -webkit-linear-gradient(top right, rgba(4, 17, 121, 1.0), rgba(45, 130, 232, 1.0));
background: -moz-linear-gradient(top right, rgba(4, 17, 121, 1.0), rgba(45, 130, 232, 1.0));
background: linear-gradient(to bottom left, rgba(4, 17, 121, 1.0), rgba(45, 130, 232, 1.0));border:none !important`:`background: rgba(161, 28, 26, 1.0);
background: -webkit-linear-gradient(top right, rgba(161, 28, 26, 1.0), rgba(162, 35, 189, 1.0));
background: -moz-linear-gradient(top right, rgba(161, 28, 26, 1.0), rgba(162, 35, 189, 1.0));
background: linear-gradient(to bottom left, rgba(161, 28, 26, 1.0), rgba(162, 35, 189, 1.0));border:none !important`,
                                        url: 'http://anafor.sigesse-pidma.net/public/publication/getById/'+evenements[i].id_pub,
                                        
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
