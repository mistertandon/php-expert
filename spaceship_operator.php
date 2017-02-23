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
                        CASE A: How to implement `spaceship` opearator
                    </span>
                    <hr>
                    <?php
                    $result = null;
                    $var_A = 10;
                    $var_B = 12;
                    $result = $var_A <=> $var_B;

                    echo '<br>$var_A = 10; AND  $var_B = 12; then $var_A <=> $var_B result : ' . $result . '<br>';

                    $var_A = 19;
                    $var_B = 13;
                    $result = $var_A <=> $var_B;
                    echo '<br>$var_A = 19; AND  $var_B = 13; then $var_A <=> $var_B result : ' . $result . '<br>';

                    /**
                     * Type conversion will take place from string to integer.
                     */
                    $var_A = "13";
                    $var_B = 19;
                    $result = $var_A <=> $var_B;
                    echo '<br>$var_A = "13"; AND  $var_B = 19; then $var_A <=> $var_B result : ' . $result . '<br>';
                    
                    /**
                     * IT iterate over array to determine final result,
                     * until it gets different value. As sson as it get first
                     * different pair, it use to calculate result.
                     */
                    $var_A = array(13, 20);
                    $var_B = array(13, 20);
                    $result = $var_A <=> $var_B;
                    echo '<br>$var_A = array(13, 20); AND  $var_B = array(13, 20); then $var_A <=> $var_B result : ' . $result . '<br>';                    
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>