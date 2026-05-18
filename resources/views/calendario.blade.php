@extends('layouts.secondary')

@section('title', 'Calendario')
@section('page-title', 'Calendario de Eventos')
@section('page-subtitle', 'Consulta todos nuestros avisos')

@section('content')

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css' rel='stylesheet'>


<div class="container py-5">

    <div class="calendar-box">
        <div id="calendar"></div>
    </div>

</div>

<style>
    .calendar-box{
        background: white;
        padding: 30px;
        border-radius: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .fc-toolbar-title{
        font-weight: bold;
    }

    .fc-event{
        border: none;
        border-radius: 8px;
    }

    .fc-daygrid-event{
    padding: 5px 8px !important;
    border-radius: 10px !important;
    font-size: 0.85rem;
}


</style>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/locales/es.global.min.js'></script>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                list: 'Lista'
            },
            height: 'auto',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listMonth'
            },

            events: @json($avisos),
            eventMouseEnter: function(info){
                document.getElementById('modalTitulo').innerText =
                    info.event.title;
                document.getElementById('modalDescripcion').innerText =
                    info.event.extendedProps.description ?? 'Sin descripción';
                document.getElementById('modalInicio').innerText =
                    info.event.start.toLocaleDateString();
                document.getElementById('modalCierre').innerText =
                    info.event.extendedProps.cierre ?? 'Sin fecha';
                var modal = new bootstrap.Modal(
                    document.getElementById('eventoModal')
                );
                modal.show();
            }
        });
        calendar.render();
    });

</script>


<div class="modal fade" id="eventoModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalTitulo"></h5>
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <p id="modalDescripcion"></p>
                <hr>
                <p>
                    <strong>Inicio:</strong>
                    <span id="modalInicio"></span>
                </p>
                <p>
                    <strong>Cierre:</strong>
                    <span id="modalCierre"></span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection