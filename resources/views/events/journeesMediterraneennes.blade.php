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
                <h1> Journées méditerranéennes du TDAH</h1>
                <h3>Pourquoi une conférence Internationale sur le TDAH et ses troubles associés?</h3>
                    <p>Le TDAH est le diagnostic le plus fréquent en psychiatrie de l’enfant et de l’adolescent. Le TDAH concerne environ 5% des enfants de 6 à 18 ans et 
                        3,5% des adultes de la population générale.</p> 
                    <p>Plus de 2 millions de personnes sont concernées en France (600.000 enfants en âge scolaire et 1,3 million d'adultes) dont plus de 120.000 personnes 
                        en région PACA et Principauté de Monaco (42.000 enfants et 98.000 adultes)</p>
                    <p>Dans près de 50% des cas des troubles dit "comorbides" y sont associés, parmies lesquels: Trouble des apprentissages 
                        (Dyslexie, Dyscalculie, Dyspraxie, Troubles Anxieux, Trouble opositionnel avec provocation (TOP).</p>
                <br>
            </div>
            <div>
                <h3>Un enjeu de santé publique:</h3>
                    <p>Du fait de sa prévalence, de sa complexité et de son impact vaste et varié tout au long de la vie, la prise en charge du TDAH constitue 
                        un enjeu majeur de santé publique.</p>
                <br>
            </div>
            <div>
                <h3>La stigmatisation naît de la méconnaissance:</h3>
                    <p>Malgré cela, il reste méconnu par les acteurs de la Santé et de l’Enseignement. Trop peu sont formés. En France, mais aussi dans d’autres pays, 
                        les délais de prise en charge se mesurent parfois en années. L’enfant encourt un risque significatif de perte de chance quand l’adulte 
                        (souvent son parent d’ailleurs) a connu une trajectoire de vie lourdement impactée par les conséquences du TDAH et des troubles associés 
                        qu’il a développés.</p>
                    
                    <p>Cette conférence internationale sur le TDAH en France a pour objectif de poursuivre et amplifier le mouvement de reconnaissance du TDAH, 
                        d’informer les professionnels et de convaincre les personnalités politiques que le temps d’agir est venu.</p>
                    
                    <p>Les premières journées méditerranéennes du TDAH, se veulent internationales et s’adressent aux patients et à leur entourage, 
                        aux professionnels de la santé, aux enseignants et, plus largement, à tous ceux qui se sentent concernés par le TDAH et les troubles associés</p>

                    <p>Elles ont pour but de sensibiliser, informer et former tous les acteurs afin d’améliorer dépistages et prises en charge:médicales, paramédicales 
                        et scolaires et d’engager la création de centres de références en France.</p>
            </div>
        </div>
        <div>
            <img src={{ asset('images/chaise.PNG') }} alt="chaise" id="chaise">
            <form id="participateButton" action="https://www.helloasso.com/associations/tdah-paca/evenements/journees-mediterraneennes-du-tdah-international-conference-on-adhd-nice">
                <input type="submit" value="Participer" />
            </form>
        </div>
</div>
    <!-- fin du body -->
@include('includes.footer')
</body>

