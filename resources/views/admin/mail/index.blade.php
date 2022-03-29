@extends('admin.layouts.layout1')
@section('content')
   <div class="col-md-8 mx-auto mt-5">
       @if (session('success'))
           <div class="alert alert-success text-center col-md-10 mx-auto">
               {{ session('success') }}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
       @endif
       <form method="post" action="{{"/admin/mail/send"}}">
           @csrf
           <div class="form-group">
               <input type="email" class="form-control" placeholder="Email" name="email">
           </div>
           <div class="form-group">
               <input type="text" class="form-control" placeholder="Mövzu" name="subject">
           </div>
           <div class="form-group">
               <textarea class="form-control" placeholder="Mətn" name="body"></textarea>
           </div>
           <button type="submit" class="btn btn-primary btn-block text-center">Göndər</button>
       </form>
   </div>
@endsection
