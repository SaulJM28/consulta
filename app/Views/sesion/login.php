<section class = "d-flex  justify-content-center align-items-center vh-100">
    <div class="card">
        <div class="card-body">
            <div class="row my-1">
                <h1 class = "text-center">Inicio de sesión</h1>
            </div>
            <div class="row my-1">
                <img src="<?= base_url('public/img/icono-login.png');  ?>" alt="img-inicio-sesion" height="100" width="100">
            </div>
            <div class="row justify-content-center my-1 gap-3">
                <div class="col-md-6">
                    <label for="form-label">Correo</label>
                    <input type="email" name="email" id="email" class = "form-control" >
                </div>
                <div class="col-md-6">
                    <label for="form-label">Contraseña</label>
                    <input type="password" name="pwd" id="pwd" class = "form-control" >
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary"> iniciar sesion </button>
                </div>
            </div>
        </div>
    </div>

</section>