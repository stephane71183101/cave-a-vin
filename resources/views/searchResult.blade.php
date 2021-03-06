@extends('layout/master')
 
@section('title', 'La cave à vin d-Emma B.')

@section('content')


<div class="searchResults">
    <div class="container">
        <div class="row">
        @foreach ($winelist as $wine)
            <div class="col-sm-4">
                <div class="container">
                    <div class="prodcutimage">
                        <img class="img-thumbnail" src="/img/{{$wine->picture}}">
                    </div>
                    <div>
                        <p class="searchResultline1">{{$wine->description}}</p>
                    </div>
                    <div>
                        <p class="searchResultline2">{{$wine->country}} | {{$wine->region}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>    



        <!-- <div class="searchResults">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
            <div class="container">
                <div class="row">
                <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
            <div class="container">
                <div class="row">
                <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="prodcutimage">
                                <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                            </div>
                            <div>
                                <p class="searchResultline1">Punto Ar Cabernet Franc</p>
                            </div>
                            <div>
                                <p class="searchResultline2">Argentinien | Mendosa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

@endsection
