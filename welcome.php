<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Chicken Recipe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body {
            font-family: Arial, sans-serif;
            background-color: #635959;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .recipe-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #607f7c;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        img {
            max-width: 100%;
            height: 460px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }



    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>


    <div>


    <header>
        <h1>Delicious Chicken Recipe</h1>
    </header>
    <div class="recipe-container">
        <img src="img/chicken.jpg" alt="Chicken Dish">
        <h2>Ingredients:</h2>
        <ul>
            <li>4 boneless chicken breasts</li>
            <li>2 tablespoons olive oil</li>
            <li>1 teaspoon salt</li>
            <li>1/2 teaspoon black pepper</li>
            <li>1 teaspoon paprika</li>
        </ul>
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat your oven to 375°F (190°C).</li>
            <li>Season the chicken breasts with salt, pepper, and paprika.</li>
            <li>Heat olive oil in a skillet over medium-high heat.</li>
            <li>Sear the chicken breasts for 2-3 minutes on each side until they're golden brown.</li>
            <li>Transfer the chicken to a baking dish and bake in the oven for 20-25 minutes, or until cooked through.</li>
            <li>Serve hot and enjoy your delicious chicken dish!</li>
        </ol>
    </div>


    </div>
</body>
</html>