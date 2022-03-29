@extends('admin.layouts.layout1')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800 ml-5"><b>
                Parametrlər
            </b></h1>
        <a href="{{"/"}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-5"><i
                class="fas fa-arrow-circle-left fa-sm text-white-50"></i>  Sayta göz at</a>
    </div>
    <div class="row bg-dark py-3">
        <div class="col-md-8 mx-auto ml-5">
            <form action="{{"settings/update"}}" method="post" >
                @csrf
                @if (session('success'))
                    <div class="alert alert-success text-center col-md-8">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <input value="{{$settings->title}}" name="title" type="text" class="form-control" id="inputEmail4" placeholder="Başlıq">
                    </div>
                    <div class="form-group col-md-8">
                        <textarea name="subtitle" cols="60" rows="8">{{$settings->subtitle}}</textarea>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Düzəlt</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
