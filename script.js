document.getElementById('appointmentForm')?.addEventListener('submit', function(event) {
    alert('Janji konsultasi berhasil dibuat!');
});

function loadAppointments() {
    fetch('view_appointments.php')
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector('#appointments tbody');
            tbody.innerHTML = '';
            data.forEach(appointment => {
                const row = document.createElement('tr');
                Object.values(appointment).forEach(text => {
                    const cell = document.createElement('td');
                    cell.textContent = text;
                    row.appendChild(cell);
                });
                tbody.appendChild(row);
            });
        });
}
