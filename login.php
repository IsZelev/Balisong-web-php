<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $exp = "/([A-Z])\w+@([A-Z])\w+.([A-Z])+\w/gi";
    $email = htmlspecialchars($_POST['email']);
    
    if(preg_match($email, $exp) == 1)
    {
        //va avanti alla homepage  
        header("Location: Balisong-web-php\home.php");
    }else
    {
        //messaggio di errore nella text box
        echo "inserire un'email valida";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syncopate&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header class="text-center my-4">
        <h1 class="text-center text title" >Welcome to Balisong Homepage</h1>
    </header>

    <main>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
                <h3 class="text-center text-primary mb-4" style="font-family: 'Syncopate', sans-serif;">Login</h3>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>