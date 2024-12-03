document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('application-modal');
  const overlay = document.querySelector('.modal-overlay');
  const openModalBtns = document.querySelectorAll('.open-modal-btn');
  const closeModalBtn = document.querySelector('.close-modal-btn');
  const body = document.body;

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      modal.classList.remove('hidden');
      body.classList.add('no-scroll');
    });
  });

  closeModalBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
      body.classList.remove('no-scroll');
  });

  overlay.addEventListener('click', () => {
      modal.classList.add('hidden');
      body.classList.remove('no-scroll');
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.classList.add('hidden');
      body.classList.remove('no-scroll');
    }
  });
});
