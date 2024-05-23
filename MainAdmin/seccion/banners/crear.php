<?php
include("../../templates/bd.php");
include("../../templates/header.php");
if ($_POST) {
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
    $enlace = isset($_POST["enlace"]) ? $_POST["enlace"] : "";
    $sentencia = $conexion->prepare("INSERT INTO tbl_banners(ID,titulo,descripcion,link) VALUES (NULL,:titulo,:descripcion,:enlace);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":enlace", $enlace);

    $sentencia->execute();
    header("Location:index.php");
}
?>

</br>
<div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Escriba el titulo del banner" />
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Describa la descripcion del banner" />
            </div>

            <div class="mb-3">
                <label for="Enlace" class="form-label">Enlace</label>
                <input type="text" class="form-control" name="enlace" id="enlace" aria-describedby="helpId" placeholder="Escribe el enlace" />
            </div>

            <button type="submit" class="btn btn-success">Crear Banner</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>



        </form>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>