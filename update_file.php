<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data['content'];

    $filePath = 'C:/Users/palil/Desktop/1/wpytopen/chat3.py';

    if (file_put_contents($filePath, $content)) {
        echo 'Zmiany zostały zapisane pomyślnie.';
    } else {
        echo 'Nie udało się zapisać zmian.';
    }
}
?>
