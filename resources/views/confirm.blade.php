<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Confirm page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: ;
                color: #0657a9;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

           
            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a{
                color: #000;
                margin: 0;
                padding: 0;
                font-size: 20px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md { 
                margin-top: 150px;
            }
            
            .wrapper {
                width: 100%;
                height: 0%; 
                display: flex;
                align-items: center;
                justify-content: center;
            }

            input {
                height: 40px;
                width: 110%;
                font-size: 20px;
                color:white;
                background-color: #11a4f3;
                -webkit-border-radius: 60px;
                -moz-border-radius: 60px;
                padding:5px;
                border-radius: 60px;  
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">           
            <div class="content">
                <div class="title m-b-md">
                    
                    Registro exitoso 🎉
                </div>
            </div>
        </div>
        
        <div class="wrapper">    
            @if(Auth::user()->rol_id == 1)
                 <a href="{{ url('/perfil-admin')}}"><input type="button" value="Completar tu perfil"></a>
            @endif
            
            @if(Auth::user()->rol_id == 2)       
                <a href="{{ url ('/perfil-emp')}}"><input type="button" value="Completar tu perfil"></a>
            @endif
            
            @if(Auth::user()->rol_id == 3)                   
                <a href="{{ url ('/perfil-cad')}}"><input type="button" value="Completar tu perfil"></a>
            @endif
            
            @if(Auth::user()->rol_id == 4)                 
                <a href="{{ url ('/perfil-alumno')}}"><input type="button" value="Completar tu perfil"></a>
            @endif
        </div>
    </body>
</html>
