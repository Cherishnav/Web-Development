<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            text-align: center;
        }
        form {
            display: block;
        }
    </style>
    <title>Send Email Example</title>
</head>
<body>

                    <h5 >Register</h5>
                    <form action="Registration.php" method="post">
                            <label for="name">Full Name<span style="color: #FF0000">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Full Name" required autofocus></br>
                            
                            <label for="DOB">Date of birth<span style="color: #FF0000">*</span></label>
                            <input type="text" name="DOB" id="DOB" placeholder="DD/mm/yyyy" required autofocus></br>

                            <label for="INname">Institution Name<span style="color: #FF0000">*</span></label>
                            <input type="text" name="INname" id="INname" placeholder="Institution Name" required autofocus></br>

                            <label for="Intern">Intership For<span style="color: #FF0000">*</span></label>
                            <input type="text" name="Intern" id="Intern" placeholder="Internship For" required autofocus></br>

                            <label for="Unam">Username<span style="color: #FF0000">*</span></label>
                            <input type="text" name="Unam" id="Unam" placeholder="Username" required autofocus></br>

                            <label for="id_1723">Password<span style="color: #FF0000">*</span></label>
                            <input type="text" name="Pass" id="Pass" placeholder="Password" required autofocus></br>

                            <label for="inputEmail">Enter your mail ID<span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail" id="toEmail" placeholder="Email address" required autofocus></br>

                            <label for="QUA">Qualifications<span style="color: #FF0000">*</span></label>
                            <textarea name="QUA" id="QUA" placeholder="Qualificatios" required autofocus></textarea></br>
                        
                            <button type="submit" name="sendMailBtn">Register</button>
                    </form>
</body>
</html>
