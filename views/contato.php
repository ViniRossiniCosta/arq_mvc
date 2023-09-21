<h1>Entre em contato</h1>
<form action="<?php echo BASE_URL; ?>contato/enviar_email" method="post">
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
    <input type="submit" value="Enviar Mensagem">
</form>