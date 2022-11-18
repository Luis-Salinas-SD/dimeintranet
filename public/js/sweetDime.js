const generatePay = document.getElementById("generatePay");

if (generatePay) {
    generatePay.addEventListener("click", function () {

        Swal.fire({
            title: 'Orden de Pago',
            html:
                `<label>Cantidad a pagar</label><input id="swal-input1" class="swal2-input"><label>Concepto de pago</label><input id="swal-input2" class="swal2-input"><label>MSI</label><select name="" id="" class="form-select"> < option value="" > op1</> <option value="">op2</option> <option value="">op3</option></select > `,
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



