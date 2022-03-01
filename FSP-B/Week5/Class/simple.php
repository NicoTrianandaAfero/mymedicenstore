<?php
class SimpleClass
	{
		private $var = "A Default value";

		/*public function _construct()
		{
			$this->var = "A constract value Destory";
		}*/

		public function _construct($val = "A constract value")
		{
			$this->var = $val;
		}

		public function display()
		{
			//echo $var; jangan manggil properties dlam class
			//echo $this->$var;
			echo $this->var."<br>";
		}
		public function _destruct()
		{
			echo "Destory<br>";
		}
	}

?>