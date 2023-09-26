@extends('layout.base')


@section('content')

{{-- <div class="grid-container">
<div class="card" style="width: 15rem;">
    <img src="asset/caramel.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Caramel</h5>
      <p class="card-text"> Kopi caramel adalah minuman kopi yang diberi tambahan sirup karamel dan susu</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<div class="grid-container">
  <div class="card" style="width: 15rem;">
    <img src="asset/espresso.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Espresso</h5>
      <p class="card-text">Espresso adalah minuman kopi klasik yang dibuat dengan mengekstrak kopi dengan tekanan tinggi dan cepat</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<div class="grid-container">
  <div class="card" style="width: 15rem;">
    <img src="asset/cappucino.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Cappucino</h5>
      <p class="card-text">Cappuccino adalah minuman kopi yang terdiri dari espresso, susu panas, dan busa susu</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<div class="grid-container">
  <div class="card" style="width: 15rem;">
    <img src="asset/americano.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Americano</h5>
      <p class="card-text">Americano adalah minuman kopi yang terbuat dari espresso yang ditambahkan dengan air panas</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<div class="grid-container">
  <div class="card" style="width: 15rem;">
    <img src="asset/macchiato.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Macchiato</h5>
      <p class="card-text">Macchiato adalah espresso yang dicampur dengan sejumput foam milk atau steam milk</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<div class="grid-container">
  <div class="card" style="width: 15rem;">
    <img src="asset/mocha.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Mocha</h5>
      <p class="card-text">Mocha adalah minuman kopi yang terdiri dari espresso, susu, dan cokelat</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div> --}}
<br>
<h2>COFFEE</h2>
<br> 
<div class="card-grid">
  <div class="card">
    <img src="asset/caramel.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Caramel</h5>
      <p class="card-text">Minuman kopi manis yang terbuat dari espresso, sirup karamel, dan susu yang memberikan rasa lembut</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="asset/espresso.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Espresso</h5>
      <p class="card-text">Minuman kopi klasik dengan cita rasa kaya dan kuat yang dihasilkan dari mengekstrak kopi dengan tekanan tinggi</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="asset/cappucino.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cappucino</h5>
      <p class="card-text">Campuran sempurna antara espresso, susu panas, dan busa susu yang memberikan pengalaman kopi yang seimbang</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="asset/americano.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Americano</h5>
      <p class="card-text">Americano adalah minuman kopi yang terbuat dari espresso yang ditambahkan dengan air panas</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="asset/mocha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mocha</h5>
      <p class="card-text">Kombinasi yang menggoda antara espresso, susu, dan cokelat yang menciptakan minuman kopi yang lezat dan menggugah selera</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
</div>

@endsection