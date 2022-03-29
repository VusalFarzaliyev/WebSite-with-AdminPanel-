@extends('admin.layouts.layout1')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800 ml-5"><b>
               @if(count($contacts) >0)
                    {{count($contacts)}} mesaj gəlib
                @else
                   Kontakt
                @endif
            </b></h1>
        <a href="{{"/"}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-5"><i
                class="fas fa-arrow-circle-left fa-sm text-white-50"></i>  Sayta göz at</a>
    </div>
    @if (session('danger'))
        <div class="alert alert-danger text-center col-md-10 mx-auto">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if( count($contacts) > 0 )
        <div class="row py-3">
            <div class="col-md-8 mx-auto ml-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="checkItem" id="select-all">
                        </th>
                        <th scope="col">Ad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Əməliyyatlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $value)
                        <tr>
                            <td>
                                <input type="checkbox" class="checkItem" id="check" value="{{$value->id}}" name="checkbox[]">
                            </td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->number}}</td>
                            <td>
                                <a href="{{"/admin/contact/$value->id"}}" class="btn btn-primary"><i class="fas fa-eye "> Oxu</i></a>
                                <a href="{{"/admin/contact/delete/$value->id"}}" class="btn btn-danger"><i class="fas fa-trash "> Sil</i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-10 text-center ml-5 mt-2">
            <span >{{$contact->links()}}</span>
        </div>
    @else
        <div class="alert alert-warning col-md-8 mx-auto">
            Mesaj yoxdur
        </div>
    @endif
@endsection
