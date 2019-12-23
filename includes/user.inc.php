<?php
/* Query A Database Using PDO In OOP PHP */

class User extends ConnDB {

    public function getAllUsers() {
        $stmt = $this->connect()->query("SELECT * FROM REF_ADMIN");
        while ($row = $stmt->fetch()) {

            $admin_code = $row['ADMIN_CODE'];
            return $admin_code;


        }
    }
}

?>