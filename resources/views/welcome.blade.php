<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="antialiased">
        <input type="text" name="angka" id="angka">
        <div>
            <button id="hitung">Generate Segitiga</button>
            <button id="ganjil">Generate Bilangan Ganjil</button>
            <button id="genap">Generate Bilangan Genap</button>
        </div>
        <div id="result"></div>

        <script>
            $(document).ready(function(){
                $('#hitung').click(function(){
                    var base = $('#angka').val();
                    $.ajax({
                        url: '/triangle/hitung',
                        method: 'POST',
                        data:{
                            base:base,
                            _token: '{{csrf_token()}}'
                        },
                        success:function(response){
                            $('#result').html('result ' +response.triangle)
                        }
                    });
                });
            });
        </script>
        <script>
             $(document).ready(function(){
                $('#ganjil').click(function(){
                    var base = $('#angka').val();
                    $.ajax({
                        url: '/ganjil/hitung',
                        method: 'POST',
                        data:{
                            base:base,
                            _token: '{{csrf_token()}}'
                        },
                        success:function(response){
                            $('#result').html('result <br>' +response.dataGanjil + '<br>')
                        }
                    });
                });
            });
        </script>
         <script>
             $(document).ready(function(){
                $('#genap').click(function(){
                    var base = $('#angka').val();
                    $.ajax({
                        url: '/genap/hitung',
                        method: 'POST',
                        data:{
                            base:base,
                            _token: '{{csrf_token()}}'
                        },
                        success:function(response){
                            $('#result').html('result <br>' +response.dataGenap + '<br>')
                        }
                    });
                });
            });
        </script>
    </body>
</html>
