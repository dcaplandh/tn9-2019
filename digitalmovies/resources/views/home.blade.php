
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <style>
    .pagination{
        display:flex;
    }
    .pagination .page-item{
        margin:10px;
        list-style:none;
        font-size:12px;
        font-family:monospace;
        border:1px solid lightgrey;
        border-radius:5px;
        padding:5px;
        width:30px;
        height:30px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    </style>
</head>
<body class="netflix">
    
    <div class="contain">

        <h1>D<span>M</span> :: Digital <span>Movies</span></h1>

        <movie>
            <p>
            Peliculas Recientes
            </p>
        
            <div class="row">
            <div class="row__inner">
        
                @foreach($peliculasPorId as $pelicula)
                <div class="tile">
                <div class="tile__media">
                    <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-19.jpg" alt=""  />
                </div>
                <div class="tile__details">
                    <div class="tile__title">
                    {{$pelicula->title}}
                    </div>
                </div>
                </div>
                @endforeach

                

            </div>
            </div>
            {{$peliculasPorId->links()}}
        </movie>

        <movie>
                <p>
                Peliculas Mejores Calificadas
                </p>
            
                <div class="row">
                <div class="row__inner">
                    @foreach($mejoresPeliculas as $pelicula)
                    <div class="tile">
                    <div class="tile__media">
                        <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-1.jpg" alt=""  />
                    </div>
                    <div class="tile__details">
                        <div class="tile__title">
                        {{$pelicula->title}}
                        </div>
                    </div>
                    </div>
                    @endforeach
            
                </div>
                </div>
            </movie>

            <movie>
                    <p>
                    Peliculas Sugeridas
                    </p>
                
                    <div class="row">
                    <div class="row__inner">
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-1.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-2.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-3.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-4.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-5.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-6.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-7.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-8.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-9.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
        
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-10.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-11.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-12.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-13.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-14.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-15.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-16.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-17.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-18.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-19.jpg" alt=""  />
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            Top Gear
                            </div>
                        </div>
                        </div>
                
                    </div>
                    </div>
                </movie>
      
      </div>

      

</body>

</html>
