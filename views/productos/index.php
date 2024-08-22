<h2 class="text-center">Formulairo para Ingresar productos</h2>
<div class="row justify-content-center mt-3 mb-5">
    <form class="border bg-light shadow rounded p-4 col-lg-6 bg-dark bg-gradient text-white text-center" id="FormProducto">
        <div class="row mb-3">
            <div class="col">
                <input type="hidden" name="producto_id" id="producto_id" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="producto_nombre">Nombre</label>
                <input type="text" name="producto_nombre" id="producto_nombre" class="form-control">
            </div>

            <div class="col-4">
                <label for="producto_precio">Precio</label>
                <input type="number" name="producto_precio" step="any" id="producto_precio" class="form-control">
            </div>
        </div>

        <div class="row mb-3 justify-content-center text-center">
            <div class="col-lg-5">
                <button type="submit" id="BtnGuardar" class="btn btn-primary w-100 shadow border-0"><i class="bi bi-floppy-fill"></i> Guardar</button>
            </div>
            <div class="col-lg-5">
                <button type="button" id="BtnModificar" class="btn btn-primary w-100 text-uppercase shadow border-0"><i class="bi bi-pencil"></i> Modificar</button>
            </div>
            <div class="col-lg-5">
                <button type="button" id="BtnCancelar" class="btn btn-danger w-100 text-uppercase shadow border-0"><i class="bi bi-x-circle-fill"></i> Cancelar</button>
            </div>
            <!-- <div class="col-lg-5">
                <button type="button" id="BtnBuscar" class="btn btn-primary w-100 text-uppercase shadow border-0"><i class="bi bi-search"></i> Buscar</button>
            </div> -->
        </div>
    </form>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-lg-6 table-wrapper">
        <div class="table-responsive">
        <h2 class="text-center mb-4">Productos Registrados</h2>
            <table class="table table-bordered table-hover" id="ProductosIngresados">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nombres</th>
                        <th>Precio</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center">Sin productos registrados</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?= asset('./build/js/productos/index.js') ?>"></script>