<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $crm = trim($_POST['crm']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($nome) || empty($crm) || empty($email) || empty($senha)) {
        $mensagem = "Preencha todos os campos.";
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO tbusuario (nomeCompleto, crm, emailUsuario, senhaUsuario) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $crm);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $senha_hash);

            if ($stmt->execute()) {
                $mensagem = "Cadastro realizado com sucesso!";
            } else {
                $mensagem = "Erro ao cadastrar: " . $stmt->errorInfo()[2];
            }

        } catch (PDOException $e) {
            $mensagem = "Erro ao cadastrar: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/mensagem.css">
    <?php if (isset($mensagem)): ?>
    <script>
        setTimeout(function () {
            window.location.href = "index.html";
        }, 3000);
    </script>
    <?php endif; ?>
</head>
<body>
<?php
if (isset($mensagem)) {
    $classe = (str_contains($mensagem, 'Erro') || str_contains($mensagem, 'erro')) ? 'mensagem erro' : 'mensagem';
    echo "<div class=\"$classe\">$mensagem<br>Você será redirecionado para a tela de login em instantes...</div>";
}
?>
</body>
</html>
