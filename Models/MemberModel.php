<?php

include("Models/Config.php");
$conn = Config :: Db_Connect();

class Gym_Member{
    public static function Create_Member($email,$password){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $sql = "INSERT INTO MEMBER(Email, Member_Password)
        $conn = Config :: Db_Connect();
        Values($email, $password)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a member by email
        $sql = "SELECT Member_Password from Gym_Member Where Email = '$email'";
        $conn = Config :: Db_Connect();
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        return $password["Member_Password"];
    } 

    public static function Check_Member_Exists_By_Email($Email){
        $sql = "SELECT Member_Password From Gym_Member Where Email = '$email'";
        $conn = Config :: Db_Connect();
        $result = $conn->query($sql);
        
        if($result->num_rows < 0){
            return false;
        }
        else{
            return true;
        }
    }

    public static function Get_Member_ID_By_Email_Passsword($email,$password){
        $sql = "SELECT Member_ID from Gym_Member Where Email = '$email' AND Where Member_Password = '$password'";
        $conn = Config :: Db_Connect();
        $result = $conn->query($sql);
        return $UserID["Member_ID"];
    }
}
?>