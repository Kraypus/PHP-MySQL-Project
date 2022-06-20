<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update "Tutors" form data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Update "Tutors" form data</h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Professor</th>
                                    <th>Assistant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbconfig.php');

                                    $query = "SELECT * FROM tutors"; 
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?= $row['id'] ?></td>
                                                    <td><?= $row['prof_name'] ?></td>
                                                    <td><?= $row['assis_name'] ?></td>
                                                    <td>
                                                        <a href="tutors-edit.php?id=<?=$row['id']?>" class="btn btn-success">Edit</a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No record found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>