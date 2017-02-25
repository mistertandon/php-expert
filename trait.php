<html>
    <head>
        <?php
        include("./header.php");
        ?>
    </head>
    <body>
        <div class="container">
            <?php
            include("./nav_bar.php");

            /**
             * `callableFn` function is used to implement `callable` argument
             * feature available in PHP 7
             */
            ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 well header-margin">
                    PHP 5 Features
                </div>                
                <div class="col-sm-10">
                    <span class="primary">
                        CASE A: How to work with trait.
                    </span>
                    <hr>
                    <?php

                    trait Apple {

                        public function fruitName() {

                            echo "Fruit name must be apple : " . $this->_fruits['apple'] . '<br>';
                        }

                    }

                    trait Mango {

                        public function fruitName() {

                            echo "Fruit name must be apple : " . $this->_fruits['mango'] . '<br>';
                        }

                    }

                    /**
                     * `Base` class use `Apple` and `Mango` trait.
                     */
                    class Base {

                        use Apple,
                            Mango {

                            Apple::fruitName insteadof Mango;
                            Mango::fruitName as MangoFruit;
                        }

                        private $_fruits;

                        public function __construct($fruitArr) {

                            $this->_fruits = $fruitArr;
                        }

                    }

                    $baseP = array('apple' => 'Apple', 'mango' => 'Mango');
                    $baseI = new Base($baseP);
                    $baseI->fruitName();
                    $baseI->MangoFruit();
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>