<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;


class Diamond extends Shape
{
	/**
    *
    * @param int $length
    */
    public function __construct($length = 10)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
    * Draws the diamond.
    * The diamond is the result of two pyramid shapes
    * The first pyramid is a normal pyramid
    * The second pyramid is an inverted pyramid joining the first normal pyramid
    */
    public function draw()
    {

    	/**
		* Print normal pyramid
		*/
		for($i = 1; $i <= $this->sideLength; $i++){

			//Set output spaces
			for($space = 1; $space <= $this->sideLength - $i; $space++){ 

				echo $this->padding();
			}
			for($j = 1; $j <= 2 * $i - 1; $j++){

				if($j == 1 || $j == 2 * $i - 1){ 

					echo $this->pixel . $this->padding();
				}
				else
				{

					echo $this->padding();
				}
			}
			$this->newLine();
		}

		/**
		  * Display inverted pyramid
		 */
		for ($i = $this->sideLength - 1; $i >= 1 ; $i--){ 

			//Set output spaces
			for($space = 0; $space <= $this->sideLength - 1 - $i; $space++){

				echo $this->padding();
			}
			for($j = 1; $j <= 2 * $i - 1; $j++){

				if($j == 1 || $j == 2 * $i - 1)
				{

					echo $this->pixel . $this->padding();
				}
				else
				{

					echo $this->padding();
				}
			}
			$this->newLine();
		}

    }

}