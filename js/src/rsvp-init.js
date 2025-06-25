/**
 * Inicialización y manejo del formulario RSVP
 */

// Variables globales del RSVP
let rsvpState = {
    currentStep: 1,
    selectedGuest: '',
    guestList: [],
    rsvpData: {
        ceremony: {},
        reception: {},
        welcome: {},
        brunch: {}
    }
};

// Configuración de eventos
const rsvpEvents = [
    { id: 'ceremony', step: 2, name: 'CEREMONY' },
    { id: 'reception', step: 3, name: 'RECEPTION' },
    { id: 'welcome', step: 4, name: 'WELCOME PARTY' },
    { id: 'brunch', step: 5, name: 'FAREWELL BRUNCH' }
];

// Datos de invitados (embebidos directamente)
const invitedGuests = {
    'Asil Kalkavan': ['Asil Kalkavan'],
    'Miguel Miguel': ['Fanny Solano', 'Daniel Rojas'],
    'Fanny Solano': ['Miguel Miguel', 'Daniel Rojas'],
    'Daniel Rojas': ['Fanny Solano', 'Miguel Miguel'],
    'Jonah Kaye': ['Jonah Kaye', 'Jessica Kranz'],
    'Samuel Kaye': ['Samuel Kaye', 'Eliza Weiss'],
    'Howard Kaye': ['Howard Kaye', 'Andrea Kaye'],
    'David Horrowitz': ['David Horrowitz', 'Pamela Horrowitz'],
    'Jackie Kaye': ['Jackie Kaye'],
    'Chad Gottsegen': ['Chad Gottsegen', 'Carly Gottsegen'],
    'Steven Gottsegen': ['Steven Gottsegen', 'Ellen Gottsegen'],
    'Maddie Gottsegen': ['Maddie Gottsegen'],
    'Matthew Benedict': ['Matthew Benedict', 'Rachel Benedict'],
    'Adam Peters': ['Adam Peters', 'Maria Pacheco'],
    'Gary Peters': ['Gary Peters', 'Cecilia Peters'],
    'Jason Shein': ['Jason Shein', 'Brenda Sanchez'],
    'Zachary Charlse': ['Zachary Charlse', 'Maddie Levine'],
    'Sean Mooney': ['Sean Mooney', 'Brooke Mooney'],
    'Robert Mooney': ['Robert Mooney', 'Rosemarie Mooney'],
    'Ross Weisman': ['Ross Weisman'],
    'Jason Weprin': ['Jason Weprin'],
    'William Weprin': ['William Weprin', 'Barbara Weprin'],
    'Jonathan Childs': ['Jonathan Childs', 'Gracie Tenney'],
    'Kevin Scanlan': ['Kevin Scanlan', 'Kayla Brannen'],
    'Corey Workman': ['Corey Workman', 'Jennifer Workman'],
    'Michael Clory': ['Michael Clory', 'Deanna Puchalski'],
    'Thomas Cardoso': ['Thomas Cardoso', 'Hunter Cardoso'],
    'Gabe Estevez': ['Gabe Estevez', 'Alexa Guerra'],
    'Mark Snellman': ['Mark Snellman', 'Morgan Williams'],
    'Artem Kondratiev': ['Artem Kondratiev', 'Hannah Dukes'],
    'Sam Gross': ['Sam Gross', 'Avigaelle-Hanna Amar'],
    'Augustus Eleftherio': ['Augustus Eleftherio', 'Erin Eleftherio'],
    'Christopher Palmer': ['Christopher Palmer', 'Joelle Palmer'],
    'Blaine Granger': ['Blaine Granger', 'Izzy Granger'],
    'Jakob Goettke': ['Jakob Goettke', 'Camelia Goettke'],
    'Mario Cardenas': ['Mario Cardenas', 'Amy Yi'],
    'Eric Cantor': ['Eric Cantor'],
    'Brian Shirzad': ['Brian Shirzad', 'Ana Basgan'],
    'Jacob Werner': ['Jacob Werner', 'Taryn Fulford'],
    'Ryan Power': ['Ryan Power', 'Leah Silver'],
    'Anthony Mendoza': ['Anthony Mendoza', 'Allison Mendoza'],
    'Connor Lipin': ['Connor Lipin'],
    'Michael O\'Malley': ['Michael O\'Malley', 'Madison Sieli'],
    'Eddie Cantor': ['Eddie Cantor'],
    'Tyler Knight': ['Tyler Knight'],
    'Taylor Aguirre': ['Taylor Aguirre', 'Lindy Aguirre'],
    'Thiel Ben-naim': ['Thiel Ben-naim', 'Michelle Ben-naim'],
    'Izak Ben-naim': ['Izak Ben-naim', 'Yeni Ben-naim', 'Amitay Ben-naim', 'Chloe Amar'],
    'Jonathan Bentata': ['Jonathan Bentata', 'Linoy Bentata'],
    'Yilmaz Kalkavan': ['Yilmaz Kalkavan', 'Lisa Kalkavan'],
    'Cem Kalkavan': ['Cem Kalkavan'],
    'Muammer Ihsan Kalkavan': ['Muammer Ihsan Kalkavan'],
    'Nicholas Nace': ['Nicholas Nace', 'Amy Nace', 'Alexander Nace', 'Nicholas Nace'],
    'Bulent Kodanaz': ['Bulent Kodanaz', 'Erika Bodnar'],
    'Jared Goldstern': ['Jared Goldstern', 'Erica Maltz'],
    'Jacob Greenberg': ['Jacob Greenberg', 'Michelle Ciampa'],
    'Corey Shapiro': ['Corey Shapiro'],
    'Zachary Picon': ['Zachary Picon', 'Michelle Corvelli'],
    'Jeffrey Levin': ['Jeffrey Levin', 'Alexandra Gange'],
    'Michael Merijan': ['Michael Merijan'],
    'Keith Selvin': ['Keith Selvin'],
    'Michael Larkin': ['Michael Larkin'],
    'Taylor Larsen': ['Taylor Larsen', 'Zara Silverberg'],
    'Rebecca Parrish': ['Rebecca Parrish'],
    'Lucas Baillargeon': ['Lucas Baillargeon', 'Meghan Bealka'],
    'Kyle Hancock': ['Kyle Hancock', 'Jessica Childs'],
    'Brandon Perry': ['Brandon Perry', 'Jackie Perry'],
    'Mirce Curkoski': ['Mirce Curkoski', 'Ally Curkoski'],
    'Igor Reizenson': ['Igor Reizenson', 'Alla Alpert'],
    'Michael Montante': ['Michael Montante', 'Taylor Levin'],
    'Jason Foland': ['Jason Foland', 'Amber Foland'],
    'Benjamin Pittari': ['Benjamin Pittari', 'Elaine Pittari'],
    'Marcy Heuman': ['Marcy Heuman'],
    'Jane Erickson': ['Jane Erickson'],
    'Mark Erickson': ['Mark Erickson', 'Rachel Erickson'],
    'Robert Volk': ['Robert Volk'],
    'Gregory McLaughlin': ['Gregory McLaughlin', 'Theresa McLaughlin'],
    'Remy Jeanneau': ['Remy Jeanneau'],
    'Edward J Sr. Lynch': ['Edward J Sr. Lynch', 'Jennifer Lynch', 'Edward J Lynch, Jr.'],
    'Matthew Dugan': ['Matthew Dugan', 'Ruth Dugan'],
    'Evan Butters': ['Evan Butters', 'Vanessa Gutierrez'],
    'Jonathan Rubin': ['Jonathan Rubin'],
    'Cody Waterman': ['Cody Waterman'],
    'Skye Waterman': ['Skye Waterman', 'Samantha Schepps'],
    'Carl Cooper': ['Carl Cooper', 'Katt Cooper'],
    'Laurence Benedict': ['Laurence Benedict', 'Lisa Benedict'],
    'Britt Williams': ['Britt Williams', 'Dena Williams'],
    'Sinjin Cohen': ['Sinjin Cohen', 'Hannah Prusack'],
    'Jovan Lawson': ['Jovan Lawson'],
    'Greg Gibbons': ['Greg Gibbons', 'Kimberlee Gibbons'],
    'Dmitry Kaplin': ['Dmitry Kaplin', 'Dianna Melman'],
    'Vladlen Kivovich': ['Vladlen Kivovich', 'Irene Zhebrak', 'Allen Kaplin'],
    'Peter Kaplin': ['Peter Kaplin', 'Adelya Yanovitskaya'],
    'Leo Kaplin': ['Leo Kaplin', 'Olesya Kaplin', 'Ariella Kaplin', 'Ethan Kaplin'],
    'Sofia Melman': ['Sofia Melman'],
    'Nella Margulis': ['Nella Margulis'],
    'Valentin Orlik': ['Valentin Orlik', 'Kira Orlik'],
    'Alex Buczynski': ['Alex Buczynski', 'Gabriella Kivovich'],
    'Adam Orenzokowski': ['Adam Orenzokowski', 'Jamie Lorenz'],
    'Boris Sklarevsky': ['Boris Sklarevsky', 'Yalina Zhebrak'],
    'Semen Khinich': ['Semen Khinich', 'Anna Aloyets'],
    'Roman Matlin': ['Roman Matlin', 'Irene Matlin'],
    'Felix Vron': ['Felix Vron', 'Kiralina Vron'],
    'Boris Roginsky': ['Boris Roginsky', 'Raya Sirotkin', 'Lenny Roginsky', 'Gina Roginsky'],
    'Leo Dikerman': ['Leo Dikerman', 'Liana Dikerman'],
    'Anatoly Yurovitsky': ['Anatoly Yurovitsky', 'Geta Yurovitsky'],
    'Alexander Yurovitsky': ['Alexander Yurovitsky'],
    'Ilya Lyubarsky': ['Ilya Lyubarsky', 'Lena Lyubarsky', 'Danny Lyubarsky', 'Nicky Lyubarsky'],
    'Joseph De Bona': ['Joseph De Bona', 'Gera De Bona'],
    'Vitaly Shalumov': ['Vitaly Shalumov', 'Oksana Shalumov'],
    'Travis Spokes': ['Travis Spokes', 'Victoria Spokes'],
    'Shawn Yunayev': ['Shawn Yunayev', 'Inna Yunayev'],
    'Anton Orlik': ['Anton Orlik', 'Jamie Orlik', 'AJ Orlik'],
    'Alex Orlik': ['Alex Orlik', 'Irina Orlik'],
    'Sergey Orlik': ['Sergey Orlik', 'Tanya Orlik', 'Nika Orlik'],
    'Nicolas Anderson': ['Nicolas Anderson', 'Victoria Orlik'],
    'Jacob Zhebrak': ['Jacob Zhebrak', 'Alla Zhebrak'],
    'Roman Zhebrak': ['Roman Zhebrak', 'Alla Zhebrak'],
    'Mark Zhebrak': ['Mark Zhebrak'],
    'Doug Owen': ['Doug Owen', 'Laura Zhebrak', 'Max Owen', 'Mason Owen'],
    'Vlad Bregman': ['Vlad Bregman', 'Tatyana Katova'],
    'Arthur Melman': ['Arthur Melman', 'Blake Melman'],
    'David Melman': ['David Melman', 'Marina Melman', 'Jayden Melman', 'Benji Melman'],
    'Felix Braziler': ['Felix Braziler', 'Sofia Braziler'],
    'Anatoly Fisher': ['Anatoly Fisher', 'Anna Fisher', 'Liza Fisher', 'Alex Fisher'],
    'John Becht': ['John Becht', 'Lolita Becht'],
    'Alex Melman': ['Alex Melman', 'Yana Melman'],
    'Craig Aloyets': ['Craig Aloyets', 'Natasha Aloyets'],
    'Max Aloyets': ['Max Aloyets', 'Marina Aloyets'],
    'Vlad Antonovsky': ['Vlad Antonovsky', 'Jane Antonovsky'],
    'Isaak Shalumov': ['Isaak Shalumov', 'Raya Shalumov'],
    'Natasha Fomenko': ['Natasha Fomenko'],
    'Michael Zhebrak': ['Michael Zhebrak', 'Ashley Zhebrak'],
    'Vladimir Yanovitsky': ['Vladimir Yanovitsky', 'Natalia Yanovitsky'],
    'Matt Galinski': ['Matt Galinski', 'Lily Poor'],
    'Carl Russo': ['Carl Russo', 'Sami Trolli'],
    'Chaz Hermanowski': ['Chaz Hermanowski'],
    'George Ponczek': ['George Ponczek', 'Lisa Ponczek'],
    'Tim Shane': ['Tim Shane', 'Susan Shane'],
    'Kemal Ilaldi': ['Kemal Ilaldi'],
    'Kerim Basakinci': ['Kerim Basakinci', 'Arzum Basakinci', 'Emir Basakinci'],
    'Nicola Sert': ['Nicola Sert', 'Yunus Sert', 'Emre Sert'],
    'Yurdal Sert': ['Yurdal Sert', 'Ates Sert'],
    'Aysil Koyuncuoglu': ['Aysil Koyuncuoglu'],
    'Robert Gothier': ['Robert Gothier', 'Lisa Gothier'],
    'Sukru Mutlu': ['Sukru Mutlu', 'Huriye Mutlu'],
    'Kadri Igdebeli': ['Kadri Igdebeli', 'Nicole Igdebeli'],
    'Ugur Isik': ['Ugur Isik', 'Lal Isik'],
    'Denildo Souza': ['Denildo Souza', 'Alessandra Souza'],
    'Yeliz Kalkavan': ['Yeliz Kalkavan', 'Onur Kalkavan'],
    'Omer Balto': ['Omer Balto', 'Defne Balto'],
    'Ugur Pisan': ['Ugur Pisan', 'Gulsen Pisan'],
    'Tumer Tumay': ['Tumer Tumay', 'Berrin Tumay'],
    'Alawi Kayal': ['Alawi Kayal', 'Yasmine Kayal'],
    'Majid Kayal': ['Majid Kayal'],
    'Ola Kayal': ['Ola Kayal'],
    'Amro Kayal': ['Amro Kayal', 'Rafeef Zahran', 'Abdallah Kayal'],
    'Caglar Unal': ['Caglar Unal'],
    'Elbridge Amos Stuart II': ['Elbridge Amos Stuart II']
};

