<?php
require_once ('includes/Constants.php');

class Account {
        public static $temp = 1;
        public $errorsArray = [];

        public function _constructor() {
        }

        public function register($username, $firstName, $lastName, $email1, $email2, $password1, $password2) {
            $this->errorsArray = [];
            if(
                $this->validateUsername($username) &&
                $this->validateFirstName($firstName) &&
                $this->validateLastName($lastName) &&
                $this->validateEmail($email1, $email2) &&
                $this->validatePassword($password1, $password2)) {
                echo "true";
                    return true;
            };
            echo "false";
            return false;
        }

        private function validateUsername($data) {
            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray, Constants::$usernameInvalid);
                echo $this->errorsArray[0];
                return false;
            }

            return true;
        }

        private function validateFirstName($data) {
            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray, Constants::$firstnameEmpty);

                return false;
            }

            return true;
        }

        private function validateLastName($data) {
            if(strlen($data) > 25 || strlen($data) < 6) {
                array_push($this->errorsArray, Constants::$lastnameEmpty);

                return false;
            }

            return true;
        }

        private function validateEmail($email1, $email2) {
            if( !filter_var(FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorsArray, Constants::$emailInvalid);

                return false;
            }

            if(!filter_var(FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorsArray, Constants::$emailInvalid);

                return false;
            }

            if ($email1 !== $email2) {
                array_push($this->errorsArray, Constants::$emailDoNotMatch);

                return false;
            }

            return true;
        }

        private function validatePassword($password1, $password2) {
            if ($password1 !== $password2) {
                array_push($this->errorsArray, Constants::$passwordsDoNotMatch);

                return false;
            }

            if(strlen($password1) > 25 || strlen($password1) < 6) {
                array_push($this->errorsArray, Constants::$passwordsInvalid);

                return false;
            }

            if(strlen($password2) > 25 || strlen($password2) < 6) {
                array_push($this->errorsArray, Constants::$passwordsInvalid);

                return false;
            }

            return true;
        }

        public function displayError() {
            if( ! empty($this->errorsArray)) {
                return $this->errorsArray[0];
            }
        }
    }