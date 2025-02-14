document.addEventListener("DOMContentLoaded", () => {
  const video = document.querySelector('.video-bg');
  const heroCont1 = document.querySelector('.hero__cont1');
  const cont2 = document.querySelector('.cont2');

  const historyVideo = document.getElementById("history-video");
  const playPauseBtn = document.getElementById("play-pause");
  const volumeToggleBtn = document.getElementById("volume-toggle");
  const fullscreenBtn = document.getElementById("fullscreen-btn");
  const progressBar = document.getElementById("progress-bar");

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

  //History video script here

  let isUserInteracted = false; // Track user interaction

  // Fix: Unlock controls when user taps (important for iOS)
  const enableMobilePlayback = () => {
    if (!isUserInteracted) {
      historyVideo.muted = false; // Enable sound if user interacted
      historyVideo.play().catch(error => console.error("Autoplay failed:", error));
      isUserInteracted = true;
    }
  };

  document.addEventListener("click", enableMobilePlayback); // Unlock controls on click
  document.addEventListener("touchstart", enableMobilePlayback); // Unlock on touch

  // Play/Pause button
  playPauseBtn.addEventListener("click", () => {
    if (historyVideo.paused) {
      historyVideo.play();
      playPauseBtn.textContent = "⏸️"; // Pause icon
    } else {
      historyVideo.pause();
      playPauseBtn.textContent = "▶️"; // Play icon
    }
  });

  // Mute/Unmute button
  volumeToggleBtn.addEventListener("click", () => {
    if (historyVideo.muted) {
      historyVideo.muted = false;
      volumeToggleBtn.textContent = "🔊";
    } else {
      historyVideo.muted = true;
      volumeToggleBtn.textContent = "🔇";
    }
  });

  // Fullscreen button (iOS Safari support)
  fullscreenBtn.addEventListener("click", () => {
    if (historyVideo.requestFullscreen) {
      historyVideo.requestFullscreen();
    } else if (historyVideo.webkitEnterFullscreen) {
      historyVideo.webkitEnterFullscreen(); // iOS Safari support
    } else if (historyVideo.mozRequestFullScreen) {
      historyVideo.mozRequestFullScreen();
    } else if (historyVideo.msRequestFullscreen) {
      historyVideo.msRequestFullscreen();
    }
  });

  // Update progress bar as video plays
  historyVideo.addEventListener("timeupdate", () => {
    const progress = (historyVideo.currentTime / historyVideo.duration) * 100;
    progressBar.value = progress;
  });

  // Seek video when progress bar is changed
  progressBar.addEventListener("input", () => {
    const seekTime = (progressBar.value / 100) * historyVideo.duration;
    historyVideo.currentTime = seekTime;
  });

  // Ensure loop works properly
  historyVideo.addEventListener("ended", () => {
    historyVideo.currentTime = 0;
    historyVideo.play();
  });
});