/**
 * Funciones principales del RSVP
 */
export function initRSVPForm() {
    console.log('🎉 Inicializando formulario RSVP');
    
    // Elementos DOM
    const rsvpContainer = document.getElementById('rsvp-form-container');
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const closeButton = document.querySelector('.rsvp-form-close');
    
    if (!rsvpContainer) {
        return;
    }
    
    // Event listeners principales
    setupRSVPEventListeners();
    
    // Event listener directo para el botón de cerrar
    if (closeButton) {
        closeButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeRSVPForm();
        });
    } else {
        console.warn('⚠️ Botón de cerrar no encontrado');
    }
    
    // Búsqueda solo con botón (sin búsqueda automática)
    // Removed automatic search listeners
    
}

function setupRSVPEventListeners() {
    // Event listeners mediante delegación de eventos
    document.addEventListener('click', function(e) {
        // Abrir formulario RSVP
        if (e.target.matches('.rsvp-open-btn')) {
            e.preventDefault();
            openRSVPForm();
        }
        
        // Cerrar formulario - verificar tanto el botón como el span interno
        if (e.target.matches('.rsvp-form-close') || e.target.closest('.rsvp-form-close')) {
            e.preventDefault();
            closeRSVPForm();
        }
        
        // Cerrar al hacer click en el overlay de fondo
        if (e.target.matches('#rsvp-form-container')) {
            closeRSVPForm();
        }
        
        // Botón home (cerrar modal)
        if (e.target.matches('.rsvp-home-btn')) {
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
        
        // Botón buscar invitación
        if (e.target.matches('.rsvp-find-btn')) {
            findInvitation();
        }
    });
}

// Abrir formulario RSVP
function openRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = new bootstrap.Modal(rsvpContainer);
        modal.show();
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'block';
        rsvpContainer.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    showStep(1);
}

