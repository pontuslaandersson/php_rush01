<?PHP
trait HeavyAutomatic
{
	private $_weapon = "heavy automatic";
	private $_X = 5;
	private $_charge = 5;
	private $_shrange = 1;
	private $_midrange = 5;
	private $_lgrange = 9;
	//on each row the range extends by 2 cells, e.g. row 1: 1x1, row 2: 1x3,
	//row 3: 1x5, row 4: 1x7, row 5 is 1x9;
}
?>
