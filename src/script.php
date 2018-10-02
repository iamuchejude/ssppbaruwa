<?php
    if(isset($_POST['login'])) {
        $name = trim($_POST['lName']);
        $passkey = md5(sha1(trim($_POST['lPasskey'])));
        if(($name == '') || ($passkey == '')) {
            $mes = "error";
            $logMessage = "Please enter family name and passkey";
        } else {
            $login = $access->login($name, $passkey, $conn);
            switch($login) {
                case 'ACCOUNT_SUSPENDED':
                    $mes = "error";
                    $logMessage = "Account have been suspended.";
                    break;
                case 'FAMILY_NOT_EXIST':
                    $mes = "error";
                    $logMessage = "Family with name, '<b>".$name."</b>' does not exist.";
                    break;
                case 'WRONG_PASSKEY':
                    $mes = "error";
                    $logMessage = "Passkey does not match with the family.";
                    break;
                default:
                    $mes = "success";
                    $_SESSION['uid'] = $login;
                    header("location: {$app_url}/family/index");
                    break;
            }
        }
    }

    if(isset($_POST['register'])) {
        $passGen = Functions::generateCode('passkey');
        $passkey = md5(sha1(trim($passGen)));
        $userId = Functions::generateCode('id');
        $register = $access->register($userId, $_POST['name'], $_POST['phoneNumber'], $_POST['email'], $_POST['address'], $_POST['bcc'], $_POST['nationality'], $_POST['state'], $_POST['lga'], $passkey, $conn);
        switch($register) {
            case 'EMPTY_FIELD':
                $mes = 'error';
                $regMessage = "Please fill in all fields.";
                break;
            case 'SIMILAR_FAMILY':
                $mes = 'info';                
                $regMessage = "Similar family was found already registered.";
                break;
            case 'REGISTERED':
                $mes = 'success';            
                $regMessage = "Registration successfully. Your passkey is <b>".$passGen."</b>. Keep it secret.<br>Click <a href='".$app_url."/login'>here</a> to login now.";
                break;
            case 'NOT_REGISTERED':
                $mes = 'error';            
                $regMessage = "Registration failed. Please try again later.";
                break;
            default:
                $mes = 'error';            
                $regMessage = "Unkown error occured. Please try again later.";
                break;
        }
    }