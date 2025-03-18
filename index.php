<!-- This php api will be converted into fast api -->

<?php
header('Content-Type: application/json');


$request_method = $_SERVER["REQUEST_METHOD"];
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($request_method == 'GET') {
    if ($action === 'hello') {
        // A GET endpoint returning a greeting
        echo json_encode(["message" => "Hello, World from PHP!"]);
    } else {
        echo json_encode(["message" => "Invalid GET action. Use '?action=hello'"]);
    }
} elseif ($request_method == 'POST') {
    // Handle POST requests: read JSON input
    $data = json_decode(file_get_contents("php://input"), true);
    if ($data) {
        echo json_encode(["received" => $data]);
    } else {
        echo json_encode(["message" => "No valid JSON received."]);
    }
} else {
    echo json_encode(["message" => "Unsupported request method."]);
}
