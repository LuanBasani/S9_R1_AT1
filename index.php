<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome"> <br>

        <label>Email:</label>
        <input type="email" name="email"> <br>


        <label>Texto:</label>
        <input type="text" name="texto"> <br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Informações Enviadas</h2>
    <hr>

    <?php 
        // Função para exibir os dados recebidos pelo formulário
        function exibirCampo($label, $valor) {
            echo "$label: $valor <br>";
        }

        // Verifica se o formulário foi enviado antes de exibir os dados
        if (isset($_POST["nome"], $_POST["email"], $_POST["texto"])) {
            exibirCampo("Nome", $_POST["nome"]);
            exibirCampo("Email", $_POST["email"]);
            exibirCampo("Texto", $_POST["texto"]);
        }
    ?>
</body>
</html>