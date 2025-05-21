<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100%;
            
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            

            /* Usando asset() para o caminho correto */
            background-size: cover;
            background-position: center;

        }

        header{
            border: 1px solid black;
            
        }

        nav ul{
            display: flex;
            justify-content: flex-end;
            list-style: none;
           
        }

        nav li{
            padding: 30px;
        }

        h1 {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        form {

            width: 400px;
            padding: 40px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #00FFFF;

        }


        .bnt-login {
            display: flex;
            cursor: pointer;
            justify-content: center;


        }

        .boxsenha,
        .boxemail {
            display: flex;
            flex-direction: column;
        }

        a{
            text-decoration: none;
        }

        .btn-secondary{
            width: 200px;
            background-color: blue;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>

        <!-- <header>

        <img src="" alt="">

        <nav>
            <ul>
                <li><a href="">contato</a></li>
                <li><a href="">contato</a></li>
                <li><a href="">contato</a></li>
                <li><a href="">contato</a></li>
            </ul>
        </nav>
        </header> -->

          


    <form action="">    

        <h1>Login</h1>


        <div class="boxemail">
            <label for="email"> Seu e-mail </label>
            <input type="email" placeholder="Ex:12345678980@gmail.com" formControlName="email" id="email" required>
        </div>
        <br>


        <div class="boxsenha">

            <label for="senha">Senha</label>
            <input type="password" placeholder="1234" id="senhaInput" required>
        </div>

        <div class="mb-3 form-check">

            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mostrar senha</label>

        </div>          


        <br>

        <div class="bnt-login">
            <a  class="btn btn-secondary" href="/produto">Enviar</a>
        </div>

    </form>





</body>

</html>