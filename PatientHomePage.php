<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
</head>
<body>
    <center>
        <h1>Patient Information Form</h1>

        <form action="Home.php" method="POST">
            <!-- Frame 1 -->
            <fieldset>
                <center><h4>Personal Information</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="name">Full Name:</label></td>
                        <td><input type="text" id="name" name="name" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="dob">Date of Birth:</label></td>
                        <td><input type="date" id="dob" name="dob" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="age">Age:</label></td>
                        <td><input type="number" id="age" name="age" min="0" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="gender">Gender:</label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>

                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>

                            <input type="radio" id="other" name="gender" value="Other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Frame 2 -->
            <fieldset>
                <center><h4>Physical Details</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="height">Height (cm):</label></td>
                        <td><input type="number" id="height" name="height" min="0" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="weight">Weight (kg):</label></td>
                        <td><input type="number" id="weight" name="weight" min="0" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="bloodgroup">Blood Group:</label></td>
                        <td>
                            <select id="bloodgroup" name="bloodgroup" required>
                                <option value="" disabled selected>Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Frame 3 -->
            <fieldset>
                <center><h4>Contact & Disease Details</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="address">Address:</label></td>
                        <td><textarea id="address" name="address" rows="3" cols="30" required></textarea></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="phone">Phone Number:</label></td>
                        <td>
                            <input type="tel" id="phone" name="phone"
                                   pattern="01[3-9][0-9]{8}"
                                   placeholder="e.g. 017XXXXXXXX"
                                   required>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><label for="email">Email (if any):</label></td>
                        <td><input type="email" id="email" name="email" placeholder="e.g. example@gmail.com"></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="disease">Disease:</label></td>
                        <td><textarea id="disease" name="disease" rows="4" cols="30" required></textarea></td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Submit/Reset Buttons -->
            <button type="submit">Submit</button>
            <input type="reset" value="Reset">
        </form>
    </center>
</body>
</html>