// Obtener una referencia al elemento canvas del DOM
const grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X.
const etiquetas = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Ventas 2020",
    data: [500000, 600000, 300000, 400000, 300000, 300000, 500000, 400000, 300000, 500000, 600000, 700000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(245, 73, 61, .0)', // Color de fondo
    borderColor: 'rgba(245, 73, 61, 1)', // Color del borde
    borderWidth: 2,// Ancho del borde
};
const datosVentas2021 = {
    label: "Ventas 2021",
    data: [200000, 300000, 300000, 400000, 600000, 300000, 400000, 700000, 600000, 400000, 600000, 500000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, .0)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 2,// Ancho del borde
};
const datosVentas2022 = {
    label: "Ventas 2022",
    data: [300000, 400000, 500000, 600000, 300000, 400000, 600000, 400000, 400000, 600000, 600000, 700000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(73, 235, 116, .0)', // Color de fondo
    borderColor: 'rgba(73, 235, 116, 1)', // Color del borde
    borderWidth: 2,// Ancho del borde
};
/* Hay Algo */
let myChart = new Chart(grafica, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2021,
            datosVentas2022,
            datosVentas2020
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }],
        },
    }
});