const menuToggle = document.querySelector('.menu-toggle');
const mainNav = document.querySelector('.main-nav');

menuToggle?.addEventListener('click', () => {
  const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
  menuToggle.setAttribute('aria-expanded', String(!isOpen));
  mainNav.classList.toggle('is-open', !isOpen);
});

document.querySelectorAll('.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    menuToggle?.setAttribute('aria-expanded', 'false');
    mainNav?.classList.remove('is-open');
  });
});

const themeToggle = document.querySelector('.theme-toggle');
const savedTheme = localStorage.getItem('haby-theme');
if (savedTheme === 'dark') document.body.classList.add('dark-theme');
themeToggle?.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');
  localStorage.setItem('haby-theme', document.body.classList.contains('dark-theme') ? 'dark' : 'light');
  themeToggle.setAttribute('aria-label', document.body.classList.contains('dark-theme') ? 'Activer le mode clair' : 'Activer le mode sombre');
});

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

const projectCards = [...document.querySelectorAll('[data-category]')];
const projectLogos = {
  qsen: ['../images/logo-qsen.svg', 'Logo de la boutique de quincaillerie Qsen'],
  fouta: ['../images/logo-laawol.svg', "Logo du service de transport Laawol entre le Fouta et l'AIBD"],
  senquiz: ['../images/logo-senquiz.svg', "Logo de l'application éducative SenQuiz"]
};
Object.entries(projectLogos).forEach(([projectId, [source, alternative]]) => {
  const projectImage = document.querySelector(`#${projectId} .project-image`);
  if (!projectImage || projectImage.querySelector('.project-logo')) return;
  const logo = document.createElement('img');
  logo.className = 'project-logo';
  logo.src = source;
  logo.alt = alternative;
  projectImage.prepend(logo);
});
const searchInput = document.querySelector('#project-search');
const filterButtons = document.querySelectorAll('.filter-button');
const emptyState = document.querySelector('.empty-state');
let activeFilter = 'all';

function filterProjects() {
  const query = searchInput?.value.toLowerCase().trim() || '';
  let visibleCount = 0;
  projectCards.forEach((card) => {
    const matchesFilter = activeFilter === 'all' || card.dataset.category.includes(activeFilter);
    const matchesSearch = !query || card.dataset.search.includes(query);
    const isVisible = matchesFilter && matchesSearch;
    card.hidden = !isVisible;
    if (isVisible) visibleCount += 1;
  });
  if (emptyState) emptyState.hidden = visibleCount !== 0;
}

searchInput?.addEventListener('input', filterProjects);
filterButtons.forEach((button) => {
  button.addEventListener('click', () => {
    activeFilter = button.dataset.filter;
    filterButtons.forEach((item) => item.classList.toggle('active', item === button));
    filterProjects();
  });
});

document.querySelectorAll('form[data-success]').forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const status = form.querySelector('.form-status');
    status.textContent = form.dataset.success;
    status.classList.add('show');
    form.reset();
  });
});

document.querySelectorAll('.site-footer p').forEach((footerText) => {
  footerText.textContent = `Fait avec attention par Haby Ndom · ${new Date().getFullYear()}`;
});