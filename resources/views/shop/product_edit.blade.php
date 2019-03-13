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

            @isset($updated)
                <h4 style="color:red">{{ $updated }}</h4>
            @endisset

            <div class="col-sm-offset-4 col-sm-4">
            <br>
            <div class="panel panel-primary">   
                <div class="panel-heading">Modification d'un produit</div>
                <div class="panel-body"> 
                    <div class="col-sm-12">
                        {!! Form::model($produit, ['route' => ['boutique.update', $produit->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                        <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                            {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('price') ? 'has-error' : '' !!}">
                            {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                            {!! $errors->first('price', '<small class="help-block">:message</small>') !!}
                        </div>

                        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                        {!! Form::close() !!}
                    </div>
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