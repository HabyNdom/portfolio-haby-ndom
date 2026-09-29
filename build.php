<?php
/**
 * Script de génération HTML pour GitHub Pages
 * Exécution : C:\xampp\php\php.exe build.php
 */

echo "Génération des fichiers statiques pour GitHub Pages...\n";

// 1. Génération de index.html
ob_start();
include __DIR__ . '/index.php';
$html_index = ob_get_clean();

// Adaptation des liens pour GitHub Pages (PHP -> HTML)
$html_index = str_replace('contact.php', 'pages/contact.html', $html_index);
$html_index = str_replace('projets.php', 'pages/projets.html', $html_index);
$html_index = str_replace('apropos.php', 'pages/apropos.html', $html_index);
$html_index = str_replace('index.php', 'index.html', $html_index);

file_put_contents(__DIR__ . '/index.html', $html_index);
echo "✓ index.html généré avec succès.\n";

// 2. Génération de pages/projets.html
ob_start();
include __DIR__ . '/projets.php';
$html_projets = ob_get_clean();

$html_projets = str_replace('href="contact.php"', 'href="contact.html"', $html_projets);
$html_projets = str_replace('href="projets.php"', 'href="projets.html"', $html_projets);
$html_projets = str_replace('href="apropos.php"', 'href="apropos.html"', $html_projets);
$html_projets = str_replace('href="index.php"', 'href="../index.html"', $html_projets);
$html_projets = str_replace('href="index.php#competences"', 'href="../index.html#competences"', $html_projets);
$html_projets = str_replace('href="index.php#transversales"', 'href="../index.html#transversales"', $html_projets);
$html_projets = str_replace('href="css/style.css"', 'href="../css/style.css"', $html_projets);
$html_projets = str_replace('src="js/main.js"', 'src="../js/main.js"', $html_projets);
$html_projets = str_replace('src="images/', 'src="../images/', $html_projets);

file_put_contents(__DIR__ . '/pages/projets.html', $html_projets);
echo "✓ pages/projets.html généré avec succès.\n";

// 3. Génération de pages/apropos.html
ob_start();
include __DIR__ . '/apropos.php';
$html_apropos = ob_get_clean();

$html_apropos = str_replace('href="contact.php"', 'href="contact.html"', $html_apropos);
$html_apropos = str_replace('href="projets.php"', 'href="projets.html"', $html_apropos);
$html_apropos = str_replace('href="apropos.php"', 'href="apropos.html"', $html_apropos);
$html_apropos = str_replace('href="index.php"', 'href="../index.html"', $html_apropos);
$html_apropos = str_replace('href="index.php#competences"', 'href="../index.html#competences"', $html_apropos);
$html_apropos = str_replace('href="index.php#transversales"', 'href="../index.html#transversales"', $html_apropos);
$html_apropos = str_replace('href="css/style.css"', 'href="../css/style.css"', $html_apropos);
$html_apropos = str_replace('src="js/main.js"', 'src="../js/main.js"', $html_apropos);
$html_apropos = str_replace('src="images/', 'src="../images/', $html_apropos);

file_put_contents(__DIR__ . '/pages/apropos.html', $html_apropos);
echo "✓ pages/apropos.html généré avec succès.\n";

// 4. Génération de pages/contact.html
ob_start();
include __DIR__ . '/contact.php';
$html_contact = ob_get_clean();

$html_contact = str_replace('href="contact.php"', 'href="contact.html"', $html_contact);
$html_contact = str_replace('href="projets.php"', 'href="projets.html"', $html_contact);
$html_contact = str_replace('href="apropos.php"', 'href="apropos.html"', $html_contact);
$html_contact = str_replace('href="index.php"', 'href="../index.html"', $html_contact);
$html_contact = str_replace('href="index.php#competences"', 'href="../index.html#competences"', $html_contact);
$html_contact = str_replace('href="index.php#transversales"', 'href="../index.html#transversales"', $html_contact);
$html_contact = str_replace('href="css/style.css"', 'href="../css/style.css"', $html_contact);
$html_contact = str_replace('src="js/main.js"', 'src="../js/main.js"', $html_contact);
$html_contact = str_replace('src="images/', 'src="../images/', $html_contact);

file_put_contents(__DIR__ . '/pages/contact.html', $html_contact);
echo "✓ pages/contact.html généré avec succès.\n";

echo "Tous les fichiers HTML synchronisés avec les sources PHP !\n";
