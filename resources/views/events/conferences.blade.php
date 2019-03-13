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
                <h1> (Evenement passé) Conférence Multiplex du 08 décembre 2018 </h1>
                <p>Une réunion en multiplex réunissant 9 centres en France a été organisée avec le soutien du laboratoire Shire
                    et animée par le Pr Manuel Bouvard (Bordeaux).</p>
                <p>Le Pr Diane Purper-Ouakil (Montpellier) et le Dr Hervé Caci (Nice) ont présenté respectivement 
                    "Les effets au long cours des traitements du TDAH" et "Quelles nouveautés dans les lignes directrices 
                    pour le TDAH de l'enfant et de l'adulte en 2018?".</p>
                <p>Ont suivi des échanges avec les quelques 350 participants à cet événement exceptionnel avec 
                    des questions extrêmement variées concernant le TDAH et les troubles associés.</p>
            </div>
        </div>
            <div>
                <img src={{ asset('images/conference.JPG') }} alt="conference" id="conference">
            </div>
</div>
    <!-- fin du body -->
@include('includes.footer')
</body>

