<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto | UniToledo</title>
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <!-- Bootstrap -->
    <!-- Só o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS do projeto -->
    <style>
        <?php include "css/estilo.css" ?>
    </style>
    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous" defer></script>
</head>
<body>
    <!-- HEADER -->
    <div class="container-fluid">
        <header class="row" id="header">
            <div id="logo-container">
                <a href="index.html">
                    <img src="img/unitoledo-logo.png" alt="Logo Unitoledo" id="logo">
                </a>
            </div>
        </header>

        <!-- NAVBAR -->
        <!-- Foi utilizada a navbar do Bootstrap, alterando algumas propriedades e classes pelo CSS -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container justify-content-end" id="navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Início</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Conteúdos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="post1.html">Os Desafios da Internet das Coisas</a></li>
                                <li><a class="dropdown-item" href="post2.html">O Futuro das Cidades Inteligentes</a></li>
                                <li><a class="dropdown-item" href="post3.html">A Evolução e História da IoT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quemsomos.html">Sobre Mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN -->
    <div class="container contact-container">
        <h2 class="contact-title">Manda um Alô!</h2>
        <hr>
        <form method="post" action="php/cadastroBasico.php" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome*:</label>
                <input name="nome" type="text" class="form-control" id="nome" required>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Insira seu nome!</div>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail*:</label>
                <input name="email" type="email" class="form-control" id="email" required>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Insira um e-mail válido!</div>
            </div>
            <div class="col-md-4">
                <label for="telefone" class="form-label">Telefone:</label>
                <input name="telefone" type="text" id="telefone" name="telefone" class="form-control" pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$">
                <div id="ajuda-telefone" class="form-text">(99)99999-9999</div>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Insira um número de telefone válido!</div>
            </div>
            <div class="col-md-4">
                <label for="cidade" class="form-label">Cidade:</label>
                <select name="cidade" id="cidade" class="form-select">
                    <option selected disabled value=""></option>
                    <option value="1">Araçatuba</option>
                    <option value="2">Bilac</option>
                    <option value="3">Birigui</option>
                    <option value="4">Coroados</option>
                    <option value="5">Penápolis</option>
                </select>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Selecione sua cidade.</div>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label">Estado:</label>
                <select name="estado" id="estado" class="form-select">
                    <option selected disabled value=""></option>
                    <option value="1">Minas Gerais</option>
                    <option value="2">Rio de Janeiro</option>
                    <option value="3">São Paulo</option>
                </select>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Selecione seu estado.</div>
            </div>
            <div class="col-md-3">
                <label for="idade" class="form-label">Nascimento:</label>
                <input name="idade" type="date" id="idade" class="form-control" max="2020-10-06" min="1900-10-06">
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Selecione a data de seu aniversário.</div>
            </div>
            <div class="col-md-6">
                <label for="motivo" class="form-label">Motivo do Contato*:</label>
                <select name="motivo" id="motivo" class="form-select" required>
                    <option selected disabled value=""></option>
                    <option value="1">Dúvida</option>
                    <option value="2">Feedback</option>
                    <option value="3">Outro</option>
                </select>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Selecione o motivo de seu contato.</div>
            </div>
            <div class="col-md-3">
                <label for="validacao-sexo" class="form-check justify-content-start">Sexo*:</label>
                <div class="form-check">
                    <input name="sexo" type="radio" class="form-check-input" id="validacao-sexo-f" value="Feminino" required> Feminino
                    <br>
                    <input name="sexo" type="radio" class="form-check-input" id="validacao-sexo-m" value="Masculino" required> Masculino
                    <!-- Mensagens para validação -->
                    <div class="valid-feedback">Sucesso! ;)</div>
                    <div class="invalid-feedback">Selecione o seu sexo.</div>
                </div>
            </div>
            <div class="col-md-12">
                <label for="mensagem" class="form-label">Mensagem*:</label>
                <textarea name="mensagem" onkeyup="textCounter(this, 'counter', 360);" class="form-control" id="mensagem" rows="5" minlength=10 maxLength=360 required></textarea>
                <div id="ajuda-mensagem" class="form-text">
                    Insira uma mensagem entre 10 a 300 caracteres.
                    <input disabled maxLength="3" size="3" value="360" id="counter"></input>
                </div>
                <!-- Mensagens para validação -->
                <div class="valid-feedback">Sucesso! ;)</div>
                <div class="invalid-feedback">Por favor, insira sua mensagem.</div>
            </div>
            <div class="row justify-content-center contact-buttons">
                <button type="reset" class="btn btn-limpar col-md-5">Limpar</button>
                <button type="submit" class="btn btn-enviar col-md-5">Enviar</button>
            </div>
        </form>
    </div>

    <!-- FOOTER -->
    <footer class="container">
        <p class="secondary-color">Minhas Redes Sociais:</p>
        <div class="row justify-content-center" id="social-icons-container">
            <div class="col-1">
                <a href="https://www.linkedin.com/in/gabrielframeschi/" target="_blank"><i class="bi bi-linkedin secondary-color"></i></a>
            </div>
            <div class="col-1">
                <a href="https://github.com/framesgabriel" target="_blank"><i class="bi bi-github secondary-color"></i></a>
            </div>
            <div class="col-1">
                <a href="https://twitter.com/framesgabriel" target="_blank"><i class="bi bi-twitter secondary-color"></i></a>
            </div>
        </div>
        <p class="secondary-color">Desenvolvido por <a href="quemsomos.html">Gabriel Frameschi</a> na disciplina de <a href="https://matriculas.unitoledo.br/curso/analise-e-desenvolvimento-de-sistemas-4340" target="_blank">Desenvolvimento Web</a> – 03/10/2021</p>
    </footer>

    <script>
        // JavaScript para validação do Formulário do Bootstrap
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()

        // Função para exibir quantos caracteres restam dentro da textarea do formulário.
        function textCounter(field, field2, maxlimit)
        {
            var countfield = document.getElementById(field2);
            if (field.value.length > maxlimit) {
                field.value = field.value.substring(0, maxlimit);
                return false;
            } else {
                countfield.value = maxlimit - field.value.length;
            }
        }
    </script>
    
</body>
</html>