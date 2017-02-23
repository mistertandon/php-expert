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
                        CASE A: How to implement `Coalscing` opearator
                    </span>
                    <hr>
                    <?php
                    /**
                     * `var_A` variable has been defined without assigning
                     * default value. Coalescing produce default value if any
                     * value is not present
                     */
                    $var_A;

                    $var_A = $var_A ?? "Default value using Coalscing";
                    echo "Value of `var_A` : $var_A";
                    ?>

                </div>
       
            </div>

        </div>
    </body>
</html>


