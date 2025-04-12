
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.tab-buttons img');
  const contents = document.querySelectorAll('.tab-content-js');
  const scrollTarget = document.getElementById('info-cursos');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Activar tab visual
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));

      tab.classList.add('active');
      const target = document.getElementById(tab.dataset.tab);
      target.classList.add('active');

      // Hacer scroll suave a la sección del contenido
      if (scrollTarget) {
        scrollTarget.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});
      
          
    