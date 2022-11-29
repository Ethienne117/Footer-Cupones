<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c11f07c5a0.js" crossorigin="anonymous"></script>
    <style>
        .patas{
            /*display: flex;
            flex-direction: column;
            justify-content: space-around;*/
            height: 100vh;
            width: 100%;
        }

        footer{
            height: 15%;
            width: 100%;
            bottom: 0;
            /*position:fixed;*/
        }

    </style>
</head>

<body class="patas">
    <footer style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%); color: #E0CA3C; margin-top: 20px;">
        <div class="conteiner" style="display:flex; justify-content:center;marging: 1.5em;">
            <div class="row" style="width: 100%;">
                <h4>Al Son Del Corazón</h4>
                <h6 style="width: 80;">Tocando Al Compas De Tus Latidos ♥</h6>
            </div>
            
            <div class="row" style="width: 100%;">
                Encuentranos en: 
                <a href="https://www.instagram.com/al.son.del.corazon/" style="color: #E0CA3C"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/524499400769" style="color: #E0CA3C"><i class="fa-brands fa-whatsapp"></i></a>
            </div>

            <div class="row" style="width: 100%;">
                <?php
                    date_default_timezone_set('America/Mexico_City');
                    echo date("F d Y H:i:s.");                  
                ?>
            </div>
        </div>
        
        <div>
            <a style="background-image: linear-gradient(-20deg, #ff9a44  0%, #ff9a44 100%); border:none;" class="btn btn-primary" href="https://www.youtube.com/watch?v=5I5DuvMdE6s" role="button">♥</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>