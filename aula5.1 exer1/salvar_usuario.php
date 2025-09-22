<?php 
$arquivo_json = 'usuarios.json';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

if(file_exists($arquivo_json)){
    $conteudo = file_get_contents($arquivo_json); // ler o conteúdo existente
    $usuarios = json_decode($conteudo, true); // decodificar o JSON para um array associativo

    // tratar caso o arquivo esteja vazio ou corrompido
    if(($usuarios === null) || !is_array($usuarios)){
        $usuarios = []; 
    }
} else {
    // se o arquivo não existir, cria um array vazio
    $usuarios = [];
}
$novo_id = count($usuarios) + 1; // gera um novo ID baseado na contagem atual
$novo_usuario = [
    'id' => $novo_id,
    'nome' => $nome,
    'email' => $email
];
$usuarios[] = $novo_usuario; // adiciona o novo usuário ao array
$novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT); // codifica o array de volta para JSON

if (file_put_contents($arquivo_json, $novo_conteudo_json)) {
    echo "Usuário salvo com sucesso!";
} else {
    echo "Erro ao salvar o usuário.";
}

} else {
    echo "Método inválido.";
}