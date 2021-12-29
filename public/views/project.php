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
                        <i class="fas fa-bars fa-2x"></i>
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

                <div class="mapa">
                    <div id="map">
                        <div class="pin">
                            <button name="add-pin">
                                <i class="fas fa-plus-square fa-3x"></i>
                            </button>
                        </div>
                        <div class="local">
                            <button name="localization">
                                <i class="fas fa-location-arrow fa-2x"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="pin-add-div">
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
            </section>
        </main>
    </div>
    </body>
</html>