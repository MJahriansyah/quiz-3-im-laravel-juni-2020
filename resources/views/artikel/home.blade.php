@extends('layouts.master')
@section('title','Home Artikel')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top"   style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href=""><small><i class="far fa-heart"></i> Nada</small></a>                    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top"   style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href=""><small><i class="far fa-heart"></i> Rina</small></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top"   style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                                        <a href=""><small><i class="far fa-heart"></i> Budi</small></a>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top " style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                                        <a href=""><small><i class="far fa-heart"></i> Ria</small></a>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top " style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href=""><small><i class="far fa-heart"></i> Joko</small></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('images/edr.png')}}" class="card-img-top"   style="height:150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                                        <a href=""><small><i class="far fa-heart"></i> Bambang</small></a>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/artikel/detail" class="btn btn-primary">Detail</a>
                </div>
            </div>
            </div>
        </div>
       
    </div>
@endsection