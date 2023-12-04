<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In | POS Auliya Computer</title>
    <link rel="icon" href="img/Logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Link css-->
    <link rel="stylesheet" href="css/login.css">

    <!--Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body  flex-column text-center">
            </div>
            <div class="card-text">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="img/Logo.png" style="display:block; margin:auto;">
                        <h2 class="title text-center">Please Log in</h2>
                        <form>
                            <div class="mb-3 ">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="email" class="form-control form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control " id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-danger center-block mt-4 w-100"
                                style="display:block; margin:auto;">Login</button>
                        </form>
                    </div>
                    <div class="display-right col-sm-6">
                        <img class="photo-right" src="img/Gambar login right.jpg"
                            style="display:block; margin:auto; display:absolute;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>