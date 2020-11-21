<?PHP
	class Cruiser
	{
		private $_name;
		private $_player;
		private $_size_x;
		private $_size_y;
		private $_hull;
		private $_shield;
		private $_speed;
		private $_wiggle;
		private	$_turn;
		private $_weapons = array();
		private $_charge;
		private $_PP;

		public function __construct($_name, $_size_x, $_size_y, $_hull, $_shield, $_speed, $_wiggle)
		{
			$this->_name = $_name;
			$this->_size_x = $_size_x;
			$this->_size_y = $_size_y;
			$this->_hull = $_hull;
			$this->_shield = $_shield;
			$this->_speed = $_speed;
			$this->_wiggle = $_wiggle;
		}

		public function turn($dir)
		{
			if ($dir == 1)
				{
					$this->_turn += 90;
				}
			else if ($dir == -1)
			{
				if ($this->_turn == -90)
				{
					$this->_turn = 270;
				}
				else if ($this->_turn == 360)
				{
					$this->_turn = 0;
				}
				else
				{
					$this->_turn -= 90;
				}
			}
				//incomplete, needs to also save info
		}

		public function addShield()
		{
			if ($this->_PP > 0)
			{
				$this->_PP = $this->_PP - 1;
				$this->_shield = $this->_shield + 1;
			}
			//also needs to save info
		}

		public function fire($weapon) 
		{
			foreach ($this->_weapons as $w) 
			{
				if ($w->getWeapons() === $weapon)
				{
					return TRUE;
				}
			}
			return FALSE;
		}

		public function getSizeX()
		{
			return $this->_sizeX;
		}

		public function getSizeY()
		{
			return $this->_sizeY;
		}

		public function getPlayer()
		{
			return $this->_player;
		}

		public function getWeapons($id)
		{
			$this->_weapons = Array(
				"$id"
			);
			print_r($this->_weapons);
		}
	}
?>
