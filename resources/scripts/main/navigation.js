document.addEventListener('DOMContentLoaded', () => {
  const menuList = document.getElementById('menu-primary-menu');
  const menuIcon = document.querySelector('.menu-icon i');
  const header = document.querySelector('.header-cont');
  const headerPrimary = document.querySelector('.header-primary');

  function toggleMenu() {
    if (menuList.style.maxHeight === '0rem') {
      menuList.style.maxHeight = '25rem';
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

  function styleHRISLogin() {
    const menuLinks = document.querySelectorAll(".nav-primary a");

    menuLinks.forEach(link => {
      if (link.textContent.trim() === "HRIS LOGIN") {
        link.style.backgroundColor = "black";
        link.style.color = "white";
        link.style.padding = "8px 12px"; // py-2 px-3 equivalent
        link.style.textDecoration = "none";
        link.style.borderRadius = "4px"; // Optional

        // Make the link open in a new tab
        link.setAttribute("target", "_blank");
        link.setAttribute("rel", "noopener noreferrer");
      }
    });
  }

  menuIcon.addEventListener('click', toggleMenu);
  window.addEventListener('resize', resetMenuOnResize);
  window.addEventListener('scroll', handleScroll);

  // Initialize on load
  resetMenuOnResize();
  handleScroll();
  styleHRISLogin(); // Apply styles to HRIS LOGIN button
});
