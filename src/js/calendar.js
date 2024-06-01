document.addEventListener('DOMContentLoaded', function() {
    const calendar = document.getElementById('calendar');
    const currentMonth = document.getElementById('currentMonth');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const selectedDayLabel = document.getElementById('selectedDayLabel');
    const selectedDateInput = document.getElementById('selectedDate');
    const selectedTimeInput = document.getElementById('selectedTime');
    const horas = document.querySelectorAll('.horas div');
    
    let date = new Date();
    date.setDate(1);

    function renderCalendar() {
        calendar.innerHTML = '';
        const month = date.getMonth();
        const year = date.getFullYear();
        currentMonth.textContent = date.toLocaleString('es-ES', { month: 'long', year: 'numeric' });

        const firstDayIndex = date.getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();
        const prevLastDay = new Date(year, month, 0).getDate();

        for (let i = 0; i < firstDayIndex; i++) {
            const day = document.createElement('div');
            day.classList.add('day');
            day.textContent = prevLastDay - firstDayIndex + 1 + i;
            day.style.opacity = '0.5';
            calendar.appendChild(day);
        }

        for (let i = 1; i <= lastDay; i++) {
            const day = document.createElement('div');
            day.classList.add('day');
            day.textContent = i;
            day.addEventListener('click', () => {
                const selectedDate = new Date(year, month, i);
                const dayName = selectedDate.toLocaleDateString('es-ES', { weekday: 'long' });
                const monthName = selectedDate.toLocaleDateString('es-ES', { month: 'long' });
                const dayNumber = selectedDate.getDate();
                selectedDayLabel.textContent = `${dayName}, ${monthName} ${dayNumber}`;
                selectedDateInput.value = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
            });
            calendar.appendChild(day);
        }
    }

    function changeMonth(direction) {
        date.setMonth(date.getMonth() + direction);
        renderCalendar();
    }

    prevMonthButton.addEventListener('click', () => changeMonth(-1));
    nextMonthButton.addEventListener('click', () => changeMonth(1));

    horas.forEach(hora => {
        hora.addEventListener('click', () => {
            horas.forEach(h => h.classList.remove('selected'));
            hora.classList.add('selected');
            selectedTimeInput.value = hora.textContent.trim();
        });
    });

    renderCalendar();
});
