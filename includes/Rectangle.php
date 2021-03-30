<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5, $column = 12) {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->column = $column; 
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
     * Draws the rectangle.
     */
    public function draw()
    {

        for ($i = 1; $i <= $this->sideLength; $i++) {

            for ($j = 1; $j <= $this->column; $j++) {

                if ($i == 1 || $i == $this->sideLength) {

                    echo $this->pixel . $this->padding(2);

                }
                 else if ($j == 1 || $j == $this->column) {

                    echo $this->pixel . $this->padding(12);

                } else {

                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }

            $this->newLine(); 
        }
    }
}
