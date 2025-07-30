document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth <= 792) {
    const ig = document.querySelector('#navbar-nav > li.menu-item-12658');
    const fb = document.querySelector('#navbar-nav > li.menu-item-12657');
    const g = document.querySelector('#navbar-nav > li.menu-item-13551');
    const nav = document.querySelector('#navbar-nav');

    if (ig && fb && g && nav) {
      const wrapper = document.createElement('ul');
      wrapper.className = 'menu-social-icons';

      wrapper.appendChild(ig);
      wrapper.appendChild(fb);
      wrapper.appendChild(g);

      nav.appendChild(wrapper);
    }
  }
});
