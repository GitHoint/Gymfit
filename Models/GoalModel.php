<?php
include('config.php');
class Macro_Goals{
    public static function Create_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO macro_goal(Member_ID,Protein,Carbs,Fat,Calories) values($ID,$protein,$carbs,$fat,$calories)";
    }
    public static function Get_Goal($ID){
        $conn = Config :: Db_Connect();
        $sql = "SELECT Protein,Carbs,Fat,Calories from macro_goal WHERE Member_ID = $ID ";
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            return false;
        }
        else{
            return $result;
        }
    }
    public static function Update_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql;
    }
}
?>