<?php
class recipeGrid{
	private $meal;
	public function __construct($meal){
		$this->meal = $meal;
	}
	public function getMeal()
	{
		return $this->meal;
	}
	public function printGrid(){
		$this->meal;
		print '<h2 class="mealTitle">';
		print $this->getMeal();
		print '</h2>';
		print '<div class="gridContainer"> ';
		print '<ul>';
		for($parse = 0;$parse < $this->mealCount();$parse++)
		{
			print '<li><a href="#"><img src="http://placehold.it/300x300" /></a></li>';
		}
		print '</ul>';
		print '</div>';
	}
	public function mealCount(){
		return 18;
	}
}
