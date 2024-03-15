document.getElementById('toggle-dark-mode').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode')) {
      document.querySelector('.bi-moon').style.display = 'inline';
      document.querySelector('.bi-sun').style.display = 'none';
    } else {
      document.querySelector('.bi-moon').style.display = 'none';
      document.querySelector('.bi-sun').style.display = 'inline';
    }
  });
  