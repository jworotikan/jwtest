<?php
//Include database configuration file
include('conn.php');

if(isset($_POST["father_id"]) && !empty($_POST["father_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM child WHERE father_id = ".$_POST['father_id']);
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display child list
    if($rowCount > 0){
        echo '<option value="">Select child</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['child_id'].'">'.$row['child'].'</option>';
        }
    }else{
        echo '<option value="">child not available</option>';
    }
}

if(isset($_POST["child_id"]) && !empty($_POST["child_id"])){
  
    $query = $db->query("SELECT * FROM school WHERE child_id = ".$_POST['child_id']);
    
   
    $rowCount = $query->num_rows;
    
   
    if($rowCount > 0){
        echo '<option value="">School</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['school_id'].'">'.$row['school'].'</option>';
        }
    }else{
        echo '<option value=""> not available</option>';
    }
}
if(isset($_POST["school_id"]) && !empty($_POST["school_id"])){
   
    $query = $db->query("SELECT * FROM grade WHERE school_id = ".$_POST['school_id']);
    

    $rowCount = $query->num_rows;
    
  
    if($rowCount > 0){
        echo '<option value="">Grade</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['grade_id'].'">'.$row['grade'].'</option>';
        }
    }else{
        echo '<option value=""> not available</option>';
    }
}
?>