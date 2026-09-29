<?php
/**
 * Configuration globale du portfolio de Haby Ndom
 */

// Démarrage de session sécurisée pour les jetons CSRF
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}

// Informations générales
define('SITE_NAME', 'Haby Ndom');
define('SITE_ROLE', 'Développeuse Web & Logiciel');
define('SITE_EMAIL', 'habyndom01@gmail.com');
define('SITE_LOCATION', 'Dakar, Sénégal');
define('GITHUB_PROFILE', 'https://github.com/HabyNdom');
define('GITHUB_RECRUTEMENT_REPO', 'https://github.com/HabyNdom/plateforme-recrutement-escoa');
define('LINKEDIN_PROFILE', 'https://fr.linkedin.com/');

/**
 * Génération ou récupération d'un jeton anti-CSRF
 */
function get_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Vérification d'un jeton CSRF
 */
function verify_csrf_token(?string $token): bool {
    return !empty($token) && !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Échappement HTML sécurisé (Protection XSS)
 */
function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
