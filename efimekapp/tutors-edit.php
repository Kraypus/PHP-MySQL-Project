<?php
    include_once 'dbconfig.php';

    if(isset($_POST['update_buttton']))
    {    
        $id = $_POST['id'];
        $prof_name = $_POST['professor'];
        $assis_name = $_POST['assistant'];

        $query = " UPDATE tutors SET prof_name='$prof_name', assis_name='$assis_name' WHERE id='$id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            $message = "Data updated successfully!";
        } 
        else
        {
            $message = "Data not updated!. Error: " . $sql . "" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update "Tutors" form data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        
        <?php if(isset($message)) { echo "$message"; } ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Update "Tutors" form data</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                            $query = " SELECT * FROM tutors WHERE id='$id' LIMIT 1";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0)
                            {
                                $row = mysqli_fetch_array($result);
                                ?>

                                <form action="" method="POST">

                                    <input type="hidden" name="id" value="<?=$row['id'];?>" >
                                    <div class="mb-3">
                                        <label>Professor</label>
                                        <input type="text" name="professor" value="<?=$row['prof_name'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Assistant</label>
                                        <input type="text" name="assistant" value="<?=$row['assis_name'];?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <hr/>
                                        <button type="submit" name="update_buttton" class="btn btn-primary">Update Data</button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No record found</h4>";
                            }
                        }
                        else
                        {
                            echo "<h4>No ID found</h4>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>