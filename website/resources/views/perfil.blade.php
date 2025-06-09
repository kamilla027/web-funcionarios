<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Funcionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .perfil-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            max-width: 400px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
            align-items: center;
        }

        .perfil-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }

        .perfil-card h1 {
            margin-bottom: 10px;
            font-size: 26px;
            color: #333;
        }

        .perfil-card p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="perfil-card">
        @if($funcionario)
            <img src="https://via.placeholder.com/150" alt="Foto do Funcionário">
            <h1>{{ $funcionario['nome_funcionario'] }}</h1>
            <p><strong>Função:</strong> {{ $funcionario['funcao_funcionario'] }}</p>
            <p><strong>Setor:</strong> {{ $funcionario['setor'] }}</p>
        @else
            <h1>Funcionário não encontrado</h1>
            <p>Verifique se o nome foi digitado corretamente na URL.</p>
        @endif
    </div>
</body>
</html>
