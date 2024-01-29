<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 30px auto;
            max-width: 800px;
        }

        .login-container {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        .logo-container {
            text-align: center;
            position: relative;
            margin-bottom: 10px;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px dashed #007bff;
            padding: 5px;
            margin-bottom: 10px;
        }

        .logo-container .animated-border {
            width: 100%;
            height: 100%;
            position: absolute;
            border: 2px dashed transparent;
            border-radius: 50%;
            animation: rotateBorder 2s infinite linear;
        }

        .logo-container h4 {
            font-size: 18px;
            color: #333;
            margin-bottom: 0;
        }

        .login-form {
            padding: 40px;
            padding-top: 0px;;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 3px;
        }

        .login-btn {
            background: linear-gradient(45deg, #007bff, #00bfff);
            color: #fff;
        }

        .login-btn:hover {
            background: linear-gradient(45deg, #0056b3, #0080ff);
        }

        .developed-by {
            margin-top: 20px;
            text-align: center;
            color: #fff;
            background: linear-gradient(45deg, #007bff, #00bfff);
            padding: 10px 0;
            border-radius: 5px;
        }

        @media (max-width: 576px) {
            .login-container {
                border-radius: 0;
            }

            .logo-container img {
                width: 100px;
                height: 100px;
            }

            .login-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-container">
            <div class="logo-container">
                <div class="animated-border"></div>
                <img src="https://picsum.photos/120" alt="Logo">
                <h4>Your Title</h4>
            </div>
            
            <form class="login-form">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                
                <!-- Add Remember Me and Forgot Password in one line -->
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <span class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </span>
                </div>

                <button type="submit" class="btn btn-primary btn-block login-btn">Login</button>
            </form>
        </div>

        <div class="developed-by">
            Developed by: Ncoder
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (for proper functioning of Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
