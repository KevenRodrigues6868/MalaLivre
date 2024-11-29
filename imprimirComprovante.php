<?php
// Incluindo a conexão com o banco e a biblioteca TCPDF
require_once('conecta2.php');  // Incluindo o arquivo de conexão
require_once('tcpdf/tcpdf.php');

// Recuperar o id do aluguel da URL
$id_aluguel = $_GET['id_aluguel'];

// Consulta SQL para buscar dados do aluguel, cliente e produto
$query = "
    SELECT 
        c.nome AS cliente_nome, 
        p.nome_produto AS produto_nome, 
        a.data_aluguel, 
        a.data_devolucao, 
        p.valor AS produto_valor
    FROM tb_aluguel a
    JOIN tb_cadastro c ON a.user_id = c.id
    JOIN tb_produto4 p ON a.produto_id = p.id
    WHERE a.id = $id_aluguel
";

// Executar a consulta e garantir que o resultado não esteja vazio
$result = mysqli_query($conn, $query);
$aluguel = mysqli_fetch_assoc($result);

// Verifique se o aluguel foi encontrado
if ($aluguel) {
    // Calcular a multa (R$ 100 + valor do produto)
    $multa = 100 + $aluguel['produto_valor'];

    // Criar o PDF
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);

    // Escrever o conteúdo do recibo no PDF
    $pdf->Cell(0, 10, 'RECIBO DE ALUGUEL', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->Cell(0, 10, 'Nome do Cliente: ' . $aluguel['cliente_nome'], 0, 1);
    $pdf->Cell(0, 10, 'Nome do Produto (Mala): ' . $aluguel['produto_nome'], 0, 1);
    $pdf->Cell(0, 10, 'Data do Aluguel: ' . date('d/m/Y H:i', strtotime($aluguel['data_aluguel'])), 0, 1);
    $pdf->Cell(0, 10, 'Data de Devolução: ' . date('d/m/Y H:i', strtotime($aluguel['data_devolucao'])), 0, 1);
    $pdf->Ln(10);

    $pdf->Cell(0, 10, 'Valor do Aluguel (Produto): R$ ' . number_format($aluguel['produto_valor'], 2, ',', '.'), 0, 1);
    $pdf->Cell(0, 10, 'Valor da Multa (R$ 100 + Produto): R$ ' . number_format($multa, 2, ',', '.'), 0, 1);
    $pdf->Ln(10);

    $pdf->Cell(0, 10, 'TERMO DE RESPONSABILIDADE', 0, 1, 'C');
    $pdf->MultiCell(0, 10, 'Eu, ' . $aluguel['cliente_nome'] . ', declaro que estou ciente dos riscos do aluguel da mala e concordo com os termos e condições da loja MalaLivre. Estou ciente de que, em caso de danos ou não devolução do produto dentro do prazo estipulado, será cobrada uma multa no valor de R$ 100 mais o valor do produto.');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, 'Assinatura do Cliente: ____________________________', 0, 1);
    $pdf->Ln(10);

    $pdf->Cell(0, 10, 'Loja MalaLivre', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Proprietário: Keven Lucas Rodrigues', 0, 1);
    $pdf->Cell(0, 10, 'CNPJ: 101.002.002/0001-67', 0, 1);
    $pdf->Ln(10);

    // Gerar o PDF
    $pdf->Output('comprovante_aluguel.pdf', 'I');  // 'I' abre no navegador, 'D' força o download
} else {
    echo "Erro: Aluguel não encontrado.";
}
?>
