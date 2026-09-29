<?php
/**
 * En-tête modulaire (HTML Head & Navigation)
 */
$base_path = $base_path ?? '';
$page_title = $page_title ?? 'Accueil';
$page_active = $page_active ?? 'accueil';
$page_desc = $page_desc ?? 'Portfolio professionnel de Haby Ndom, Développeuse Web & Logiciel.';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= e($page_desc) ?>">
  <meta name="author" content="Haby Ndom">
  <title><?= e($page_title) ?> | Haby Ndom</title>
  
  <!-- Polices Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?= $base_path ?>css/style.css">
  <script src="<?= $base_path ?>js/main.js" defer></script>
</head>
<body>
  <div class="site-shell">
    <header class="site-header">
      <a class="brand" href="<?= $base_path ?>index.php" aria-label="Page d'accueil de Haby Ndom">
        <span class="brand-mark">HN</span>
        <div>
          <span>Haby<span class="brand-dot">.</span>Ndom</span>
          <span class="brand-role">Développeuse Web</span>
        </div>
      </a>

      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Ouvrir le menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="main-nav" id="main-nav" aria-label="Navigation principale">
        <a class="<?= ($page_active === 'accueil') ? 'active' : '' ?>" href="<?= $base_path ?>index.php">Accueil</a>
        <a class="<?= ($page_active === 'projets') ? 'active' : '' ?>" href="<?= $base_path ?>projets.php">Projets</a>
        <a href="<?= $base_path ?>index.php#competences">Compétences</a>
        <a href="<?= $base_path ?>index.php#transversales">Soft Skills</a>
        <a class="<?= ($page_active === 'apropos') ? 'active' : '' ?>" href="<?= $base_path ?>apropos.php">À propos</a>
        <a class="<?= ($page_active === 'contact') ? 'active nav-cta' : 'nav-cta' ?>" href="<?= $base_path ?>contact.php">Me contacter <span>↗</span></a>
        <button class="theme-toggle" type="button" aria-label="Basculer le mode sombre" title="Basculer le mode sombre">🌙</button>
      </nav>
    </header>
