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
             * `parseIntFn` function is used to implement `coercive` feature
             * available into PHP 7.0 to force data-type to convert into <int>
             */
            function parseIntFn(int ...$argArr) {

                return $argArr;
            }

            /**
             * `parseBoolFn` function is used to implement `coercive` feature
             * available into PHP 7.0 to force data-type to convert into <bool>
             */
            function parseBoolFn(bool ...$argArr) {

                return $argArr;
            }

            /**
             * `parseBoolFn` function is used to implement `coercive` feature
             * available into PHP 7.0 to force data-type of each parameter
             * individually.
             */
            function parseFn(string $firstArg, bool $secondArg, float $thirdArg) {

                return array($firstArg, $secondArg, $thirdArg);
            }

            ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 well header-margin">
                    PHP 7 Features
                </div>                
                <div class="col-sm-10">
                    <span class="primary">
                        Coercive data-type to `int`
                    </span>
                    <?php
                    $fnOutput = null;
                    $fnOutput = parseIntFn(2, "2", "22.2", true);
                    echo '<pre>';
                    print_r($fnOutput);
                    echo '</pre>';
                    ?>

                </div>
                <hr>
                <div class="col-sm-10">
                    <span class="primary">
                        Coercive data-type to `bool`
                    </span>
                    <?php
                    $fnOutput = null;
                    $fnOutput = parseBoolFn(2, "2", "22.2", true);
                    echo '<pre>';
                    print_r($fnOutput);
                    echo '</pre>';
                    ?>

                </div>
                <hr>
                <div class="col-sm-10">
                    <span class="primary">
                        Coercive data-type to `bool`
                    </span>
                    <?php
                    $fnOutput = null;
                    $fnOutput = parseFn(2, "2", "22.2", true);
                    echo '<pre>';
                    print_r($fnOutput);
                    echo '</pre>';
                    ?>

                </div>                
            </div>

        </div>
    </body>
</html>


