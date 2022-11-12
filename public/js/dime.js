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
const alerta = document.getElementById("ajax-alert")

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

btnShow.addEventListener(('click'), () => {
    mesg.classList.toggle('show')
})

//! Script - server-details.php

const btnGeneratePass = document.getElementById('btnPwd');
const divGeneratePass = document.getElementById('passwordEmail');

btnGeneratePass.addEventListener(('click'), (e) => {
    e.preventDefault();
    divGeneratePass.classList.toggle('show')
})

