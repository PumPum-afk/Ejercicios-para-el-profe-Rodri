const primerParrafo = document.getElementById('primerParrafo');
const imagenMelon = document.getElementById('imagenMelon');
const botonCambiarTexto = document.getElementById('botonCambiarTexto');
const botonCambiar = document.getElementById('botonCambiar');
const miInput = document.getElementById('miInput');
const botonMostrarMensaje = document.getElementById('botonMostrarMensaje');
const botonAñadirClase = document.getElementById('botonAñadirClase');
const body = document.getElementById('body');
const botonModoOscuro = document.getElementById('botonModoOscuro');
const botonAgregar = document.getElementById('botonAgregar');
const inputTarea = document.getElementById('inputTarea');
const listaTareas = document.getElementById('listaTareas');

botonCambiarTexto.addEventListener('click', () => {
    primerParrafo.textContent = 'Good boy';
});

botonCambiar.addEventListener('click', () => {
    imagenMelon.src = 'https://static.vecteezy.com/system/resources/thumbnails/048/157/765/small/woman-s-feet-with-bunions-free-photo.jpg';
    imagenMelon.alt = 'Sandía';
});

botonMostrarMensaje.addEventListener('click', () => {
    alert(miInput.value);
});

botonAñadirClase.addEventListener('click', () => {
    primerParrafo.classList.add('resaltado');
});

botonModoOscuro.addEventListener('click', () => {
    body.classList.toggle('oscuro');
});

botonAgregar.addEventListener('click', () => {
    agregarElemento();
});

function agregarElemento() {
    if (inputTarea.value.trim() === '') {
        alert('ingresa un elemento');
        return;
    }
    
    const nuevoItem = document.createElement('li');
    nuevoItem.textContent = inputTarea.value;
    
    listaTareas.appendChild(nuevoItem);
    
    inputTarea.value = '';
}