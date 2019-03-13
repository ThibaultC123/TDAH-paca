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
                    <h1> Article Nice Matin du 20 Janvier 2019 </h1>
                </div>
                <div>
                    <img src={{ asset('images/article.JPG') }} alt="article" id="article_presse">
                    <form id="participateButton_article" action="https://docs.wixstatic.com/ugd/e65528_3206816c863349dcaf96d43bc851f611.pdf">
                        <input type="submit" value="Lire l'article" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- fin du body -->
@include('includes.footer')
</body>

