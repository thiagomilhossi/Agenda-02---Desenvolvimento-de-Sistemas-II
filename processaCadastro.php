<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação - Lojas Brincos e Companhia</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="container">
        <div class="cabecalho">
            <h2>Confirmação de Cadastro</h2>
            <p>Dados recebidos com sucesso</p>
        </div>

        <div class="conteudo">
            <?php
        
            $nomeVariavel        = htmlspecialchars($_POST['nome1']);
            $idadeVariavel       = htmlspecialchars($_POST['idade2']);
            $profissaoVariavel   = htmlspecialchars($_POST['profissao3']);
            $salarioVariavel     = htmlspecialchars($_POST['salario4']);
            $experienciaVariavel = htmlspecialchars($_POST['experiencia5']);

            echo "<h3>Dados do Colaborador:</h3>";
            
   
            echo "<ul class='lista-dados'>";
            echo "<li><b>Nome:</b> " . $nomeVariavel . "</li>";
            echo "<li><b>Idade:</b> " . $idadeVariavel . " anos</li>";
            echo "<li><b>Profissão:</b> " . $profissaoVariavel . "</li>";
            echo "<li><b>Salário Pretendido:</b> R$ " . number_format($salarioVariavel, 2, ',', '.') . "</li>";
          
            echo "<li><b>Experiência Anterior:</b><br><br>" . nl2br($experienciaVariavel) . "</li>";
            echo "</ul>";

        
            echo "<div class='mensagem-sucesso'>";
            echo "<p>Olá, <strong>{$nomeVariavel}</strong>! Ficamos muito felizes com o seu interesse em integrar a equipe das Lojas Brincos e Companhia atuando como <strong>{$profissaoVariavel}</strong>.</p>";
            echo "<p>Nossa equipe de Recursos Humanos analisará com atenção o seu relato sobre sua vivência com: <em>\"{$experienciaVariavel}\"</em>.</p>";
            echo "<p>Desejamos boa sorte no processo seletivo!</p>";
            echo "</div>";
            ?>

            <br>
            <a href="cadastro.html" class="botao">Voltar ao Início</a>
        </div>
    </div>

</body>
</html>