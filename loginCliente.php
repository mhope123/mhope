<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login de acesso</title>

    <!-- Custom fonts for this template-->
    <link href="adm/views/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="adm/views/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="margin-top: 2%;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" >
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div style="background-color: #eccdec; width: 40%;">
                                <div class="col-lg-8 d-none d-lg-block" 
                                style="margin-top: 10%; margin-left: 10%;">
                                    <img src="adm/views/img/logo.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Antes, faça o login!</h1>
                                    </div>
                                    <?php
                                        if(isset($_SESSION['msgCliente'])){
                                            echo $_SESSION['msgCliente'];
                                            unset($_SESSION['msgCliente']);
                                        }
                                    ?>
                                    <form class="user" action="adm/php/logarCliente.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                               name="email" aria-describedby="emailHelp"
                                                placeholder="Informe o Email...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="senha" placeholder="Senha">
                                        </div>
                                        
                                        <button type="submit" name="btnLogin" class="btn btn-info btn-user btn-block">Entrar</button>
                                    </form>
                                    <hr/>
                                    <a style="margin-left: 5%;" href="registrarCliente.php">Não tem uma conta? Então registre-se aqui!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="adm/views/vendor/jquery/jquery.min.js"></script>
    <script src="adm/views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="adm/views/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="adm/views/js/sb-admin-2.min.js"></script>

</body>

</html>