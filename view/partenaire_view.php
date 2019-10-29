<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../public/css/partenaire.css" />
        <title> Extranet groupe bancaire - Projet 3 OpenClassRoom Formation web</title>
    </head>
    <body>
        <header>
                <img src="../public/img/LogoGBAF.png" id="logoGBAF"  alt="Logo du groupe bancaire GBAF"/>
            
                <a href="../destroy.php" id="identiter"> Déconnexion </a>
        </header>
            <div id="sectionPresentation"> 
        <section>
            <h1> Texte présentation du GBAF et du site </h1>
                <p><strong> ILLUSTRATION</strong></p>
        </section>
            </div> <!--presentation end-->
            <div id="blocPrincipal"> <!--bloc principal-->
        <section>
            <div id="TitreActeurPartenaire"> 
                <h2>Texte acteurs et partenaires</h2>
            </div> <!--titre partenaire end-->
            <div id="section2">
            <div id="blocActeur1">
                 <img id="logoActeur1" src="../public/img/formation_co.png" alt="Logo du groupe formation&co"/>
                       <div class="texteActeur"><h3> Formation&co est une association française présente sur tout le territoire. <br/>
                            Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
                            <br/> Notre proposition : </h3> </div>
                            <a class="boutonSuite" href=""> Lire la suite </a> 
            </div> <!--fin bloc1-->
            <div id="blocActeur2">
                <img id="logoActeur2" src="../public/img/protectpeople.png" alt="logo du groupe protectpeople" />
                <h3 class="texteActeur" >
                            Protectpeople finance la solidarité nationale.
                            Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.
                            
                            Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
                            Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
                        </h3>
                    <a class="boutonSuite" href=""> Lire la suite </a>
            </div> <!--fin bloc2-->
            <div id="blocActeur3">
                <img id="logoActeur3" src="../public/img/Dsa_france.png" alt="Logo du groupe Dsa France">
                <h3 class="texteActeur" >
                        Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                        Nous accompagnons les entreprises dans les étapes clés de leur évolution.
                        Notre philosophie : s’adapter à chaque entreprise.
                        Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises
                </h3>
                    <a class="boutonSuite" href=""> Lire la suite </a>
            </div> <!--Fin bloc3 -->
            <div id="blocActeur4">
                <img id="logoActeur4" src="../public/img/CDE.png" alt="Logo du groupe CDE alias Chambre des Entrepreneurs " />
                <h3 class="texteActeur">
                            La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. 
                            Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.
                </h3>
                <a class="boutonSuite" href=""> Lire la suite </a>
            </div> <!--fin bloc4-->
            </div> <!--Fin Section2-->
            </div> <!--Fin du bloc principal-->
        </section>
        <footer>
            <p>| Mention légales | Contact | </p>
        </footer>
    </body>
</html>