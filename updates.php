<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Updates</title>
    <style>
        body {
            background: linear-gradient(to right, #3498db, #8e44ad);
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 50px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .card {
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .card-text {
            color: #f3f3f3;
            font-size: 18px;
        }
        .btn-back {
            background-color: #e74c3c;
            border-color: #c0392b;
            font-size: 18px;
            font-weight: bold;
            border-radius: 25px;
            padding: 12px 24px;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Latest Updates</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Title 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
        </div>
        <!-- Add more cards for additional updates -->
        <a href="index.php" class="btn btn-back d-block mx-auto mt-4">Back to Dashboard</a>
    </div>
</body>
</html>
