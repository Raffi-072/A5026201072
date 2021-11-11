<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Validation Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-image: url("https://i.redd.it/okj2vw7vrkx31.jpg");
            background-size: cover;
            padding-bottom: 50px;
        }

        div {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
    </style>
    <script>
        function validationForm() {
            var name = document.registration.name;
            var address = document.registration.address;
            var email = document.registration.email;
            var pass = document.registration.pass;
            var phone = document.registration.phone;
            var course = document.registration.course;
            var zip = document.registration.zip;

            if (name_valid(name)) {
                if (address_valid(address)) {
                    if (email_valid(email)) {
                        if (pass_valid(pass)) {
                            if (phone_valid(phone)) {
                                if (course_valid(course)) {
                                    if (zip_valid(zip)) {
                                        return true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return false;
        }

        function name_valid(name) {
            var letter = /^[A-Za-z\s]+$/;
            if (name.value.match(letter)) {
                return true;
            }
            else {
                alert("Name must use alphabet only");
                name.focus();
                return false;
            }
        }

        function address_valid(address) {
            if (address.value == "") {
                alert("Address should not be empty");
                return false;
            }
            else {
                address.focus();
                return true;
            }
        }

        function email_valid(email) {
            var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(format)) {
                return true;
            }
            else {
                alert("You have entered an invalid email address")
                email.focus();
                return false;
            }
        }

        function pass_valid(pass) {
            var pass_len = pass.value.length;
            if (pass_len == 0) {
                alert("Password should not be empty");
                return false;
            }

            else if (pass_len <= 7 || pass_len >= 17) {
                alert("Password length must be between 8 to 16 digits")
                return false;
            }

            else {
                pass.focus();
                return true;
            }

        }

        function phone_valid(phone) {
            var numbers = /^[0-9]+$/;
            var num_len = phone.value.length;
            if (num_len == 0) {
                alert("Phone number should not be empty");
                return false;
            }
            else if (num_len <= 6) {
                alert("Phone number at least 7 digits")
                return false;
            }

            else {
                phone.focus();
                return true;
            }
        }

        function course_valid(course) {
            if (course.selectedIndex < 1) {
                alert("Select your course from the list");
                course.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function zip_valid(zip) {
            var zips = /^[0-9]+$/;
            var zip_len = zip.value.length;
            if (zip_len == 0) {
                alert("Zip code should not be empty");
                return false;
            }
            else if (zip_len != 6) {
                alert("Zip code must be 6 digits")
                return false;
            }

            else if (zip.value.match(zips)) {
                zip.focus();
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-xs-12 col-md-8">
                <div class="form-warp">
                    <h1>Registration Form</h1>
                    <br>
                    <form name="registration" onSubmit="return validationForm();" action="https://itemku.com/"
                        method="post">
                        <div class="form-group">
                            <label for="name"><b>Name:</b></label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="address"><b>Address:</b></label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group">
                            <label for="email"><b>Email Address:</b></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="pass"><b>Password:</b></label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>

                        <div class="form-group">
                            <label for="phone"><b>Telephone:</b></label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="course"><b>Select Your Course:</b></label>
                            <select id="course" name="course" class="form-control">
                                <option> </option>
                                <option>BTECH</option>
                                <option>BBA</option>
                                <option>BCA</option>
                                <option>B COM</option>
                                <option>GEEKFORGEEKS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="zip"><b>ZIP Code:</b></label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>

                        <div class="button form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            <button type="reset" class="btn btn-danger btn-block">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
