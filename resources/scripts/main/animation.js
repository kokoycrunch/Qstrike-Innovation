jQuery(document).ready(function($) {
  AOS.init({
      duration: 1000,  // Animation duration in milliseconds
      easing: 'ease-in-out',  // Easing function
      once: true,  // Animation happens only once
      offset: 100  // Trigger animation when the element is 100px from the viewport
  });
});

jQuery(document).ready(function($) {
  $('.employee-card').hover(
    function() {
      const $img = $(this).find('.employee-image');
      if (!$img.data('main-image')) {
        $img.data('main-image', $img.attr('src'));
      }

      const hoverImage = $(this).data('hover-image');
      $img.attr('src', hoverImage);
    },
    function() {
      const $img = $(this).find('.employee-image');
      const mainImage = $img.data('main-image');
      $img.attr('src', mainImage);
    }
  );
});

