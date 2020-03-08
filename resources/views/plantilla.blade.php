

   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link  rel= "stylesheet" href={{url('/css/app.css')}}>

       <center> <title>Mi primera aplicaccion en Laravel</title></center>
    </head>
    <body>
        <h1>Aplicacion en Laravel</h1>
        @section('contenido')
        @show

        <script src={{url('/js/app.js')}}></script>
        <style>
            html, body {

                background-image: url(a.jpg);
                background-color: #F3BEF4;
                color: #636b6f;
                font-family: 'Nunito', Times New Roman;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

    </body>
    </html>
