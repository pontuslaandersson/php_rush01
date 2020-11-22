<?PHP
trait HeavyAutomatic
{
	private $_idWeapon = "heavy automatic";
	private $_X = 5;
	private $_charge = 5;
	private $_shrange = 1;
	private $_midrange = 5;
	private $_lgrange = 9;
	//on each row the range extends by 2 cells, e.g. row 1: 1x1, row 2: 1x3,
	//row 3: 1x5, row 4: 1x7, row 5 is 1x9;


	public function shooting($_size_x)
	{
		$shoot_pattern = array();
		if ($this->_charge > 0)
		{
			$this->_charge = $this->_charge - 1;
			for ($x = 1; $x <= $_size_x; $x++)
			{
				for ($y = 1; $y <= $this->_lgrange; $y+=2)
				{
					array_push($shoot_pattern, $y);
				}
			}
		}
		else if ($this->charge === 0)
		{
			$this->addCharge;
			self::shooting();
		}
		print_r($shoot_pattern);
	}

	public function getId()
	{
		return $this->_idWeapon;
	}
}
?>
