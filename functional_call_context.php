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
            ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 well header-margin">
                    PHP 7 Features
                </div>                
                <div class="col-sm-10">
                    <span class="primary">
                        CASE A: How to assin psuedo variabe to a function.
                    </span>
                    <hr>
                    <?php

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

                    }

                    $callableFn = function() {

                        echo '<pre>';
                        var_dump($this);
                        echo '</pre>';
                    };

                    $callableFn->call(new sum);
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>