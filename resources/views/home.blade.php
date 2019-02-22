<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <title>Oikos - ecotechnologie urbain</title>
</head>
<body>

@foreach($homeView as $home)

<div class="content">
    <div class="col-md-12 productSlide" style="background-image: url({{$home['backgroundImage']}})">
        <div class="productName"><h2>{{$home['titreSlide']}}</h2>
        <h3>{{$home['subtitreSlide']}}</h3>
        </div>
    </div>
    <div class="productCollapse">
        <a class="btn boton" data-toggle="collapse" href="#collapseExample{{$home['id']}}" role="button" aria-expanded="false" aria-controls="collapseExample">
            +
        </a>
    <div class="collapse homeProductCollapse" id="collapseExample{{$home['id']}}">

        @foreach($product as $item)
            @if($item['id'] == $home['id'])
        <div class="card card-body productHome col-sm-3">
<div class="homeProductTitle">{{$item['nom']}}</div>
            <div class="homeProductPhoto"><img src="{{$item['image']}}" width="100%"></div>
            <div class="row"><div class="homeProductQty col-sm-6">Quantité : <input type="number" min="1" max="10" name="quantity" value="1"></div>
                <div class="homeProductPrice col-sm-6">{{$item['prix']}} €</div>
            </div>
            <div class="homeProductButton">
                <button class="btn btn-success">+ info</button>
                <button class="btn btn-success"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
            @endif
        @endforeach
    </div>
    </div>
</div>
@endforeach

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
