<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        $arquivo = 'usuarios.json';
        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            $usuarios = json_decode($conteudo, true);

            if (is_array($usuarios)) {
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($usuario['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($usuario['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($usuario['email']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Arquivo de usuários não encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

