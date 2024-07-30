<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Website Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>


body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
    padding: 20px;
    text-align: center;
}

h1{
    color: #e91e63; /* Pink color */
    margin-bottom: 10px;
}

p {
    color: #333;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    font-weight: bold;
    color: #666;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #e91e63; /* Pink color */
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #c2185b; /* Darker pink */
}

.signup-link {
    margin-top: 20px;
    font-size: 14px;
}

.signup-link a {
    color: #e91e63; /* Pink color */
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}
</style>
<body>
    <class="login-container">
        <h1>Welcome Back!</h1>
        <p>Sign in to your account</p>
        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="#">Sign up here</a></p>

</body>
</html>
