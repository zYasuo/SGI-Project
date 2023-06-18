<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="img/favicon1.png" type="image/x-icon" size="16x16">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Formulário de Envio</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div class="navbar-nav mx-auto">
            <a class="navbar-brand mx-auto" href="#"><img src="./img/logoBrancoNR.png" alt="Logo"  class="logo"/></a>
        </div>
    </div>
</nav>
<div class="container form-ct">
<h1>Formulário</h1>
<div class="form-flex">
    <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data" class="my-5">
      <div class="form-group">
        <label for="fileToUpload">Selecione um arquivo PDF para fazer o upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" required>
      </div>
      <div class="form-group">
        <label for="departamento">Selecione um departamento:</label>
        <select name="departamento" id="departamento" class="form-control" required>
        <option value="">Selecione...</option>
        <option value="politica">Política</option> <option value="sgi">SGI</option> <option value="comercial">Comercial</option> <option value="financeiro">Financeiro</option> <option value="suporte">Suporte</option> <option value="rh">RH</option> <option value="operacional">Operacional</option> <option value="marketing">Marketing</option> <option value="qualidade">Qualidade</option> <option value="noc">NOC</option> <option value="compras">Compras</option> <option value="contabilidade">Contabilidade</option> <option value="almoxarifado">Almoxarifado</option>
        </select>
      </div>
      <div class="form-group">
    <label for="tipo">Selecione o tipo de documento:</label>
    <select name="tipo" id="tipo" class="form-control" required>
        <option value="">Selecione...</option>
        <option value="manual" class="nao-politica">MN - Manuais</option>
        <option value="it" class="nao-politica">IT - Instrução de Trabalho</option>
        <option value="po" class="nao-politica">PO - Procedimento Operacional</option>
        <option value="formulario" class="nao-politica">FOR - Formulários</option>
        <option value="qualidade" class="politica">Política de Qualidade</option>
        <option value="ambiental" class="politica">Política Ambiental</option>
        <option value="saude" class="politica">Política de Saúde e Segurança do Trabalho</option>
        <option value="missao" class="politica">Missão, Visão e Valores</option>
    </select>
</div>
      <input type="submit" value="Upload" name="submit" class="btn btn-primary">
    </form>
    </div>
</div>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/interactjs@1.10.11/dist/interact.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
