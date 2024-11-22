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

  // Adjust heights after video is loaded
  if (video) {
    video.addEventListener('loadeddata', adjustHeights);
  }

  // Adjust heights on window resize
  window.addEventListener('resize', adjustHeights);
});
