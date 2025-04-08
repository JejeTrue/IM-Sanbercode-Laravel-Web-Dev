<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
        @csrf
        <!-- First Name Input -->
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>

        <!-- Last Name Input -->
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>

        <!-- Gender Radio Button -->
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="gmale" name="gender" value="male">
        <label for="gmale">Male</label><br>
        <input type="radio" id="gfemale" name="gender" value="female">
        <label for="gfemale">Female</label><br>
        <input type="radio" id="gother" name="gender" value="other">
        <label for="gother">Other</label><br><br>

        <!-- Nationality dropdown list input -->
        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
        </select><br><br>

        <!-- language spoken checkbox input -->
        <label for="langspoken">Language Spoken</label><br><br>
        <input type="checkbox" id="langspoken">Bahasa Indonesia<br>
        <input type="checkbox" id="langspoken">English<br>
        <input type="checkbox" id="langspoken">Other<br><br>

        <!-- Bio Textarea Input -->
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
        
    </form>
</body>
</html>