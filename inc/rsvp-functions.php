<?php
/**
 * Funciones del sistema RSVP
 * Archivo separado para mejor organización del código
 */

/**
 * Configuración SMTP para WordPress
 */
function configurar_smtp($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.hostinger.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'rsvp@mariaypatrick.com';
    $phpmailer->Password = 'x6?XNnYsO';
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->From = 'rsvp@mariaypatrick.com';
    $phpmailer->FromName = 'Asil & Brenda\'s Wedding';
}

// Hook para WordPress
add_action('phpmailer_init', 'configurar_smtp');

/**
 * Función para enviar email al administrador
 */
function sendAdminEmail($guest_name, $guests, $allergies, $email) {
    $admin_email = 'rsvp@mariaypatrick.com';
    $subject = '✉️ Nuevo RSVP - ' . $guest_name;
    
    // Generar lista detallada por evento
    $event_names = [
        'ceremony' => 'CEREMONY (Dec 13th, 5:00 PM)',
        'reception' => 'RECEPTION (Dec 13th, Following ceremony)',
        'welcome' => 'WELCOME PARTY (Dec 12th, 6:00 PM)',
        'brunch' => 'FAREWELL BRUNCH (Dec 14th, 10:00 AM - 2:00 PM)'
    ];
    
    $total_accepts = 0;
    $total_declines = 0;
    foreach ($guests as $event => $guest_responses) {
        foreach ($guest_responses as $response) {
            if ($response === 'accept') $total_accepts++;
            else $total_declines++;
        }
    }
    
    $message = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #8B9467; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .event-section { margin: 15px 0; padding: 15px; background: white; border-left: 4px solid #8B9467; }
            .guest-item { margin: 5px 0; padding: 8px; background: #f5f5f5; }
            .accept { color: #5A6B3A; font-weight: bold; }
            .decline { color: #cc0000; font-weight: bold; }
            .summary { background: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px; }
            .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>🎉 Nuevo RSVP Recibido</h1>
            <p>Asil & Brenda\'s Wedding</p>
        </div>
        
        <div class="content">
            <div class="summary">
                <h2>📋 Resumen</h2>
                <p><strong>Invitado Principal:</strong> ' . $guest_name . '</p>
                <p><strong>Email:</strong> ' . $email . '</p>
                <p><strong>Total Aceptaciones:</strong> <span class="accept">' . $total_accepts . '</span></p>
                <p><strong>Total Declinaciones:</strong> <span class="decline">' . $total_declines . '</span></p>
                <p><strong>Fecha:</strong> ' . date('Y-m-d H:i:s') . '</p>
            </div>
            
            <h2>📅 Confirmaciones por Evento</h2>';
    
    foreach ($event_names as $event_id => $event_name) {
        $message .= '<div class="event-section">';
        $message .= '<h3>' . $event_name . '</h3>';
        if (isset($guests[$event_id])) {
            foreach ($guests[$event_id] as $name => $response) {
                $class = $response === 'accept' ? 'accept' : 'decline';
                $status = $response === 'accept' ? '✅ ACEPTA' : '❌ DECLINA';
                $message .= '<div class="guest-item"><span class="' . $class . '">' . $name . ': ' . $status . '</span></div>';
            }
        }
        $message .= '</div>';
    }
    
    $message .= '
            <div class="event-section">
                <h3>🍽️ Alergias/Restricciones</h3>
                <p>' . ($allergies ?: 'Ninguna reportada') . '</p>
            </div>
        </div>
        
        <div class="footer">
            <p>Este email fue generado automáticamente por el sistema RSVP</p>
            <p>Asil & Brenda\'s Wedding - December 13th, 2025 - Cartagena, Colombia</p>
        </div>
    </body>
    </html>';
    
    $headers = [
        'From: rsvp@mariaypatrick.com',
        'Reply-To: ' . $email,
        'Content-Type: text/html; charset=UTF-8'
    ];
    
    return wp_mail($admin_email, $subject, $message, $headers);
}

/**
 * Función para enviar email al invitado
 */
function sendGuestEmail($guest_name, $email) {
    $subject = '💌 Confirmación RSVP - Asil & Brenda\'s Wedding';
    
    $message = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: "Georgia", serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background: #f5f5f5; }
            .container { max-width: 600px; margin: 0 auto; background: white; }
            .header { background: linear-gradient(135deg, #8B9467, #A5B375); color: white; padding: 40px 30px; text-align: center; }
            .header h1 { margin: 0 0 10px 0; font-size: 28px; font-weight: normal; }
            .header p { margin: 0; font-size: 16px; opacity: 0.9; }
            .content { padding: 40px 30px; }
            .greeting { font-size: 20px; color: #8B9467; margin-bottom: 20px; text-align: center; }
            .message { font-size: 16px; line-height: 1.8; margin-bottom: 30px; text-align: center; }
            .events-container { margin: 30px 0; }
            .event { margin: 20px 0; padding: 20px; background: #f9f9f9; border-left: 4px solid #8B9467; }
            .event-title { font-size: 18px; color: #8B9467; font-weight: bold; margin-bottom: 10px; }
            .event-details { font-size: 14px; color: #666; line-height: 1.6; }
            .event-details strong { color: #333; }
            .footer { background: #8B9467; color: white; padding: 30px; text-align: center; }
            .footer h3 { margin: 0 0 15px 0; font-size: 20px; }
            .footer p { margin: 5px 0; font-size: 14px; opacity: 0.9; }
            .divider { height: 2px; background: linear-gradient(to right, transparent, #8B9467, transparent); margin: 30px 0; }
            .contact-info { background: #e8f5e8; padding: 20px; margin: 20px 0; text-align: center; font-size: 14px; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🎉 ¡Gracias por tu RSVP!</h1>
                <p>Asil & Brenda\'s Wedding</p>
            </div>
            
            <div class="content">
                <div class="greeting">
                    Estimado/a ' . $guest_name . ',
                </div>
                
                <div class="message">
                    ¡Hemos recibido tu confirmación y estamos emocionados de compartir este día especial contigo!<br><br>
                    Tu presencia hará que nuestra celebración sea aún más memorable.
                </div>
                
                <div class="divider"></div>
                
                <h2 style="text-align: center; color: #8B9467; margin-bottom: 25px;">📅 Detalles de los Eventos</h2>
                
                <div class="events-container">
                    <div class="event">
                        <div class="event-title">💒 CEREMONY</div>
                        <div class="event-details">
                            <strong>Fecha:</strong> December 13th, 2025<br>
                            <strong>Hora:</strong> 5:00 P.M.<br>
                            <strong>Lugar:</strong> Baluarte San Francisco Javier<br>
                            <strong>Dress Code:</strong> Black Tie (Tropical Elegance)
                        </div>
                    </div>
                    
                    <div class="event">
                        <div class="event-title">🎉 RECEPTION</div>
                        <div class="event-details">
                            <strong>Fecha:</strong> December 13th, 2025<br>
                            <strong>Hora:</strong> Following the ceremony<br>
                            <strong>Lugar:</strong> Sofitel Legend Santa Clara - Ballroom
                        </div>
                    </div>
                    
                    <div class="event">
                        <div class="event-title">🍸 WELCOME PARTY</div>
                        <div class="event-details">
                            <strong>Fecha:</strong> December 12th, 2025<br>
                            <strong>Hora:</strong> 6:00 P.M.<br>
                            <strong>Lugar:</strong> Sofitel Legend Santa Clara - SPA TERRACE<br>
                            <strong>Dress Code:</strong> Cocktail Casual (Sunkissed Soirée)
                        </div>
                    </div>
                    
                    <div class="event">
                        <div class="event-title">🥐 FAREWELL BRUNCH</div>
                        <div class="event-details">
                            <strong>Fecha:</strong> December 14th, 2025<br>
                            <strong>Hora:</strong> 10:00 A.M. - 2:00 P.M.<br>
                            <strong>Lugar:</strong> Sofitel Legend Santa Clara - RESTAURANT 1621<br>
                            <strong>Dress Code:</strong> Casual Attire
                        </div>
                    </div>
                </div>
                
                <div class="contact-info">
                    <strong>💡 Información Importante</strong><br>
                    Si tienes alguna pregunta o necesitas hacer cambios en tu RSVP, no dudes en contactarnos.<br>
                    ¡Estamos aquí para ayudarte!
                </div>
            </div>
            
            <div class="footer">
                <h3>¡Nos vemos en Cartagena! 🇨🇴</h3>
                <p>Con amor,</p>
                <p><strong>Asil & Brenda</strong></p>
                <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.3);">
                    <p style="font-size: 12px;">December 13th, 2025 • Cartagena de Indias, Colombia</p>
                    <p style="font-size: 12px;">Este es un mensaje automático de confirmación</p>
                </div>
            </div>
        </div>
    </body>
    </html>';
    
    $headers = [
        'From: rsvp@mariaypatrick.com',
        'Content-Type: text/html; charset=UTF-8'
    ];
    
    return wp_mail($email, $subject, $message, $headers);
}

/**
 * Manejar peticiones AJAX del RSVP
 */
function handle_rsvp_ajax() {
    if ($_POST && isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if ($action === 'get_guests') {
            global $rsvp_invitados;
            header('Content-Type: application/json');
            echo json_encode($rsvp_invitados);
            exit;
        }
        
        if ($action === 'submit_rsvp') {
            try {
                // Obtener datos
                $guest_name = $_POST['guest_name'] ?? '';
                $guests_json = $_POST['guests'] ?? '{}';
                $allergies = $_POST['allergies'] ?? '';
                $email = $_POST['email'] ?? '';
                
                // Debug: Log datos recibidos RAW
                error_log('DATOS RAW: ' . print_r($_POST, true));
                error_log('JSON RAW LENGTH: ' . strlen($guests_json));
                error_log('JSON RAW FIRST 500 CHARS: ' . substr($guests_json, 0, 500));
                
                // Múltiples intentos de limpiar y decodificar JSON
                $guests = null;
                $attempts = [
                    $guests_json, // Original
                    trim($guests_json), // Trimmed
                    stripslashes($guests_json), // Sin slashes
                    trim(stripslashes($guests_json)), // Ambos
                    html_entity_decode($guests_json), // Decode entities
                    urldecode($guests_json) // URL decode
                ];
                
                foreach ($attempts as $i => $attempt) {
                    error_log("Intento {$i}: " . substr($attempt, 0, 100));
                    $guests = json_decode($attempt, true);
                    if ($guests !== null && is_array($guests)) {
                        error_log("✅ JSON decodificado exitosamente en intento {$i}");
                        break;
                    }
                    error_log("❌ Intento {$i} falló: " . json_last_error_msg());
                }
                
                // Debug: Resultado final
                error_log('JSON decode result: ' . print_r($guests, true));
                error_log('Final JSON error: ' . json_last_error_msg());
                error_log('Is array check: ' . ($guests ? 'true' : 'false'));
                error_log('Array check: ' . (is_array($guests) ? 'true' : 'false'));
                
                // Validaciones mejoradas
                if (empty($guest_name)) {
                    throw new Exception('Falta el nombre del invitado principal');
                }
                
                if (empty($email)) {
                    throw new Exception('Falta el email');
                }
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    throw new Exception('Email inválido');
                }
                
                // Validación final
                if ($guests === null || $guests === false || !is_array($guests)) {
                    error_log('❌ TODOS LOS INTENTOS DE JSON FALLARON');
                    error_log('Raw JSON completo: ' . $guests_json);
                    throw new Exception('Error al decodificar JSON de invitados - formato inválido');
                }
                
                if (!is_array($guests)) {
                    throw new Exception('Los datos de invitados no son un array válido');
                }
                
                if (count($guests) === 0) {
                    throw new Exception('No hay datos de eventos en el RSVP');
                }
                
                // Log de datos procesados
                error_log('RSVP procesado exitosamente: ' . print_r([
                    'guest' => $guest_name,
                    'email' => $email,
                    'allergies' => $allergies,
                    'guests_count' => count($guests)
                ], true));
                
                // Enviar emails reales
                $admin_sent = sendAdminEmail($guest_name, $guests, $allergies, $email);
                $guest_sent = sendGuestEmail($guest_name, $email);
                
                // Respuesta con estado de emails
                header('Content-Type: application/json');
                echo json_encode([
                    'success' => true, 
                    'message' => 'RSVP enviado correctamente',
                    'debug' => [
                        'guest_name' => $guest_name,
                        'email' => $email,
                        'guests_events' => array_keys($guests),
                        'admin_email_sent' => $admin_sent,
                        'guest_email_sent' => $guest_sent
                    ]
                ]);
                
            } catch (Exception $e) {
                error_log('ERROR RSVP: ' . $e->getMessage());
                header('Content-Type: application/json');
                echo json_encode(['success' => false, 'message' => $e->getMessage()]);
            }
            exit;
        }
    }
} 