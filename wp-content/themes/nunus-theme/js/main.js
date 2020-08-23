const menuButton = document.querySelector('#menu-icon');

// Toggle dropdown menu in mobile view
menuButton.addEventListener('click', () => {
  const hiddenMenu = document.querySelector('#hidden-menu');
  if (hiddenMenu.style.display === 'none' || !hiddenMenu.style.display) {
    hiddenMenu.style.display = 'block';
  } else {
    hiddenMenu.style.display = 'none';
  };
});