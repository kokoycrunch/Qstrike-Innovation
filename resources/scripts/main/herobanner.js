document.addEventListener("DOMContentLoaded", () => {
  const video = document.querySelector('.video-bg');
  const heroCont1 = document.querySelector('.hero__cont1');
  const cont2 = document.querySelector('.cont2');

  const adjustHeights = () => {
    if (video) {
      const videoHeight = video.offsetHeight;

      // Set the height of hero__cont1 to match the video
      if (heroCont1) {
        heroCont1.style.height = `${videoHeight}px`;
      }

      // Set the border-bottom height of cont2 to match the video height
      if (cont2) {
        cont2.style.borderBottomWidth = `${videoHeight}px`;
      }
    }
  };

  // Lazy load the video and adjust heights after it's loaded
  if (video) {
    const videoSource = video.querySelector('source');
    if (videoSource && videoSource.hasAttribute('loading')) {
      videoSource.addEventListener('load', () => {
        video.load();
        adjustHeights();
      });
    }

    video.addEventListener('loadeddata', adjustHeights); // Fallback in case the lazy loading is quick
  }

  // Adjust heights on window resize
  window.addEventListener('resize', adjustHeights);

  // Initial adjustment to set default heights
  adjustHeights();
});
