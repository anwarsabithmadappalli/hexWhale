<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: auto; /* Center the form horizontally */
}
        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

     

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    margin: auto; /* Center the button horizontally */
}

        button:hover {
            background-color: #45a049;
        }

        div {
            margin-top: 10px;
            text-align: center;
            color: #777;
        }

        a {
            color: #4caf50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="{{ url('doRegister') }}" method="post">
        @csrf
        <h1>Register</h1>
        <label>
            Name:
            <input type="text" name="name" placeholder="Name">
        </label>
        <label>
            Email:
            <input type="email" name="email" placeholder="Email">
        </label>
        <label>
            Password:
            <input type="password" name="password" placeholder="Password">
        </label>
        <label>
            Confirm Password:
            <input type="password" name="confirm" placeholder="Confirm Password">
        </label>
        <button type="submit">Register</button>
        <div>
            or 
            <a href="/login">Login</a>
        </div>
    </form>
</body>
</html>
