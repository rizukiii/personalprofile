<?php
include "../../app.php";
session_start();

$query = mysqli_query($connect, "SELECT COUNT(*) as total FROM `tb_account`");
$result = $query->fetch_object();
if ($result->total >= 1) {
    echo "<script>window.location.href='../../pages/account/login.php'</script>";
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/15181/15181819.png?semt=ais_hybrid">
</head>

<body style="background-image: url(https://wallpapers.com/images/hd/coding-background-9izlympnd0ovmpli.jpg); object-fit: cover; object-position: center;">
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-6 ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="../../actions/account/register.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    id="username"
                                    aria-describedby="helpId"
                                    placeholder="Masukan Username Anda" />
                            </div>

                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    placeholder="Masukan Email Anda" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id="password"
                                    placeholder="Masukan Password Anda" />
                            </div>
                            <div class="d-flex">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    name="tombol"
                                    value="masuk">
                                    Submit
                                </button>
                                <div class="ms-auto">Already have account? <a href="login.php">Sign In</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>