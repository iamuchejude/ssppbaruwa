<?php
    class Functions
    {
        public static function getTemplate($template, $title=NULL)
        {
            $title = $title ?? '';
            include_once(__DIR__."/templates/{$template}.php");
        }

        public static function getTemplateLog($template, $title=NULL)
        {
            $title = $title ?? '';
            include_once(__DIR__."/templates/{$template}.php");
        }

        public static function getConfig()
        {
            session_start();
            
            include_once(__DIR__."/src/app.php");
            include_once(__DIR__."/src/database.php");
            include_once(__DIR__."/src/access.php");
            include_once(__DIR__."/src/script.php");
        }

        public static function generateCode($for=NULL) {
            switch($for) {
                case 'passkey':
                    return random_int(111111, 999999);
                    break;
                case 'id':
                    return random_int(11111, 99999);
                    break;
                default:
                    return 'Wrong Parameter Provided';
                    break;
            }
        }

        public static function getFamily($uid, $conn) {
            $getLogged = $conn->query("SELECT * FROM families WHERE families.id='$uid'");
            return $getLogged->fetch_assoc();
        }
    }


    $function = new Functions();