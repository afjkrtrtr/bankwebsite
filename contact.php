<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';

    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['tarea'];
    $message = $_POST['mensaje'];

    $sql = "INSERT INTO `contacto` (`nombre`, `email`, `asunto`, `mensaje`, `tiempo`) VALUES ('$nombre', '$email', '$asunto', '$mensaje', current_timestamp());";
    $result = mysqli_query($conn , $sql);

    if ($result) {
        echo '<script>alert("Message Sended Successfully !!") </script>';
    }
    else {
        echo '<script>alert("Oops! Message failed to send!! Try after some time.") </script>';
    }

}

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
    <title>CONTACT</title>
</head>
<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="cover"></div>

    <h1>CONTACT &nbsp; ME</h1>
    <div class="contact">
            <div class="contactcontanner">

                <div class="contanner">
                    <div class="heading">
                        <div class="icon"><i class="ver para-mapa"></i></div>
                        <div class="info">
                            <p>Address : </p>
                            <p id="contactinfo">Medellin, Antioquia, Colombia</p>
                        </div>
                    </div>
    
                    <div class="heading">
                        <div class="icon"><i class="jefe para-telefono-alternativo"></i></div>
                        <div class="info">
                            <p>Phone : </p>
                            <p id="contactinfo">+51 305-789-56-78</p>
                        </div>
                    </div>
    
                    <div class="heading">
                        <div class="icon"><i class="ver para-sobre></i></div>
                        <div class="info">
                            <p>Email : </p>
                            <p id="contactinfo">support@shutterstock.com</p>
                        </div>
                    </div>
                </div>

                <div class="messageform">
                    <div class="form">
                        <form action="" method="POST">

                            <style>
                                ::placeholder {color: rgba(255, 255, 255, 0.7);}
                            </style>
        
                            <input type="text" name="nombre" placeholder="NAME" required>
                            <input type="email" name="email" placeholder="EMAIL" required>
                            <input type="text" name="asunto" placeholder="SUBJECT" required>
                            <textarea type="message" name="mensage" id="inputbox"  cols="30" rows="5" placeholder="MESSAGE" required></textarea>
                            <button type="submit">SEND MESSAGE</button>
        
                        </form>
                    </div>
                </div>

            </div>
        </div>

    <?php include 'partials/_footer.php'; ?>
    <!-- script -->
    <script src="js/navscroll.js"></script>
</body>
</html>