<?php
    include_once 'dbconfig.php';

    if(isset($_POST['insert_buttton']))
    {    
        $prof_name = $_POST['professor'];
        $assis_name = $_POST['assistant'];

        $query = "INSERT INTO tutors (prof_name,assis_name) VALUES ('$prof_name','$assis_name')";
        $result = mysqli_query($conn, $query); 
        if($result) 
        {
            echo "Data inserted successfully!";
        } 
        else
        {
            echo "Data not inserted!. Error: " . $sql . "" . mysqli_error($conn);
        }
    }
?>