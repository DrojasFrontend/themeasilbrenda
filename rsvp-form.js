// RSVP Form JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Variables globales
    let currentStep = 1;
    let selectedGuest = '';
    let guestList = [];
    let rsvpData = {
        ceremony: {},
        reception: {},
        welcome: {},
        brunch: {}
    };
    
    // Configuración de eventos
    const events = [
        { id: 'ceremony', step: 2, name: 'CEREMONY' },
        { id: 'reception', step: 3, name: 'RECEPTION' },
        { id: 'welcome', step: 4, name: 'WELCOME PARTY' },
        { id: 'brunch', step: 5, name: 'FAREWELL BRUNCH' }
    ];
    
    // Datos de invitados (embebidos directamente)
    let invitedGuests = {
        'Juan Pérez': ['Juan Pérez', 'María Pérez', 'Pedro Pérez'],
        'Ana García': ['Ana García', 'Carlos García'],
        'Luis Martín': ['Luis Martín', 'Carmen Martín', 'Sofia Martín'],
        'Roberto Silva': ['Roberto Silva', 'Elena Silva'],
        'Patricia López': ['Patricia López', 'Miguel López', 'Isabella López', 'Santiago López']
    };
    
    // Elementos DOM
    const rsvpContainer = document.getElementById('rsvp-form-container');
    const rsvpForm = document.getElementById('rsvp-form');
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const guestListContainer = document.getElementById('guest-list');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    // Abrir formulario RSVP
    function openRSVPForm() {
        rsvpContainer.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        showStep(1);
        console.log('Formulario RSVP abierto. Datos cargados:', invitedGuests);
    }
    
    // Cerrar formulario RSVP
    function closeRSVPForm() {
        rsvpContainer.style.display = 'none';
        document.body.style.overflow = 'auto';
        resetForm();
    }
    
    // Resetear formulario
    function resetForm() {
        currentStep = 1;
        selectedGuest = '';
        guestList = [];
        rsvpData = {
            ceremony: {},
            reception: {},
            welcome: {},
            brunch: {}
        };
        searchInput.value = '';
        searchResults.style.display = 'none';
        searchResults.innerHTML = '';
        if (allergyInput) allergyInput.value = '';
        if (emailInput) emailInput.value = '';
    }
    
    // Mostrar paso específico
    function showStep(step) {
        document.querySelectorAll('.rsvp-form-step').forEach(el => {
            el.classList.remove('active');
        });
        
        const stepElement = document.getElementById(`step-${step}`);
        if (stepElement) {
            stepElement.classList.add('active');
        }
        
        currentStep = step;
        
        // Configurar paso específico
        if (step >= 2 && step <= 5) {
            const event = events.find(e => e.step === step);
            if (event) {
                setupEventStep(event.id);
            }
        } else if (step === 6) {
            setupAdditionalInfoStep();
        }
    }
    
    // Búsqueda de invitados
    function searchGuests() {
        const query = searchInput.value.toLowerCase().trim();
        
        console.log('Buscando:', query);
        console.log('Invitados disponibles:', Object.keys(invitedGuests));
        
        if (query.length < 2) {
            searchResults.style.display = 'none';
            return;
        }
        
        const matches = Object.keys(invitedGuests).filter(name => 
            name.toLowerCase().includes(query)
        );
        
        console.log('Coincidencias encontradas:', matches);
        
        if (matches.length > 0) {
            searchResults.innerHTML = matches.map(name => 
                `<div class="rsvp-search-item" onclick="selectGuest('${name}')">${name}</div>`
            ).join('');
            searchResults.style.display = 'block';
        } else {
            searchResults.innerHTML = '<div class="rsvp-search-item">No se encontraron coincidencias</div>';
            searchResults.style.display = 'block';
        }
    }
    
    // Seleccionar invitado
    function selectGuest(guestName) {
        selectedGuest = guestName;
        guestList = invitedGuests[guestName] || [];
        searchInput.value = guestName;
        searchResults.style.display = 'none';
        
        // Inicializar datos RSVP para cada evento
        guestList.forEach(guest => {
            rsvpData.ceremony[guest] = 'pending';
            rsvpData.reception[guest] = 'pending';
            rsvpData.welcome[guest] = 'pending';
            rsvpData.brunch[guest] = 'pending';
        });
        
        showStep(2);
    }
    
    // Configurar paso de evento específico
    function setupEventStep(eventId) {
        const container = document.getElementById(`guest-list-${eventId}`);
        if (!container) return;
        
        let html = '';
        
        guestList.forEach((guest, index) => {
            html += `
                <div class="rsvp-guest-item" data-guest-index="${index}">
                    <div class="rsvp-guest-name">${guest}</div>
                    <div class="rsvp-guest-buttons">
                        <button type="button" class="rsvp-btn" data-guest-name="${guest}" data-response="accept" data-event="${eventId}">Accept</button>
                        <button type="button" class="rsvp-btn rsvp-btn-outline" data-guest-name="${guest}" data-response="decline" data-event="${eventId}">Decline</button>
                    </div>
                </div>
            `;
        });
        
        container.innerHTML = html;
        
        // Agregar event listeners a los botones
        const responseButtons = container.querySelectorAll('.rsvp-btn');
        responseButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const guestName = this.getAttribute('data-guest-name');
                const response = this.getAttribute('data-response');
                const event = this.getAttribute('data-event');
                setGuestResponse(guestName, response, event);
            });
        });
        
        updateEventButtons(eventId);
    }
    
    // Configurar paso de información adicional
    function setupAdditionalInfoStep() {
        // Solo necesita asegurar que los elementos existen
        if (allergyInput) allergyInput.value = allergyInput.value || '';
        if (emailInput) emailInput.value = emailInput.value || '';
    }
    
    // Establecer respuesta del invitado
    function setGuestResponse(guestName, response, eventId) {
        rsvpData[eventId][guestName] = response;
        console.log('Respuesta establecida:', guestName, response, 'para evento:', eventId);
        console.log('Datos actuales:', rsvpData);
        updateEventButtons(eventId);
    }
    
    // Actualizar botones de evento específico
    function updateEventButtons(eventId) {
        console.log('Actualizando botones para evento:', eventId);
        
        const container = document.getElementById(`guest-list-${eventId}`);
        if (!container) return;
        
        // Primero resetear todos los botones del evento
        const allButtons = container.querySelectorAll('.rsvp-btn');
        allButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.style.backgroundColor = '';
            btn.style.color = '';
            
            // Restaurar estilos por defecto
            if (btn.classList.contains('rsvp-btn-outline')) {
                btn.style.backgroundColor = 'transparent';
                btn.style.color = '#8B9467';
                btn.style.borderColor = '#8B9467';
            } else {
                btn.style.backgroundColor = '#8B9467';
                btn.style.color = 'white';
                btn.style.borderColor = '#8B9467';
            }
        });
        
        // Luego marcar los botones seleccionados para este evento
        Object.keys(rsvpData[eventId]).forEach(guest => {
            const response = rsvpData[eventId][guest];
            if (response === 'pending') return;
            
            // Buscar los botones de este invitado para este evento
            const buttons = container.querySelectorAll(`[data-guest-name="${guest}"][data-event="${eventId}"]`);
            
            buttons.forEach(btn => {
                const btnResponse = btn.getAttribute('data-response');
                
                if (btnResponse === response) {
                    // Marcar como activo
                    btn.classList.add('active');
                    btn.style.backgroundColor = '#5A6B3A';
                    btn.style.color = 'white';
                    btn.style.borderColor = '#5A6B3A';
                    btn.style.opacity = '1';
                    console.log('Botón marcado como activo:', guest, btnResponse, eventId);
                } else {
                    // Marcar como inactivo
                    btn.style.backgroundColor = '#E5E5E5';
                    btn.style.color = '#999';
                    btn.style.borderColor = '#E5E5E5';
                    btn.style.opacity = '0.7';
                }
            });
        });
    }
    
    // Validar si se puede continuar
    function canContinue() {
        // Para eventos (pasos 2-5): Siempre se puede continuar (no es obligatorio responder)
        if (currentStep >= 2 && currentStep <= 5) {
            return true;
        }
        // Para información adicional: Solo email es obligatorio
        if (currentStep === 6) {
            return emailInput && emailInput.value.trim() !== '';
        }
        return true;
    }
    
    // Ir al siguiente paso
    function nextStep() {
        if (!canContinue()) {
            alert('Por favor complete todos los campos requeridos');
            return;
        }
        
        if (currentStep === 6) {
            submitRSVP();
        } else {
            showStep(currentStep + 1);
        }
    }
    
    // Ir al paso anterior
    function previousStep() {
        if (currentStep > 1) {
            showStep(currentStep - 1);
        }
    }
    
    // Enviar RSVP
    function submitRSVP() {
        // Procesar respuestas finales (pending = accept por defecto)
        const processedData = {};
        Object.keys(rsvpData).forEach(eventId => {
            processedData[eventId] = {};
            Object.keys(rsvpData[eventId]).forEach(guest => {
                // Si no respondió (pending), se asume que va (accept)
                processedData[eventId][guest] = rsvpData[eventId][guest] === 'pending' ? 'accept' : rsvpData[eventId][guest];
            });
        });
        
        const submitData = {
            action: 'submit_rsvp',
            guest_name: selectedGuest,
            guests: processedData,
            allergies: allergyInput.value.trim(),
            email: emailInput.value.trim()
        };
        
        // Mostrar loading
        document.getElementById('step-6').innerHTML = '<div class="rsvp-loading">Enviando...</div>';
        
        // Para testing en local - mostrar datos en consola
        console.log('=== DATOS RSVP PARA ENVÍO ===');
        console.log('Invitado principal:', selectedGuest);
        console.log('Email:', emailInput.value.trim());
        console.log('Alergias:', allergyInput.value.trim() || 'Ninguna');
        console.log('Respuestas por evento:', processedData);
        
        // Construir body correctamente
        const formData = new FormData();
        formData.append('action', 'submit_rsvp');
        formData.append('guest_name', selectedGuest);
        formData.append('email', emailInput.value.trim());
        formData.append('allergies', allergyInput.value.trim());
        formData.append('guests', JSON.stringify(processedData));
        
        // Debug: Mostrar lo que se va a enviar
        console.log('FormData enviada:');
        for (let [key, value] of formData.entries()) {
            console.log(key + ':', value);
        }
        
        // Debug: Verificar JSON antes de enviar
        const jsonString = JSON.stringify(processedData);
        console.log('JSON String length:', jsonString.length);
        console.log('JSON String first 200 chars:', jsonString.substring(0, 200));
        console.log('JSON String last 200 chars:', jsonString.substring(jsonString.length - 200));
        
        fetch(window.location.href, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log('Response status:', response.status);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text(); // Primero como texto para debugging
        })
        .then(text => {
            console.log('Response text:', text);
            const data = JSON.parse(text);
            if (data.success) {
                console.log('✅ RSVP enviado exitosamente');
                console.log('Datos confirmados:', data.debug);
                showStep(7);
            } else {
                console.error('❌ Error al enviar RSVP:', data.message);
                alert('Error al enviar RSVP: ' + data.message);
                // Regenerar el paso 6 sin el loading
                showStep(6);
                setupAdditionalInfoStep();
            }
        })
        .catch(error => {
            console.error('❌ Error de conexión:', error);
            // En local, simular éxito para testing
            if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
                console.log('🔧 MODO LOCAL: Simulando envío exitoso');
                alert('MODO LOCAL: RSVP procesado (revisa la consola para ver los datos)');
                showStep(7);
            } else {
                alert('Error al enviar RSVP');
                showStep(6);
            }
        });
    }
    
    // Event listeners
    document.addEventListener('click', function(e) {
        // Abrir formulario RSVP
        if (e.target.matches('.rsvp-open-btn')) {
            e.preventDefault();
            openRSVPForm();
        }
        
        // Cerrar formulario
        if (e.target.matches('.rsvp-form-close')) {
            closeRSVPForm();
        }
        
        // Botón siguiente
        if (e.target.matches('.rsvp-next-btn')) {
            nextStep();
        }
        
        // Botón anterior
        if (e.target.matches('.rsvp-back-btn')) {
            previousStep();
        }
        
        // Botón home
        if (e.target.matches('.rsvp-home-btn')) {
            closeRSVPForm();
        }
    });
    
    // Búsqueda en tiempo real
    if (searchInput) {
        searchInput.addEventListener('input', searchGuests);
    }
    
    // Cerrar al hacer click fuera del modal
    rsvpContainer.addEventListener('click', function(e) {
        if (e.target === rsvpContainer) {
            closeRSVPForm();
        }
    });
    
    // Exponer funciones globalmente
    window.selectGuest = selectGuest;
    window.setGuestResponse = setGuestResponse;
    window.openRSVPForm = openRSVPForm;
    window.closeRSVPForm = closeRSVPForm;
}); 