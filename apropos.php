<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'À propos';
$page_active = 'apropos';
$page_desc = 'Découvrez le parcours, les valeurs, la philosophie et les compétences transversales de Haby Ndom, Développeuse Web & Logiciel.';
$base_path = '';

include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- HÉRO DE LA PAGE À PROPOS -->
      <section class="page-hero">
        <div class="section-wrap">
          <div class="eyebrow">
            <span class="eyebrow-line"></span> Parcours &amp; Identité
          </div>
          <h1>Bonjour, je suis <em><?= e(SITE_NAME) ?>.</em></h1>
          <p class="page-intro">
            Développeuse web et étudiante en 2e année d'informatique à Dakar, passionnée par la conception d'outils numériques fiables, sécurisés et créateurs de valeur.
          </p>
        </div>
      </section>

      <!-- PRÉSENTATION DÉTAILLÉE AVEC LA PHOTO FOURNIE -->
      <section class="section-wrap">
        <div class="about-hero-grid">
          <!-- Visuel avec la photo de l'utilisatrice en pleine action de code -->
          <div class="about-photo-wrapper">
            <div class="photo-card-wrapper">
              <div class="photo-card">
                <img src="images/haby-dev.jpg" alt="Haby Ndom en train de développer sur son ordinateur" width="380" height="475">
                <div class="photo-badge">
                  <div>
                    <div class="photo-badge-name"><?= e(SITE_NAME) ?></div>
                    <div class="photo-badge-title"><?= e(SITE_ROLE) ?></div>
                  </div>
                  <span class="status-indicator"></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Texte de présentation -->
          <div class="about-hero-text">
            <div class="section-kicker">Mon profil</div>
            <h2>La technique au service des <em>besoins réels.</em></h2>
            <p>
              Pour moi, le développement logiciel est bien plus qu'une suite d'instructions syntaxiques : c'est un métier d'écoute, de méthode et d'ingéniosité visant à résoudre des problématiques concrètes.
            </p>
            <p>
              Mon parcours associe des bases solides en <strong>informatique et ingénierie web</strong> (PHP 8, MySQL, modélisation relationnelle, sécurité applicative, JavaScript moderne) à une sensibilité affirmée pour le <strong>commerce digital et l'ergonomie utilisateur</strong>. Cette double culture me permet de concevoir des architectures robustes tout en veillant à la clarté du produit fini.
            </p>
            <p>
              Récemment, j'ai notamment conçu et sécurisé la <strong>Plateforme de Recrutement de Professeurs — ESCOA</strong>, un projet full-stack exigeant intégrant gestion des sessions, protection anti-CSRF, hachage bcrypt, requêtes préparées et workflow d'évaluation complet.
            </p>
            <div class="values-chips">
              <span class="value-chip"><span>01</span> Rigueur technique</span>
              <span class="value-chip"><span>02</span> Sécurité by-design</span>
              <span class="value-chip"><span>03</span> Esprit critique</span>
              <span class="value-chip"><span>04</span> Autonomie active</span>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION DÉTAILLÉE : COMPÉTENCES TRANSVERSALES (SOFT SKILLS) -->
      <section class="skills-section">
        <div class="section-wrap">
          <div class="skills-intro">
            <div class="section-kicker">Qualités Professionnelles</div>
            <h2>Mes compétences transversales au quotidien.</h2>
            <p>
              Ce qui fait la force d'un développeur en équipe va bien au-delà de sa pile technologique. Voici les piliers de ma méthode de travail et de ma posture professionnelle.
            </p>
          </div>

          <div class="transversal-grid" style="margin-top: 2rem;">
            <?php foreach ($soft_skills as $soft): ?>
              <article class="transversal-card">
                <span class="transversal-icon"><?= $soft['icon'] ?></span>
                <h3><?= e($soft['title']) ?></h3>
                <p><?= e($soft['desc']) ?></p>
                <div class="transversal-application">
                  <span>✓</span> <?= e($soft['application']) ?>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- TIMELINE CHRONOLOGIQUE -->
      <section class="timeline-section">
        <div class="section-wrap">
          <div class="section-kicker">Évolution &amp; Jalons</div>
          <h2>Une trajectoire d'apprentissage continue.</h2>

          <div class="timeline-list">
            <?php foreach ($timeline as $item): ?>
              <div class="timeline-node">
                <div class="timeline-bullet"><?= e($item['badge']) ?></div>
                <div class="timeline-body">
                  <h3><?= e($item['year']) ?> · <?= e($item['title']) ?></h3>
                  <p><?= e($item['desc']) ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- BANNIÈRE CALL TO ACTION -->
      <section class="cta-banner">
        <div class="section-wrap cta-layout">
          <div>
            <h2>Vous recherchez un profil motivé, rigoureux et autonome ?</h2>
            <p>
              Je suis disponible pour échanger sur vos projets de développement web et étudier toute opportunité de collaboration.
            </p>
          </div>
          <div class="cta-actions">
            <a class="button button-primary" href="contact.php">
              Me contacter <span>↗</span>
            </a>
            <a class="button button-outline" href="projets.php">
              Voir mes projets <span>→</span>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php
include __DIR__ . '/includes/footer.php';
