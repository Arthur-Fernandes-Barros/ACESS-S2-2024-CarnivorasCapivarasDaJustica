<?php
include 'conectaBanco.php'; 

// Configuração fixa do ID
$id = 1; // Substitua pelo ID desejado

// Consulta SQL para buscar os detalhes da obra
$sql = "SELECT o.titulo, a.nome AS artista, o.ano_lancamento, o.editora
        FROM obras o
        LEFT JOIN artistas a ON o.artista_id = a.id
        WHERE o.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Obra encontrada
    $row = $result->fetch_assoc();

    // Exibir os dados da obra em uma tabela HTML
    echo "<table border='1' style='border-collapse: collapse; width: 300px; margin-bottom: 20px;'>";
    echo "<tr>
            <th colspan='2' style='text-align: center;'>{$row['titulo']}</th>
        </tr>";
    echo "<tr>
            <td><strong>Autor</strong></td>
            <td>{$row['artista']}</td>
        </tr>";
    echo "<tr>
            <td><strong>Ano de Lançamento</strong></td>
            <td>{$row['ano_lancamento']}</td>
        </tr>";
    echo "<tr>
            <td><strong>Editora</strong></td>
            <td>{$row['editora']}</td>
        </tr>";
    echo "</table>";
} else {
    // Obra não encontrada
    echo "Obra não encontrada.";
}

$stmt->close();
$conn->close();
?>
