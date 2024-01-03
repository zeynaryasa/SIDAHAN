<?php
require 'db/conn.php';
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login SI-IT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="card shadow mt-4 ">
                        <div class="card-title text-center border-bottom  rounded">
                            <h2 class="p-3"><b>SI-PT</b></h2>
                        </div>
                        <div class="card-body  rounded">
                            <form action="conf/login.php" method="post">
                                <div class="mb-1">
                                    <label for="username" class="form-label">username</label>
                                    <input type="text" class="form-control" id="username" name="username" required />
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required />
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">
                                        Login
                                    </button>
                                    <div class="container-fluid mt-2">
                                        <div class="container">
                                            <p class="text-center"><b>&copy;</b> I Kadek Naryasa <b> 2023</b></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    </html>