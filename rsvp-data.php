<?php
// Datos de invitados para RSVP
$rsvp_invitados = [
    'Juan Pérez' => ['Juan Pérez', 'María Pérez', 'Pedro Pérez'],
    'Ana García' => ['Ana García', 'Carlos García'],
    'Luis Martín' => ['Luis Martín', 'Carmen Martín', 'Sofia Martín'],
    'Roberto Silva' => ['Roberto Silva', 'Elena Silva'],
    'Patricia López' => ['Patricia López', 'Miguel López', 'Isabella López', 'Santiago López']
];

// Configuración SMTP
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
?> 
