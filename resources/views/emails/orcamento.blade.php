<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Solicitação de Orçamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        h1 {
            color: #4092cc;
        }

        .content {
            margin: 20px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>

<body>
    <h1>Nova Solicitação de Orçamento</h1>
    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>E-mail:</strong> {{ $email }}</p>
    <p><strong>Telefone:</strong> {{ $telefone }}</p>
    <p><strong>Serviço Solicitado:</strong> {{ ucfirst($servico) }}</p>
    <p><strong>Tipo de Imóvel:</strong> {{ ucfirst($imovel) }}</p>
    <p><strong>Mensagem:</strong></p>
    <div class="content">
        <p>{{ $mensagem }}</p>
    </div>
    <div class="footer">
        <p>Este e-mail foi enviado automaticamente pelo site. Por favor, não responda a este endereço.</p>
    </div>
</body>
</html>
