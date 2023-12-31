<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louane Storm | Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body class="body">

    <header class="header">
        <div class="logo-container">
            <span>
                <h2 class="title">Louane Storm.</h2>
            </span>
        </div>
        <nav class="navigation">
            <a href="#" class="home">Accueil</a>
            <a href="#" class="measurement">Mensurations</a>
            <a href="#" class="gallery">Galerie</a>
            <button class="btnContact-popup">Contact</button>
        </nav>
    </header>

    <header class="mobile__header">
        <div class="mobile__logo__container">
            <span>
                <h2 class="mobile__title">Louane Storm.</h2>
            </span>
            <span class="mobile__hamburger__container">
                <img src="hamburger.svg" alt="Menu Toggle Button" id="togglebtn">
            </span>
        </div>
        <nav class="mobile__navigation">
            <a href="#" class="home">Accueil</a>
            <a href="#" class="measurement">Mensurations</a>
            <a href="#" class="gallery">Galerie</a>
            <button class="btnContact-popup">Contact</button>
        </nav>
    </header>


    <div class="presentation">
        <h2>Présentation</h2>
        <p>Louane STORM est une jeune modèle Lilloise.<br>Elle a déjà posé pour plusieurs photographes amateurs, et elle
            a aussi participé à plusieurs concours de beauté de l'organisation <a class="bio-hypertext"
                href="https://www.miss-france.fr/" target="_blank">Miss France</a>.</p>
    </div>


    <div class="mensuration">
        <h2>Mensurations</h2>
        <table>
            <tr>
                <td>
                    <h4>Age:</h4>
                </td>
                <td>
                    <p>18 ans</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Yeux:</h4>
                </td>
                <td>
                    <p>Bleus</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Cheveux:</h4>
                </td>
                <td>
                    <p>Châtains</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Taille:</h4>
                </td>
                <td>
                    <p>178 cm - 5'10"</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Masse:</h4>
                </td>
                <td>
                    <p>61 kg - 134 lbs</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Poitrine:</h4>
                </td>
                <td>
                    <p>83 cm - 32.7 in</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Buste:</h4>
                </td>
                <td>
                    <p>70 cm - 27.6 in</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Tour de taille:</h4>
                </td>
                <td>
                    <p>66 cm - 26 in</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Tour de hanches:</h4>
                </td>
                <td>
                    <p>84 cm - 33 in</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Confection:</h4>
                </td>
                <td>
                    <p>38</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Pointure:</h4>
                </td>
                <td>
                    <p>41</p>
                </td>
            </tr>
        </table>
    </div>


    <!-- Contact Start -->
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box contact">
            <form id="contactForm" action="email.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input id="fullname" name="fullname" type="text" autocomplete="off" required>
                    <label class="label">Nom & Prénom</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input id="email" type="email" name="email" autocomplete="off" required>
                    <label class="label">Email</label>
                </div>
                <div class="input-box special">
                    <span class="icon"><ion-icon name="document-text"></ion-icon></span>
                    <textarea id="message" name="message" rows="4" autocomplete="off" required></textarea>
                    <label class="label">Demande</label>
                </div>
                <button type="submit" class="btn">Soumettre</button>
            </form>
            <div class="contact-socialmedia">
                <p>Me contacter sur les réseaux? <a href="#" class="socialmedia-link">Mes réseaux</a></p>
            </div>
        </div>

        <div class="form-box socialmedia">
            <h2>Mes réseaux</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="logo-instagram"></ion-icon></span>
                <input type="text" class="text" value="louanestorm">
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="logo-facebook"></ion-icon></span>
                <input type="text" class="text" value="Louane Stm">
            </div>
            <div class="contact-socialmedia">
                <p>Me contacter par mail? <a href="#" class="contact-link">Contact</a></p>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <div class="galerie">
        <div class="card-group">
            <div class="card">
                <div class="card-title">
                    <h3>Noir & Blanc</h3>
                </div>
            </div>
            <div class="card" style="background-image: url(images/2-img.jpg);">
                <div class="card-title">
                    <h3>Nature</h3>
                </div>
            </div>
            <div class="card" style="background-image: url(images/DSC_1433.jpg); background-position: top;">
                <div class="card-title">
                    <h3>Ville</h3>
                </div>
            </div>
        </div>
        <div class="image-container">
            <span class="item item-1">
                <img src="images/DSC_1264.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-2">
                <img src="images/2-img.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-3">
                <img src="images/1-img.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-4">
                <img src="images/DSC_1601.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-5">
                <img src="images/DSC_1433.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-6">
                <img src="images/DSC_1548-0.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-7">
                <img src="images/DSC_1264.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-8">
                <img src="images/2-img.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-9">
                <img src="images/1-img.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-10">
                <img src="images/DSC_1206.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
            <span class="item item-11">
                <img src="images/DSC_1641.jpg" alt="" data-fancybox="gallery" data-caption="Caption #1">
            </span>
        </div>

    </div>
    <!-- 
    <div class="lightroom">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box contact">
            <h2>Lightroom</h2>
            <div class="picture">

            </div>
        </div>
    </div> -->


    <!-- ICON IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- LIGHTBOX -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Jquery Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FICHIER JS -->
    <script src="script.js"></script>
</body>

</html>