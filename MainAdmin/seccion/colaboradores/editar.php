<?php include("../../templates/bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="card">
    <div class="card-header">Ingresa los datos correspondientes</div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="titulo" class="form-label">Foto:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Escriba el titulo del banner" />
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Escriba el titulo del banner" />
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Describa la descripcion del banner" />
            </div>

            <div class="mb-3">
                <label for="facebook" class="form-label">Url Facebook</label>
                <input type="text" class="form-control" name="facebook" id="facebook" aria-describedby="helpId" placeholder="Escribe el enlace" />
            </div>

            <div class="mb-3">
                <label for="linkedin" class="form-label">Url Linkedin</label>
                <input type="text" class="form-control" name="linkedin" id="linkedin" aria-describedby="helpId" placeholder="Escribe el enlace" />
            </div>

            <div class="mb-3">
                <label for="instagram" class="form-label">Url Instagram</label>
                <input type="text" class="form-control" name="instagram" id="instagram" aria-describedby="helpId" placeholder="Escribe el enlace" />
            </div>

            <button type="submit" class="btn btn-success">Crear Banner</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>
<?php include("../../templates/body.php"); ?>