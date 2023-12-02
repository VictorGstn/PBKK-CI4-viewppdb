<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-icon {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .form-icon img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        form {
            max-width: 500px;
        }

        form label {
            display: block;
            margin-top: 10px;
            color: #666;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .navbar {
            margin-bottom: 20px; /* Add margin-bottom to the navbar */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/logo_kemdikbud.png') ?>" alt="Logo" style="max-width: 50px; max-height: 50px;">
            PPDB Online
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengumuman</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Mendaftar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button class="btn">Login</button>
            </form>
        </div>
    </nav>
        
    <div class="container">
        <div class="container bg-light">
            <h1>Pendaftaran Tahun Ajaran 2023/2024</h1>
        </div>
        <div class="row bg-white ">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="form-icon">
                    <img src="<?= base_url('assets/logo_pendaftaran.png') ?>" alt="Register Icon">
                </div>
            </div>
            <div class="col-md-8">
                <div class="container bg-light">
                    <h3>Pendaftaran</h3>
                </div>
                <div class="form-fields text-center">
                    <form action="submit_registration" method="post">
                        <div class="form-group">
                            <label for="nisn"><b>NISN</b></label>
                            <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name"><b>Nama Lengkap</b></label>
                                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nickname"><b>Nama Panggilan</b></label>
                                    <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nama Panggilan" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birth_place"><b>Tempat Lahir</b></label>
                                    <input type="text" id="birth_place" name="birth_place" class="form-control" placeholder="Tempat Lahir" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birth_date"><b>Tanggal Lahir</b></label>
                                    <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Add additional fields here -->

                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End registration form -->

</body>
</html>