<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_type = $_POST["user_type"];

    $username = $_POST["username"];

    $password = $_POST["password"];

 

    switch ($user_type) {

        case "student":

            // Voer de inlogvalidatie voor studenten uit (bijvoorbeeld met een database).

            // Als de validatie slaagt, stuur de student naar de welkomstpagina.

            if ($username === "student" && $password === "student") {

                echo "Welkom Student!";

            } else {

                echo "Ongeldige inloggegevens voor student.";

            }

            break;

 

        case "admin":

            // Voer de inlogvalidatie voor beheerders uit (bijvoorbeeld met een database).

            // Als de validatie slaagt, stuur de beheerder naar de welkomstpagina.

            if ($username === "admin" && $password === "admin") {

                echo "Welkom Admin!";

            } else {

                echo "Ongeldige inloggegevens voor admin.";

            }

            break;

 

        default:

            echo "Ongeldig gebruikerstype.";

    }

}

?>