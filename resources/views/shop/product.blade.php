@include('includes.head')
<body>
@include('includes.header')
<div id="main">
    <div class="boutique-section">
        <div class="container">
            
            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-lg-offset-4 col-sm-offset-3">
                    <div id="charge-message" class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            </div>
            @endif

            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-body"> 
                        <p>PRODUIT : {{ $produit->title }}</p>
                        <img src="{{ $produit->imagePath }}"/>
                        <p>DESCRIPTION : {{ $produit->description }}</p>
                        <p>PRIX : {{ $produit->price }}€</p>
                    </div>
                </div>              
                <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
            </div>
        </div> <!-- end container -->
    </div> <!-- end boutique-section -->
</div>
@include('includes.footer')
</body>