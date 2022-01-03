<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/3ee6bedd82.js" crossorigin="anonymous"></script>
    <script src="public/js/map.js" crossorigin="anonymous" defer></script>

    <!-- MAPBOX LIBRARY CDN -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet'/>
    <title>Document</title>
</head>
<body>
    <div class="base-container">
        <header>
            <div class="bars">
                <button name="bars-button">
                    <span class="bars-icon" style="color: white;">
                        <i class="fas fa-bars fa-6x"></i>
                    </span>
                </button>
            </div>

            <div class="logo">
                <img src="public/img/logo.svg">
            </div>

            <div class="search-town">
                <div class="search-wrap">
                    <button class="wysz">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                    <input name="search" type="text" placeholder="Szukaj miejsca">
                    <button class="exit">
                        <i class="fas fa-times-circle fa-2x"></i>
                    </button>
                </div>
            </div>

            <div class="profile">
                <div class="circle">
                    <span class="profile-icon" style="color:white;">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </span>
                </div>
                <div class="name">
                    Bartek
                </div>
            </div>

            <button name="settings-button">
                <span class="settings-icon" style="color: white;">
                    <i class="fas fa-cog fa-3x"></i>
                </span>
            </button>

            <button name="settings-button-2">
                <span class="settings-icon" style="color: white;">
                    <i class="fas fa-cog fa-6x"></i>
                </span>
            </button>

        </header>

        <main>
            <section class="project">
                <div class="filters">
                    <div class="filters-bar">
                        <div class="info-bar">
                            <h1>Znaleziono 10 wyników</h1>
                        </div>
                        <div class="filters-bar-section">
                            <h1>Filtry</h1>
                            <h3>Jedzenie:</h3>
                            <label class="container">
                                Wedliny
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Pieczywo
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Sery
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Dania
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Przetwory
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Słodycze
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Warzywa
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <h3>Napoje</h3>
                            <label class="container">
                                Soki
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Piwo
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label><label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="info projects">
                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                            <div class="icon-background">
                                    <span class="rate-icon" style="color: #FFD500;">
                                        <i class="fas fa-plus"> 23</i>
                                    </span>
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>

                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                            <div class="icon-background">
                                    <span class="rate-icon" style="color: #FFD500;">
                                        <i class="fas fa-plus"> 23</i>
                                    </span>
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>

                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                            <div class="icon-background">
                                    <span class="rate-icon" style="color: #FFD500;">
                                        <i class="fas fa-plus"> 23</i>
                                    </span>
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>

                <dic class="search-tool">
                    <i class="fas fa-map-marker-alt fa-4x"></i>
                    <input name="search-app" type="text" placeholder="Szukaj miejsca">
                    <button name="microphone">
                        <i class="fas fa-microphone fa-4x"></i>
                    </button>

                </dic>

                <div class="mapa">
                    <div id="map">
                        <div class="pin">
                            <button name="add-pin">
                                <i class="fas fa-plus-square fa-3x"></i>
                            </button>
                        </div>
                        <div class="pin-2">
                            <button name="add-pin-2">
                                <i class="fas fa-plus-square fa-5x"></i>
                            </button>
                        </div>
                        <div class="local">
                            <button name="localization">
                                <i class="fas fa-location-arrow fa-2x"></i>
                            </button>
                        </div>
                        <div class="local-2">
                            <button name="localization-2">
                                <i class="fas fa-location-arrow fa-5x"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="account-div">
                    <div class="photo-div">
                        <button name="close-button">
                            <i class="fas fa-times fa-3x"></i>
                        </button>
                        <div class="photo">
                            <div class="photo-icon">
                                <span class="photo-color" style="color: white">
                                    <i class="fas fa-user-edit fa-5x"></i>
                                </span>
                            </div>
                            <h1>Bartosz Matras</h1>
                        </div>
                    </div>
                    <div class="data">
                        <div class="data-flex">
                            <div class="data-first">
                                <div class="data-name">
                                    <p>Name: <br>
                                        Bartosz
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                                <div class="data-surname">
                                    <p>Nazwisko: <br>
                                        Matras
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                                <div class="data-email">
                                    <p>email: <br>
                                        bartosz.matras38@gmail.com
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="data-second">
                                <div class="data-adress">
                                    <p>Adres: <br>
                                        Krakow 12-345 <br>
                                        ul. Krakowiaka 18b
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                                <div class="data-phone">
                                    <p>Numer telefonu: <br>
                                        123 456 789
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-bar">
                    <button name="scroll">
                        <i class="fas fa-grip-lines fa-5x"></i>
                    </button>
                    <div class="info-projects">
                        <label for="10 Wyników">
                            10 Wyników
                            <i class="fas fa-pizza-slice"></i>
                        </label>
                        <div class="info-projects-div">
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="options">
                    <div class="alert">
                        <div class="alert-info">
                            <div class="alert-info1">
                                <p> Powiadomienia </p>
                            </div>
                            <div class="alert-info2">
                                <button class="buttonOn">
                                    <p>On</p>
                                </button>
                                <button class="buttonOff">
                                    <p>Off</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="help">
                        <button name="buttonHelp">
                            <p>Pomoc</p>
                        </button>
                    </div>
                    <div class="more">
                    </div>
                    <div class="other-app">
                        <button name="buttonFb">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </button>
                        <button name="buttonMess">
                            <i class="fab fa-facebook-messenger fa-2x"></i>                        </button>
                        <button name="buttonIg">
                            <i class="fab fa-instagram fa-2x"></i>
                        </button>
                        <button name="buttonTwitter">
                            <i class="fab fa-twitter fa-2x"></i>
                        </button>
                    </div>
                    <div class="logout">
                        <button name="buttonLogout">
                            <p>Wyloguj.</p>
                        </button>
                    </div>
                    <div class="producent-info">
                        <p>Train 1.0.1 <br> Stworzono w Kraków</p>
                    </div>
                </div>

                <div class="add-pin-div">
                    <label for="pin-desc">Dodaj opis:</label>
                    <textarea id="pin-desc" name="pin-desc" rows="1" cols="1">

                    </textarea>
                    <button name="upload-photo">
                        <i class="fas fa-upload"></i>
                        <p>Upload file</p>
                    </button>
                    <div class="buttons-pin">
                        <button name="button-add">
                            <p>Dodaj</p>
                        </button>
                        <button name="button-cancel">
                            <p>Anuluj</p>
                        </button>
                    </div>
                </div>

                <div class="pin-info">
                    <div class="pin-info-left">
                        <div class="pin-info-photo">

                        </div>
                        <div class="pin-info-star">
                            <i class="fas fa-star s1"></i>
                            <i class="fas fa-star s2"></i>
                            <i class="fas fa-star s3"></i>
                            <i class="fas fa-star s4"></i>
                            <i class="fas fa-star s5"></i>
                        </div>
                        <button name="pin-info-exit">
                            <i class="fas fa-times fa-3x"></i>
                        </button>
                    </div>
                    <div class="pin-info-right">
                        <div class="pin-info-h1">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="pin-info-p">
                            <p> Sprzedam 4 kurczaki z własnej hodowli.
                                Kurczaki z wolnego wybiegu. Cena: 20zł/szt
                                Dane kontaktowe: 123 456 789
                                Robert.mazurek@gmail.com
                            </p>
                        </div>
                        <div class="pin-info-h2">
                            <h2>ul. Krowoderska 10</h2>
                        </div>
                    </div>
                </div>

                <div class="profile2">
                    <div class="profile2-photo-exit">
                        <button name="profile2-photo">
                            <img src="public/img/face.svg">
                        </button>
                        <button name="profile2-exit">
                            <i class="fas fa-times fa-5x"></i>
                        </button>
                    </div>

                    <div class="profile2-info">

                        <div class="profile2-info-name">
                            <p>Name: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data">
                                <i class="far fa-edit fa-2x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-surname">
                            <p>Name: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data">
                                <i class="far fa-edit fa-2x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-email">
                            <p>Name: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data">
                                <i class="far fa-edit fa-2x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-adres">
                            <p>Name: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data">
                                <i class="far fa-edit fa-2x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-phone">
                            <p>Name: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data">
                                <i class="far fa-edit fa-2x"></i>
                            </button>
                        </div>

                    </div>

                </div>
            </section>
        </main>
    </div>
    </body>
</html>