<?PHP
trait LazerCanon
{
	private $_weapon = "lazer canon";
	private $_X;
	private $_charge = 0;
	private $_shrange = 10;
	private $_midrange = 20;
	private $_lgrange = 30;
	//on each row the range extends by 2 cells, e.g. row 1: Xx10, row 2: Xx17,
	//row 3: Xx23, row 4: Xx29;

	public function getX($side_x)
	{
		if (get_parent_class($this) === "Battleship" ||
		get_parent_class($this) === "Cruiser" ||
		get_parent_class($this) === "Escort")
		{
			$this->_X = $side_x;
		}
		else
		{
			exit ("ERROR");
		}
	}
}
?>
