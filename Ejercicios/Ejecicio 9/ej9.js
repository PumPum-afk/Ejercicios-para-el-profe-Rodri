const promptNumber = (message) => {
  const answer = prompt(message);
  if (answer === null) return null;
  const number = Number(answer);
  return Number.isNaN(number) ? null : number;
};

const promptText = (message) => {
  const answer = prompt(message);
  return answer === null ? null : answer.trim();
};

function HolaMundo() {
  alert('Hola mundo');
  console.log('Hola mundo');
}

function SaludoPersonalizado() {
  const nombre = promptText('Ingrese su nombre:');
  if (nombre === null || nombre === '') return;
  alert(`Hola ${nombre}`);
}

function SumaDosNumeros() {
  const a = promptNumber('Ingrese el primer número:');
  const b = promptNumber('Ingrese el segundo número:');
  if (a === null || b === null) return alert('Debes ingresar dos números válidos');
  alert(`La suma es ${a + b}`);
}

function EdadMayorMenor() {
  const edad = promptNumber('Ingrese su edad:');
  if (edad === null) return alert('Debes ingresar un número válido para la edad');
  alert(edad >= 18 ? 'Eres mayor de edad' : 'Eres menor de edad');
}

function ParImpar() {
  const numero = promptNumber('Ingrese un número:');
  if (numero === null) return alert('Debes ingresar un número válido');
  alert(numero % 2 === 0 ? 'El número es par' : 'El número es impar');
}

function TresNumeros() {
  const a = promptNumber('Ingrese el primer número:');
  const b = promptNumber('Ingrese el segundo número:');
  const c = promptNumber('Ingrese el tercer número:');
  if (a === null || b === null || c === null) return alert('Debes ingresar tres números válidos');
  alert(`El número mayor es ${Math.max(a, b, c)} y el menor es ${Math.min(a, b, c)}`);
}

function NotaDiez() {
  const nota = promptNumber('Ingrese su nota (1-10):');
  if (nota === null) return alert('Debes ingresar un número válido para la nota');
  alert(nota >= 8 ? 'Muy bien' : nota >= 6 ? 'Aceptable' : 'No aprobado');
}

function Pares1a20() {
  console.log('Números pares del 1 al 20:');
  for (let i = 2; i <= 20; i += 2) console.log(i);
  alert('Revisa la consola para ver los números pares del 1 al 20.');
}

function VerificarContrasena() {
  const contrasena = promptText('Ingresá la contraseña:');
  if (contrasena === null) return;
  alert(contrasena === '1234' ? 'Correcta' : 'Incorrecta');
}

function SumarHastaCero() {
  let suma = 0;
  while (true) {
    const numero = promptNumber('Ingresá un número (0 para terminar):');
    if (numero === null) return alert('Operación cancelada');
    if (numero === 0) break;
    suma += numero;
  }
  alert('Suma total: ' + suma);
}

function CalculadoraSimple() {
  const num1 = promptNumber('Ingresá el primer número:');
  const num2 = promptNumber('Ingresá el segundo número:');
  const operacion = promptText('¿Qué operación querés?\n1 - Suma\n2 - Resta\n3 - Multiplicación\n4 - División');
  if (num1 === null || num2 === null || operacion === null) return alert('Operación cancelada o datos inválidos');
  let resultado;
  if (operacion === '1') resultado = num1 + num2;
  else if (operacion === '2') resultado = num1 - num2;
  else if (operacion === '3') resultado = num1 * num2;
  else if (operacion === '4') {
    if (num2 === 0) return alert('Error: no se puede dividir por 0');
    resultado = num1 / num2;
  } else return alert('Opción inválida');
  alert('Resultado: ' + resultado);
}

function MiniMenu() {
  const opcion = promptText('Menú:\n1 - Saludar\n2 - Mostrar fecha\n3 - Mostrar número random');
  if (opcion === null) return;
  if (opcion === '1') alert('¡Hola! Bienvenido.');
  else if (opcion === '2') alert('Fecha: ' + new Date().toLocaleDateString());
  else if (opcion === '3') alert('Número random: ' + (Math.floor(Math.random() * 100) + 1));
  else alert('Opción inválida');
}

