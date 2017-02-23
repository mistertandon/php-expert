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
                        CASE A: Function Generator
                    </span>
                    <hr>
                    <?php

                    function functionGenerator() {

                        echo "Started driving";
                        yield "My first stop.<br><br>";
                        echo "Drive upto 10 KM.";
                        yield "My Second stop<br><br>";
                        echo "Drive upto 100 KM.";
                        yield "My Third stop<br><br>";
                        echo "Journey completed.";
                        yield "My Final stop<br><br>";
                    }

                    $controlFunc = functionGenerator();

                    $firstStop = $controlFunc->current();
                    echo "<br> 1: " . $firstStop;
                    $controlFunc->next();

                    $secondStop = $controlFunc->current();
                    echo "<br> 2: " . $secondStop;
                    $controlFunc->next();

                    $thirdStop = $controlFunc->current();
                    echo "<br> 3: " . $thirdStop;
                    $controlFunc->next();

                    $thirdStop = $controlFunc->current();
                    echo "<br> 4: " . $thirdStop;
                    $controlFunc->next();
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>
