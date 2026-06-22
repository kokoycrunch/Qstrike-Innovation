document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById('sliderWrapper');
    const slider = document.getElementById('slider');

    let getSlideSize = () => {
      const style = getComputedStyle(document.documentElement);
      return parseInt(style.getPropertyValue('--slide-width')) + parseInt(style.getPropertyValue('--slide-gap'));
    };

    const totalSlides = slider.children.length;
    let currentIndex = totalSlides - 2.75;
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = currentIndex * getSlideSize();

    const setSliderPosition = (value, smooth = false) => {
      slider.style.transition = smooth ? "transform 0.3s ease" : "none";
      slider.style.transform = `translateX(${value}px)`;
    };

    const snapToSlide = () => {
      currentIndex = Math.round(currentTranslate / getSlideSize());
      currentIndex = Math.min(totalSlides - 1, Math.max(0, currentIndex));
      prevTranslate = currentIndex * getSlideSize();
      setSliderPosition(prevTranslate, true);
    };

    const updateSlideSize = () => {
      prevTranslate = currentIndex * getSlideSize();
      setSliderPosition(prevTranslate, true);
    };

    // Initial
    setSliderPosition(prevTranslate);

    window.addEventListener('resize', updateSlideSize);

    // Wheel scroll
    wrapper.addEventListener('wheel', (e) => {
      e.preventDefault();
      if (e.deltaY < 0 && currentIndex < totalSlides - 1) {
        currentIndex++;
      } else if (e.deltaY > 0 && currentIndex > 0) {
        currentIndex--;
      }
      prevTranslate = currentIndex * getSlideSize();
      setSliderPosition(prevTranslate, true);
    });

    // Mouse drag
    wrapper.addEventListener('mousedown', (e) => {
      isDragging = true;
      startX = e.clientX;
      slider.style.transition = "none";
      wrapper.style.cursor = "grabbing";
    });

    window.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      const delta = e.clientX - startX;
      currentTranslate = prevTranslate + delta;
      setSliderPosition(currentTranslate);
    });

    window.addEventListener('mouseup', () => {
      if (!isDragging) return;
      isDragging = false;
      wrapper.style.cursor = "grab";
      snapToSlide();
    });

    window.addEventListener('mouseleave', () => {
      if (isDragging) {
        isDragging = false;
        wrapper.style.cursor = "grab";
        snapToSlide();
      }
    });

    // Touch drag
    wrapper.addEventListener('touchstart', (e) => {
      isDragging = true;
      startX = e.touches[0].clientX;
      slider.style.transition = "none";
    });

    wrapper.addEventListener('touchmove', (e) => {
      if (!isDragging) return;
      const delta = e.touches[0].clientX - startX;
      currentTranslate = prevTranslate + delta;
      setSliderPosition(currentTranslate);
    });

    wrapper.addEventListener('touchend', () => {
      if (!isDragging) return;
      isDragging = false;
      snapToSlide();
    });
});
