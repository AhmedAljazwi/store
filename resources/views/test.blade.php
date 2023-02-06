<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form id="form" action="/test" method="post">
                    @csrf
                    <label for="">Username</label>
                    <span id="usernameError"></span>
                    <input class="form-control mt-1 mb-3" type="text" id="username" name="username">

                    <label for="">Password</label>
                    <span id="passwordError"></span>
                    <input class="form-control mt-1 mb-3" type="password" id="password" name="password">

                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        const username = document.getElementById('username')
        const password = document.getElementById('password')
        const usernameError = document.getElementById('usernameError')
        const passwordError = document.getElementById('passwordError')

        form.addEventListener('submit', (e) => {
            let messages = []

            if(username === '' || username == null) {
                messages.push('username error')
            }

            if(messages.length > 0) {
                e.preventDefault()
                usernameError.innerHtml = messages.join(', ')
            }
            
        })
    </script>
</body>
</html>