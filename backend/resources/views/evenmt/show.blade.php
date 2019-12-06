@extends('evenmt.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Les Evenement</h2> <br><br>
            </div>
            <br><br> <br><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('evenmt.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {{ $evenmt->text_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date debut:</strong>
                {{ $evenmt->date_deb }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>date fin:</strong>
                    {{ $evenmt->date_fin }}
                </div>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>image:</strong>
                     {{ $evenmt->image }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>user :</strong>
                     {{ $evenmt->users_id }}
                </div>
        </div>
    </div>
@endsection