<?php
	class Math{
		const pi = 3.1415926;
		static function squarded($input) {
			return $input*$input;
		}
		public $one = 1;
		public $two = 2;
		public function __toString()
		{
			return (var_export($this, TRUE));
		}
	}
	echo "Math::pi = ".Math::pi."\n";
	echo "Math::squarded(8) = ".Math::squarded(8)."\n";
	
	class A {
		public static function who() {
			echo "A";
		}
		public static function test() {
			who();
		}
	}
	class B extends A {
		public static function who() {
			echo "B";
		}
	}
	
	B::test();
	$p = new Math;
	echo $p;
/*	
	require_once ("page.inc");
	$class = new ReflectionClass("Page");
	echo "<pre>".$class."</pre>";
*/
?>