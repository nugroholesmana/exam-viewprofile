<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Profile</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css" type="text/css">
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            EXAM
        </a>
    </nav>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Profile</li>
            </ol>
        </nav>
    </div>
    <div class="container my-3">
        
        <div class="row">
            <div class="col-md-12">
                <h1>Profile</h1>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card">
                    <img src="<?php echo base_url() ?>assets/img/no-photo.png" id="pictureProfile" class="card-img-top" alt="Image Profil" id="profilImage">
                    <div class="card-body">
                        <div class="info-account">
                            <label>Username</label>
                            <p id="username"></p>
                        </div>
                        <div class="info-account">
                            <label>Email</label>
                            <p id="email"></p>
                        </div>
                        <div class="info-account">
                            <label>Registered</label>
                            <p id="registered"></p>
                        </div>
                        <div class="action-account">
                            <a class="d-block" href="#">Change Password</a>
                            <a class="d-block" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="title-information d-flex justify-content-between align-items-center">
                            <h3>Personal Information</h3>
                            <a href="#" class="btn btn-primary">Edit Profile</a>
                        </div>
                        
                        <table width="100%">
                            <tr>
                                <td id="idName"></td>
                                <td id="idValue"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td id="fullname"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td id="gender"></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td id="age"></td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td id="birthday"></td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td id="telephone"></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td id="phoneNumber"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <div class="title-information d-flex justify-content-between align-items-center">
                            <h3>Address Information</h3>
                            <a href="#" class="btn btn-primary">Edit Address</a>
                        </div>
                        <table width="100%">
                            <tr>
                                <td>Address</td>
                                <td id="address"></td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td id="postcode"></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td id="city"></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td id="state"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td id="country"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3">
        <div class="text-center">
            copyright &copy 2020 design by nugroho lesmana
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery_3.4.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/date.js"></script>
    <script src="<?php echo base_url() ?>assets/js/viewprofile.js"></script>
</body>
</html>