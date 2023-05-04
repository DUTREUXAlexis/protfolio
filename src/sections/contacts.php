<section id="Contact" style="margin-left: 500%; background: #333745">
    <div style="margin-right : 5%">
        <h1 class="section-header" style="margin-left: 15%">Contact</h1>

        <div class="contact-wrapper">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control " id="name" placeholder="NOM" name="name" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control mt-3" id="email" placeholder="EMAIL" name="email" value="" required>
                    </div>
                </div>

                <textarea class="form-control mt-3" rows="10" placeholder="MESSAGE" name="message" required></textarea>

                <button class="btn btn-dark send-button" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button ">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>

                </button>

            </form>

            <!-- right contact page -->

            <div class="direct-contact-container" style="margin-left: 10%">

                <ul class="contact-list"">
                    <li class="list-item"><i style="color:white;" class="fa fa-map-marker fa-2x"><span class="contact-text place" style="color:white;">Besançon, Doubs</span></i></li>

                    <li class="list-item"><i style="color:white;" class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call" style="color:white;">06-18-32-57-96</a></span></i></li>

                    <li class="list-item"><i style="color:white;" class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email" style="color:white;">dutreuxa@gmail.com</a></span></i></li>

                </ul>

                <hr style="color:darkgrey">
                <ul class="social-media-list">
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="bi bi-github" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="bi bi-linkedin" aria-hidden="true"></i></a>
                    </li>

                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="bi bi-instagram"></i></a>
                    </li>
                </ul>
                <hr style="color:darkgrey">

                <div class="copyright" style="color:white;">&copy; ALL OF THE RIGHTS RESERVED</div>

            </div>


        </div><button id="open" class="btn btn-dark" style="margin-left: 45%" onclick="apears()">Ouvrir un terminal</button></div>


    <div id="wrapper" class="wrapper border border-light bg-dark" style="margin-top:5%;width: 100vh; height:55vh; padding-right: 1.5vh; padding-left: 1.5vh; margin-left:0" >
        <div class="row">
            <header class="row border bg-light" style="margin-left: 0px">
                <p class="col-11 mt-2">Invite de commandes</p>
                <button class="col-1 btn btn-danger" onclick="change()"><i class="bi bi-x-lg"></i></button>
            </header>
        </div>
        <div class="row terminal">
            <p>Portfolio [version 1.0.0.<?=date('Y')?>]</p>
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