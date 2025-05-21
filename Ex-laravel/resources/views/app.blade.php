<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100%;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            background-color: aliceblue;

            background-image: url('kurp8.jpg');
            background-size: cover;
            background-position: center;

        }

        header{
            border: 1px solid black;

            background-color: blue;
            
        }


         nav ul{
            display: flex;
            justify-content: flex-end;
            list-style: none;
           
        }

        nav li{
            padding: 30px;
        }

        a{
            color: black;
        }
</style>
</head>
<body>



       

    

     <header>

        <img src="" alt="">

        <nav>
            <ul>
                <li><a href="">contato</a></li>
                <li><a class="btn btn-secondary" href="/login">login</a></li>
                <li><a href="">contato</a></li>
                <li><a href="">contato</a></li>
            </ul>
        </nav>

        </header>
   


        @yield('content')


    
</body>
</html>
