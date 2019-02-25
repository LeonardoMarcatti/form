<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    
    <title>My Title</title>    
</head>
<body>
    <?php
        echo " <h1>Bem vindo:</h1> " . "<br>" . "Nome: " . $_POST['nome']
        . "<br>" . "Seu e-mail: " . $_POST['email'] . "<br>" .
        "Sua senha: " . $_POST['senha'] . "<br>" .
        "Seu sexo: " . $_POST['sex'] . "<br>"  .
        "Sua religião: " . $_POST['religiao'] . "<br>".
        "Linguas: "; 
        foreach ($_POST['idioma'] as $idioma) {
            if (!empty($idioma)) {
                echo $idioma . " ";
            }
        }

        echo "<br><br>";
        echo "<h3>Sobre seu arquivo</h3>" . 'Nome: ' . ($_FILES['file']['name']) . "<br>"
        . 'Tipo: ' . ($_FILES['file']['type']) . "<br>"
        . 'Tamanho: ' . ceil(($_FILES['file']['size'])/1024) . 'kb';
        echo "<br><br>";
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>