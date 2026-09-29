<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Accueil | Développeuse Web & Logiciel';
$page_active = 'accueil';
$page_desc = 'Portfolio de Haby Ndom, Développeuse Web & Logiciel. Découvrez ses projets (Plateforme recrutement ESCOA, E-commerce, Mobilité), ses compétences techniques approfondies et ses compétences transversales.';
$base_path = '';

include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- SECTION HÉRO -->
      <section class="hero section-wrap" id="accueil">
        <div class="hero-copy reveal">
          <div class="status-pill">
            <span class="status-indicator"></span>
            <span>Disponible pour stage, alternance &amp; missions</span>
          </div>

          <h1>
            Je conçois des applications web <em>robustes</em>, sécurisées et utiles.
          </h1>

          <p class="hero-intro">
            Étudiante passionnée en informatique à Dakar, j'allie la rigueur de l'ingénierie logicielle (PHP 8, MySQL, JavaScript moderne, architecture MVC) à une sensibilité aiguë pour l'expérience utilisateur et les besoins métiers réels.
          </p>

          <div class="hero-actions">
            <a class="button button-primary" href="#projet-recrutement">
              Explorer le projet recrutement <span>↓</span>
            </a>
            <a class="button button-outline" href="#competences">
              Voir mes compétences <span>⚡</span>
            </a>
            <a class="text-link" href="contact.php">
              Discuter d'une opportunité <span>→</span>
            </a>
          </div>

          <!-- BANDEAU SYNTHÈSE RECRUTEUR EXPRESS -->
          <div class="recruiter-strip">
            <div class="recruiter-strip-header">
              <div class="recruiter-strip-title">
                <span>💼 Fiche Synthèse Recruteur</span>
                <span class="badge-pill">Disponibilité Immédiate</span>
              </div>
              <a class="text-link" href="contact.php" style="font-size: 0.8rem;">
                Contacter pour un entretien <span>↗</span>
              </a>
            </div>
            <div class="recruiter-data-grid">
              <div class="recruiter-data-item">
                <span class="recruiter-data-label">Contrat recherché</span>
                <span class="recruiter-data-val accent">Stage / Alternance</span>
              </div>
              <div class="recruiter-data-item">
                <span class="recruiter-data-label">Localisation</span>
                <span class="recruiter-data-val">Dakar &amp; Distanciel</span>
              </div>
              <div class="recruiter-data-item">
                <span class="recruiter-data-label">Formation</span>
                <span class="recruiter-data-val">Bac+2 Informatique</span>
              </div>
              <div class="recruiter-data-item">
                <span class="recruiter-data-label">Stack Maîtrisée</span>
                <span class="recruiter-data-val">PHP 8, SQL, JS ES6+</span>
              </div>
            </div>
          </div>

          <div class="hero-meta">
            <div>
              <strong>05+</strong>
              <span>Projets applicatifs livrés</span>
            </div>
            <span class="meta-divider"></span>
            <div>
              <strong>Bac+2</strong>
              <span>Informatique &amp; Web</span>
            </div>
            <span class="meta-divider"></span>
            <div>
              <strong>100%</strong>
              <span>Code structuré &amp; sécurisé</span>
            </div>
          </div>
        </div>

        <!-- VISUEL HÉRO AVEC COMPOSITION PHOTO PROFESSIONNELLE -->
        <div class="hero-visual reveal reveal-delay-1">
          <div class="photo-composite-card">
            <!-- Badge supérieur avec photo institutionnelle ESCOA -->
            <div class="photo-sub-badge">
              <div class="photo-sub-avatar">
                <img src="images/image-acceuil.jpg" alt="Haby Ndom en tailleur ESCOA" width="32" height="32">
              </div>
              <div class="photo-sub-text">
                <strong>Haby NDOM</strong>
                <span>Formation d'Excellence · ESCOA</span>
              </div>
            </div>

            <!-- Floating pill haut droite -->
            <div class="floating-pill floating-top">
              <span>⚡</span>
              <span>PHP 8 &amp; MVC</span>
            </div>

            <!-- Cadre photo principal (Haby au travail) -->
            <div class="photo-composite-frame">
              <img class="main-photo" src="images/haby-dev.jpg" alt="Haby Ndom concentrée sur son ordinateur portable lors d'une session de développement" width="390" height="520">
              <div class="photo-badge">
                <div>
                  <div class="photo-badge-name"><?= e(SITE_NAME) ?></div>
                  <div class="photo-badge-title"><?= e(SITE_ROLE) ?></div>
                </div>
                <span class="status-indicator"></span>
              </div>
            </div>

            <!-- Floating pill bas gauche -->
            <div class="floating-pill floating-bottom">
              <span>🛡️</span>
              <span>Sécurité &amp; PDO Préparé</span>
            </div>
          </div>
        </div>
      </section>

      <!-- RUBAN DÉFILANT DES EXPERTISES TECHNIQUES -->
      <section class="marquee-band" aria-label="Compétences et domaines clés">
        <div class="marquee-track">
          <span>DÉVELOPPEMENT WEB MODERNE <i>✦</i></span>
          <span>PHP 8 &amp; ARCHITECTURE MVC <i>✦</i></span>
          <span>SÉCURITÉ WEB (CSRF · BCRYPT · REQUÊTES PRÉPARÉES) <i>✦</i></span>
          <span>JAVASCRIPT ES6+ <i>✦</i></span>
          <span>MODÉLISATION RELATIONNELLE &amp; MYSQL <i>✦</i></span>
          <span>HTML5 SÉMANTIQUE &amp; ACCESSIBILITÉ <i>✦</i></span>
          <span>ALGORITHMIQUE &amp; STRUCTURES DE DONNÉES <i>✦</i></span>
          <span>GIT &amp; WORKFLOW COLLABORATIF <i>✦</i></span>
          <span>RÉSEAUX &amp; PROTOCOLE HTTP/HTTPS <i>✦</i></span>
          <span>DÉVELOPPEMENT WEB MODERNE <i>✦</i></span>
          <span>PHP 8 &amp; ARCHITECTURE MVC <i>✦</i></span>
        </div>
      </section>

      <!-- SECTION PROJET VEDETTE : PLATEFORME DE RECRUTEMENT ESCOA -->
      <?php $featured = $projects['recrutement']; ?>
      <section class="featured-project-section section-wrap reveal" id="projet-recrutement">
        <div class="section-kicker">
          01 <span></span> Projet Phare &amp; Réalisation Majeure
        </div>

        <div class="featured-card">
          <div class="featured-body">
            <div>
              <span class="featured-tag"><?= e($featured['badge']) ?></span>
              <h3><?= e($featured['title']) ?></h3>
              <p class="featured-desc">
                <?= e($featured['description']) ?>
              </p>

              <!-- Points forts générés en PHP -->
              <div class="featured-highlights">
                <?php foreach ($featured['highlights'] as $highlight): ?>
                  <div class="highlight-item">
                    <strong><?= e($highlight['title']) ?></strong>
                    <span><?= e($highlight['desc']) ?></span>
                  </div>
                <?php endforeach; ?>
              </div>

              <!-- Tags technologies -->
              <div class="tech-pills-row">
                <?php foreach ($featured['tech_tags'] as $tag): ?>
                  <span class="tech-pill <?= in_array($tag, $featured['accent_tags']) ? 'accent' : '' ?>">
                    <?= e($tag) ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Actions sur le projet de recrutement -->
            <div class="featured-actions">
              <a class="button button-primary" href="<?= e($featured['github_url']) ?>" target="_blank" rel="noopener noreferrer">
                <span>Consulter le code sur GitHub</span>
                <span aria-hidden="true">↗</span>
              </a>
              <a class="button button-outline" href="projets.php#recrutement">
                <span>Voir la fiche technique complète</span>
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </div>

          <div class="featured-visual">
            <span class="featured-badge-overlay">Recrutement Universitaire</span>
            <img src="<?= $featured['image'] ?>" alt="Illustration de la Plateforme de Recrutement ESCOA" width="340" height="200">
          </div>
        </div>
      </section>

      <!-- SECTION SÉLECTION DES AUTRES PROJETS -->
      <section class="projects-section section-wrap reveal" id="projets">
        <div class="section-header">
          <div>
            <div class="section-kicker">02 <span></span> Sélection de Réalisations</div>
            <h2>Des solutions logicielles concrètes.</h2>
          </div>
          <a class="text-link" href="projets.php">
            Explorer tous les projets <span>↗</span>
          </a>
        </div>

        <div class="project-grid">
          <?php 
          $count = 0;
          foreach ($projects as $projKey => $proj): 
            if ($proj['is_featured'] || $count >= 3) continue;
            $count++;
            $thumbBg = ($projKey === 'qsen') ? '#e6f4ea' : (($projKey === 'fouta') ? '#fef3c7' : '#e0f2fe');
          ?>
            <article class="project-card">
              <div class="project-thumbnail" style="background-color: <?= $thumbBg ?>;">
                <span class="project-category-badge"><?= e($proj['badge']) ?></span>
                <?php if ($proj['image']): ?>
                  <img src="<?= $proj['image'] ?>" alt="Logo <?= e($proj['title']) ?>" width="220" height="120">
                <?php endif; ?>
              </div>
              <div class="project-card-content">
                <div>
                  <h3><?= e($proj['title']) ?></h3>
                  <p><?= e($proj['description']) ?></p>
                  <div class="tech-pills-row">
                    <?php foreach (array_slice($proj['tech_tags'], 0, 4) as $tag): ?>
                      <span class="tech-pill"><?= e($tag) ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="project-card-footer">
                  <?php if (!empty($proj['github_url'])): ?>
                    <a class="project-card-link" href="<?= e($proj['github_url']) ?>" target="_blank" rel="noopener noreferrer">
                      Code GitHub <span>↗</span>
                    </a>
                  <?php else: ?>
                    <span class="text-muted" style="font-size: 0.78rem;"><?= e($proj['category_label']) ?></span>
                  <?php endif; ?>
                  <a class="project-card-link" href="projets.php#<?= e($proj['id']) ?>">
                    Détails <span>→</span>
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- SECTION COMPÉTENCES TECHNIQUES (SANS REACT NI NODE.JS) -->
      <section class="skills-section reveal" id="competences">
        <div class="section-wrap">
          <div class="skills-intro">
            <div class="section-kicker">03 <span></span> Socle Technique &amp; Ingénierie</div>
            <h2>Les compétences fondamentales d'un développeur.</h2>
            <p>
              Une maîtrise solide des piliers du développement web, des bases de données relationnelles, de l'architecture logicielle et de la sécurité, construite sur les standards du web et les bonnes pratiques.
            </p>
          </div>

          <div class="skills-grid-categories">
            <?php foreach ($technical_skills as $pillar): ?>
              <div class="skill-category-card">
                <div class="category-header">
                  <div class="category-icon"><?= $pillar['icon'] ?></div>
                  <div>
                    <h3><?= e($pillar['title']) ?></h3>
                    <p><?= e($pillar['subtitle']) ?></p>
                  </div>
                </div>
                <div class="skills-list-detailed">
                  <?php foreach ($pillar['skills'] as $skill): ?>
                    <div class="skill-detail-item">
                      <div class="skill-detail-top">
                        <strong><?= e($skill['name']) ?></strong>
                        <span class="skill-level-tag"><?= e($skill['level']) ?></span>
                      </div>
                      <p class="skill-detail-desc"><?= e($skill['desc']) ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- SECTION COMPÉTENCES TRANSVERSALES (SOFT SKILLS) -->
      <section class="transversal-skills-section section-wrap reveal" id="transversales">
        <div>
          <div class="section-kicker">04 <span></span> Compétences Transversales &amp; Posture</div>
          <h2>Au-delà du code : ma valeur humaine et méthodologique.</h2>
          <p class="hero-intro" style="margin-top: 0.8rem;">
            Le développement informatique ne se résume pas à écrire des lignes de code. Voici les compétences humaines et organisationnelles qui me permettent de collaborer efficacement et de mener à bien des projets complets.
          </p>
        </div>

        <div class="transversal-grid">
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
      </section>

      <!-- SECTION APERÇU À PROPOS -->
      <section class="about-preview-section section-wrap reveal" id="apropos">
        <div class="about-preview-grid">
          <div class="about-preview-text">
            <div class="section-kicker">05 <span></span> Philosophie &amp; Parcours</div>
            <h2>La technique au service de l'impact réel.</h2>
            <p>
              Je m'appelle <strong><?= e(SITE_NAME) ?></strong>. Étudiante en 2e année d'informatique, je suis animée par la conviction que le code est un levier puissant pour simplifier la vie quotidienne, fluidifier les échanges et développer des activités concrètes.
            </p>
            <p>
              Qu'il s'agisse de digitaliser le recrutement d'une institution académique, de créer une boutique de quincaillerie intuitive ou de connecter des voyageurs entre le Fouta et Dakar, j'aborde chaque projet avec la même détermination : concevoir des applications solides, accessibles et durables.
            </p>
            <div class="values-chips">
              <span class="value-chip"><span>01</span> Curiosité active</span>
              <span class="value-chip"><span>02</span> Rigueur technique</span>
              <span class="value-chip"><span>03</span> Sens du service</span>
              <span class="value-chip"><span>04</span> Évolution permanente</span>
            </div>
            <div style="margin-top: 2rem;">
              <a class="button button-outline" href="apropos.php">
                Découvrir mon parcours détaillé <span>→</span>
              </a>
            </div>
          </div>

          <div style="position: relative;">
            <div class="photo-card-wrapper" style="margin: 0 auto;">
              <div class="photo-card" style="aspect-ratio: 4 / 5;">
                <img src="images/haby-dev.jpg" alt="Portrait de Haby Ndom au travail" width="380" height="475">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION POURQUOI RECRUTER MON PROFIL -->
      <section class="why-hire-section reveal">
        <div class="section-wrap">
          <div class="section-kicker">06 <span></span> Recrutement &amp; Valeur Ajoutée</div>
          <h2>Pourquoi intégrer mon profil dans votre équipe ?</h2>
          <p class="hero-intro" style="margin-top: 0.8rem;">
            Des arguments tangibles et vérifiables dans mes projets pour accélérer vos développements avec sérénité.
          </p>

          <div class="why-hire-grid">
            <div class="why-hire-card">
              <span class="why-hire-icon">🛡️</span>
              <h3>Sécurité &amp; Zéro Injection SQL</h3>
              <p>
                Approche "Security by Design" : requêtes préparées PDO systématiques, tokens anti-CSRF, hachage bcrypt, assainissement XSS et contrôle MIME des uploads.
              </p>
              <div class="why-hire-metric">✓ 100% Code durci &amp; audité</div>
            </div>

            <div class="why-hire-card">
              <span class="why-hire-icon">🏗️</span>
              <h3>Architecture MVC &amp; Code Propre</h3>
              <p>
                Découpage modulaire clair : logique métier isolée, séparation modèle / vue / contrôleur, principes DRY &amp; KISS pour une maintenance facile à long terme.
              </p>
              <div class="why-hire-metric">✓ Dette technique minimisée</div>
            </div>

            <div class="why-hire-card">
              <span class="why-hire-icon">⚡</span>
              <h3>Autonomie &amp; Capacité de Livraison</h3>
              <p>
                Capacité prouvée à concevoir une application de A à Z : modélisation de la base de données relationnelle, écriture du backend, interface utilisateur et mise en production.
              </p>
              <div class="why-hire-metric">✓ Projets réels livrés</div>
            </div>

            <div class="why-hire-card">
              <span class="why-hire-icon">💼</span>
              <h3>Posture Pro &amp; Sens du Produit</h3>
              <p>
                Double sensibilité en développement web et commerce digital. Je comprends les enjeux d'acquisition, la rentabilité et l'impact utilisateur direct de chaque fonctionnalité.
              </p>
              <div class="why-hire-metric">✓ Vision orientée ROI &amp; UX</div>
            </div>
          </div>
        </div>
      </section>

      <!-- BANNIÈRE CALL TO ACTION -->
      <section class="cta-banner reveal">
        <div class="section-wrap cta-layout">
          <div>
            <span class="status-pill">
              <span class="status-indicator"></span>
              Opportunités ouvertes
            </span>
            <h2>Vous avez un projet ou une mission ? Parlons-en.</h2>
            <p>
              Je suis activement à la recherche d'un stage ou d'une opportunité en développement web &amp; logiciel pour mettre ma rigueur au service de vos équipes.
            </p>
          </div>
          <div class="cta-actions">
            <a class="button button-primary" href="contact.php">
              Me contacter directement <span>↗</span>
            </a>
            <a class="button button-outline" href="mailto:<?= e(SITE_EMAIL) ?>">
              Envoyer un e-mail <span>✉</span>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php
include __DIR__ . '/includes/footer.php';
