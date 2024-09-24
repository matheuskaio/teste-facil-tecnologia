<?php
include '../conexao.php';

$sql = "
        SELECT
            b.nome AS nome_banco,
            c.verba AS verba,
            MIN(ct.data_inclusao) AS data_contrato_mais_antigo,
            MAX(ct.data_inclusao) AS data_contrato_mais_novo,
            SUM(ct.valor) AS soma_valor_contratos
        FROM
            Tb_contrato ct
        JOIN
            Tb_convenio_servico cs ON ct.convenio_servico = cs.codigo
        JOIN
            Tb_convenio c ON cs.convenio = c.codigo
        JOIN
            Tb_banco b ON c.banco = b.codigo
        GROUP BY
            b.nome, c.verba
";

$result = mysqli_query($conn, $sql);

$dados = [];

if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
        $dados[] = $linha;
    }
}

mysqli_close($conn);
