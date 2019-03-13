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
                <h1> 7eme Congres de la fédération mondiale de TDAH <br/></h1>
                <h2> Lisbonne, du 25 au 28 avril 2019 </h2>
                    <h3>Mission and Goals : </h3>
                        <p>The World Federation of ADHD is an international professional association of clinicians, scientists, 
                            and other healthcare professionals who are interested in ADHD and all psychiatric syndromes in which ADHD may be a feature.
                            They want to collaborate with other related professional and lay organizations to support and promote worldwide clinical 
                            and scientific studies, including training activities in the field of ADHD (Attention Deficit-Hyperactivity Disorder) and related disorders.
                        </p>
            </div>
        </div>
        <div>
            <img src={{ asset('images/congres.JPG') }} alt="congres" id="congres">
            <form id="participateButton_congres" action="https://www.adhd-congress.org/">
                <input type="submit" value="Participer" />
            </form>
        </div>
</div>
    <!-- fin du body -->
@include('includes.footer')
</body>

