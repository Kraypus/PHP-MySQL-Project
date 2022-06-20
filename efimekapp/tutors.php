<!DOCTYPE html>
<html lang="en">
<head>
    <title>"Tutors" data insertion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Inserting "Tutors" data" in PHP MySQL Database</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Professor</label>
                                <input type="text" name="professor" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Assistant</label>
                                <input type="text" name="assistant" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <hr/>
                                <button type="submit" name="insert_buttton" class="btn btn-primary">Insert Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>