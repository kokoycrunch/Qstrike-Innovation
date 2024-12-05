document.addEventListener('DOMContentLoaded', () => {
  const menuList = document.getElementById('menu-primary-menu');
  const menuIcon = document.querySelector('.menu-icon i');
  const header = document.querySelector('.header-cont');
  const headerPrimary = document.querySelector('.header-primary');

  function toggleMenu() {
    if (menuList.style.maxHeight === '0rem') {
      menuList.style.maxHeight = '18.75rem';
    } else {
      menuList.style.maxHeight = '0rem';
    }
  }

  function resetMenuOnResize() {
    if (window.innerWidth >= 960) { // 60em in pixels
      menuList.style.maxHeight = null; // Resets height
    } else {
      menuList.style.maxHeight = '0rem'; // Ensures it's hidden on mobile
    }
  }

  function handleScroll() {
    if (window.scrollY > 50) { // Threshold for when to apply transparency
      header.classList.add('scrolled');

      // Apply scaling only if the screen width is >= 60em
      if (window.innerWidth >= 960) {
        headerPrimary.style.transform = 'scale(0.99)'; // Scale down on scroll
      }
    } else {
      header.classList.remove('scrolled');
      headerPrimary.style.transform = 'scale(1)'; // Reset to original size
    }
  }

  menuIcon.addEventListener('click', toggleMenu);
  window.addEventListener('resize', resetMenuOnResize);
  window.addEventListener('scroll', handleScroll);

  // Initialize on load
  resetMenuOnResize();
  handleScroll();
});
