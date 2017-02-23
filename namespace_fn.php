<html>
    <head>
        <?php
        include('./namespace_helper.php');

        use parvesh\mistertandon as mistertandonnamespace;

        /**
         * We can target each element individually exist under namespace.
         * 
         * `use parvesh\mistertandon\namespaceFunction as nfn`
         *  and can used 
         * `nfn()` in this script;
         * 
         * Other alternative way
         * use parvesh\mistertandon\{sum as sumClass, namespaceFunction as nfn}
         */
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
                        CASE A: Call class using `namespace`
                    </span>
                    <hr>
                    <?php
                    /**
                     * Alternative syntax
                     * $sumClassI = new parvesh\mistertandon\sum(5, 4);
                     */
                    $sumClassI = new mistertandonnamespace\sum(5, 4);
                    $sumClassI->sum();
                    $sumClassI->displaySum();
                    ?>
                    <hr>
                    <span class="primary">
                        CASE A: Call function using `namespace`
                    </span>
                    <hr>
                    <?php
                    /**
                     * Alternative syntax
                     * parvesh\mistertandon\namespaceFunction();
                     */
                    mistertandonnamespace\namespaceFunction();
                    ?>
                    <hr>
                </div>

            </div>

        </div>
    </body>
</html>
