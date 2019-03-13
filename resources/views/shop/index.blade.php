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

            @isset($deleted)
                <h4 style="color:red">{{ $deleted }}</h4>
            @endisset

            @if (Auth::check() && (Auth::user()->permissions == 1)) <!-- Bouton ajouter un produit -->
                <a href="{{ route('boutique.create', null) }}" class="btn btn-info" role="button">Ajouter un produit</a>
            @endif

            @foreach($products as $product)
                <div style="border: solid 2px black; width:100%; margin-bottom:10px; padding: 2px;">
                    <h4>
                        {{ $product->title }}
                    </h4>
                    <p>
                        <img src="{{ $product->imagePath }}" alt="No image" style="max-height:150px" class="img-responsive"> 
                    </p>
                    <p>
                        {{ $product->description }}
                    </p>
                    <p>
                        {{ $product->price }}€
                    </p>
                    
                    <div>
                        <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Ajouter au panier</a>
                        <a href="{{ route('boutique.show', [$product->id]) }}" class="btn btn-info" role="button">Info</a>
                        @if (Auth::check() && (Auth::user()->permissions == 1))
                            <a href="{{ route('boutique.edit', [$product->id]) }}" class="btn btn-info" role="button">Editer</a>
                            <!-- bouton supprimer -->
                            {!! Form::open(['method' => 'DELETE', 'route' => ['boutique.destroy', $product->id]]) !!}
                                {!! Form::submit('Supprimer le produit', ['class' => 'btn btn-danger pull-right', 'onclick' => 'return confirm(\'Vraiment supprimer ce produit ?\')']) !!}
                            {!! Form::close() !!} 
                        @endif
                        <label style="padding-bottom: 20px"></label>
                    </div>         
                </div>
            @endforeach
        </div> <!-- end container -->
    </div> <!-- end boutique-section -->
</div>
@include('includes.footer')
</body>