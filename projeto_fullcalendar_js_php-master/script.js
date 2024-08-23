document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    
    var bodyClass = document.body.classList[0];
    
    var calendarConfig = {
        locale: 'pt-br',
        navLinks: true,
        selectable: true,
        selectMirror: true,
        editable: true,
        dayMaxEvents: true,
        dateClick: function (info) {
            abrirModal(info);
        },
        eventClick: function (info) {
            abrirModalEditar(info);
        },
        eventDrop: function (info) {
            moverEvento(info);
        },
        events: 'event-list.php',
    };

    if (bodyClass === 'index-page') {
        calendarConfig.headerToolbar = {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
        };
        calendarConfig.initialView = 'dayGridMonth';
    } else if (bodyClass === 'sisrot-page') {
        calendarConfig.headerToolbar = {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridWeek,timeGridDay'
        };
        calendarConfig.initialView = 'timeGridWeek'; 
    }

    var calendar = new FullCalendar.Calendar(calendarEl, calendarConfig);
    calendar.render();

    const modal = document.querySelector('.modal-opened');

    const abrirModal = (info) => {
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            modal.style.transition = 'opacity 300ms';
            setTimeout(() => modal.style.opacity = 1, 100);
        }
        document.querySelector('#start').value = info.dateStr + "T08:00"; // Ajuste para datetime-local
        document.querySelector('#end').value = info.dateStr + "T18:00";   // Ajuste para datetime-local
        document.querySelector('#view').value = bodyClass === 'index-page' ? 'monthly' : (bodyClass === 'sisrot-page' ? 'weekly' : 'daily'); // Define a visualização
    }

    const abrirModalEditar = (info) => {
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            modal.style.transition = 'opacity 300ms';
            setTimeout(() => modal.style.opacity = 1, 100);
        }

        let data_start = [
            info.event.start.toISOString().split('T')[0],
            info.event.start.toISOString().split('T')[1].substring(0, 5)
        ].join('T');

        let data_end = [
            info.event.end.toISOString().split('T')[0],
            info.event.end.toISOString().split('T')[1].substring(0, 5)
        ].join('T');

        document.querySelector('.modal-title h3').innerHTML = 'Editar Evento';
        document.querySelector('#id').value = info.event.id;
        document.querySelector('#title').value = info.event.title;
        document.querySelector('#color').value = info.event.backgroundColor;
        document.querySelector('#start').value = data_start;
        document.querySelector('#end').value = data_end;
        document.querySelector('#view').value = info.event.extendedProps.view || (bodyClass === 'index-page' ? 'monthly' : (bodyClass === 'sisrot-page' ? 'weekly' : 'daily')); // Ajuste conforme necessário
        document.querySelector('.btn-delete').classList.remove('hidden');
    }

    const moverEvento = (info) => {
        let id = info.event.id;
        let title = info.event.title;
        let color = info.event.backgroundColor;
        let start = info.event.start.toISOString().substring(0, 19);
        let end = info.event.end.toISOString().substring(0, 19);
        let view = document.querySelector('#view').value; // Captura a visualização atual

        let data = { id, title, color, start, end, view };

        let urlEncodedData = Object.keys(data).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key])).join('&');

        var ajax = new XMLHttpRequest();
        ajax.open('POST', 'action-event.php', true);
        ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        ajax.send(urlEncodedData);

        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var data = ajax.responseText;
                // Atualizar a página ou manipular a resposta conforme necessário
            }
        }
    }

    document.querySelector('.modal-close').addEventListener('click', () => fecharModal());

    modal.addEventListener('click', function (event) {
        if (event.target == modal) {
            fecharModal();
        }
    });

    function fecharModal() {
        modal.style.transition = 'opacity 300ms';
        modal.style.opacity = 0;
        setTimeout(() => modal.classList.add('hidden'), 300);
    }
});
