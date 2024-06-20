<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/iperH9IBTIalnkREa5pL" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/assets/style/style.css">
    <title>PHP Dischi JSON</title>
</head>

<body>
    <div id="app">
        <header class="p-3 text-white d-flex align-items-center">
            <div class="row w-25">
                <img src="./src/assets/img/Spotify_logo_without_text.svg.png" class="ms-5 w-25">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div v-for="(disk, index) in disks" :key="disk + index" class="col-4">
                        <div @click="show_disk" class="card py-4 px-5 m-4 text-white">
                            <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ disk.title }}</h3>
                                <p class="card-text">{{ disk.author }}</p>
                                <h3>{{ disk.year }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Js -->
    <script src="./src/main.js"></script>
</body>

</html>