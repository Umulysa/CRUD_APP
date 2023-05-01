<!DOCTYPE html>
<html lang="en">
    <style>
        h2{
            font-size:22px;
            font-family:sans-serif;
            text-align:center;
            text-decoration: underline;
        }
        fieldset{
            text-alignment: center;
            background-color: aqua;
            margin:30px 40px;
        }
        .sub:hover{
         background-color: lightgreen;
         border-radius: 5px;
        }

    </style>
<body>
    <h2>Sign up form</h2>
    <form action="create.php " method="POST">
        <fieldset>
            <legend>Personal info</legend>
            First name:<br>

            <input type="text" name="Firstname">

            <br>
            Lastname:<br>

            <input type="text" name="Lastname">

            <br>

            Email:<br>

            <input type="text" name="email">

            <br>


            Password:<br>
            <input type="password" name="password">

            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female

            <br><br>
            <input class="sub" type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>