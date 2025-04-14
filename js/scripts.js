
/* TABS */

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
      
    
/* FORMULARIO CHECKBOX */
const checkPolitica = document.getElementById("politica");
const botonEnviar = document.getElementById("enviar");

checkPolitica.addEventListener("change", function() {
  // botonEnviar.disabled = !this.checked;

  if (this.checked) {
      // Si el checkbox está marcado, activamos el botón y añadimos la clase
      botonEnviar.disabled = false;
      botonEnviar.classList.add('boton-submit');
  } else {
      // Si el checkbox está desmarcado, desactivamos el botón y eliminamos la clase
      botonEnviar.disabled = true;
      botonEnviar.classList.remove('boton-submit');
  }
});
