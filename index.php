<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>PHP Dischi</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="mc-container d-flex align-items-center h-100">
                <div class="logo-area">
                    <img src="./assets/img/spotify-logo-png-7053.png" alt="">
                </div>
            </div>
        </header>
        <main>
            <div class="wrapper py-5">
                <div class="mc-container">
                    <div class="row ">
                        <div class="col-4 my-3 d-flex justify-content-center" v-for="(album, index) in albums" :key="index">
                            <div class="mc-card">
                                <div class="img-area">
                                    <img :src='album.poster' :alt="album.title">
                                </div>
                                <div class="text-area text-center">
                                    <h4 class="mt-3">{{album.title}}</h4>
                                    <span class="d-block mb-2">{{album.author}}</span>
                                    <span>{{album.year}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>

</html>