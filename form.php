<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <form id="myform" name="myform" action="grava_form.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="form-group">
                <label for="nome" class="col-form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control col-3" required="" autofocus=on>
                    
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control col-3" required="">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control col-3" required="">
                <label for="senha2">Confirme a Senha</label>
                <input type="password" id="senha2" name="senha2" class="form-control col-3" required="">
            </div>
            <div class="form-group" id="genero">
                <div class="form-check form-check-inline">
                    <input type="radio" id="f" name="sex" class="form-check-input" value="F">
                    <label for="f" class="form-check-label">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="m" name="sex" class="form-check-input" value="M">
                    <label for="f" class="form-check-label">Masculino</label>
                </div>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="religiao">Religião:</label>
                <select name="religiao" id="religiao">
                    <option value="Nenhuma">Nenhuma</option>
                    <option value="Ateu">Ateu</option>
                    <option value="Cristã/Judiaca">Cristã/Judaica</option>
                    <option value="Muçulmana">Muçulmana</option>
                    <option value="Budista/Xintoista">Budista/Xintoista</option>
                </select>
            </div>
            <div class="form-group">
                <label for="idiomas" class="form-check-label">Idiomas:</label>
                    <div class="form-check">
                        <input type="checkbox" name="idioma[]" class="form-check-input" value="Inglês">
                        <label for="ingles" class="form-check-label">Inglês</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="idioma[]" class="form-check-input" value="Espanhol">
                        <label for="espanhol" class="form-check-label">Espanhol</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="idioma[]" class="form-check-input" value="Francês">
                        <label for="ingles" class="form-check-label">Francês</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="idioma[]" class="form-check-input" value="Alemão">
                        <label for="espanhol" class="form-check-label">Alemão</label>
                    </div>
            </div>
            <div class="form-group custom-file">
                <label for="file" class="custom-file-label col-3">Selecione um arquivo</label>
                <input type="file" class="custom-file-input" id="file" name="file">
            </div>
            <div>
                <button type="submit" class="btn btn-primary form-group" disabled="">Submit</button>
                <button type="reset" class="btn btn-warning form-group">Reset</button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>
</html>