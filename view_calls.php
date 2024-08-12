<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Chamados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            overflow-y: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .no-data {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chamados Enviados</h1>
        <?php
        $filename = 'calls.json';

        if (file_exists($filename)) {
            $calls = json_decode(file_get_contents($filename), true);
            if (count($calls) > 0) {
                echo '<table>';
                echo '<tr><th>Sala</th><th>Andar</th><th>Gravidade</th><th>Descrição</th><th>Data</th></tr>';
                foreach ($calls as $call) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($call['sala']) . '</td>';
                    echo '<td>' . htmlspecialchars($call['andar']) . '</td>';
                    echo '<td>' . htmlspecialchars($call['gravidade']) . '</td>';
                    echo '<td>' . htmlspecialchars($call['descricao']) . '</td>';
                    echo '<td>' . htmlspecialchars($call['data']) . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p class="no-data">Nenhum chamado enviado ainda.</p>';
            }
        } else {
            echo '<p class="no-data">Nenhum chamado enviado ainda.</p>';
        }
        ?>
    </div>
</body>
</html>
