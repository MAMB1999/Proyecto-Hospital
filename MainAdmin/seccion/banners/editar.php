<?php include("../../templates/header.php");
include("../../templates/bd.php");

if (isset($_GET['txtID'])) {
    $id = $_GET['txtID'];
    if($id !== false){
        $sentencia = $conexion->prepare("SELECT * FROM tbl_banners WHERE ID=:id");
        $sentencia->bindParam(':id', $_GET['txtID']);
        $sentencia->execute();
    
        $registro = $sentencia->fetch(PDO::FETCH_LAZY);
        $titulo = $registro["titulo"];
        $descripcion = $registro["descripcion"];
        $enlace = $registro["link"];
    }else{
        print_r("Error con el ID");
    }
}

if ($_POST) {
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : "";
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
    $enlace = isset($_POST['enlace']) ? $_POST['enlace'] : "";
    $id = $_GET['txtID'];
    // Preparar y ejecutar la consulta SQL
    $sentencia = $conexion->prepare("UPDATE tbl_banners SET titulo=:titulo, descripcion=:descripcion, link=:enlace WHERE id=:id");
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":enlace",$enlace);
    $sentencia->bindParam(":id",$id);
    $sentencia->execute();
} ?>
</br>
<div class="card">
    <div class="card-header">Modifique su entrada</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" value="<?php echo $titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Escriba el titulo del banner" />
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" value="<?php echo $descripcion; ?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Describa la descripcion del banner" />
            </div>

            <div class="mb-3">
                <label for="enlace" class="form-label">Enlace</label>
                <input type="text" class="form-control" value="<?php echo $enlace; ?>" name="enlace" id="enlace" aria-describedby="helpId" placeholder="Escribe el enlace" />
            </div>

            <button type="submit" class="btn btn-success">Modificar banner</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
<?php include("../../templates/footer.php"); ?>