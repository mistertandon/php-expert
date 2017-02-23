<?php

namespace parvesh\mistertandon;

class sum {

    /**
     * `$augend` store `augend` value.
     */
    private $augend;

    /**
     * `$addend` store `addend` value.
     */
    private $addend;

    /**
     * `$sum` store `sum` of `$augend` and `$addend`.
     */
    private $sum;

    public function __construct($augend, $addend) {

        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * `sum` is used to calculate sum  of `$augend` and `$addend`.
     */
    public function sum() {

        $this->sum = $this->augend + $this->addend;
    }

    /**
     * `displaySum` is used to display sum  of `$augend` and `$addend`.
     */
    public function displaySum() {

        echo 'Sum is : ' . $this->sum;
    }

}

function namespaceFunction() {

    echo 'This function has been called using `namespace` reference.';
}
?>
