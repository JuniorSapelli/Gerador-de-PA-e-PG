<!DOCTYPE html>
<?php
    //variável do menu
    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu PA e PG</title>
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
    <div class="formulario">
        <form action="" method="post">
            <h1>Gerador de PA e PG</h1>
            <select name="menu" id="menu">
                <option value=""></option>
                <option value="index">Inserir as informações e o tipo da progressão</option>
                <option value="estatisticas">Mostrar as estatísticas da progressão gerada</option>
                <option value="charts">Gerar gráfico de linhas da progressão (Google Charts)</option>
                <input type="submit" name="enviar" id="enviar" value="Enviar">
            </select>
        </form>
        <?php
            if ($menu == "index"){
                header('Location: index.php');
                exit;
            } else if($menu == "estatisticas"){
                header('Location: estatisticas.php');
                exit;
            }
        ?>
    </div>
</body>
</html>