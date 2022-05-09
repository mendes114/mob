<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Cadastre-se, corretor(a).</title>
<link rel="stylesheet" href="/assets/php/assets/css/portal.css">
</head>
<body class="app app-register">
<?php
require('conexao.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['usuario'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['usuario']);
        $username = mysqli_real_escape_string($conexao,$username); 

	$nome = stripslashes($_REQUEST['nome']);
        $nome = mysqli_real_escape_string($conexao,$nome); 

	$cpf = stripslashes($_REQUEST['cpf']);
        $cpf = mysqli_real_escape_string($conexao,$cpf); 

	$password = stripslashes($_REQUEST['senha']);
	$password = mysqli_real_escape_string($conexao,$password);

        $query = "INSERT into `usuario` (usuario, nome, cpf, senha)
VALUES ('$username', '$nome', '$cpf','".md5($password)."')";
        $result = mysqli_query($conexao,$query);
        if($result){
            echo "<div class='form text-center'>
<h3>Seu cadastro foi enviado com sucesso, por favor aguarde nosso time entrar em contato para liberar seu acesso.</h3>
<br/><a href='\index.html'>Voltar ao nosso site.</a></div>";
        }
    }else{
?>
<div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                <div class="d-flex flex-column align-content-end">
                        <div class="app-auth-body mx-auto">	
                                <div class="app-auth-branding mb-4"><a class="app-logo" href="/index.html"><img class="img-fluid w-100" src="./assets/images/logo.png" alt="logo"></a></div>
                                    <h2 class="auth-heading text-center mb-5">Primeiro acesso? Cadastre-se!</h2>
                                    
                                    

          


                            <div class="auth-form-container text-start">
                                            <form name="" action="" method="post">      
                                                    <div class="email mb-3">
                                                            <label class="sr-only"></label>
                                                            <input  name="usuario" type="email" class="form-control signin-email" placeholder="Email">
                                                    </div><!--//form-group-->
                                                    <div class="email mb-3">
                                                            <label class="sr-only"></label>
                                                            <input  name="nome" type="text" class="form-control signin-email" placeholder="Nome completo">
                                                    </div><!--//form-group-->
                                                    <div class="email mb-3">
                                                            <label class="sr-only"></label>
                                                            <input  name="cpf" type="text" class="form-control signin-email" placeholder="CPF ou Passaporte">
                                                    </div><!--//form-group-->
                                                    <div class="password mb-3">
                                                            <label class="sr-only">Password</label>
                                                            <input name="senha" type="password" class="form-control signin-password" placeholder="Crie uma senha" required="required">
                                                            <div class="extra mt-3 row justify-content-between">
                                                                    <div class="col-6">
                                                                            <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="validation">
                                                                                    <label class="form-check-label" for="validation">
                                                                                    Eu aceito os termos do usuário e a política de privacidade.
                                                                                    </label>
                                                                            </div>
                                                                    </div><!--//col-6-->
                                                                    <div class="col-6">
                                                                            <div class="forgot-password text-end">
                                                                                    <a href="reset-password.html">Esqueceu a senha?</a>
                                                                            </div>
                                                                    </div><!--//col-6-->
                                                            </div><!--//extra-->
                                                    </div><!--//form-group-->
                                                    <div class="text-center">
                                                            <button type="submit" class="btn btn-primary  w-100 mx-auto">Cadastrar</button>
                                                    </div>
                                            </>
                                            
                                            <div class="auth-option text-center pt-5">Já possui cadastro?  <a  href="registerpage.php" >Clique aqui</a>.</div>
                                    </div><!--//auth-form-container-->	

                        </div><!--//auth-body-->
                
                        <footer class="app-auth-footer">
                                <div class="container text-center py-3">
                                     <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                            <small class="copyright">Designed  <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="#" target="_blank">devmau.com.br</a></small>
                                   
                                </div>
                        </footer><!--//app-auth-footer-->	
                </div><!--//flex-column-->   
        </div><!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                <div class="auth-background-holder"> <img src="\assets\php\assets\images\background\a.jpg" style=" background-size:cover;
    height:100vh;
    min-height:100%">
                </div>
                
                </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->

</div><!--//row-->

<?php } ?>
</body>
</html>

