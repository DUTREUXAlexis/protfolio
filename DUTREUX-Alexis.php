<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="DUTREUX-Alexis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title></title>
</head>
<body class="">
<main class="row">
   <div class="leftscreen d-flex" style="width: 13.5%;z-index: 1000; margin-right: 10%">

        <ul class="d-flex row mt-3" style="margin:0; padding:0; margin-right: 7.5%">
            <img src="moi.PNG" alt="" style="border-radius: 50%">
            <h5 class="text-light mt-3">Menu</h5>
            <li class="col mb-3 list-unstyled "><a class="home btn button col text-light border border-light" href="#home"><i class="bi bi-house-fill"></i> HOME</a></li>
            <li class="col mb-3 list-unstyled"><a class="btn button col text-light border border-light" href="#BTS SIO"><i class="bi bi-book"></i> BTS SIO</a></li>


            <li class="col mb-3 list-unstyled"><a class="btn button col text-light border border-light" href="#About me"><i class="bi bi-file-earmark-person"></i> About me</a></li>
            <li class="col mb-3 list-unstyled"><a class="btn button col text-light border border-light" href="#VEILLE"><i class="bi bi-pc-display"></i> Veille</a></li>

            <li class="col mb-3 list-unstyled"><a class="btn button col text-light border border-light" href="#Contact"><i class="bi bi-telephone-inbound"></i> Contact</a></li>
            <div class="col text-light mb-5" style="margin-right: 20%; margin-bottom:15%">
                <h2>DUTREUX</h2>
                <h3>Alexis</h3>
                <p style="font-style: italic; margin-bottom: 275%">Etudiant en BTS SIO, option SLAM.</p>
        </ul>
    </div>
    <section id="home">
        <div class="col">
            <div class="Titre fixed col" style="margin-top:5%; margin-left:14%;">
                <p class="" style="font-style: italic;"><span style="color: #F5D02A">&lt;h1</span> <span style="color: #E4E4E4">class=</span><span style="color: #afe63a;">"Titre"</span><span style="color: #F5D02A">></span></p>
                <h1 class="event1 p-0" style="font-size: 550%; color: #E4E4E4;"></h1>
                <p style="font-style: italic ;color: #F5D02A">&lt;/h1></p>
                <p style="font-style: italic ;color: #F5D02A">&lt;p <span style="color: #E4E4E4">class=</span><span style="color: #afe63a;">"font-italic"</span>></p>
                <p style="font-size: 200%; color: #E4E4E4; font-style: italic" >Vous trouverez toutes les informations me concernant sur ce site ...</p>
                <p style="font-style: italic ;color: #F5D02A">&lt;/p></p>
            </div>
        </div>
    </section>
    <section id="About me" class=" bg-light">
        <div>
            <div style="position:relative;">
                <h1 >Me ,myself and I</h1>
                <h5 style="font-style: italic">
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        SELECT
                    </span>
                    *
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        FROM
                    </span>
                    ALEXIS
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        WHERE
                    </span>
                    Informations = Formations;
                    </h5>
            </div>
            <div>
                <table class="table mt-4 " style="margin-left: 15vh">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Détails</th>
                        <th scope="col">Durée</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>BAC Scientifique</td>
                        <td>Option ISN</td>
                        <td>2017-2020</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>BTS SIO</td>
                        <td>Option SLAM</td>
                        <td>2021-2023</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                <h5 style="font-style: italic">
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        SELECT
                    </span>
                    *
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        FROM
                    </span>
                    ALEXIS
                    <span style="color: #0F07A7; font-style: italic; font-weight: bold">
                        WHERE
                    </span>
                    Informations = Expérience professionnelle;
                </h5>
            </div>
            <div>
                <table class="table mt-4 " style="margin-left: 15vh">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Détails</th>
                        <th scope="col">Durée</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mcdonald's, Chalzeule</td>
                        <td>Équipier polyvalent</td>
                        <td>3 mois</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>N3WEB, Miserey Salines</td>
                        <td>Developpeur et Référenceur Stagiaire</td>
                        <td>4 semaines</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-5 fixed text-center" style="font-size: 125%;font-style: italic; margin-left: 30vh">
                <p>Je souhaiterais suite à mes études trouver un emplois dans le developpement web ou le référencement.</p>
                <p>De plus, je pratique les danses de compétitions, Latines et Standards comme <span style="color: #0F07A7;font-weight: bold" class="event3"></span></p>
            </div>

        </div>

    </section>



    <section id="BTS SIO" class=" bg-light">
        <div class="text-center" style="margin-left: 15%; margin-right: 5%">
            <h1 class="mb-5 blue">BTS SIO</h1>
            <div class="row mt-5">
                <div class="col">
                    <h2 class="blue">SLAM</h2>
                    <h4>Solution logiciel et application métier</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad asperiores at consequuntur cumque dolorum et facilis harum illum incidunt, mollitia natus optio porro sapiente soluta. Inventore nesciunt provident quo.
                    <hr class="mx-auto" style="width: 50%; background:var(--blue)">
                    <h5>Matières dominantes</h5>
                    <ul class="list-unstyled">
                        <li>Developpement</li>
                        <li>Base de donnée</li>
                        <li>Cybersécurité</li>
                    </ul>
                </div>
                <div class="col">
                    <h2 class="blue">SISR</h2>
                    <h4>Solutions d'infrastructure, systèmes et réseaux</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos distinctio dolorem doloremque ea enim fuga id incidunt molestiae nobis officiis, porro provident quasi sunt tenetur unde vel vitae. Voluptate?
                    <hr class="mx-auto" style="width: 50%; background:var(--blue)">
                    <h5>Matières dominantes</h5>
                    <ul class="list-unstyled">
                        <li>Réseau</li>
                        <li>Cybersécurité</li>
                    </ul>
                </div>

            </div>
        </div>

    </section>



    <section id="VEILLE" class=" bg-light">


    </section>











    <section id="Contact" class=" bg-light">

            <h1 class="col" style="margin-left: 15%; margin-bottom: 35%">Contacts</h1>
            <div class="col" style="margin-right: 25%">
                <p><h3>Téléphone</h3><span style="font-style: italic">06.18.32.57.96</span></p>
                <p><h3>Email</h3><span style="font-style: italic">dutreuxa@gmail.com</span></p>
            </div>





        <div id="wrapper" class="wrapper border border-light bg-dark" style="width: 90vh; height:50vh; padding-right: 1.5vh; padding-left: 1.5vh; margin-left:50%" >
            <div class="row">
                <header class="col border bg-light" style="width: ;">
                    Invite de commandes
                    <a onclick="document.getElementById('wrapper'):style.visibility='hidden'" href="#" class="col close_terminal">
                        <i class="bi bi-x-lg"></i>
                    </a>
                </header>
            </div>

            <div class="row terminal">
                <p>Portfolio [version 1.0.0.2022]</p>
                <p>All rights reserved</p>
                <p>C:\>cd Portfolio\DUTREUX-Alexis\Contacts</p>
                <p>C:\Portfolio\DUTREUX-Alexis\Contacts> dir Contacts</p>
                <p>Répertoire de C:Portfolio\DUTREUX-Alexis\Contacts></p>
                <p>Téléphone &lt;DIR> 06.18.32.57.96</p>
                <p>email &lt;DIR> dutreuxa@gmail.com</p>
                <p>C:\Portfolio\DUTREUX-Alexis\Contacts><span class="event2"></span></p>

            </div>

        </div>
    </section>


</main>
</body>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="DUTREUX-Alexis.js"></script>
</html>