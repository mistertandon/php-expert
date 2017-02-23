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
                        CASE A: How to implement `Anonymous` class
                    </span>
                    <hr>
                    <?php

                    /**
                     * `AnonymousInterface_I` must be implemented by
                     * `AnonymousClass`
                     */
                    interface AnonymousInterface_I {

                        public function getUserDetail();
                    }

                    class ParentClass {

                        public $parentClassName = "Root Class";

                        public function getParentClassProp() {

                            echo 'Parent class property `$parentClassName` value is ' . $this->parentClassName;
                        }

                    }

                    $anonymousClass = new class('Parvesh', '9650780712') extends ParentClass implements AnonymousInterface_I {

                        public $name;
                        private $phoneNumber;

                        public function __construct($name, $phoneNumber) {

                            $this->name = $name;
                            $this->phoneNumber = $phoneNumber;
                        }

                        /**
                         * `getPhoneNumber` function is used to get user phone
                         * number.
                         */
                        function getUserDetail() {

                            echo 'Retrieving User-Detail from class function.<br>';
                            echo 'User with name `' . $this->name . '` having `phone number` is : ' . $this->phoneNumber . '<br>';
                        }

                        static function getUserDetail_B() {

                            echo '<br>Hello from class `STATIC` function.<br>';
                        }
                    };

                    $anonymousClass->getUserDetail();
                    $anonymousClass::getUserDetail_B();
                    $anonymousClass->getParentClassProp();
                    ?>

                </div>

            </div>

        </div>
    </body>
</html>


