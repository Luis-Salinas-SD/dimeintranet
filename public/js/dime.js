//! Script correspondiente al archivo de clientes.php
const checkbox = document.querySelector('#client-check')
const tokenn = document.querySelector('#token')

checkbox.addEventListener('click', (e) => {

    if (tokenn.style.display === 'none') {
        tokenn.style.display = 'block'
    } else {
        tokenn.style.display = 'none'
    }
})

//! Script correspondiente al archivo de cotizaciones.php 
let validarDivision = document.querySelector('#selectDiv');
let validarClient = document.querySelector('#selectClient');

let index
let valor = ' ';
let index2
let valor2 = ' ';

//* addEventListener 1
validarDivision.addEventListener('change', (e) => {
    index = validarDivision.selectedIndex;
    valor = validarDivision.value;
    cambio()
})

//* addEventListener 2
validarClient.addEventListener('change', (e) => {
    index2 = validarClient.selectedIndex;
    valor2 = validarClient.value;
    cambio()
})

function cambio() {
    if (index != 0 && index2 != 0) {
        document.getElementById('mensaje').innerHTML = `
        <div class="alert alert-secondary bg-secondary text-white border-0" role="alert">
            ¿ Deseas Utilizar : A la División : <b>${valor}</b> y Al Cliente : <b>${valor2}</b>?
            <button type="button" class="btn btn-success waves-effect waves-light">Sí</button>
            <button type="button" class="btn btn-danger waves-effect waves-light">No</button>
        </div>
        `
    } else if (index === undefined && index === undefined) {
        alert('Algo salio mal')
    }
}

//! Script - addserver.php

const agregarFila = () => {
    document.getElementById('tablaprueba').insertRow(1).innerHTML = `
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1x</td>`
}

console.log('hola');


