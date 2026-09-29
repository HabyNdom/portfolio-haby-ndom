/**
 * Portfolio Haby Ndom — Scripts JavaScript Modernes & Robustes
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. GESTION DU MENU MOBILE (BURGER)
  const menuToggle = document.querySelector('.menu-toggle');
  const mainNav = document.querySelector('.main-nav');

  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', String(!isOpen));
      mainNav.classList.toggle('is-open', !isOpen);
    });

    // Fermeture lors du clic sur un lien
    mainNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        mainNav.classList.remove('is-open');
      });
    });

    // Fermeture lors du clic en dehors du menu
    document.addEventListener('click', (e) => {
      if (!mainNav.contains(e.target) && !menuToggle.contains(e.target)) {
        menuToggle.setAttribute('aria-expanded', 'false');
        mainNav.classList.remove('is-open');
      }
    });

    // Fermeture avec la touche Échap
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        menuToggle.setAttribute('aria-expanded', 'false');
        mainNav.classList.remove('is-open');
      }
    });
  }

  // 2. GESTION DU THÈME SOMBRE / CLAIR (DARK / LIGHT MODE)
  const themeToggle = document.querySelector('.theme-toggle');
  const savedTheme = localStorage.getItem('haby-portfolio-theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

  const applyTheme = (isDark) => {
    if (isDark) {
      document.body.classList.add('dark-theme');
      if (themeToggle) {
        themeToggle.textContent = '☀️';
        themeToggle.setAttribute('aria-label', 'Activer le mode clair');
        themeToggle.setAttribute('title', 'Activer le mode clair');
      }
    } else {
      document.body.classList.remove('dark-theme');
      if (themeToggle) {
        themeToggle.textContent = '🌙';
        themeToggle.setAttribute('aria-label', 'Activer le mode sombre');
        themeToggle.setAttribute('title', 'Activer le mode sombre');
      }
    }
  };

  // Initialisation du thème
  if (savedTheme) {
    applyTheme(savedTheme === 'dark');
  } else {
    applyTheme(prefersDark);
  }

  themeToggle?.addEventListener('click', () => {
    const isDark = !document.body.classList.contains('dark-theme');
    applyTheme(isDark);
    localStorage.setItem('haby-portfolio-theme', isDark ? 'dark' : 'light');
  });

  // 3. ANIMATION AU DÉFILEMENT (REVEAL ON SCROLL)
  const revealElements = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach((el) => revealObserver.observe(el));
  } else {
    revealElements.forEach((el) => el.classList.add('is-visible'));
  }

  // 4. FILTRE ET RECHERCHE INTERACTIVE DE PROJETS (PAGE PROJETS)
  const projectCards = document.querySelectorAll('.project-item-card[data-category]');
  const searchInput = document.querySelector('#project-search');
  const filterButtons = document.querySelectorAll('.filter-btn');
  const emptyState = document.querySelector('.empty-state');
  let currentFilter = 'all';

  function filterProjects() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    let visibleCount = 0;

    projectCards.forEach((card) => {
      const categories = card.dataset.category ? card.dataset.category.toLowerCase() : '';
      const searchableText = card.dataset.search ? card.dataset.search.toLowerCase() : card.textContent.toLowerCase();

      const matchesFilter = currentFilter === 'all' || categories.includes(currentFilter);
      const matchesSearch = !query || searchableText.includes(query);

      if (matchesFilter && matchesSearch) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (emptyState) {
      emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  if (filterButtons.length > 0) {
    filterButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        filterButtons.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');
        currentFilter = btn.dataset.filter || 'all';
        filterProjects();
      });
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', filterProjects);
  }

  // 5. GESTION DES FORMULAIRES DE CONTACT
  document.querySelectorAll('form[data-status-target]').forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const statusTargetId = form.getAttribute('data-status-target');
      const statusElement = document.getElementById(statusTargetId);
      
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : '';
      
      if (submitBtn) {
        submitBtn.innerHTML = 'Envoi en cours...';
        submitBtn.disabled = true;
      }

      setTimeout(() => {
        if (statusElement) {
          statusElement.className = 'form-status success';
          statusElement.textContent = '✓ Merci beaucoup pour votre message ! Je vous répondrai dans les plus brefs délais.';
          statusElement.style.display = 'block';
        }
        form.reset();
        if (submitBtn) {
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
        }
      }, 700);
    });
  });

  // 6. MISE À JOUR DYNAMIQUE DE L'ANNÉE DANS LE PIED DE PAGE
  document.querySelectorAll('.current-year').forEach((yearEl) => {
    yearEl.textContent = new Date().getFullYear();
  });
});