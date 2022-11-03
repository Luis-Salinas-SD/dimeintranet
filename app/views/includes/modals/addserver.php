<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Registrar un nuevo servidor</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="server" class="form-label">
                                Nombre del Servidor
                            </label>
                            <input type="text" class="form-control" id="server" placeholder="Servidor" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th>DNS</th>
                                            <th>IP DNS</th>
                                            <th>
                                                <button type="button" class="btn btn-success" onclick="agregarFila()">
                                                    <i class="mdi mdi-server-remove"></i>
                                                </button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaprueba">
                                        <tr>
                                            <td><input type="text" name="" id="" placeholder="DNS"></td>
                                            <td><input type="text" name="" id="" placeholder="IP DNS"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="server" class="form-label">
                                Dirección IP
                            </label>
                            <input type="text" class="form-control" id="server" placeholder="ip" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="server" class="form-label">
                                Nombre de usuario
                            </label>
                            <input type="text" class="form-control" id="server" placeholder="user" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="server" class="form-label">
                                Contraseña
                            </label>
                            <input type="password" class="form-control" id="server" placeholder="password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
        </form>
    </div>
</div>

<script>
    const agregarFila = () => {
        document.getElementById('tablaprueba').insertRow(1).innerHTML = `
        <td><input type="text" name="" id="" placeholder="DNS"></td>
        <td><input type="text" name="" id="" placeholder="IP DNS"></td>
        <td><button type="button" class="btn btn-danger" onclick="eliminarFila()"><i class="mdi mdi-delete"></i></button></td>`
    }
    const eliminarFila = () => {
        const table = document.getElementById('tablaprueba')
        const rowCount = table.rows.length

        if (rowCount <= 1)
            alert('No se puede eliminar el encabezado')
        else
            table.deleteRow(rowCount - 1)
    }
</script>