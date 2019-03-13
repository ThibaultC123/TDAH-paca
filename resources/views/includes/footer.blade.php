<section id="lab_social_icon_footer">

<!-- Copyright -->
<div class="container">
    <div class="text-center center-block" style="text-align: left">
        <a href="{{ route('mentionsLegales') }}"> Mentions légales</a>
        <br>
        <a href="{{ route('cgv') }}"> Conditions Générales de Vente</a>
        <p> © Thibault CACI 2019</p>
    </div>
</div>
<!-- Copyright -->
    
<!-- Newsletter -->
<div class="container">
    <div class="text-center center-block" style="text-align: center"> 
        <form> 
            <label>Abonnez-vous à notre newsletter :</label>
            <br>
            <input type="text" name="email" placeholder="saisissez votre adresse email" size="30"/>
            <input type="button" value="Valider">
        </form>
    </div>
</div>
<!-- Newsletter -->
    
<div class="container">
    <div class="text-center center-block" style="text-align: right">
        <a href="https://www.facebook.com/associationpourlestdah/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
        <a href="https://twitter.com/tdah_paca"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
        <a href="https://www.youtube.com/channel/UCndU8e9KLam7jEYqLE-jGHw"><i id="social-yt" class="fa fa-youtube-square fa-3x social"></i></a>
    </div>
</div>
</section>

<script>
    //footer : #lab_social_icon_footer
    //header: #test
    //#main
    hH = $('#test').height();
    fH = $('#lab_social_icon_footer').height();
    mH = $('#main').height();
    windowH = $(window).height();

    if ((hH + mH + fH) >= windowH){
        $('#lab_social_icon_footer').css('position', 'relative');
    } else {
        $('#lab_social_icon_footer').css('position', 'absolute');
        $('#lab_social_icon_footer').css('bottom', 0);
        $('#fond').css('height', windowH-fH);
    }
</script>