<?php
namespace Algo\StructureDonnees\StructureLineaire;

class MountLoader {

	public static function defLoader() {
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	public static function autoload($class) {
		$class = str_replace(__NAMESPACE__, '', $class);
		require $class .'.class.php';
	}
}






?>