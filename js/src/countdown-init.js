import $ from "jquery";

export const initCountdown = (targetDate, containerId) => {
    const container = document.getElementById(containerId);
    
    if (!container) {
        console.error('Contenedor no encontrado:', containerId);
        return;
    }

    // Crear HTML básico
    container.innerHTML = `
        <div class="countdown">
            <div class="d-flex flex-column text-center text-primary-200 fs-xl-1-xxl fs-1">
                <span class="letter-spacing-36" id="${containerId}-days">00</span>
                <label class="fs-xl-3-medium fs-3 text-uppercase">days</label>
            </div>
            <div class="d-flex flex-column text-center text-primary-200 fs-xl-1-xxl fs-1">
                <span class="letter-spacing-36" id="${containerId}-hours">00</span>
                <label class="fs-xl-3-medium fs-3 text-uppercase">hours</label>
            </div>
            <div class="d-flex flex-column text-center text-primary-200 fs-xl-1-xxl fs-1">
                <span class="letter-spacing-36" id="${containerId}-minutes">00</span>
                <label class="fs-xl-3-medium fs-3 text-uppercase">minutes</label>
            </div>
            <div class="d-flex flex-column text-center text-primary-200 fs-xl-1-xxl fs-1">
                <span class="letter-spacing-36" id="${containerId}-seconds">00</span>
                <label class="fs-xl-3-medium fs-3 text-uppercase">seconds</label>
            </div>
        </div>
    `;



    // Función para actualizar el countdown
    function updateCountdown() {
        const now = new Date().getTime();
        const target = new Date(targetDate).getTime();
        const difference = target - now;

        if (difference <= 0) {
            document.getElementById(`${containerId}-days`).textContent = '00';
            document.getElementById(`${containerId}-hours`).textContent = '00';
            document.getElementById(`${containerId}-minutes`).textContent = '00';
            document.getElementById(`${containerId}-seconds`).textContent = '00';
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById(`${containerId}-days`).textContent = days.toString().padStart(2, '0');
        document.getElementById(`${containerId}-hours`).textContent = hours.toString().padStart(2, '0');
        document.getElementById(`${containerId}-minutes`).textContent = minutes.toString().padStart(2, '0');
        document.getElementById(`${containerId}-seconds`).textContent = seconds.toString().padStart(2, '0');
    }

    // Actualizar inmediatamente
    updateCountdown();

    // Actualizar cada segundo
    const interval = setInterval(updateCountdown, 1000);

    // Retornar función para detener el countdown
    return function() {
        clearInterval(interval);
    };
}; 