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
                        CASE A: Random string
                    </span>
                    <hr>
                    <?php
                        echo 'Random string of length 30 : '.random_bytes(30).'<br>';
                        echo 'Random integer between specified range : '.random_int(999, 9999999);
                    ?>

                </div>
       
            </div>

        </div>
    </body>
</html>
