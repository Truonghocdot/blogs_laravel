<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss')
    <link rel="icon" href="//qsf.fs.quoracdn.net/-4-ans_frontend_assets.favicon-new.ico-26-e7e93fe0a7fbc991.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="canonical" href="https://www.quora.com/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quora</title>
</head>


<body>
    <div class="container">
        <header class="d-flex my-2 align-items-center">
            <div class="banner">
                <img src="data:image/png;base64,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"
                    class="img-fluid" alt="">
            </div>
            <ul class="navbar d-flex">
                <li>
                    <a href="">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-people-group"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-regular fa-bell"></i>
                    </a>
                </li>
            </ul>
            <form action="">
                <div class="form-control">
                    <label for="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                    <input placeholder="Search Quora" type="text">
                </div>
            </form>
            <div class="user"></div>
            <div class="create-post"></div>
        </header>
        <div class="row">
            <div class="col-2">
                <ul>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="col-8">
                @yield('main')
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
</body>

</html>
