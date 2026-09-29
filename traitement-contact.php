<?php
require_once __DIR__ . '/includes/config.php';

// Vérification de la méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// 1. Vérification du jeton CSRF
$token = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($token)) {
    http_response_code(403);
    die('Erreur de sécurité : Jeton CSRF invalide ou expiré.');
}

// 2. Nettoyage et validation des champs
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? '');
$subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

if (empty($name) || empty($email) || empty($message)) {
    $_SESSION['flash_message'] = 'Veuillez renseigner tous les champs obligatoires avec une adresse e-mail valide.';
    header('Location: contact.php');
    exit;
}

// 3. Traitement (Enregistrement en log ou envoi d'email)
$log_entry = sprintf(
    "[%s] Message de %s (%s) - Objet: %s - IP: %s\n",
    date('Y-m-d H:i:s'),
    $name,
    $email,
    $subject,
    $_SERVER['REMOTE_ADDR'] ?? 'inconnue'
);

$log_dir = __DIR__ . '/logs';
if (!is_dir($log_dir)) {
    @mkdir($log_dir, 0755, true);
}
@file_put_contents($log_dir . '/contacts.log', $log_entry, FILE_APPEND);

// Message flash de succès
$_SESSION['flash_message'] = '✓ Merci beaucoup ' . e($name) . ' ! Votre message a été bien transmis. Je vous répondrai dans les plus brefs délais.';

// Si requête AJAX
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => true, 'message' => $_SESSION['flash_message']]);
    exit;
}

header('Location: contact.php');
exit;
