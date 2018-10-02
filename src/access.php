<?php
    class Access {
        public function login($family, $passkey, $conn) {
            $query = $conn->query("SELECT * FROM families WHERE families.name='$family'");
            if($query->num_rows >= 1) {
                $family = $query->fetch_assoc();
                if ($family['status'] == 0) {
                    return 'ACCOUNT_SUSPENDED';
                } else {
                    if($family['passkey'] != $passkey) {
                        return 'WRONG_PASSKEY';
                    } else {
                        return $family['id'];
                    }
                }
            } else {
                return 'FAMILY_NOT_EXIST';
            }
        }

        public function register($id, $name, $phoneNumber, $email, $address, $bcc, $nationality, $state, $lga, $passkey, $conn) {
            $name = trim($name);
            $phoneNumber = trim($phoneNumber);
            $email = trim($email);
            $address = trim($address);
            $bcc = trim($bcc);
            $nationality = trim($nationality);
            $state = trim($state);
            $lga = trim($lga);
            $userId = trim($id);

            if(($name == '') || ($phoneNumber == '') || ($address == '') || ($bcc == '') || ($nationality == '') || ($state == '') || ($lga == '')) {
                return 'EMPTY_FIELD';
            } else {
                $checkSm = $conn->query("SELECT * FROM families WHERE families.name='$name' and families.phone_number='$phoneNumber'");
                if($checkSm->num_rows >= 1) {
                    return 'SIMILAR_FAMILY';
                } else {
                    $created_date = date('D, d M Y H:i:a');
                    $updated_date = date('D, d M Y H:i:a');
                    $createFamily = $createFamily = $conn->query("INSERT INTO families (families.id, families.name, families.lga, families.state, families.nationality, families.address, families.phone_number, families.email, families.bcc, families.passkey, families.created_date, families.updated_date) VALUES ('$userId', '$name', '$lga', '$state', '$nationality', '$address', '$phoneNumber', '$email', '$bcc', '$passkey', '$created_date', '$updated_date')");
                    if($createFamily) {
                        return 'REGISTERED';
                    } else {
                        return 'FAILED_REGISTRATION';
                    }
                }
            }
        }

        public function logout() {
            unset($_SESSION['id']);
            session_destroy();
            header('location: '.$app_url.'/login');
        }
    }

    $access = new Access();