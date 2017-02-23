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
                        CASE A: How static variable works inside function
                    </span>

                    <?php

                    function callableFn() {
                        /**
                         * `static $var_A` will get initilized only once, when 
                         * `callableFn` function get called for the very first
                         * time.
                         */
                        static $var_A = 0;

                        return ++$var_A;
                    }

                    echo '<br>';
                    for ($i = 0; $i < 5; $i++) {

                        $result = 0;
                        $result = callableFn();
                        echo "Returned value from `callableFn` during $i th iteration : " . $result . '<br>';
                    }
                    ?>
                    <hr>                    

                </div>

            </div>

        </div>
    </body>
</html>