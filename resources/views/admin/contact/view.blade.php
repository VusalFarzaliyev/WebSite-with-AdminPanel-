@extends('admin.layouts.layout1')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800 ml-5"><b>
                Kontakt
            </b></h1>
        <a href="{{"/"}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-5"><i
                class="fas fa-arrow-circle-left fa-sm text-white-50"></i>  Sayta göz at</a>
    </div>
    <div class="row py-3">
        <div class="col-md-8 mx-auto ml-5">
           <div class="row">
               <div class="col-md-6 text-dark">
                   <p>Ad :</p>
                   <hr>
                   <p>Email :</p>
                   <hr>
                   <p>Telefon :</p>
                   <hr>
                   <p>Mesaj :</p>
               </div>
               <div class="col-md-6">
                   <p>{{$contact->name}}</p>
                   <hr>
                   <p>{{$contact->email}}</p>
                   <hr>
                   <p>{{$contact->number}}</p>
                   <hr>
                   <p>{{$contact->message}}</p>
               </div>
           </div>
        </div>
    </div>
@endsection
