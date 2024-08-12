<?php
// Caminho para o arquivo de armazenamento
$filename = 'calls.json';

// Dados do formulário
$sala = $_POST['sala'];
$andar = $_POST['andar'];
$gravidade = $_POST['gravidade'];
$descricao = $_POST['descricao'];

// Dados do chamado
$call = [
    'sala' => $sala,
    'andar' => $andar,
    'gravidade' => $gravidade,
    'descricao' => $descricao,
    'data' => date('Y-m-d H:i:s')
];

// Leitura do arquivo JSON existente
if (file_exists($filename)) {
    $calls = json_decode(file_get_contents($filename), true);
} else {
    $calls = [];
}

// Adiciona o novo chamado
$calls[] = $call;

// Grava no arquivo JSON
file_put_contents($filename, json_encode($calls, JSON_PRETTY_PRINT));

// Redireciona para a página de visualização
header('Location: view_calls.php');
exit();
?>
