<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Chamado de TI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enviar Chamado de TI</h1>
        <form action="process_call.php" method="post">
            <div class="form-group">
                <label for="sala">Sala:</label>
                <input type="text" id="sala" name="sala" required>
            </div>
            <div class="form-group">
                <label for="andar">Andar:</label>
                <input type="text" id="andar" name="andar" required>
            </div>
            <div class="form-group">
                <label for="gravidade">Gravidade:</label>
                <select id="gravidade" name="gravidade" required>
                    <option value="Baixa">Baixa</option>
                    <option value="Média">Média</option>
                    <option value="Alta">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição do Problema:</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <input type="submit" class="btn" value="Enviar Chamado">
        </form>
    </div>
</body>
</html>
