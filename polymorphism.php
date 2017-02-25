<?php

interface shape {

    public function getArea();
}

class circle implements shape {

    public $radius;

    public function __construct($radius) {

        $this->radius = $radius;
    }

    /**
     * `getArea` used to calculate Circle area.
     */
    public function getArea() {

        return $this->radius * $this->radius;
    }

}

class rectangle implements shape {

    public $length;
    public $width;

    public function __construct($length, $width) {

        $this->length = $length;
        $this->width = $width;
    }

    /**
     * `getArea` used to calculate Circle area.
     */
    public function getArea() {

        return $this->length * $this->width;
    }

}

/**
 * `getShapeArea` calculate passed shape instance area.
 */
function getShapeArea(shape $shape) {

    return $shape->getArea();
}

$circleI = new circle(5);
echo getShapeArea($circleI) . '<br>';

$rectangleI = new rectangle(5, 3);
echo getShapeArea($rectangleI);
?>