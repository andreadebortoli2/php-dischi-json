<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>php-dischi-json</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>


    <div id="app">

        <header>

        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4 g-4" v-for="(album,index) in albums">
                        <div class="card py-3 px-5 border-0 h-100" data-bs-toggle="modal" data-bs-target="#my_modal" @click="getAlbumData(index)">
                            <img class="card-img-top w-75 mx-auto" :src="album.poster" :alt="`cover of the album ${album.title} from ${album.author}`" />
                            <div class="card-body text-center">
                                <h4 class="card-title">{{album.title}}</h4>
                                <p class="card-text">{{album.author}}</p>
                                <h5 class="card-title">{{album.year}}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="my_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-body text-center">
                            <img class="w-75 mx-auto" :src="modalData.poster" alt="`cover of the album ${modalData.title} from ${modalData.author}`">
                            <h4 class="pt-4">{{modalData.title}}</h4>
                            <p>{{modalData.author}}</p>
                            <h5>{{modalData.year}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>