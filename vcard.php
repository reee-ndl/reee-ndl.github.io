<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact UI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header text-white">
                <div class="user-icon mb-3">
                    <img src="servproLOGO.png" alt="User Icon" class="rounded-circle" >
                </div>
                <h2>SERVPROPH</h2>
                <hr class="bg-white">
                <div class="row justify-content-center mb-3">
                    <div class="col-4 text-center">
                        <a href="tel:09171547753" class="btn btn-circle btn-light">
                            <i class="fas fa-phone"></i>
                        </a>
                        <p class="text-white">CALL</p>
                    </div>
                    <div class="col-4 text-center">
                        <a href="mailto:servproph.airconditioning@gmail.com" class="btn btn-circle btn-light">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <p class="text-white">EMAIL</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="contact-info">
                    <div class="row mb-2">
                        <div class="col-12">
                            <a href="tel:09171547753" class="btn btn-link"><i class="fas fa-mobile-alt"></i> 0917 154 7753</a>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <a href="tel:0464302694" class="btn btn-link"><i class="fas fa-phone"></i> (046) 430-2694</a>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <a href="mailto:servproph.airconditioning@gmail.com" class="btn btn-link"><i class="fas fa-envelope"></i> servproph.airconditioning@gmail.com</a>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>SERVPRO CONSOLIDATED INC.</h5>
                <hr>
                <h6>Social Media</h6>
                <div class="social-media mb-2">
                    <a href="https://facebook.com" class="btn">
                        <img src="fbLOGO.png" alt="Facebook Logo" class="social-icon">
                    </a>
                    <a href="https://instagram.com" class="btn">
                        <img src="igLOGO.png" alt="Instagram Logo" class="social-icon">
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <button id="add-contact" class="btn btn-warning btn-circle floating-btn"><i class="fas fa-user-plus"></i></button>

    <script>
        document.getElementById('add-contact').addEventListener('click', function() {
            alert('Functionality to add contact to phone is not supported in this demo.');
        });
    </script>
</body>
</html>
