<?php

session_start(); // Inicie a sessão
// Verifica o tipo de usuário
$cadastrado = isset($_SESSION['cadastrado']) ? $_SESSION['cadastrado'] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Augusto Mizu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-png" href="./imgens/icon_navegador2.png">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body style="margin-left: 25%; margin-right: 25%;">
  <main class="border border-3 rounded p-5 shadow " style= "align-items: center;;display: flex;;border: rgba(255, 0, 0, .5); background-color: #BFF7A3;">
    <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
      CADASTRAR CLIENTE</h1>
    <form action="cadastroProduto_action.php" method="post" id="formCadastro">
      <div class="mb-2 w-75">
        <label for="nomeInput">Nome do produto</label>
        <input type="text" name="nomeInput" class="form-control" maxlength="30" placeholder="Nome" required>
      </div>
      <div class="mb-2 d-flex col">
        <div class="w-75">
          <label for="emailInput">Email</label>
          <input type="email" name="emailInput" placeholder="Email" class="form-control " required>
        </div>
      </div>
      <div calas="mb-2">
        <div class="w-75">
          <label for="enderecoInput">Endereço</label>
          <input type="text" name="enderecoInput" placeholder="Endereço" class="form-control " required>
        </div>
      </div>
      <div class="mb-2 d-flex col">
        <div class="w-50">
          <label for="sexoInput">Sexo</label>
          <select name="sexoSelect" id="sexoSelect" class="form-control w-50" required>
            <option value="" disabled selected>Selecione...</option>
            <option value="MASCULINO">Masculino</option>
            <option value="FEMININO">Feminino</option>
            <option value="OUTRO">Outro</option>
          </select>
        </div>
        <div class="w-50">
          <label for="dataInput">Data nascimento</label>
          <input type="date" name="dataInput" class="form-control w-50" placeholder="Selecione uma data..." required>
        </div>
      </div>
      <input type="submit" id="salvar" value="SALVAR" class="btn btn-success btn-lg mt-4 ">
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
<script>
  // Alerta de produto cadastrado com sucesso
  document.addEventListener('DOMContentLoaded', function() {
    var cadastrado = <?php echo json_encode($cadastrado); ?> ?? null;

    if (cadastrado == "1") {
      alert('CADASTRADO COM SUCESSO!! (*^_^*)');
    } else if (cadastrado != null) {
      alert('ERRO: PRODUTO IDÊNTICO JÁ CADASTRADO TENTE NOVAMENTE (｡>﹏<｡)');
    }
  });
</script>