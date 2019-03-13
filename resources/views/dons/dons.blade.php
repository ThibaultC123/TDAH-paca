@include('includes.head')

<body>
@include('includes.header')
<div id="main">
    <div>
        <img src={{ asset('images/fond.jpg') }} alt="nice" class="img-fluid" id="fond">
    </div>
    <div id="transbox"></div>
        <div id="texte1">
            <h1> Faire un don </h1>
                <p> Le temps et l’énergie investis bénévolement sont importants mais consentis dans l’intérêt des enfants et de leurs familles. <br/>
                    Nous vous remercions de votre générosité. </p>
            <div>
                <form id="donateButton" action="https://www.helloasso.com/associations/tdah-paca/collectes/appel-aux-dons-association-tdah-paca">
                    <input type="submit" value="Faire un don" />
                </form>
            </div>
        </div>
</div>
    <!-- fin du body -->
@include('includes.footer')
</body>

