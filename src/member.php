<?php
class Members
{
    public static function get($conn)
    {
        try {
            $query = $conn->query("SELECT * FROM members");
            return $query;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function getOne($member_id, $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM members WHERE id='$member_id'");
            $row = $query->fetch_assoc();
            return $row;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function getSome($params = [], $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM members WHERE $params[0]='" . $params[1] . "'");
            return $query;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function delete($member_id, $conn)
    {
        try {
            $delete = $conn->query("DELETE FROM members WHERE id='" . (int)$member_id . "'");
            if ($delete) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function deleteAll($conn)
    {
        try {
            $delete = $conn->query("DELETE FROM members");
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function create($new_member = array())
    {
        $member_id = random_int(111111, 999999);
        $created_date = date('D, d M Y H:i:a');
        $updated_date = date('D, d M Y H:i:a');
        try {
            $insert = $conn->query("INSERT INTO members VALUES 
                    ('$member_id', '$new_member[0]', '$new_member[1]', '$new_member[2]', '$new_member[3]', '$created_date', '$updated_date')");
            return $insert;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function update($member_id, $data = array())
    {
        $data['updated_date'] = date('D, d M Y H:i:a');
        $updateMsg = [];
        foreach ($data as $dataRow => $dataValue) {
            try {
                $update = $conn->query("UPDATE members set $dataRow='" . trim($conn->real_escape_string($dataValue)) . "' WHERE id='$member_id'");
                $updateMsg[] = $update;
            } catch (Exception $e) {
                return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
                exit;
            }
        }
        return $updateMsg;
    }

    public static function getNewest($limit, $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM members ORDER BY members.created_date DESC LIMIT $limit");
            return $query;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

}

    // echo "<h2>Showing List of ".Members::getNewest(5)->num_rows. " Members in SSppBaruwa.</h2>";
    // foreach(Members::getNewest(5) as $member) {
    //     // echo json_encode($member, JSON_PRETTY_PRINT);
    //     print_r($member);
    //     echo "<br><br>";
    // }
    // echo "<br><h2>Others Follow Suite</h2>";

    // $data = array('12345', 'Nwankwo', 'Fortunatus', 'Ebuka');
    // $create = Members::create($data);
    // if($create) {
    //     echo "Registered.<br><br>";
    // } else {
    //     echo "Not Registered.<br><br>";
    // }
    // Members::deleteAll();

    // $remove = Members::delete(126354);
    // if($remove) {
    //     echo "Deleted. <br><br>";
    // } else {
    //     echo "Deleted. <br><br>";
    // }

    // print_r(count(Members::getOne(353795)));
    
    // foreach(Members::getSome(['family_id', 54321]) as $member) {
    //         // echo json_encode($member, JSON_PRETTY_PRINT);
    //         print_r($member);
    //         echo "<br><br>";
    // }
    // echo "<br><br>";

    // $data = array(
    //     'gender'   => 'Male',
    //     'date_of_birth'    => '1999-09-12',
    //     'age'  => '18',
    //     'phone_number' => '08135634473',
    // );
    // $update = Members::update(641468, $data);
    // if($update) {
    //     print_r($update);
    // } else {
    //     echo "E no gree update";
    // }
?>