<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web\css\all.css">
    <script src="fontawesome-free-6.4.2-web\css\all.css" crossorigin="anonymous"></script>
    <title>Crud App</title>
</head>
<body style="color: white; background-color: #1d2630;">
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display"><strong>Crud App</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <label for="firstName">First Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="Eneter First Name " name="name"   onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <label for="lastName">Last Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Eneter last Name " name="name"   onkeyup="validatelastName()">
                    <span id="name-error1"></span>
                </div>
                <label for="rollNo">Roll No</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="rollNo" placeholder="Eneter Roll No " name="phone" type="tel"   onkeyup="validatePhone()">
                    <span id="phone-error"></span>

                </div>
                <div class="col-15">
                    <input type="submit" value="Submit" class="btn btn-success add-btn">
                </div>
            </form>
            <div class="col-13  mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                        <tr>
                            <td>Dear</td>
                            <td>Programmer</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="script.js"></script>    
</body>
</html>