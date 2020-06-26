<?php
    session_start();

    if (!isset($_SESSION['id-usuario'])) {
        echo "você não tem uma sessão. 
        faça o login novamente.
        <a href='./sessao.php'>clique aqui</a>";
        return;
    }

    echo "usuário já logado <br>";
    echo $_SESSION['id-usuario']."<br>";
    echo $_SESSION['nome-usuario']."<br>";
    echo $_SESSION['data-usuario']."<br>";

    echo "<button onclick='sair()'>
        Sair
    </button>";

    echo "<script>
            function sair() {
                window.location.href = './sessao_sair.php';
            }
        </script>";
?>