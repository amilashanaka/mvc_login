<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div id="login">

        <h3 class="text-center text-white pt-5">Login Form</h3>
        <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="class col-md-6">

                    <div id="login-box" class="class col-md-12">

                    <from id="login-form" class="form"  method="post">
                        <h3 class="class txt-center txt-info">Login</h3>
                        <div class="class form-group">
                            <lable for="username" class="txt-info">User Name :</lable>
                            <input type="text" name="username" class="form-control" id="username">



                        </div>

                        <div class="class form-group">
                            <lable for="username" class="txt-info">Password :</lable>
                            <input type="text" name="password" class="form-control" id="password">



                        </div>

                        <div class="class form-group">
                            <input type="submit" name="login_submit" class="btn btn-info" value="submit">
                        </div>

                        <div id="reg_link" class="text-right">
                            <a href="?register=true" class="text-info">Register</a>
                        </div>

                    </from>

                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>