// Cerrar formulario RSVP
function closeRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    if (!rsvpContainer) {
        console.error('❌ No se encontró el contenedor RSVP');
        return;
    }
    
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = bootstrap.Modal.getInstance(rsvpContainer);
        if (modal) {
            modal.hide();
        }
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'none';
        rsvpContainer.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
    resetForm();
}

// Resetear formulario
function resetForm() {
    rsvpState.currentStep = 1;
    rsvpState.selectedGuest = '';
    rsvpState.guestList = [];
    rsvpState.rsvpData = {
        ceremony: {},
        reception: {},
        welcome: {},
        brunch: {}
    };
    
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    if (searchInput) searchInput.value = '';
    if (searchResults) {
        searchResults.style.display = 'none';
        searchResults.innerHTML = '';
    }
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
    
    rsvpState.currentStep = step;
    
    // Configurar paso específico
    if (step >= 2 && step <= 5) {
        const event = rsvpEvents.find(e => e.step === step);
        if (event) {
            setupEventStep(event.id);
        }
    } else if (step === 6) {
        setupAdditionalInfoStep();
    }
}

// Búsqueda de invitados
function searchGuests() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const query = searchInput.value.toLowerCase().trim();
    
    
    if (query.length < 1) {
        searchResults.style.display = 'none';
        return;
    }
    
    const allGuests = Object.keys(invitedGuests);
    
    // Separar coincidencias exactas, que empiezan con la query, y que contienen la query
    const exactMatches = allGuests.filter(name => 
        name.toLowerCase() === query
    );
    
    const startsWithMatches = allGuests.filter(name => 
        name.toLowerCase().startsWith(query) && !exactMatches.includes(name)
    );
    
    const containsMatches = allGuests.filter(name => 
        name.toLowerCase().includes(query) && 
        !exactMatches.includes(name) && 
        !startsWithMatches.includes(name)
    );
    
    // Combinar resultados por prioridad y limitar a 8 resultados máximo
    const matches = [...exactMatches, ...startsWithMatches, ...containsMatches].slice(0, 8);
    
    
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No results found</div>';
        searchResults.style.display = 'block';
    }
}

