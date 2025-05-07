<?php
header('Content-Type: application/json');

// Configuració (ajusta amb les teves dades reals)
$config = [
    'db_host' => 'localhost',
    'db_user' => 'joan',
    'db_pass' => 'queMm88/g62123',
    'db_name' => 'postslar11'
];

try {
    // Connexió a MySQL
    $conn = new mysqli(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name']
    );

    if ($conn->connect_error) {
        throw new Exception("Error de connexió: " . $conn->connect_error);
    }

    // Processament del formulari
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Mètode no permès");
    }

    if (empty($_POST['EMAIL'])) {
        throw new Exception("Email requerit");
    }

    $email = trim($_POST['EMAIL']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Email no vàlid");
    }

    // Preparar i executar consulta
    $stmt = $conn->prepare("INSERT INTO subscriptions (email, subscription_date) VALUES (?, NOW())");
    if (!$stmt) {
        throw new Exception("Error en preparar consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    
    if (!$stmt->execute()) {
        throw new Exception("Error en executar consulta: " . $stmt->error);
    }

    // Resposta d'èxit
    echo json_encode([
        'status' => 'success',
        'message' => 'Subscripció realitzada amb èxit!'
    ]);

} catch (Exception $e) {
    // Resposta d'error
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
} finally {
    // Tancar connexions
    if (isset($stmt)) $stmt->close();
    if (isset($conn)) $conn->close();
}