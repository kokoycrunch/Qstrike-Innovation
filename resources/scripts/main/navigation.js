document.addEventListener('DOMContentLoaded', () => {
  const menuList = document.getElementById('menu-primary-menu');
  const menuIcon = document.querySelector('.menu-icon i');
  const header = document.querySelector('.header-cont');
  const headerPrimary = document.querySelector('.header-primary');

  //Search function variable declaration
  const searchButtons = document.querySelectorAll('.search-btn, .search-btn2');
  const searchOverlay = document.getElementById('search-overlay');
  const closeSearch = document.querySelector('.close-search');

  // Search Functions

  searchButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      searchOverlay.classList.add('active');
      searchInput.focus();
    });
  });

  closeSearch.addEventListener('click', () => {
    closeOverlay();
  });

  function closeOverlay() {
    searchOverlay.classList.remove('active');
    searchResults.innerHTML = '';
    searchInput.value = '';
  }

  // Live search function
  const searchInput = document.getElementById('live-search-input');
  const searchResults = document.getElementById('search-results');

  let searchTimeout = null;

  searchInput.addEventListener('input', () => {
    const query = searchInput.value.trim();

    clearTimeout(searchTimeout);

    if (query.length < 2) {
      searchResults.innerHTML = '';
      return;
    }

    searchTimeout = setTimeout(() => {
      fetchResults(query);
    }, 2500);
  });

  function fetchResults(query) {
    searchResults.innerHTML = '<p class="search-loading">Searching...</p>';

    fetch(`/wp-json/custom/v1/search?q=${encodeURIComponent(query)}`)
      .then(res => res.json())
      .then(data => renderResults(data))
      .catch(() => {
        searchResults.innerHTML = '<p>Error fetching results.</p>';
      });
  }

  function renderResults(results) {
    if (!results.length) {
      searchResults.innerHTML =
        '<p class="no-results">No results found.</p>';
      return;
    }

    let html = '<ul class="search-result-list">';

    results.forEach(post => {
      html += `
        <li class="search-result-item">
          <a href="${post.link}">
            ${post.title}
          </a>
        </li>
      `;
    });

    html += '</ul>';

    searchResults.innerHTML = html;
  }

  //Toggle menu

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

  // function styleHRISLogin() {
  //   const menuLinks = document.querySelectorAll(".nav-primary a");

  //   menuLinks.forEach(link => {
  //     if (link.textContent.trim() === "HRIS LOGIN") {
  //       link.style.backgroundColor = "black";
  //       link.style.color = "white";
  //       link.style.padding = "8px 12px"; // py-2 px-3 equivalent
  //       link.style.textDecoration = "none";
  //       link.style.borderRadius = "50px"; // Optional

  //       // Make the link open in a new tab
  //       link.setAttribute("target", "_blank");
  //       link.setAttribute("rel", "noopener noreferrer");
  //     }
  //   });
  // }
function styleHRISLogin() {
  const menuLinks = document.querySelectorAll(".nav-primary a");
  const mediaQuery = window.matchMedia("(max-width: 40em)");

  function applyStyles() {
    menuLinks.forEach(link => {
      if (link.textContent.trim() === "HRIS LOGIN") {
        if (mediaQuery.matches) {
          // Show + style on small screens
          link.style.display = "inline-block";
          link.style.backgroundColor = "black";
          link.style.color = "white";
          link.style.padding = "8px 12px";
          link.style.textDecoration = "none";
          link.style.borderRadius = "50px";

          link.setAttribute("target", "_blank");
          link.setAttribute("rel", "noopener noreferrer");
        } else {
          // Hide on screens >= 40em
          link.style.display = "none";
        }
      }
    });
  }

  // Run on load
  applyStyles();

  // Run on resize
  mediaQuery.addEventListener("change", applyStyles);
}

  menuIcon.addEventListener('click', toggleMenu);
  window.addEventListener('resize', resetMenuOnResize);
  window.addEventListener('scroll', handleScroll);

  // Initialize on load
  resetMenuOnResize();
  handleScroll();
  styleHRISLogin(); // Apply styles to HRIS LOGIN button
});
