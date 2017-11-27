@extends("layouts.app")

@section("content")

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://placehold.it/1000x350" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="h1">slide</h3>
        <p>bla bla stuff</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placehold.it/1000x350" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="h1">slide</h3>
        <p>bla bla stuff</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placehold.it/1000x350" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="h1">slide</h3>
        <p>bla bla stuff</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-3">
  <h2 class="h3">Maak van uw trouwdag een onvergetelijke gebeurtenis!</h2>
  <p class="lead">Laat daarom ons uw trouwvervoer organiseren, dan zorgen wij ervoor dat u die onvergetelijke dag krijgt.</p>
  <p>
    Vanwege onze passie voor klassieke auto’s en bussen is Hans Classic Cars ontstaan. Wij zorgen ervoor dat uw trouwdag compleet is en dat u en uw gasten op een sfeervolle wijze vervoerd worden. Bijvoorbeeld met het bruidspaar en de gasten in onze orginele Greyhound Silverside voor een gezellige rit naar het stadhuis, kerk en feestzaal, of misschien het bruidspaar in een karakteristieke Jaguar SS uit 1947 en alle gasten in een Bristol Dubbeldekker.
  </p>


  {{--  div*2>hr+small.text-muted>lorem2^.row.no-gutters.justify-content-between.mt-3>.card.col-md-3.my-5.my-md-0*4>img[src="https://placehold.it/350x200" alt="oldtimer"].card-img-top+.card-body>.card-title>lorem3^.card-text>lorem10^a[href="#"].btn.btn-primary>lorem2^^^^a[href="#"].btn.btn-outline-secondary.mx-auto.d-block.my-2>lorem1  --}}

  <div>
    <hr>
    <small class="text-muted">Lorem, ipsum.</small>
    <div class="row no-gutters justify-content-between mt-3">
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Lorem, ipsum dolor.</div>
          <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, et!</div>
          <a href="#" class="btn btn-primary">Lorem, ipsum.</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Alias, tenetur dolorum.</div>
          <div class="card-text">Cum quasi saepe rem distinctio quod non neque consequuntur inventore.</div>
          <a href="#" class="btn btn-primary">Ullam, quod.</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Sed, hic ducimus.</div>
          <div class="card-text">Eum tempore assumenda magnam adipisci sequi animi asperiores sed corrupti.</div>
          <a href="#" class="btn btn-primary">Repellendus, consectetur.</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Excepturi, iste ea?</div>
          <div class="card-text">Reprehenderit at veritatis harum totam cum iure soluta ut officia.</div>
          <a href="#" class="btn btn-primary">Quisquam, rerum.</a>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-outline-secondary mx-auto d-block my-2">Lorem.</a>
  </div>
  <div>
    <hr>
    <small class="text-muted">Cupiditate, dolorem!</small>
    <div class="row no-gutters justify-content-between mt-3">
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Voluptatibus, modi aperiam.</div>
          <div class="card-text">Fugiat nihil ad nesciunt. Aliquid totam cum aut adipisci officia.</div>
          <a href="#" class="btn btn-primary">Consequuntur, quasi!</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Necessitatibus, id est.</div>
          <div class="card-text">Vel iusto nisi sequi voluptas illo! Nulla aut dignissimos maiores?</div>
          <a href="#" class="btn btn-primary">Cupiditate, dolorum.</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Rerum, ut quaerat!</div>
          <div class="card-text">Libero quo itaque id ratione ad voluptates minima consequuntur dicta?</div>
          <a href="#" class="btn btn-primary">Doloribus, explicabo.</a>
        </div>
      </div>
      <div class="card col-md-3 my-5 my-md-0">
        <img src="https://placehold.it/350x200" alt="oldtimer" class="card-img-top">
        <div class="card-body">
          <div class="card-title">Tempore, a facere?</div>
          <div class="card-text">Omnis, saepe dolorem. Recusandae suscipit similique nihil quas enim voluptatum?</div>
          <a href="#" class="btn btn-primary">Asperiores, dolores!</a>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-outline-secondary mx-auto d-block my-2">Repellat?</a>
  </div>


</div>

@endsection