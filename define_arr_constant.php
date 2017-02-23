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
                        CASE A: How to define array constant
                    </span>

                    <?php
                    const CONSTANT_ARRAY = array('parvesh', 9650780712);

                    echo '<pre>';
                    var_dump(CONSTANT_ARRAY);
                    echo '</pre>';
                    ?>
                    <hr>
                    <hr>

                    <span class="primary">
                        CASE B: How to define array constant using `define`
                    </span>
                    <hr>
                    <?php
                    define('DEFINE_CONSTANT_ARRAY', array('parvesh', 9650780712));

                    echo '<pre>';
                    var_dump(DEFINE_CONSTANT_ARRAY);
                    echo '</pre>';
                    ?>
                    <hr>                    

                </div>

            </div>

        </div>
    </body>
</html>