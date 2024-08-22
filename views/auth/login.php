<h1 class="text-center">Inicio de sesión</h1>
<div class="row justify-content-center">
    <form class="col-lg-4 border rounded shadow p-3 bg-dark bg-gradient text-white text-center">
        <div class="row mb-3">
            <div class="col">
            <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
            </div>
        </div>
        <div class="row mb-3" >
            <div class="col">
                <label for="usu_catalogo">Catálogo del usuario</label>
                <input type="number" name="usu_catalogo" id="usu_catalogo" class="form-control">
            </div>

            <div class="col">
                <label for="usu_password">Password</label>
                <input type="password" name="usu_password" id="usu_password" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col"></div>

            <div class="col">
                <button type="submit" class="btn btn-primary w-100 mt-3"><i class="bi bi-box-arrow-in-left"></i>
                    Iniciar sesión
                </button>
            </div>

            <div class="col"></div>
        </div>
    </form>
</div>
<script src="<?= asset('./build/js/auth/login.js') ?>"></script>