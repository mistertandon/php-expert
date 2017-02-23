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
                    PHP 7 Features
                </div>                
                <div class="col-sm-10">
                    <span class="primary">
                        CASE A: Object type declarations available in PHP 7
                    </span>
                    <?php

                    function callableFn(callable $callBack) {

                        echo '<italic>String get executed from function context.</italic><br>';
                        $callBack();
                    }

                    callableFn(function() {

                        echo '<bold>String get executed from `callable` function context.</bold>';
                    });
                    ?>

                </div>
                <hr>
                <div class="col-sm-10 type-dependency">
                    <span class="primary">
                        CASE B: Demonstrating `Dependency Injection` available in PHP 7
                    </span>
                    <?php

                    class vegetarian {
                        
                    }

                    $vegClassObj = new vegetarian;

                    /**
                     * `typeDependencyFn` is used to demonstrate `type` dependency
                     * injection functionality.
                     */
                    function typeDependencyFn(vegetarian $vegClassObj) {

                        echo '<pre>';
                        var_dump($vegClassObj);
                        echo '</pre>';
                    }

                    typeDependencyFn($vegClassObj);
                    ?>

                </div>
                <hr>
                <div class="col-sm-10 type-dependency">
                    <span class="primary">
                        CASE C: Demonstrating `Dependency Injection` using interface
                        available in PHP 7
                    </span>
                    <?php

                    interface NonVegetarian_I {
                        
                    }

                    class NonVegetarian implements NonVegetarian_I {
                        
                    }

                    $nonVegClassObj = new NonVegetarian;

                    /**
                     * `typeDependencyFn` is used to demonstrate `type` dependency
                     * injection functionality with interface.
                     */
                    function typeDependencyIFn(NonVegetarian_I $nonvegObj) {

                        echo '<pre>';
                        var_dump($nonvegObj);
                        echo '</pre>';
                    }

                    typeDependencyIFn($nonVegClassObj);
                    ?>

                </div>
                <hr>
                <div class="col-sm-10">
                    <span class="primary">
                        CASE D: Demonstrating `Dependency Injection` using self type
                        declaration
                    </span>
                    <?php

                    class Cake {

                        /**
                         * `bakeMe` function demonstrate SELF type
                         * declaration.
                         */
                        function bakeMe(self $cakeObj) {

                            echo '<pre>';
                            var_dump($cakeObj);
                            echo '</pre>';
                        }

                    }

                    $cakeClassObj_A = new Cake;
                    $cakeClassObj_B = new Cake;

                    $cakeClassObj_A->bakeMe($cakeClassObj_B);
                    ?>

                </div>                
            </div>

        </div>
    </body>
</html>


