<?php
use Algo\StructureDonnees\StructureLineaire\Pile;
require 'autoloader.class.php';
Algo\StructureDonnees\StructureLineaire\MountLoader::defLoader();


$maPile = new Pile();
$maPile->empiler(10);
$maPile->empiler(20);
$maPile->empiler(30);
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';





?>