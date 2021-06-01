<!DOCTYPE html>
<?php
    //variável do menu
    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas da Progressão Gerada</title>
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
        <fieldset>
            <form class="form-data" method="POST">
                <label for="arquivo">Arquivo:</label>
                <input type="file" name="arquivo">
                <input type="submit" name="enviar" id="enviar" value="Enviar">
            </form>
        </fieldset>
    </div>
    <div class="formulario">
        <button><a href="index.php">Retorne para o menu</a> </button>
    </div>  
</body>
</html>