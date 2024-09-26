<?php include "../../components/head_auth.php" ?>

<body style="background-image: url(https://wallpapers.com/images/hd/coding-background-9izlympnd0ovmpli.jpg); object-fit: cover; object-position: center;">
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center d-flex" style=" height: 100vh;">
            <div class="col-6 ">
                <div class="card shadow">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="../../actions/account/login.php" method="post">
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
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="masuk">
                                Submit
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>