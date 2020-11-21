<?PHP
include_once("Cruiser.class.php");

	class Heavy extends Cruiser
	{
		private $_name = "";
		private $_player;
		private $_size_x = 2;
		private $_size_y = 5;
		private $_hull = 6;
		private $_shield = 1;
		private $_speed = 12;
		private $_wiggle = 4;
		private $_weapons = array();
		private $_charge = 0;
		private $_PP = 10;

		public function __construct()
		{
			Parent::__construct($this->_name, $this->_player, $this->_size_x, $this->_size_y,
			$this->_hull, $this->_shield, $this->_speed, $this->_wiggle, $this->_charge, $this->_PP);
		}
	}

?>
