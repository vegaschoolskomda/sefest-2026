document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('[data-toggle-sidebar]');
  const sidebar = document.querySelector('.sija-sidebar');

  if (!btn || !sidebar) return;

  btn.addEventListener('click', () => {
    sidebar.classList.toggle('is-open');
  });

  // Close sidebar when clicking outside (mobile)
  document.addEventListener('click', (e) => {
    const clickedInSidebar = sidebar.contains(e.target);
    const clickedToggle = btn.contains(e.target);

    if (!clickedInSidebar && !clickedToggle) {
      sidebar.classList.remove('is-open');
    }
  });
});

