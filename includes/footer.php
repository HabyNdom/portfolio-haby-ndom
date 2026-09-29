<?php
/**
 * Pied de page modulaire
 */
$base_path = $base_path ?? '';
?>
    <footer class="site-footer">
      <div class="section-wrap footer-content">
        <div>
          <a class="brand" href="<?= $base_path ?>index.php" style="font-size: 1.1rem;">
            <span class="brand-mark" style="width: 28px; height: 28px; font-size: 0.65rem;">HN</span>
            <span>Haby.Ndom</span>
          </a>
          <p style="margin-top: 0.4rem; font-size: 0.8rem;">
            Développeuse Web &amp; Logiciel · <?= e(SITE_LOCATION) ?>
          </p>
        </div>

        <p>
          Conçu &amp; développé avec PHP, HTML, CSS &amp; JS par Haby Ndom · <?= date('Y') ?>
        </p>

        <div class="footer-links">
          <a href="<?= GITHUB_PROFILE ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
          <a href="<?= GITHUB_RECRUTEMENT_REPO ?>" target="_blank" rel="noopener noreferrer">Projet Recrutement</a>
          <a href="<?= $base_path ?>contact.php">Contact</a>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
