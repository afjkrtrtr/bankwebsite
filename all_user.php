<?php

include 'partials/_dbconnect.php';
$sql = "SELECT * FROM `usuarios`";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Todos Los Usuarios</title>
</head>

<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="cover"></div>
    
    <h1>ALL &nbsp; USERS</h1>
    <div class="Todos_Los_Usuarios" style="height: 500px;">
        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>SALDO</th>
            </tr>
            <?php 
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['nombre']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['cantidad']."</td>
                </tr>
                ";
            }
            ?>
        </table>
    </div>

    <?php include 'partials/_footer.php'; ?>
    <!-- script -->
    <script src="js/navscroll.js"></script>
</body>

</html>