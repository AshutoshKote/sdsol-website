/* ─── SD SOL — SHARED SITE SCRIPTS ─── */

/* Load a shared HTML component into a placeholder element.
   To edit the nav, update: components/nav.html
   To edit the footer, update: components/footer.html       */
async function loadComponent(placeholderId, file) {
  const el = document.getElementById(placeholderId);
  if (!el) return;
  try {
    const res = await fetch(file);
    el.outerHTML = await res.text();
  } catch (e) {
    console.warn('Could not load component:', file);
  }
}

/* Scroll-reveal animation — adds "visible" class when elements scroll into view.
   Add class="reveal" to any element to animate it in.                          */
function initReveal() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 80);
    });
  }, { threshold: 0.08 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', function () {
  loadComponent('site-nav', 'components/nav.html');
  loadComponent('site-footer', 'components/footer.html');
  initReveal();
});
