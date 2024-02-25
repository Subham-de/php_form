<!DOCTYPE HTML>
<html>

<head>
    <title>php_formhandling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script>
        $(document).ready(function() {
            //form validation
            $('#name').on('input', function() {
                var name = $(this).val().trim();
                var nameError = $('#name_error');
                var reg_exp = /^[a-zA-Z_]*$/;

                if (!reg_exp.test(name)) {
                    nameError.text('Only Characters allowed');
                } else {
                    nameError.text('');
                }
            });

            $('#email').on('input', function() {
                var email = $(this).val().trim();
                var email_error = $('#email_error');
                var reg_exp_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

                if (!reg_exp_email.test(email)) {
                    email_error.text('Invalid email');
                } else {
                    email_error.text('');
                }
            });

            $('#number').on('input', function() {
                var phone_no = $(this).val().trim();
                var phone_error = $('#phone_error');

                if (phone_no.length === 10) {
                    phone_error.text('');
                } else {
                    phone_error.text('Only 10 digits allowed');
                }
            });

            $('#password').on('input', function() {
                var password = $(this).val().trim();
                var password_error = $('#password_error');

                if (password.length === 5) {
                    password_error.text('');
                } else {
                    password_error.text('Only 5 characters allowed');
                }
            });

            $('#comments').on('input', function() {
                var len = $(this).val().trim().length;
                var char_left = $('#char_left');
                var print = char_left.text(100 - len);
                var comment_err = $('#comment_err');

                if (print === 0) {
                    $(this).prop('disabled', true);
                }

                if ($(this).val() !== '') {
                    comment_err.text('');
                }
            });

            //charcount
            $('#comments').on('input', function() {
                var len = $(this).val().trim().length;
                var char_left = $('#char_left');
                var print = char_left.text(100 - len);
                var comment_err = $('#comment_err');

                if (print === 0) {
                    $(this).prop('disabled', true);
                } else {
                    $(this).prop('disabled', false);
                }

                if ($(this).val() !== '') {
                    comment_err.text('');
                }
            });


            //sumbit click
            $('#form_data').submit(function(e) {
                e.preventDefault();

                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    number: $('#number').val(),
                    password: $('#password').val(),
                    comment: $('#comments').val()
                };

                addRowToTable(formData);

                $('#name').val('');
                $('#email').val('');
                $('#number').val('');
                $('#password').val('');
                $('#comments').val('');

                alert('Form submitted successfully');
            });

            // Function to add a new row to the table
            function addRowToTable(formData) {
                var newRow = '<tr>' +
                    '<td>' + formData.name+ '</td>' +
                    '<td>' + formData.email + '</td>' +
                    '<td>' + formData.number + '</td>' +
                    '<td>' + formData.password + '</td>' +
                    '<td>' + formData.comment + '</td>' +
                    '<td>' +
                    '<button class="btn btn-primary ms-3 edit">edit</button>' +
                    '<button class="btn btn-danger ms-3 delete_click">delete</button>' +
                    '</td>' +
                    '</tr>';

                $('#table_data tbody').append(newRow);
            }


            //edit click
            $("#table_data").on("click", ".edit", function() {
                
                alert('Edit clicked')
                var sumbit_btn = $('#submit');
                var update_btn = $('#update')

                update_btn.show();
                sumbit_btn.hide();

                var $row = $(this).closest('tr')
                var column = $row.find('td');

                
                $("#name").val(column[0].textContent);
                $("#email").val(column[1].textContent);
                $("#number").val(column[2].textContent);
                $("#password").val(column[3].textContent);
                $("#comments").val(column[4].textContent);

            });


            //updateclick

            $("#update").on('click',function(){
                var $row = $("#table_data tr:first-child");
                var column = $row.find('td');

                var newData = {
                    column_1: $("#name").val(),
                    column_2: $("#email").val(),
                    column_3: $("#number").val(),
                    column_4: $("#password").val(),
                    column_5: $("#comments").val()
                };

                column.eq(0).text(newData.column_1);
                column.eq(1).text(newData.column_2);
                column.eq(2).text(newData.column_3);
                column.eq(3).text(newData.column_4);
                column.eq(4).text(newData.column_5);

                $("#name").val('');
                $("#email").val('');
                $("#number").val('');
                $("#password").val('');
                $("#comments").val('');

                var sumbit_btn = $('#submit');
                var update_btn = $('#update');

                update_btn.hide();
                sumbit_btn.show();

                alert('Data updated successfully');
            })


            //delete click

            $(document).on("click", ".delete_click", function(event) {
            alert('record deleted successfully');
            $(this).closest('tr').remove();

            console.log($(this).closest('tr'))
             })

        })
    </script>
</head>

<body>
    <?php
    $nameErr = $emailErr = $passwordErr = $numberErr = $commentErr = "";
    $name = $email = $number = $password = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST['number'])) {
            $numberErr = 'Number is required';
        } else {
            $number = test_input($_POST['number']);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["comment"])) {
            $commentErr = "comment is required";
        } else {
            $comment = test_input($_POST["comment"]);
        }
    }

    $formDataArray = [];

    function handleFormsumbisson()
    {
        global $formDataArray;


        $formData = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'number' => $_POST['number'],
            'password' => $_POST['password'],
            'comment' => $_POST['comment']
        );
        $formDataArray[] = $formData;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        handleFormsumbisson();
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <div class="container">
        <h2>PHP form_handling</h2>
        <form method="post" id="form_data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" id="name" placeholder="EnterYourName" class="form-control">
                <span class="text-danger" id="name_error"><?php echo $nameErr; ?></span>
            </div>
            <div>
                <label for="email" class="form-label">email</label>
                <input type="text" name="email" id="email" placeholder="EnterYourEmail" class="form-control">
                <span class="text-danger" id="email_error"><?php echo $emailErr; ?></span>
            </div>
            <div>
                <label for="number" class="form-label">Phonenumber</label>
                <input type="text" name="number" id="number" placeholder="EnterYourPh.no" class="form-control">
                <span class="text-danger" id="phone_error"> <?php echo $numberErr; ?></span>
            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="EnterYourpassword" class="form-control">
                <span class="text-danger" id="password_error"> <?php echo $passwordErr; ?></span>
            </div>
            <div>
                <label for="comments" class="form-label">comments</label>
                <textarea id="comments" name="comment" rows="5" cols="40" class="form-control" max='100' min='1'></textarea>
                <span class="text-danger mt-4">countleft:</span> <span id="char_left"></span> <br><br>
                <span class="text-danger" id="comment_err"> <?php echo $commentErr; ?></span>
            </div>
            <input id="submit" type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">
        </form>
        <button class="btn btn-info mt-3 mb-3" id="update" style="display: none;">Update</button>
    </div>

    <div class="mt-5 container" id="table_display">
        <table class="table" id="table_data">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>
                    <th>Password</th>
                    <th>Comments</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
            <caption>Your Input:</caption>
        </table>
    </div>
</body>

</html>