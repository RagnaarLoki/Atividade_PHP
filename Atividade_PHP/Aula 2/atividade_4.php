<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <?php
    //Array com chave => valor
    $listaalunoidade = array(
        "Leonardo"=>31,"Gabriela"=>27,"Bianca"=>07);
        //array apenas com o valor
        $listacores = array("Vermelho", "Amarelo", "Verde", "Laranja");
        //Acesso ao item do array $listaalunoidade[chave]
        echo $listalunoidade["Leonardo"];
        echo "<br />";
        echo $listacores[2];
        echo "<br />";
        //exibir em tela o conteudo (chave e valor) de um array var_dump(array)
        var_dump($listaalunoidade);
        echo "<br />";
        var_dump($listacores);
    ?>
</body>
</html>