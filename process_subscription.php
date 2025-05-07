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

    // Enviament de correu electrònic (DESPRÉS de l'èxit a la base de dades)
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'joanpuigbertran@gmail.com';
        $mail->Password   = 'lswd zxrk kzmk tvxh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('joanpuigbertran@gmail.com', 'HT Mueller');
        $mail->addAddress($email); // Email del subscriptor
        
        $mail->isHTML(true);
        $mail->Subject = 'Confirmació de subscripció';
        $mail->Body    = '
            <h1>Gràcies per subscriure\'t!</h1>
            <p>Has estat subscrit correctament al nostre butlletí.</p>
            <p>Si no has estat tu, si us plau ignora aquest correu.</p>
        ';
        
        $mail->send();
        echo json_encode([
            'status' => 'success',
            'message' => 'Subscripció confirmada! Revisa el teu correu.'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'warning',
            'message' => 'Subscripció acceptada, però no s\'ha pogut enviar la confirmació: '.$e->getMessage()
        ]);
    }

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