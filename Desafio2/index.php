<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teste Fácil Tecnologia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h1 class="py-4">Teste Fácil Tecnologia!</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome do Banco</th>
          <th scope="col">Verba</th>
          <th scope="col">Data de Inclusão Contrato Mais Antigo</th>
          <th scope="col">Data de Inclusão Contrato Mais Novo</th>
          <th scope="col">Soma</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'data.php'; ?>
        <?php if (!empty($dados)): ?>
          <?php foreach ($dados as $linha): ?>
            <tr>
              <td><?= $linha['nome_banco'] ?></td>
              <td><?= $linha['verba'] ?></td>
              <td><?= $linha['data_contrato_mais_antigo'] ?></td>
              <td><?= $linha['data_contrato_mais_novo'] ?></td>
              <td><?= $linha['soma_valor_contratos'] ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6">Nenhum contrato encontrado.</td>
          </tr>
        <?php endif; ?>
      </tbody>

    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
