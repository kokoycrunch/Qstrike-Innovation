jQuery(document).ready(function(jQuery) {
  // When an accordion header is clicked
  jQuery('.accordion-header').click(function() {
    // Close all open accordion contents
    jQuery('.accordion-content').slideUp();
    // Reset all chevrons to the right
    jQuery('.accordion-header .fi').removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');

    // Get the clicked item's content and chevron
    const content = jQuery(this).next('.accordion-content');
    const chevron = jQuery(this).find('.fi');

    // If the content is visible, close it, else open it
    if (content.is(':visible')) {
      content.slideUp();
      chevron.removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');
    } else {
      content.slideDown();
      chevron.removeClass('fi-bs-angle-double-right').addClass('fi-bs-chevron-double-down');
    }
  });
});

//Accordion2

// jQuery(document).ready(function(jQuery) {
//   // When an accordion header is clicked
//   jQuery('.accordion-header2').click(function() {
//     // Close all open accordion contents
//     jQuery('.accordion-content2').slideUp();
//     // Reset all chevrons to the right
//     jQuery('.accordion-header2 .fi').removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');

//     // Get the clicked item's content and chevron
//     const content = jQuery(this).next('.accordion-content2');
//     const chevron = jQuery(this).find('.fi');

//     // If the content is visible, close it, else open it
//     if (content.is(':visible')) {
//       content.slideUp();
//       chevron.removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');
//     } else {
//       content.slideDown();
//       chevron.removeClass('fi-bs-angle-double-right').addClass('fi-bs-chevron-double-down');
//     }
//   });
// });

jQuery(document).ready(function(jQuery) {
  // Ensure all accordion contents are closed initially
  jQuery('.accordion-content2').slideUp();

  // When an accordion header is clicked
  jQuery('.accordion-header2').click(function() {
    // Close all open accordion contents
    jQuery('.accordion-content2').slideUp();
    // Reset all chevrons to the right
    jQuery('.accordion-header2 .fi').removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');

    // Get the clicked item's content and chevron
    const content = jQuery(this).next('.accordion-content2');
    const chevron = jQuery(this).find('.fi');

    // If the content is visible, close it; else open it
    if (content.is(':visible')) {
      content.slideUp();
      chevron.removeClass('fi-bs-chevron-double-down').addClass('fi-bs-angle-double-right');
    } else {
      content.slideDown();
      chevron.removeClass('fi-bs-angle-double-right').addClass('fi-bs-chevron-double-down');
    }
  });
});
