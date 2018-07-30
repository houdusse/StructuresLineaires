<?php
use Algo\StructureDonnees\StructureLineaire\Pile;
use Algo\StructureDonnees\StructureLineaire\File;
require 'autoloader.class.php';
Algo\StructureDonnees\StructureLineaire\MountLoader::defLoader();


$maPile = new Pile();
$maPile->empiler(30);
$maPile->empiler(20);
$maPile->empiler(10);
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';
echo '***********************<br>';

$maFile = new file();
$maFile->enfiler(30);
$maFile->enfiler(20);
$maFile->enfiler(10);
echo $maFile->defiler() .'<br>';
echo $maFile->defiler() .'<br>';
echo $maFile->defiler() .'<br>';






?>