// Función para buscar invitación desde el botón
function findInvitation() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const inputValue = searchInput.value.trim();
    
    if (!inputValue) {
        alert('Please enter your full name');
        return;
    }
    
    const query = inputValue.toLowerCase();
    const allGuests = Object.keys(invitedGuests);
    
    // Solo buscar coincidencias exactas del nombre completo
    const matches = allGuests.filter(name => 
        name.toLowerCase() === query
    );
    
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No results found</div>';
        searchResults.style.display = 'block';
    }
}

// Seleccionar invitado - función global para onclick
window.selectGuest = function(guestName) {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    
    rsvpState.selectedGuest = guestName;
    rsvpState.guestList = invitedGuests[guestName] || [];
    searchInput.value = guestName;
    searchResults.style.display = 'none';
    
    // Inicializar datos RSVP para cada evento
    rsvpState.guestList.forEach(guest => {
        rsvpState.rsvpData.ceremony[guest] = 'pending';
        rsvpState.rsvpData.reception[guest] = 'pending';
        rsvpState.rsvpData.welcome[guest] = 'pending';
        rsvpState.rsvpData.brunch[guest] = 'pending';
    });
    
    showStep(2);
};

// Configurar paso de evento específico
function setupEventStep(eventId) {
    const container = document.getElementById(`guest-list-${eventId}`);
    if (!container) return;
    
    let html = '';
    
    rsvpState.guestList.forEach((guest, index) => {
        html += `
            <div class="rsvp-guest-item" data-guest-index="${index}">
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <div class="rsvp-guest-name fs-xl-4 font-secondary fs-3">${guest}</div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="rsvp-btn w-100 border-1 font-secondary py-2 px-2" data-guest-name="${guest}" data-response="accept" data-event="${eventId}">Accept</button>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="rsvp-btn rsvp-btn-outline rsvp-btn w-100 border-1 font-secondary bg-white-100 py-2 px-2" data-guest-name="${guest}" data-response="decline" data-event="${eventId}">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    // Solo necesita asegurar que los elementos existen
    if (allergyInput) allergyInput.value = allergyInput.value || '';
    if (emailInput) emailInput.value = emailInput.value || '';
}

// Establecer respuesta del invitado
function setGuestResponse(guestName, response, eventId) {
    rsvpState.rsvpData[eventId][guestName] = response;
    updateEventButtons(eventId);
}

// Actualizar botones de evento específico
function updateEventButtons(eventId) {
    
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
            btn.style.color = '#767A61';
            btn.style.borderColor = '#767A61';
        } else {
            btn.style.backgroundColor = '#767A61';
            btn.style.color = '#fff';
            btn.style.borderColor = '#767A61';
        }
    });
    
    // Luego marcar los botones seleccionados para este evento
    Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
        const response = rsvpState.rsvpData[eventId][guest];
        if (response === 'pending') return;
        
        // Buscar los botones de este invitado para este evento
        const buttons = container.querySelectorAll(`[data-guest-name="${guest}"][data-event="${eventId}"]`);
        
        buttons.forEach(btn => {
            const btnResponse = btn.getAttribute('data-response');
            
            if (btnResponse === response) {
                // Marcar como activo
                btn.classList.add('active');
                btn.style.backgroundColor = '#fff';
                btn.style.color = '#767A61';
                btn.style.borderColor = '#767A61';
                btn.style.opacity = '1';
            } else {
                // Marcar como inactivo
                btn.style.backgroundColor = '#fff';
                btn.style.color = '#767A61';
                btn.style.borderColor = '#767A61';
                btn.style.opacity = '0.7';
            }
        });
    });
}

// Validar si se puede continuar
function canContinue() {
    // Para eventos (pasos 2-5): Siempre se puede continuar (no es obligatorio responder)
    if (rsvpState.currentStep >= 2 && rsvpState.currentStep <= 5) {
        return true;
    }
    // Para información adicional: Solo email es obligatorio
    if (rsvpState.currentStep === 6) {
        const emailInput = document.getElementById('guest-email');
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
    
    if (rsvpState.currentStep === 6) {
        submitRSVP();
    } else {
        showStep(rsvpState.currentStep + 1);
    }
}

// Ir al paso anterior
function previousStep() {
    if (rsvpState.currentStep > 1) {
        showStep(rsvpState.currentStep - 1);
    }
}

// Enviar RSVP
function submitRSVP() {
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    // Procesar respuestas finales (pending = accept por defecto)
    const processedData = {};
    Object.keys(rsvpState.rsvpData).forEach(eventId => {
        processedData[eventId] = {};
        Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
            // Si no respondió (pending), se asume que va (accept)
            processedData[eventId][guest] = rsvpState.rsvpData[eventId][guest] === 'pending' ? 'accept' : rsvpState.rsvpData[eventId][guest];
        });
    });
    
    const submitData = {
        action: 'submit_rsvp',
        guest_name: rsvpState.selectedGuest,
        guests: processedData,
        allergies: allergyInput.value.trim(),
        email: emailInput.value.trim()
    };
    
    // Mostrar loading
    document.getElementById('step-6').innerHTML = '<div class="rsvp-loading">Enviando...</div>';
    
    // Construir body correctamente
    const formData = new FormData();
    formData.append('action', 'submit_rsvp');
    formData.append('guest_name', rsvpState.selectedGuest);
    formData.append('email', emailInput.value.trim());
    formData.append('allergies', allergyInput.value.trim());
    formData.append('guests', JSON.stringify(processedData));
    
    // Debug: Mostrar lo que se va a enviar
    // for (let [key, value] of formData.entries()) {
    //     console.log(key + ':', value);
    // }
    
    // Debug: Verificar JSON antes de enviar
    const jsonString = JSON.stringify(processedData);
    
    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text(); // Primero como texto para debugging
    })
    .then(text => {
        const data = JSON.parse(text);
        if (data.success) {
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
            alert('MODO LOCAL: RSVP procesado (revisa la consola para ver los datos)');
            showStep(7);
        } else {
            alert('Error al enviar RSVP');
            showStep(6);
        }
    });
} 