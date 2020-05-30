<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .top-right {
                position: absolute;
                bottom: 270px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a{
                color: #000;
                width: 100%;
                margin: 0;
                padding: 0;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .login-box{
                width: 450px;
                height: 440px;
                background: #0657a9;
                color: #000;
                top: 100%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 70px 38px;
            }
            
            .login-box input{
                width: 100%;
                margin-top: 20px;
                padding: 0;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="login-box">
                
                <div class="content">
                    <div class="title m-b-md">
                    Vinculation System
                    </div>
                </div>
            
            <?php if(Route::has('login')): ?>
                        
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route ('login')); ?>"><input type="button" value="Iniciar sesión"></a>
            
                            <a href="<?php echo e(url('/register-admin')); ?>"><input type="button" value="Registrarse como Administrador"></a>
                        
                            <a href="<?php echo e(url ('register-alumno')); ?>"><input type="button" value="Registrarse como Alumno"></a>
                        
                            <a href="<?php echo e(url ('/register-cad')); ?>"><input type="button" value="Registrarse como Catedratico"></a>
                        
                            <a href="<?php echo e(url ('/register-emp')); ?>"><input type="button" value="Registrarse como Empresa"></a>
        
                    <?php endif; ?>
            <?php endif; ?>    
            </div>
        </div>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/pweb13/grupo003/vinculation_system/resources/views/welcome.blade.php ENDPATH**/ ?>