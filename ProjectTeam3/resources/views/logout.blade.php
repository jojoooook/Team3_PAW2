<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .logout-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .logout-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .logout-container p {
            margin-bottom: 20px;
            color: #555;
        }
        .logout-container form {
            display: flex;
            justify-content: center;
        }
        .logout-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .logout-container button:hover {
            background-color: #0056b3;
        }
        .logout-container a {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .logout-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h1>Logout</h1>
        <p>Are you sure you want to logout?</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <a href="{{ url('/') }}">Cancel</a>
    </div>
</body>
</html>
