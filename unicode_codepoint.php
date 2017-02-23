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
                        CASE A: How to get unicode escape characters
                    </span>
                    <hr>
                    <?php
                    
                    echo "Pound symbol can be display using syntax only: &pound;<br><br>";
                    echo "In PHP 7 same can be achieved using \u{2200}";
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>