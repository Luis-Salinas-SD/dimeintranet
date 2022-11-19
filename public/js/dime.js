//! Script correspondiente al archivo de clientes.php
const checkbox = document.getElementById('client-check')
const tokenn = document.getElementById('token')

if (checkbox) {
    checkbox.addEventListener('click', () => {
        if (tokenn.style.display === 'none') {
            tokenn.style.display = 'block'
        } else {
            tokenn.style.display = 'none'
        }
    })
}
//! Script correspondiente al archivo de cotizaciones.php
let validarDivision = document.getElementById('selectDiv');
let validarClient = document.getElementById('selectClient');

let index
let valor = '';
let index2
let valor2 = '';

if (validarDivision) {
    //* addEventListener 1
    validarDivision.addEventListener('change', () => {
        index = validarDivision.selectedIndex;
        valor = validarDivision.value;
        cambio()
    })
}

if (validarClient) {
    //* addEventListener 2
    validarClient.addEventListener('change', () => {
        index2 = validarClient.selectedIndex;
        valor2 = validarClient.value;
        cambio()
    })
}


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


//* Sweet Alerts
//! Script - server-details.php
const alerta = document.getElementById("ajax-alert");

if (alerta) {
    alerta.addEventListener("click", function () {

        Swal.fire({
            title: 'Ver Contraseña del Servidor',
            text: 'Escribe tu Contraseña de Acceso',
            input: 'email',
            showCancelButton: true,
            confirmButtonText: 'Ver',
            showLoaderOnConfirm: true,
            confirmButtonColor: "#10c469",
            cancelButtonColor: "#f34e4e",
            preConfirm: function (email) {
                return new Promise(function (resolve, reject) {
                    setTimeout(function () {
                        if (email === 'test@test.com') {
                            reject('El mail ya exsiste')
                        } else {
                            resolve()
                        }
                    }, 2000)
                })
            },
            allowOutsideClick: false
        }).then(function (email) {
            Swal.fire({
                icon: 'success',
                title: 'Finalizado',
                confirmButtonColor: "#4a4fea",
                html: 'Enviado: ' + email
            })
        })
    });
}

//! Script - dominio-details.php

//! Script - server-details.php
const msm = document.getElementById("check-domain")
if (msm) {
    msm.addEventListener("click", function () {
        Swal.fire({
            icon: 'error',
            title: 'Test Connection',
            text: '¡ Datos Incorrectos ! ',
        })
    });
}

//! Script - server-details.php

const btnShow = document.getElementById('switch');
const mesg = document.getElementById('mesg')

if (btnShow) {
    btnShow.addEventListener(('click'), () => {
        mesg.classList.toggle('show')
    })
}

//! Script - server-details.php

const btnGeneratePass = document.getElementById('btnPwd');
const divGeneratePass = document.getElementById('passwordEmail');

if (btnGeneratePass) {
    btnGeneratePass.addEventListener(('click'), (e) => {
        e.preventDefault();
        divGeneratePass.classList.toggle('show')
    })
}

//! Script - pedidosPendientes.php

const seleccion = document.querySelector('#seleccion');
const showForm = document.querySelector('#showForm')

if (seleccion) {
    seleccion.addEventListener('change', (e) => {
        showForm.innerHTML = `
            <div class="col-12 mb-3">
                <label for="" class="form-label">Categoría</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Producto</label>
                <select name="" id="" class="form-select">
                    <option value="">product 1</option>
                    <option value="">product 2</option>
                    <option value="">product 3</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input type="number" name="" id="" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Precio</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">$</span>
                <input type="number" class="form-control" placeholder="Precio" aria-label="precio" aria-describedby="basic-addon1">
            </div>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Fecha de Entrega</label>
                <input class="form-control" id="example-date" type="date" name="date">
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Asignar a un Usuario</label>
                <select name="" id="" class="form-select">
                    <option value="">- Seleccionar una opción -</option>
                    <option value="">Robert</option>
                    <option value="">Luis</option>
                    <option value="">Lic Mañon</option>
                </select>
            </div>
        `
    })
}

//! script Agergar pago en pedido-edit.php

const addPago = document.querySelector('#addPago')
const showFormPago = document.querySelector('#showFormPago')

if (addPago) {
    addPago.addEventListener('click', (event) => {
        event.preventDefault()
        showFormPago.classList.toggle('show');
    })
}


