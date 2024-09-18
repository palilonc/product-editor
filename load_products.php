<?php
$filePath = 'C:/Users/palil/Desktop/1/wpytopen/chat3.py';

if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    
    // Znajdź sekcję produktów
    $startPos = strpos($content, '### Dostępne produkty i ceny: ###');
    if ($startPos !== false) {
        $startPos += strlen('### Dostępne produkty i ceny: ###');
        $endPos = strpos($content, '### Dodatkowe informacje ###', $startPos);
        $productsSection = substr($content, $startPos, $endPos - $startPos);
        echo $productsSection;
    } else {
        echo 'Brak sekcji produktów w pliku.';
    }
} else {
    echo 'Plik nie istnieje.';
}
?>
