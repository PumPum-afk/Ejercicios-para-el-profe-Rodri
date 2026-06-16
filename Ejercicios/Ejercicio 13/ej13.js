const btnChiste = document.getElementById('btnChiste');
const chiste = document.getElementById('Chiste');
const selectCategoria = document.getElementById('categoria');
const selectTipo = document.getElementById('tipo');

btnChiste.addEventListener('click', traerChiste);

function traerChiste() {
    const categoria = selectCategoria.value;
    const tipo = selectTipo.value;
    const API_URL = `https://v2.jokeapi.dev/joke/${categoria}?type=${tipo}&blacklistFlags=nsfw,religious,political,racist,sexist,explicit`;
    
    chiste.classList.add('cargando');
    chiste.textContent = 'Cargando chiste...';

    fetch(API_URL)
        .then(respuesta => respuesta.json())
        .then(datos => {
            
            chiste.classList.remove('cargando', 'error');
            
            
            if (datos.type === 'single') {
                
                chiste.textContent = datos.joke;
            } else {
               
                chiste.innerHTML = `<strong>${datos.setup}</strong><br><br>${datos.delivery}`;
            }
        })
        .catch(error => {
           
            console.error('Error al traer el chiste:', error);
            chiste.classList.remove('cargando');
            chiste.classList.add('error');
            chiste.textContent = 'Error al cargar el chiste. Intenta nuevamente.';
        });
}