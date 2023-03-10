<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kayak.pl</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <style>
        /* Navbar styling */
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        /* End of Navbar Styling */



        /* Paralax effect */
        .parallax {
            background-image: url("paralax1.jpg");

            min-height: 800px;

            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.9;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 45%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .check-offerts {
            outline: 2px solid whitesmoke;
            color: whitesmoke;
            background-color: transparent;
            border: none;
            padding: 10px;
            transition: all 0.5s ease-in-out;
        }

        .check-offerts:hover {
            color: #F7DDB5;
            outline: 0px solid transparent;
            /* outline: 2px solid #F7DDB5; */
        }

        .check-offerts::after {
            content: '';
            width: 0px;
            height: 2px;
            display: block;
            background: #F7DDB5;
            /* background: #FFD563; */
            transition: 500ms;
        }

        .check-offerts:hover::after {
            width: 100%;
        }

        /* End of paralx effect */



        /* Main body styling */
        .main {
            height: auto;
            background-color: whitesmoke;
        }

        /* End of main body styling */

        /* Text styling customs */
        .text-under::after {
            content: '';
            width: 100%;
            height: 3px;
            display: block;
            background: #D2BA50;
        }

        /* End of text styling customs */




        /* Location styling  */
        .location {
            position: relative;
            background-color: #406485;
            padding-top: 5rem;
            padding-bottom: 5rem;
            color: whitesmoke;
        }
        .location svg {
            transform: rotate(180deg);
            position:absolute;
            top: 0;
        }

        iframe {
            background-color: whitesmoke;
            padding: 1rem;
        }

        ul.location-info-list {
            list-style-type: none !important;
        }

        /* End of location styling */

        /* Activites styling */
        .activities {
            padding: 5rem;
        }

        /* End of activites  */
    </style>
</head>

<body>
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="logo">
                <img src="icon.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                <span class="fs-2 fw-light">kayak.pl</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="parallax">
        <div class="caption">
            <button type="button" class="check-offerts fs-2 fw-light">Sprawd?? nasze oferty!</button>
        </div>

    </div>
    <div class="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <img src="icon.png" alt="Firma" class="img-fluid">
                </div>
                <div class="col-md">
                    <h2>O naszej firmie <span class="text-under">kayak.pl</span></h2>
                    <p class="fs-5">Pewnego dnia w Zakopanem grupa g??rali postanowi??a zbudowa?? hotel. Po wielu tygodniach ci????kiej pracy hotel by?? gotowy i sta?? si?? wizyt??wk?? miasta.
                    </p>
                    <p class="fs-5">
                        Go??cie byli zachwyceni klimatem, jaki wnosi?? hotel w g??rach oraz przemi???? obs??ug?? g??ralsk??. Ka??dego dnia zamawiali pyszne potrawy z lokalnych sk??adnik??w i ch??tnie wypijali tradycyjn?? g??ralsk?? herbat??.
                    </p>
                    <p class="fs-5">
                        Z czasem hotel sta?? si?? popularny w??r??d turyst??w i z roku na rok przyjmowa?? coraz wi??cej go??ci. W??a??ciciele postanowili rozbudowa?? obiekt, aby jeszcze lepiej spe??ni?? oczekiwania swoich go??ci.
                    </p>
                    <p class="fs-5">
                        Dzi?? hotel w Zakopanym jest jednym z najlepszych miejsc w g??rach, w kt??rym mo??na wypocz???? i poczu?? si?? jak w domu. Go??cie nie mog?? si?? ju?? doczeka?? kolejnej wizyty w tym magicznym miejscu.</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="location">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <p class="fs-2 fw-normal">Opis lokalizacji</p>
                    <ul class="location-info-list">
                        <li class="fs-4 fw-light">
                            Na Polanie Bia??y Potok
                        </li>
                        <li class="fs-4 fw-light">
                            ul. Wit??w 16
                        </li>
                        <li class="fs-4 fw-light">Zakopanem</li>
                        <li></li>
                    </ul>

                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20823.40689825857!2d19.877142913711587!3d49.27780201045949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715932cafc9f973%3A0x597356b82319d966!2sna%20Polanie%20Bia%C5%82y%20Potok!5e0!3m2!1spl!2spl!4v1670686059583!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        <h1>Siema</h1>
                    </iframe>
                </div>


            </div>
        </div>
    </div>
    </div>



    <div class="activities">
        <div class="row">
            <div class="col-md-4">
                <p class="fs-2 text-under">Mo??liwo??ci i aktywno??ci w okolicy!</p>
                <!-- <ul>
                        <li class="fs-4 ">Odwiedzi?? Krup??wki - g????wn?? ulic?? Zakopanego pe??n?? sklep??w, restauracji i kawiarni.</li>
                        <li class="fs-4 ">Zwiedzi?? Tatrza??ski Park Narodowy i podziwia?? pi??kno Tatr oraz ich ro??linno???? i faun??.</li>
                        <li class="fs-4 ">Wybra?? si?? na wycieczk?? na Guba????wk??, s??ynn?? g??r?? widokow?? w Zakopanem, z kt??rej roztacza si?? imponuj??cy widok na Tatry.</li>
                        <li class="fs-4 ">Zrelaksowa?? si?? w jednym z licznych term zakopia??skich, takich jak Terma Bania czy Terma Chocho??owska.</li>
                        <li class="fs-4 ">Spr??bowa?? regionalnej kuchni - popularne dania zakopia??skie to np. oscypki, kwa??nica czy pierogi z kapust?? i grzybami.</li>
                        <li class="fs-4 ">Uprawia?? turystyk?? g??rsk?? - Zakopane jest rajem dla mi??o??nik??w g??rskich w??dr??wek, wspinaczki i narciarstwa.</li>
                        <li class="fs-4 ">Odwiedzi?? Muzeum Tatrza??skie i dowiedzie?? si?? wi??cej o historii, kulturze i przyrodzie Tatr.</li>
                        <li class="fs-4 ">Zobaczy?? Wielk?? Krokiew - charakterystyczny drewniany stadion skoczni narciarskich, miejsce wielu zawod??w i imprez sportowych.</li>
                        <li class="fs-4 ">Pos??ucha?? muzyki g??ralskiej w jednym z licznych klub??w muzycznych w Zakopanem.</li>
                    </ul> -->

            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-lg col-md-12 mb-4 mb-lg-0">
                <img src="img_features/kayak.jpg" class="w-100 shadow-1-strong rounded mb-4 img-fluid" alt="Boat on Calm Water" />

                <img src="img_features/tennis.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg mb-4 mb-lg-0">
                <img src="img_features/climbing.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="img_features/pool.jpg" class="w-100 h-50 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg mb-4 mb-lg-0">
                <img src="img_features/house.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="img_features/sheep.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
        </div>
        <!-- Gallery -->
        <!-- <div class="card" style="width: 30rem;">
                <img src="img_features/kayak.jpg" class="card-img-top" alt="kayak">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <img src="img_features/kayak.jpg" class="card-img-top" alt="kayak">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <img src="img_features/kayak.jpg" class="card-img-top" alt="kayak">
                < <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
            </div> -->
    </div>

    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>