<?PHP
trait SideLazer
{
	private $_weapon = "side lazers";
	private $_X;
	private $_charge = 0;
	private $_shrange = 10;
	private $_midrange = 20;
	private $_lgrange = 30;
	//on each row the range extends by 2 cells, e.g. row 1: 1x1, row 2: 1x3,
	//row 3: 1x5, row 4: 1x7, row 5 is 1x9;

	public function getX($side_x)
	{
		if (get_parent_class($this) === "Battleship" ||
		get_parent_class($this) === "Cruiser" || get_parent_class($this) === "Escort")
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
