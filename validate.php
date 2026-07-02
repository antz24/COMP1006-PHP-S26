<?php 
    class validate
    {
        public function checkEmpty($data, $fields)
        {
            $msg = null;
            foreach($fields as $value)
                {
                    if(empty($data[$value]))
                        {
                            $msg .= "<p>$value field empty </p>";
                            return $msg;
                        }
                }
        }
        public function validAge($age)
        {
            /**
             * preg_match uses regex to look for text patterns
             */
            if(preg_match("/^[0-9]+$/",$age))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function validEmail($email)
        {
            /**
             * filter_var is a built in php function used to sanitize or validate data
             * filter_validation_email is a built in php constant (a type of global flag)
             */
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    return true;
                }
            else
                {
                    return false;
                }
        }
    }
?>