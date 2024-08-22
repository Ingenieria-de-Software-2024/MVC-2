<div class="row justify-content-center">
    <h3 class="text-center mb-3">Registro de Usuarios</h3>
    <form class="border bg-light shadow rounded p-4 col-lg-6 text-center bg-dark bg-gradient text-white" id="formularioUsuario">
        <input type="hidden" name="usu_id" id="usu_id">
        <div class="row mb-3">
            <div class="col-md-8">
                <label for="usu_nombre">Nombre del Usuario</label>
                <input type="text" name="usu_nombre" id="usu_nombre" class="form-control" autocomplete="username">
            </div>
            <div class="col-md-4">
                <label for="usu_catalogo">Catálogo</label>
                <input type="number" name="usu_catalogo" id="usu_catalogo" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="usu_password">Contraseña</label>
                <input type="password" name="usu_password" id="usu_password" class="form-control" autocomplete="new-password">
            </div>
            <div class="col-md-6">
                <label for="usu_confirm_password">Confirme</label>
                <input type="password" name="usu_confirm_password" id="usu_confirm_password" class="form-control" autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-3 justify-content-center text-center">
            <div class="col-lg-3">
                <button type="submit" id="BtnGuardar" class="btn btn-primary w-100"><i class="bi bi-floppy-fill"></i> Guardar</button>
            </div>
            <div class="col-lg-3">
                <button type="button" id="BtnModificar" class="btn btn-warning w-100 text-uppercase shadow border-0">Modificar</button>
            </div>
            <div class="col-lg-3">
                <button type="button" id="BtnCancelar" class="btn btn-secondary w-100 text-uppercase shadow border-0">Cancelar</button>
            </div>
        </div>
    </form>


    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 table-wrapper">
            <h2 class="text-center mb-4">Usuarios Registrados</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="UsuariosIngresados">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Nombre del Usuario</th>
                            <th>Catalogo</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">No existen registros</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<script src="<?= asset('./build/js/usuarios/index.js') ?>"></script>