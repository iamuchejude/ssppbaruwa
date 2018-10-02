<?php
    // require('../configs/database.class.php');
class Families
{
    public static function get($conn)
    {
        try {
            $query = $conn->query("SELECT * FROM families");
            return $query;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function getOne($family_id, $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM families WHERE id='$family_id'");
            $row = $query->fetch_assoc();
            return $row;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function getByName($family_name, $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM families WHERE families.name LIKE '$family_name'");
            $row = $query->fetch_assoc();
            return $row;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function delete($family_id, $conn)
    {
        try {
            $delete = $conn->query("DELETE FROM families WHERE id='" . (int)$family_id . "'");
            return $delete;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function create($new_family = array())
    {
        $family_id = random_int(11111, 99999);
        $created_date = date('D, d M Y H:i:a');
        $updated_date = date('D, d M Y H:i:a');
        try {
            $insert = $conn->query("INSERT INTO families VALUES ('$family_id', '$new_family[0]', '$new_family[1]', '$new_family[2]', '$new_family[3]', '$new_family[4]', '$new_family[5]', '$created_date', '$updated_date')");
            return $insert;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

    public static function getNewest($limit, $conn)
    {
        try {
            $query = $conn->query("SELECT * FROM families ORDER BY families.created_date DESC LIMIT $limit");
            return $query;
        } catch (Exception $e) {
            return "Error Occured: " . $e->getMessage() . " on " . $e->getLine() . " in " . $e->getFile();
        }
    }

}

    // echo "<h2>Showing List of " . Families::get()->num_rows . " Families in SSppBaruwa.</h2>";
    // foreach (Families::get() as $family) {
    //     print_r($family);
    //     echo "<br><br>";
    // }
    // echo "<h2>Others Follow Suite</h2>";

    // $data = array('Ttes', 'dssna', 'Anassmbra', 'Nigerisdgsga', 'unksgsgnown, 2nd Avesdgnue, Peace Estate, Baruwa Inside', '09074sgsg267485');
    // $create = Families::create($data);
    // if($create) {
    //     echo "Family Registered. <br><br>";
    // } else {
    //     echo "Family Not Registered. <br><br>";
    // }

    // $delete = Families::delete(48602);
    // if($delete) {
    //     echo "Family Deleted.<br><br>";
    // } else {
    //     echo "Not Deleted.<br><br>";
    // }
    // echo "<br><br><br><br><h2></h2>";
    // print_r(count(Families::getOne(12365)));

    // echo "<br><br><br><br><br>";
    // print_r(Families::getNewest(5));
?>