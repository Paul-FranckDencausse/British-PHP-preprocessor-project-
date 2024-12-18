<?php
// preprocessor.php

// 1. Lire le fichier source
$sourceFile = 'mon_code.phps';
$sourceCode = file_get_contents($sourceFile);

// 2. Transformer les variables '£' en '$'
$processedCode = str_replace('£', '$', $sourceCode);

// 3. Sauvegarder dans un fichier PHP temporaire
$targetFile = 'mon_code_translated.php';
file_put_contents($targetFile, $processedCode);

// 4. Exécuter le fichier PHP traduit
include $targetFile;

// Optionnel : Supprimer le fichier temporaire après exécution
unlink($targetFile);
