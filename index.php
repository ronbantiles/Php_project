<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <style>
        body {
            background: linear-gradient(to right, #ff8a00, #e52e71, #00bfff, #228b22);
            padding-top: 50px;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.5);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: black;
            text-align: center;
        }

        .card {
            border: none;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            color: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .btn-logout {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
            color: #fff;
        }

        .btn-logout:hover {
            background-color: #ff3333;
            border-color: #ff3333;
        }

        .card-text {
            color: black;
        }

        .btn-primary {
            background-color: #00cc99;
            border-color: #00cc99;
        }

        .btn-primary:hover {
            background-color: #00b386;
            border-color: #00b386;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Dashboard</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Latest Updates</h5>
                <p class="card-text">Stay up to date with the latest news and events.</p>
                <a href="updates.php" class="btn btn-primary">View Updates</a>
            </div>
        </div>
        <a href="logout.php" class="btn btn-logout mt-4">Logout</a>
    </div>
</body>
</html>
