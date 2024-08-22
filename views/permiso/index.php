<div class="row justify-content-center mb-5">
<h3 class="text-center mb-3">Asignacion de permisos</b></h3>
    <form class="col-lg-5 border bg-light p-3 bg-dark bg-gradient text-white" id="formularioPermiso">
        <input type="hidden" name="permiso_id" id="permiso_id">
        <div class="row mb-3">
            <div class="col">
                <label for="permiso_usuario">Selecione Usuario</label>
                <select name="permiso_usuario" id="permiso_usuario" class="form-control">
                    <option value="">Seleccione</option>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <option value="<?= $usuario['usu_id'] ?>">
                            <?= $usuario['usu_nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="col">
                <label for="permiso_rol">Seleccione el rol</label>
                <select name="permiso_rol" id="permiso_rol" class="form-control">
                    <option value="">Seleccione</option>
                    <?php foreach ($roles as $rol) : ?>
                        <option value="<?= $rol['rol_id'] ?>">
                            <?= $rol['rol_nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="row mb-3 text-center justify-content-center">
            <div class="col-lg-5">
                <button type="submit" id="btnGuardar" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>

    </form>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 table-wrapper">
            <h2 class="text-center mb-4">Permisos Ingresadas</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="PermisosIngresados">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Usuario</th>
                            <th>Rol Asignado</th>
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

<script src="<?= asset('./build/js/permiso/index.js') ?>"></script>
