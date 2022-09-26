<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Banco Dineromax</title>
</head>

<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="cover"></div>

    <div class="container">

        <div class="welcome">
            <h3>Bienvenido a </h3>
            <h1>El Banco de la Fundacion Dineromax</h1>
        </div>

        <div class="allbtns">
            <a href="all_user.php"><button type="button"><i class="far fa-users"></i> TODOS LOS USUARIOS &nbsp;&nbsp;&nbsp; </button></a>
            <a href="create_user.php"><button type="button"><i class="far fa-user"></i> CREAR USUARIO &nbsp;&nbsp;&nbsp; </button></a>
            <a href="transfer_money.php"><button type="button"><i class="far fa-hand-holding-usd"></i> TRANSFERIR dinero &nbsp;&nbsp;&nbsp; </button></a>
            <a href="transfer_log.php"><button type="button"><i class="far fa-history"></i> Registro de Transaccion &nbsp;&nbsp;&nbsp; </button></a>
        </div>
        
    </div>

    <?php include 'partials/_footer.php'; ?>
    <!-- scripts  -->
    <script src="js/navscroll.js"></script>
</body>

</html>