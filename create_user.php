<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_dbconnect.php';

    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $amount = $_POST['cantidad'];

    // Check wether this user email exists 
    $existSql = "SELECT * FROM `usuarios` WHERE email = '$email'";
    $result = mysqli_query($conn , $existSql);
    $numExistRow = mysqli_num_rows($result);

    if ($numExistRow > 0) {
        // if user already exist
        echo "<script> alert('Email ya Existe !! Por favor usa otro correo'); </script>"; 
    }
    else {
        // Inserting new user data
        $sql = "INSERT INTO `usuarios` (`nombre`, `email`, `cantidad`) VALUES ('$nombre', '$email', '$cantidad');";
        $result = mysqli_query($conn,$sql);
    
        if ($result) {
            echo "<script> alert('Felicidades!! Nuevo usuario agregado'); </script>"; 
        }
    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <title>ADD USER</title>
</head>

<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="cover"></div>

    <div class="create">
        <h1>CREATE &nbsp; USER</h1>
        <div class="crearUsuario">
            <div class="usuarioimg">
                <img src="images/undraw_male_avatar_323b.svg" alt="imagen de usuario">
            </div>
            <div class="datosdelusuario">
                <!-- Create user Form -->
                <form method="POST">
                    <input id="name" type="text" placeholder="NOMBRE" name="nombre" required>
                    <input id="email" type="email" placeholder="EMAIL" name="email" required>
                    <input id="amount" type="name" placeholder="AMOUNT" name="cantidad" required>
                    <button type="submit">ADD USER</button>
                </form>
            </div>
        </div>
    </div>


    <?php include 'partials/_footer.php'; ?>
    <!-- scripts  -->
    <script src="js/navscroll.js"></script>
</body>

</html>