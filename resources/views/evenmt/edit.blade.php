@extends('evenmt.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                   
                <h2>Modifier Evenement</h2> <br><br>
            </div>
            <br><br><br><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('evenmt.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('evenmt.update',$evenmt->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" name="text_desc" value="{{ $evenmt->text_desc }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>date_deb:</strong>
                            <input type="text" name="text_desc" value="{{ $evenmt->date_deb }}" class="form-control" placeholder="Name">
                        </div>
            </div>
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>date_fin:</strong>
                            <input type="text" name="text_desc" value="{{ $evenmt->date_fin }}" class="form-control" placeholder="Name">
                        </div>
            </div>
  
 
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <textarea class="form-control" style="height:150px" name="image" placeholder="Detail">{{ $evenmt->image }}</textarea>
                    </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User id:</strong>
                        <textarea class="form-control" style="height:150px" name="image" placeholder="user">{{ $evenmt->users_id }}</textarea>
                    </div>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection