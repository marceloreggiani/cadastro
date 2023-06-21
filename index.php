<?php
    session_start(); // Inicia a sessão

    // Verifica se existe uma mensagem na sessão
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
        
        // Remove a mensagem da sessão
        unset($_SESSION['mensagem']);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUP.css">
    <title>TRABALHO FINAL</title>
    <style>
        /* Estilos para a janela pop-up */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" width="70" height="70" alt="">
        <h2 class="logo">Companheiros de Patas</h2>
        <nav class="navigation">
            <a href="#">Institucional</a>
            <a href="#">Cães e Gatos</a>
            <a href="#">Como Ajudar</a>
            <a href="#">Doe Agora</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="testLogin.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock"></ion-icon>
                    </span>
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lembrar Senha</label>
                    <a href="#">Esqueceu a Senha?</a>
                </div>
                <button class="inputSubmit" type="submit" name="submit" value="Enviar">Login</button>
                <div class="login-register">
                    <p>Não Possui Conta? 
                        <a href="#" class="register-link">Cadastre-se</a>
                    </p>
                </div>
            </form>
        </div>

        <!-- inicio -->
        <div class="form-box register">
            <h2>Cadastro</h2>
            <form action="formulario.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Nome completo</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" id="email" required>
                    <label for="email">E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock"></ion-icon>
                    </span>
                    <input type="password" name="senha" id="senha" required>
                    <label for="senha">Senha</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="call"></ion-icon>
                    </span>
                    <input type="text" name="telefone" id="telefone" required>
                    <label for="telefone">Telefone</label>
                </div>
                <!--<div class="input-box">
                    <span class="icon">
                        <ion-icon name="transgender"></ion-icon>
                    </span>
                    <input type="text" name="sexo" id="sexo" required>
                    <label for="sexo">Sexo</label>
                </div>-->
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="calendar"></ion-icon>
                    </span>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                    <label for="data_nasc"></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="home"></ion-icon>
                    </span>
                    <input type="text" name="cidade" id="cidade" required>
                    <label for="cidade">Cidade</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="globe"></ion-icon>
                    </span>
                    <input type="text" name="estado" id="estado" required>
                    <label for="estado">Estado</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="pin"></ion-icon>
                    </span>
                    <input type="text" name="endereco" id="endereco" required>
                    <label for="endereco">Endereço</label>
                </div>
                <div class="remember-forgot">
                </div>
                <button type="submit" class="inputSubmit" name="submit">Enviar</button>
                <div class="login-register">
                    <p>Já possui cadastro? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
        <!-- fim -->
    
    </div>

    <script src="script.js"></script>
    <script type= 'module' src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js" ></script>
    
    <?php if (isset($mensagem)): ?>
        <div class="popup">
            <p><?php echo $mensagem; ?></p>
        </div>

        <script>
            // Fecha a janela pop-up após 5 segundos
            setTimeout(function() {
                var popupDiv = document.querySelector('.popup');
                if (popupDiv) {
                    popupDiv.remove();
                }
            }, 3000);
        </script>
    <?php endif; ?>

</body>
</html>