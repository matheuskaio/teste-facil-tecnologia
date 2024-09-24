<?php
include 'conexao.php';

$sql = "
    SELECT
        tb_banco.nome AS banco,
        tb_convenio.verba,
        tb_contrato.codigo AS codigo_contrato,
        tb_contrato.data_inclusao,
        tb_contrato.valor,
        tb_contrato.prazo
    FROM
        tb_contrato
    JOIN
        tb_convenio_servico ON tb_contrato.convenio_servico = tb_convenio_servico.codigo
    JOIN
        tb_convenio ON tb_convenio_servico.convenio = tb_convenio.codigo
    JOIN
        tb_banco ON tb_convenio.banco = tb_banco.codigo;
";

$result = mysqli_query($conn, $sql);

$dados = [];

if (mysqli_num_rows($result) > 0) {
  while ($linha = mysqli_fetch_assoc($result)) {
    $dados[] = $linha;
  }
}

mysqli_close($conn);
