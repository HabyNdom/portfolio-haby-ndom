<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Projets & Réalisations';
$page_active = 'projets';
$page_desc = 'Découvrez les réalisations logicielles et web de Haby Ndom : Plateforme de recrutement ESCOA, E-commerce, Mobilité, Quiz culturel et Applications interactives.';
$base_path = '';

include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- HÉRO DE LA PAGE PROJETS -->
      <section class="page-hero">
        <div class="section-wrap">
          <div class="eyebrow">
            <span class="eyebrow-line"></span> Travaux &amp; Réalisations
          </div>
          <h1>Des problématiques réelles résolues par le <em>code.</em></h1>
          <p class="page-intro">
            Chaque réalisation est pensée comme une solution complète : conception de l'architecture, modélisation des données, sécurisation rigoureuse et ergonomie soignée pour l'utilisateur final.
          </p>
        </div>
      </section>

      <!-- BARRE DE RECHERCHE & FILTRES DYNAMIQUES -->
      <section class="section-wrap" style="padding-top: 3.5rem;">
        <div class="projects-filter-bar">
          <div class="filter-pills" role="tablist" aria-label="Filtrer les projets par catégorie">
            <button class="filter-btn active" type="button" data-filter="all">Tous les projets (06)</button>
            <button class="filter-btn" type="button" data-filter="backend">Backend &amp; SQL (PHP)</button>
            <button class="filter-btn" type="button" data-filter="ecommerce">E-Commerce</button>
            <button class="filter-btn" type="button" data-filter="service">Mobilité &amp; Services</button>
            <button class="filter-btn" type="button" data-filter="app">Applications Web</button>
          </div>

          <div class="search-box">
            <span aria-hidden="true" style="color: var(--text-subtle);">🔍</span>
            <input id="project-search" type="search" placeholder="Rechercher par mot-clé (ex: PHP, SQL, Quiz...)" aria-label="Rechercher un projet">
          </div>
        </div>

        <!-- GRILLE DE TOUS LES PROJETS GÉNÉRÉE DYNAMIQUEMENT EN PHP -->
        <div class="full-projects-grid">
          
          <?php foreach ($projects as $key => $proj): ?>
            <?php if ($proj['is_featured']): ?>
              <!-- PROJET PHARE EN PLEINE LARGEUR (PLATEFORME DE RECRUTEMENT) -->
              <article class="project-item-card project-card-featured-wide featured-card" id="<?= e($proj['id']) ?>" data-category="<?= e($proj['category']) ?>" data-search="<?= e($proj['search_terms']) ?>">
                <div class="featured-body">
                  <div>
                    <span class="featured-tag"><?= e($proj['badge']) ?></span>
                    <h3><?= e($proj['title']) ?></h3>
                    <p class="featured-desc"><?= e($proj['description']) ?></p>

                    <div class="featured-highlights">
                      <?php foreach ($proj['highlights'] as $highlight): ?>
                        <div class="highlight-item">
                          <strong><?= e($highlight['title']) ?></strong>
                          <span><?= e($highlight['desc']) ?></span>
                        </div>
                      <?php endforeach; ?>
                    </div>

                    <div class="tech-pills-row">
                      <?php foreach ($proj['tech_tags'] as $tag): ?>
                        <span class="tech-pill <?= in_array($tag, $proj['accent_tags']) ? 'accent' : '' ?>">
                          <?= e($tag) ?>
                        </span>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="featured-actions">
                    <?php if (!empty($proj['github_url'])): ?>
                      <a class="button button-primary" href="<?= e($proj['github_url']) ?>" target="_blank" rel="noopener noreferrer">
                        <span>Voir le dépôt de code sur GitHub</span>
                        <span aria-hidden="true">↗</span>
                      </a>
                    <?php endif; ?>
                    <a class="button button-outline" href="contact.php">
                      <span>Demander une démo technique</span>
                      <span aria-hidden="true">✉</span>
                    </a>
                  </div>
                </div>

                <div class="featured-visual">
                  <span class="featured-badge-overlay">Recrutement Universitaire</span>
                  <img src="<?= $proj['image'] ?>" alt="Aperçu graphique <?= e($proj['title']) ?>" width="340" height="200">
                </div>
              </article>

            <?php else: ?>
              <!-- AUTRES PROJETS -->
              <?php 
                $bgColors = [
                  'qsen' => '#dcfce7',
                  'fouta' => '#fef3c7',
                  'senquiz' => '#e0f2fe',
                  'calculatrice' => '#f1f5f9',
                  'marketing' => '#fee2e2'
                ];
                $bg = $bgColors[$key] ?? '#f8fafc';
              ?>
              <article class="project-item-card project-card" id="<?= e($proj['id']) ?>" data-category="<?= e($proj['category']) ?>" data-search="<?= e($proj['search_terms']) ?>">
                <div class="project-thumbnail" style="background-color: <?= $bg ?>;">
                  <span class="project-category-badge"><?= e($proj['badge']) ?></span>
                  <?php if (!empty($proj['image'])): ?>
                    <img src="<?= $proj['image'] ?>" alt="Logo <?= e($proj['title']) ?>" width="220" height="120">
                  <?php else: ?>
                    <div style="font-family: var(--font-heading); font-weight: 700; font-size: 1.3rem; color: #991b1b; text-align: center; padding: 1rem;">
                      ESCOA DIGITAL ADS
                      <div style="font-size: 0.75rem; color: #dc2626; font-weight: 500; margin-top: 0.3rem;">Stratégie d'Acquisition &amp; Campagnes</div>
                    </div>
                  <?php endif; ?>
                </div>

                <div class="project-card-content">
                  <div>
                    <h3><?= e($proj['title']) ?></h3>
                    <p><?= e($proj['description']) ?></p>
                    <div class="tech-pills-row">
                      <?php foreach ($proj['tech_tags'] as $tag): ?>
                        <span class="tech-pill <?= in_array($tag, $proj['accent_tags']) ? 'accent' : '' ?>"><?= e($tag) ?></span>
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

                    <a class="project-card-link" href="#<?= e($proj['id']) ?>">
                      Détails <span>↓</span>
                    </a>
                  </div>
                </div>
              </article>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

        <!-- MESSAGE EN CAS DE RECHERCHE SANS RÉSULTAT -->
        <div class="empty-state" style="display: none; text-align: center; padding: 4rem 1rem;">
          <p style="font-size: 1.1rem; color: var(--text-muted);">
            Aucun projet ne correspond à votre recherche. Essayez un autre mot-clé (ex: <em>PHP</em>, <em>SQL</em>, <em>JavaScript</em>, <em>E-Commerce</em>).
          </p>
        </div>
      </section>

      <!-- BANNIÈRE CALL TO ACTION -->
      <section class="cta-banner">
        <div class="section-wrap cta-layout">
          <div>
            <h2>Un projet logiciel à concevoir ou concrétiser ?</h2>
            <p>
              Je mets ma rigueur technique, mes compétences en architecture web et ma sensibilité utilisateur à votre service.
            </p>
          </div>
          <div class="cta-actions">
            <a class="button button-primary" href="contact.php">
              Prendre contact <span>↗</span>
            </a>
            <a class="button button-outline" href="index.php#competences">
              Revoir mes compétences <span>⚡</span>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php
include __DIR__ . '/includes/footer.php';
