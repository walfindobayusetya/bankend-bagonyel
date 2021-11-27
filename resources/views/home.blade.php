@extends('layouts.master')
@section('content')      
    <div id="Isi">
      <div class="container">
        <div class="row mt-5">
          <h1 class="text-center text-warning mt-5 mb-5">Home</h1>
          <div class="col-lg-3 text-center">
            <div class="card" style="width: 100%;">
              <img src="{{ URL::to('assets/Waydsec.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Waydsec</h5>
                <p class="card-text">Some quick example text to build on the Waydsec and make up the bulk of the card's content.</p>
                <a href="{{ route('latihan1') }}" class="btn btn-warning">Latihan 1</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card" style="width: 100%;">
              <img src="{{ URL::to('assets/Waydsec.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Waydsec</h5>
                <p class="card-text">Some quick example text to build on the Waydsec and make up the bulk of the card's content.</p>
                <a href="{{ route('latihan2') }}" class="btn btn-warning">Latihan 2</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card" style="width: 100%;">
              <img src="{{ URL::to('assets/Waydsec.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Waydsec</h5>
                <p class="card-text">Some quick example text to build on the Waydsec and make up the bulk of the card's content.</p>
                <a href="{{ url('latihan3') }}" class="btn btn-warning">Latihan 3</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card" style="width: 100%;">
              <img src="{{ URL::to('assets/Waydsec.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Waydsec</h5>
                <p class="card-text">Some quick example text to build on the Waydsec and make up the bulk of the card's content.</p>
                <a href="{{ url('latihan4') }}" class="btn btn-warning">Latihan 4</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection