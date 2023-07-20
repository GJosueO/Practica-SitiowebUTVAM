<!DOCTYPE html>
<html>
<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="../css/subirimagen.css">
        <link rel="stylesheet" href="../css/uikit.min.css" />
        <script src="../js/uikit.min.js"></script>
        <script src="../js/uikit-icons.min.js"></script>
</head>
<body>
      <form action="subirimagen.php" method="post" enctype="multipart/form-data">
        <h1>Select image to upload:</h1>
        <div class="container_subir">
        
                <input type="file" class="subir_archivos"  name="image" id="image"/>
                <input type="submit" class="subir_archivos_boton" name="subirinfo" value="UPLOAD" />
        </div>
        
        
    </form>  
    <script  src="../js/script.js"></script>
</body>
<?php 
              //  include('conexion.php');
                

                //$subir=$conexion->query("INSERT INTO `images` (`id`, `image`, `created`) VALUES (null, 'foto' ,now())");
                $Host = 'localhost';
                $Username = 'root';
                $Password = '';
                $dbName = 'formulariocontacto';
                
                //Crear conexion con la abse de datos
                $db = new mysqli($Host, $Username, $Password, $dbName);
                
                // Cerciorar la conexion
                if($db->connect_error){
                    die("Connection failed: " . $db->connect_error);
                }                
                
                
if(isset($_POST['subirinfo'])){
    $nombre =('Josue'); 
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
       $image = $_FILES['image']['tmp_name'];
        $imgContent=addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into  `images` (`id`, `image`,`nombre`, `created`)  VALUES (null,'$imgContent', '$nombre',now())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}

         ?>
</html>