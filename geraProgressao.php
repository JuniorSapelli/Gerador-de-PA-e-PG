<!DOCTYPE html>
<?php
    //variável do menu
    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");
    //valores informados
    $arquivo = (isset($_POST['arquivo']) ? $_POST['arquivo'] : "") .".json";
    $a1 = (isset($_POST['a1']) ? $_POST['a1'] : 0);
    $razao = (isset($_POST['razao']) ? $_POST['razao'] : 0);
    $qtd = (isset($_POST['qtd']) ? $_POST['qtd'] : 0);
    $progressao = (isset($_POST['progressao']) ? $_POST['progressao'] : "");

    //função que gera a PA
    function gerarPA($a1, $razao, $qtd){
        $resultado = [];

        for($k = 1; $k <= $qtd; $k++){
            $resultado[] = $a1 + ($k - 1) * $razao;
        }
        return $resultado;
    }

    //função que gera a PG
    function gerarPG($a1, $razao, $qtd){
        $resultado = [];

        for($k = 1; $k <= $qtd; $k++){
            $resultado[] = $a1 * pow($razao, ($k - 1));
        }
        return $resultado;
    }

    //gera a progressão de acordo com os dados informados
    if($progressao == "PA"){
        $resultado = gerarPA($a1, $razao, $qtd);
        $json = json_encode($resultado);
        $file = fopen($arquivo, 'w');
        fwrite($file, $json);
    } else if($progressao == "PG"){
        $resultado = gerarPG($a1, $razao, $qtd);
        $json = json_encode($resultado);
        $file = fopen($arquivo, 'w');
        fwrite($file, $json);
    }
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador PA e PG</title>
</head>

<style>
.container {
    width: 80vw;
    margin: 0 auto;
}

.formulario {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>

<body>
    <div class="container">
        <form action="" method="post" class="formulario">
            <label for="arquivo">Nome do arquivo</label>
                <input type="text" name="arquivo" id="arquivo">
            <label for="a1">Primeiro elemento: </label>
                <input type="text" name="a1">
            <label for="razao">Razão: </label>
                <input type="text" name="razao">
            <label for="qtd">Quantidade de elementos: </label>
                <input type="text" name="qtd">
            <label for="tipo">Tipo de progessão: </label>
                <select name="progressao" id="progressao">
                    <option value="PA">Progressão Aritmética </option>
                    <option value="PG">Progressão Geométrica </option>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
    </div>
    <div class="formulario">
        <?php
        if($progressao != null){?>
            <label>Progressão Gerada</label>
            <?php foreach ($resultado as $value){
                echo "$value <br>";
        } }?>
    </div>
    <div class="formulario">
        <button><a href="index.php">Retorne para o menu</a> </button>
    </div> 
</body>
</html>