function AdivinarNumero() {
  const secreto = Math.floor(Math.random() * 10) + 1;
  let intento;
  let intentos = 0;
  do {
    intento = promptNumber('Adiviná el número del 1 al 10:');
    if (intento === null) return alert('Juego cancelado');
    intentos++;
    if (intento < secreto) alert('Más alto');
    else if (intento > secreto) alert('Más bajo');
  } while (intento !== secreto);
  alert('¡Correcto! Era el ' + secreto + '. Lo lograste en ' + intentos + ' intento(s).');
}

function ContarPares() {
  let contador = 0;
  while (true) {
    const numero = promptNumber('Ingresá un número (0 para terminar):');
    if (numero === null) return alert('Operación cancelada');
    if (numero === 0) break;
    if (numero % 2 === 0) contador++;
  }
  alert('Ingresaste ' + contador + ' número(s) par(es).');
}

function ArrayNombres() {
  const nombres = ['Ana', 'Carlos', 'Lucía', 'Mateo', 'Sofía'];
  console.log('Array de 5 nombres:', nombres);
  alert('Abre la consola para ver los 5 nombres.');
}

function RecorrerArray() {
  const colores = ['rojo', 'verde', 'azul', 'amarillo', 'violeta'];
  colores.forEach((color, i) => console.log(`Posición ${i}: ${color}`));
  alert('Revisa la consola para ver el recorrido del array.');
}

function MayorMenorArray() {
  const numeros = [34, 7, 89, 12, 56, 3, 71];
  alert(`Mayor: ${Math.max(...numeros)}\nMenor: ${Math.min(...numeros)}`);
  console.log('Array:', numeros);
}

function PromedioNotas() {
  const notas = [8, 7, 9, 6, 10, 5, 8];
  const promedio = notas.reduce((acc, n) => acc + n, 0) / notas.length;
  alert('Promedio: ' + promedio.toFixed(2));
}

function NombresHastaSalir() {
  const lista = [];
  let nombre;
  do {
    nombre = promptText("Ingresá un nombre (o escribí 'salir' para terminar):");
    if (nombre === null) return alert('Operación cancelada');
    if (nombre.toLowerCase() !== 'salir') lista.push(nombre);
  } while (nombre.toLowerCase() !== 'salir');
  console.log('Lista final:', lista);
  alert('Terminaste. Revisa la consola para ver los nombres guardados.');
}

function LongitudArray() {
  const frutas = ['manzana', 'banana', 'naranja', 'uva', 'mango', 'pera'];
  alert('Cantidad de elementos: ' + frutas.length);
}

function ParesArray() {
  const listaNumeros = [1, 4, 7, 10, 13, 16, 19, 22];
  const pares = listaNumeros.filter((n) => n % 2 === 0);
  console.log('Números pares:', pares);
  alert('Revisa la consola para ver los números pares del array.');
}

function BuscarFruta() {
  const canasta = ['manzana', 'banana', 'naranja', 'uva', 'mango'];
  const fruta = promptText('¿Qué fruta querés buscar?\nFrutas disponibles: ' + canasta.join(', '));
  if (fruta === null) return;
  alert(canasta.includes(fruta.toLowerCase()) ? fruta + ' sí está en la canasta ✅' : fruta + ' no está en la canasta ❌');
}

function PopArray() {
  const listaFrutas = ['pera', 'kiwi', 'limón', 'durazno', 'ciruela'];
  const eliminado = listaFrutas.pop();
  alert('Elemento eliminado: ' + eliminado);
  console.log('Array después de pop():', listaFrutas);
}

function PushArray() {
  const listaCompras = ['leche', 'pan'];
  listaCompras.push('huevos', 'manteca mantecosa', 'queso', 'yogur');
  alert('Se agregaron elementos. Revisa la consola para ver el array.');
  console.log('Lista de compras:', listaCompras);
}

