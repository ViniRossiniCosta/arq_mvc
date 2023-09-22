<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Entre em contato</h1>
    <form onsubmit="return false" method="post">
        Nome:
        <input type="text" name="nome" id="nome">
        <br>
        E-mail:
        <input type="email" name="email" id="email">
        <br>
        Mensagem: <br>
        <textarea name="mesagem" id="" cols="20" rows="5">
    
        </textarea>
        <br>
        <input type="submit" value="Enviar Mensagem" onclick="enviarEmail()">
    </form>

    <div class="msg">
        
    </div>

</body>
</html>
