<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <?php 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $nasc = $_POST['nasc'];
    ?>

    <table>
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ENDEREÇO</th>
            <th>NASCIMENTO</th>
        </tr>
        <tr>
            <td><?php echo $nome ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $endereco ?></td>
            <td><?php echo $nasc ?></td>
        </tr>
    </table>
</body>
</html>