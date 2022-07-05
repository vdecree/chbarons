const header = document.querySelector('.header');
const toggle = header.querySelector('[data-menu-toggle]');
const body = document.querySelector('body');

toggle.addEventListener('click', () => {
    const open = header.getAttribute('data-state') == 'open';

    if (open) {
        toggle.setAttribute('aria-expanded', false);
        header.setAttribute('data-state', 'closed');
      } else {
        toggle.setAttribute('aria-expanded', true);
        header.setAttribute('data-state', 'open');
      }
  },
  false
);
