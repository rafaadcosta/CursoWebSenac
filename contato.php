<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>


    <link rel="stylesheet" href="estilo.css">

    
</head>
<body>
    <nav>
        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="label-menu">Menu <span class="hamburger"></span></label>
        <ul class="menu">
            <li><a href="index.html" onclick="window.location.reload()">Início</a></li>
            <li><a href="#servicos" onclick="hideMenu()">Serviços</a></li>
            <li><a href="#cases" onclick="hideMenu()">Cases</a></li>
            <li><a href="#empresa" onclick="hideMenu()">Empresa</a></li>
            <li><a href="contato.php" onclick="hideMenu()">Contato</a></li>
        </ul>
    </nav>

    <h4>Preencha o formulário para contato</h4>
    <form class="formulario" action="processaform.php" method="POST">
        <input type="text" name="camponome" placeholder="Digite seu nome" class="campo">

        <input type="email" name="campoemail" placeholder="Digite seu email" class="campo">

        <input type="number" name="campotelefone" placeholder="Digite seu número de telefone" class="campo">

        <input type="text" name="assunto" placeholder="Digite o assunto" class="campo">
        <textarea type="text" name="mensagem" rows="10" placeholder="Sua mensagem" class="campo"></textarea>


        <input type="submit" value="Enviar" class="botao">


    </form>

</body>
</html>