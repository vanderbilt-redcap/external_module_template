
<?php

namespace InstitutionName\MyExternalModule;

// For now, the path to "redcap_connect.php" on your system must be hard coded.
require_once __DIR__ . '/../../../redcap_connect.php';

class YourExternalModuleTest extends \ExternalModules\ModuleBaseTest
{
	function dummyTest(){
		$expected = 3;
		$actual1 = 3;
		$actual2 = 3;

		// $actual1 = $this->module->getFoo();
		// Shorter syntax without explicitly specifying "->module" is also supported.
		// $actual2 = $this->getFoo();

		$this->assertSame($expected, $actual1);
		$this->assertSame($expected, $actual2);
	}
}
