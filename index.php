<?php 
    $login = $senha = $check = "";
    if(isset($_COOKIE["login"])){
        $login = $_COOKIE["login"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"])){
        $senha = $_COOKIE["senha"];
    }
?>
<!DOCTYPE html>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name=" viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Test</title>
</head>
<body>
    <main>
        <div>
        <div class="float-lg-none">
            <div  class="login container-fluid" id="Login">
                <div>
                    <div>
                         <img id="img" src="IMG/sunset-fuji-mountain copiar.png">
                    </div>
                    <form class="needs-validation" novalidate action="process.php" method="post">
                        <div>
                        <div>
                            <label for="validationCustom01">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                            <div class="valid-feedback">
                            Tudo certo!
                            </div>
                        </div>
                        <div>
                            <label for="validationCustomUsername">Senha</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Por favor, escolha uma senha.
                            </div>
                            </div>
                        </div>
                        </div>
                        <div >
                    
                  
                    <p><button  type="submit">Enviar</button></p>
                    <div class="save">
                        <input type="checkbox" name="salvar" <?= $check ?>> Salvar dados 
                    </div>
                            <p> <a href="Cadastro.html" id="text" :>N??o tem uma conta ? Clique aqui!! </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
          
        </main>
    </div>  
    </main>
        <script src="js/Logado.min.js"></script>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</div>
</html>
