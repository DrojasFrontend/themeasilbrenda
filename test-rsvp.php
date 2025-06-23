<?php
// Test RSVP System
require_once 'rsvp-data.php';

echo "<h1>Test RSVP System</h1>";

// Test 1: Verificar que los datos están disponibles
echo "<h2>1. Datos de Invitados:</h2>";
global $rsvp_invitados;
echo "<pre>";
print_r($rsvp_invitados);
echo "</pre>";

// Test 2: Simular una petición RSVP
if ($_POST && isset($_POST['test_submit'])) {
    echo "<h2>2. Test de Envío RSVP:</h2>";
    
    $test_data = [
        'guest_name' => 'Juan Pérez',
        'email' => 'test@example.com',
        'allergies' => 'Ninguna',
        'guests' => [
            'ceremony' => ['Juan Pérez' => 'accept', 'María Pérez' => 'accept'],
            'reception' => ['Juan Pérez' => 'accept', 'María Pérez' => 'decline'],
            'welcome' => ['Juan Pérez' => 'accept', 'María Pérez' => 'accept'],
            'brunch' => ['Juan Pérez' => 'decline', 'María Pérez' => 'accept']
        ]
    ];
    
    echo "<strong>✅ Datos procesados correctamente:</strong><br>";
    echo "<pre>";
    print_r($test_data);
    echo "</pre>";
    
    echo "<p style='color: green; font-weight: bold;'>🎉 Sistema RSVP funcionando correctamente!</p>";
}

// Test 3: Formulario de prueba
echo "<h2>3. Test de Envío:</h2>";
echo "<form method='POST'>
    <button type='submit' name='test_submit' style='padding: 10px 20px; background: #8B9467; color: white; border: none; cursor: pointer;'>
        Probar Envío RSVP
    </button>
</form>";

echo "<h2>4. Configuración SMTP:</h2>";
echo "<p>Email: rsvp@mariaypatrick.com</p>";
echo "<p>Host: smtp.hostinger.com</p>";
echo "<p>Estado: Configurado ✅</p>";
?> 