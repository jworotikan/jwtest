<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.select-boxes{width: 280px;text-align: center;}
select {

    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}

body{
	margin-left:220px;
	margin-top:100px;
	background-color:gray;
}
div{
	margin-left:250px;
}
</style>
<script src="jquery.min.js"></script>
<script type="text/javascript">

</script>
</head>
<h2>Dynamic Dependent Multiple relational Dropbox using jQuery, Ajax,PHP and MySQL</h2>
<body align="centre">
    <div class="select-boxes">
    <?php
    //Include database configuration file
    include('conn.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM father ORDER BY father ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	
    <select name="father" id="father">
        <option value="">Select father</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['father'].'</option>';
            }
        }else{
            echo '<option value="">father not available</option>';
        }
        ?>
    </select>
    
    <select name="child" id="child">
        <option value="">Select father first</option>
    </select>
    
    <select name="school" id="school">
        <option value="">Select child first</option>
    </select>
	<select name="grade" id="grade">
        <option value="">Select School first</option>
    </select>
    </div>
    <script src="script.js"></script>
</body>
</html>
