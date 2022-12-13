<script>
    const addFila = () => {
        document.getElementById('bodyTable').insertRow(1).innerHTML = `
            <tr>
                <td>
                    <input type="number" name="" id="" class="form-control" placeholder="Cantidad">
                </td>
                <td>
                    <input type="text" name="" id="" class="form-control" placeholder="Nombre del Articulo">
                </td>
                <td>
                    <input type="text" name="" id="" class="form-control" placeholder="Características">
                </td>
                <td>
                    <input type="number" name="" class="form-control" id="" placeholder="Precio Unitario">
                </td>
                <td>
                    $0.00
                </td>
                <td>
                    &nbsp;
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="eliminarFila()">
                        <i class="mdi mdi-delete"></i>
                    </button>
                </td>
            </tr>
        `
    }
    const eliminarFila = () => {
        const table = document.getElementById('bodyTable')
        const rowCount = table.rows.length;
        if (rowCount <= 1)
            console.error('No eliminar encabezado')
        else
            table.deleteRow(rowCount - 1);
    }
</script>