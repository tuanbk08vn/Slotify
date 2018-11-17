<?php
    class Account {

        public $errorsArray = [1,2];

        public function _constructor() {
            $this->errorsArray = [1,2,3];
            $test = [1,2,3,4];
            var_dump($test);die();
        }

        public function register($username, $firstName, $lastName, $email1, $email2, $password1, $password2) {
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmail($email1, $email2);
            $this->validatePassword($password1, $password2);

            if(empty($this->errorsArray)) {
                // Insert into DB
                return true;
            } else {
                return false;
            }
        }

        private function validateUsername($data) {

            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray[], "Your username must be between 6 and 25");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }
        }

        private function validateFirstName($data) {

            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray[], "Your firstname must be between 6 and 25");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }
        }

        private function validateLastName($data) {

            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray, "Your last name must be between 6 and 25");
                // return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }
        }

        private function validateEmail($email1, $email2) {

            if( !filter_var(FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorsArray, "Your email is not correct");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }

            if(!filter_var(FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorsArray, "Your email is not correct");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }

            if ($email1 !== $email2) {
                array_push($this->errorsArray, "Your email is not match");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }
        }

        private function validatePassword($password1, $password2) {

            if ($password1 !== $password2) {
                array_push($this->errorsArray, "Your password is not match");
                //return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }

            if(strlen($password1) > 25 || strlen($password1) < 6) {
                array_push($this->errorsArray, "Your password must be between 6 and 25");
                // return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }

            if(strlen($password2) > 25 || strlen($password2) < 6) {
                array_push($this->errorsArray, "Your password  must be between 6 and 25");
//                return "<div>Aaaaaaa qdwqdqwdddddddddddxsxsâxxx</div>";
                return;
            }
        }

        public function displayError() {
//            echo $this->errorsArray;
        }
    }