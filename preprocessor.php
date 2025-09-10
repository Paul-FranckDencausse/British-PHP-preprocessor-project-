<?php
// preprocessor.php

// 1. Lire le fichier source
$sourceFile = 'mon_code.phps';
$sourceCode = file_get_contents($sourceFile);

// 2. Transformer les variables '£' en '$'
$processedCode = str_replace('£', '$', $sourceCode);

// 3. Remplacer les mots britanniques par leur équivalent américain
$britishToAmerican = [
    'colour'    => 'color',
    'favourite' => 'favorite',
    'organise'  => 'organize',
    'initialise'=> 'initialize',
    'analyse'   => 'analyze',
    'behaviour' => 'behavior',
    'centre'    => 'center',
    'metre'     => 'meter',
    'licence'   => 'license',
    'defence'   => 'defense',
    // Ajoute d'autres mots si besoin
];

$processedCode = str_ireplace(array_keys($britishToAmerican), array_values($britishToAmerican), $processedCode);

// 4. Sauvegarder dans un fichier PHP temporaire
$targetFile = 'mon_code_translated.php';
file_put_contents($targetFile, $processedCode);

// 5. Exécuter le fichier PHP traduit
include $targetFile;

// Optionnel : Supprimer le fichier temporaire après exécution
unlink($targetFile);
