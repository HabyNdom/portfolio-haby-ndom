<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact';
$page_active = 'contact';
$page_desc = 'Contactez Haby Ndom, Développeuse Web & Logiciel à Dakar, pour discuter d\'opportunités de stage, d\'alternance ou de projets web.';
$base_path = '';

$csrf_token = get_csrf_token();
$flash_message = $_SESSION['flash_message'] ?? null;
unset($_SESSION['flash_message']);

include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- HÉRO DE LA PAGE CONTACT -->
      <section class="page-hero">
        <div class="section-wrap">
          <div class="eyebrow">
            <span class="eyebrow-line"></span> Échange &amp; Opportunités
          </div>
          <h1>Donnons vie à vos <em>projets</em> ensemble.</h1>
          <p class="page-intro">
            Vous avez une opportunité de stage, une mission de développement web ou vous souhaitez échanger sur mes réalisations ? N'hésitez pas à m'écrire, je vous répondrai avec grand plaisir.
          </p>
        </div>
      </section>

      <!-- SECTION FORMULAIRE ET COORDONNÉES -->
      <section class="section-wrap">
        <div class="contact-layout">
          <!-- Carte d'informations de contact -->
          <div class="contact-info-card">
            <div>
              <div class="section-kicker">Coordonnées directes</div>
              <h2>Parlons de vos besoins.</h2>
              <p>
                Basée à <strong><?= e(SITE_LOCATION) ?></strong>, je suis disponible pour des missions en présentiel ou à distance, ainsi que pour un stage ou une alternance d'ingénierie web.
              </p>
            </div>

            <!-- E-mail direct cliquable -->
            <div>
              <span style="font-size: 0.8rem; font-weight: 700; color: var(--text-subtle); display: block; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.08em;">Adresse e-mail professionnelle</span>
              <a href="mailto:<?= e(SITE_EMAIL) ?>" class="direct-email-box">
                <span>✉</span>
                <span><?= e(SITE_EMAIL) ?></span>
              </a>
            </div>

            <!-- Liens Réseaux & GitHub -->
            <div>
              <span style="font-size: 0.8rem; font-weight: 700; color: var(--text-subtle); display: block; margin-bottom: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em;">Profils &amp; Répertoires de Code</span>
              <div class="social-links-grid">
                <a class="social-item" href="<?= GITHUB_PROFILE ?>" target="_blank" rel="noopener noreferrer">
                  <span>GitHub (@HabyNdom)</span>
                  <span>↗</span>
                </a>
                <a class="social-item" href="<?= GITHUB_RECRUTEMENT_REPO ?>" target="_blank" rel="noopener noreferrer">
                  <span>Projet Plateforme Recrutement</span>
                  <span>↗</span>
                </a>
                <a class="social-item" href="<?= LINKEDIN_PROFILE ?>" target="_blank" rel="noopener noreferrer">
                  <span>LinkedIn</span>
                  <span>↗</span>
                </a>
              </div>
            </div>

            <!-- Disponibilité -->
            <div style="padding: 1.2rem; background: var(--bg-card-subtle); border-radius: var(--radius-md); border: 1px solid var(--border);">
              <div class="status-pill" style="margin-bottom: 0.6rem;">
                <span class="status-indicator"></span>
                <span>Statut actuel</span>
              </div>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">
                Disponible pour des opportunités de stage en développement logiciel, alternance ou collaborations sur des applications web et e-commerce.
              </p>
            </div>
          </div>

          <!-- Formulaire de contact sécurisé PHP avec token CSRF -->
          <div class="form-card">
            <h2>M'envoyer un message</h2>

            <?php if ($flash_message): ?>
              <div class="form-status success" style="display: block; margin-bottom: 1.5rem;">
                <?= e($flash_message) ?>
              </div>
            <?php endif; ?>

            <form action="traitement-contact.php" method="POST" data-status-target="contact-form-status">
              <!-- Jeton de sécurité anti-CSRF généré en PHP -->
              <input type="hidden" name="csrf_token" value="<?= e($csrf_token) ?>">

              <div class="form-group">
                <label for="contact-name">Nom et prénom <span>*</span></label>
                <input class="form-control" type="text" id="contact-name" name="name" placeholder="Ex: Fatou Diop" required>
              </div>

              <div class="form-group">
                <label for="contact-email">Adresse e-mail <span>*</span></label>
                <input class="form-control" type="email" id="contact-email" name="email" placeholder="votre.email@domaine.com" required>
              </div>

              <div class="form-group">
                <label for="contact-subject">Objet de votre prise de contact <span>*</span></label>
                <select class="form-control" id="contact-subject" name="subject" required>
                  <option value="" disabled selected>Sélectionnez un motif</option>
                  <option value="recrutement">Opportunité de stage / Alternance / Emploi</option>
                  <option value="projet">Projet de développement web / E-commerce</option>
                  <option value="recrutement-escoa">Question sur la Plateforme de Recrutement ESCOA</option>
                  <option value="autre">Autre demande ou prise de contact</option>
                </select>
              </div>

              <div class="form-group">
                <label for="contact-message">Votre message <span>*</span></label>
                <textarea class="form-control" id="contact-message" name="message" rows="5" placeholder="Bonjour Haby, je vous contacte à propos de..." required></textarea>
              </div>

              <button class="button button-primary" type="submit" style="width: 100%;">
                <span>Transmettre mon message</span>
                <span>↗</span>
              </button>

              <div id="contact-form-status" class="form-status" role="status"></div>
            </form>
          </div>
        </div>
      </section>
    </main>

<?php
include __DIR__ . '/includes/footer.php';
