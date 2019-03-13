@include('includes.head')

<body>
@include('includes.header') 
<div id="main">
    <div>
        <img src={{ asset('images/fond.jpg') }} alt="nice" class="img-fluid" id="fond">
    </div>
    <div id="transbox"></div>
        <div id="texte1">
            <div>
                <h1>Atelier de pédagogie positive</h1>
                <p><strong>Nous vous proposons en collaboration avec Vincent Damato, enseignant formé à la pédagogie positive deux ateliers ludiques et pédagogique: <br/>
                    Le matin de 09h00 à 12h 30 sur le thème : Découvres tes supers pouvoirs, un atelier à partager en famille avec son ou ses enfants.</strong></p>

                <p>Chacun a ses propres super pouvoirs pour apprendre !!</p>

                <p>Cet atelier est justement fait pour permettre à chacun de découvrir son propre fonctionnement face aux apprentissages, que l’on soit enfant, ado ou adulte.</p>
                <p>Au travers d'apport de quelques éléments de compréhension, les participants pourront découvrir quelques outils et essayer de construire des petites 
                    stratégies pour faciliter les apprentissages.</p>

                <h3>Au programme de la matinée : </h3>
                    <ul>
                        <li>Super pouvoir n° 1 - Les émotions : les reconnaitre et comprendre leurs effets dans les apprentissages</li>
                        <li>Super pouvoir n° 2 - visuel, kinesthésique ou auditif ? Sensibilisation à la Gestion Mentale</li>
                        <li>Super pouvoir n° 3 - le multi encodages : apprendre plus facilement et plus durablement en codant les informations</li>
                        <li>Super pouvoir n° 4 - avoir du plaisir à apprendre : Des techniques de base pour (ré)enchanter les apprentissages</li>
                        <li>Le plus important - Un maximum de temps d'entrainement : amenez vos leçons, vos cours, ... pour expérimenter</li>
                    </ul>

                <p>Les ateliers du 23 Mars se dérouleront à Magnagnosc !!! ( GRASSE)</p>

                <p>Les places sont limitées, 16 personnes maximum. Dépêchez-vous de vous inscrire !</p>


                <h3> Tarif : </h3>

                    <ul>
                        <li>60 € pour un duo enfant-parent</li>
                        <li>40 € pour un duo enfant-parent adhérent à l'association TDAH PACA</li>
                    </ul>
                <p><strong>Renseignements : apasdefourmi@free.fr ou au 06 45 55 68 27</strong></p>
            </div>
            <div>
                <img src={{ asset('images/atelier.jpg') }} alt="atelier" id="atelier">
                <form id="participateButton_atelier" action="https://www.billetweb.fr/atelier-decouvre-tes-super-pouvoirs-pour-mieux-apprendre4">
                    <input type="submit" value="Participer" />
                </form>
            </div>
        </div>
</div>
    <!-- fin du body -->
@include('includes.footer')
</body>

