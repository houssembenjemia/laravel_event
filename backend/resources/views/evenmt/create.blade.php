@extends('evenmt.layout')
  
@section('content')
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Ajouter Evenement</h2>
                        <br><br>                        <br><br>

                    </div>
                    <br><br>
                    <div class="pull-right">                        <br><br>

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
               
            <form action="{{ route('evenmt.store') }}" method="POST">
                @csrf
              
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Desc:</strong>
                            <input type="text" name="text_desc" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>date debut:</strong>
                            <textarea class="form-control" style="height:150px" name="date_deb" placeholder="saisir une date"></textarea>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="date_deb">Date debut</label>
                        <input type="date" name="date_deb" id="date_deb" class="form-control form-control @error('date_deb') is-invalid @enderror" value="{{ old('date_deb') }}" placeholder="date_deb" aria-describedby="helpIddate_deb">
                        @error('date_fin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>date fin</strong>
                                <textarea class="form-control" style="height:150px" name="date_fin" placeholder="saisir une date"></textarea>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="date_fin">Date fin</label>
                            <input type="date" name="date_fin" id="date_fin" class="form-control form-control @error('date_fin') is-invalid @enderror" value="{{ old('date_fin') }}" placeholder="date_fin" aria-describedby="helpIddate_fin">
                            @error('date_fin')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
   
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                                <strong>Image:</strong>
                                <textarea class="form-control" style="height:150px" name="image" placeholder="imgS"></textarea>
                           </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User id:</strong>
                            <textarea class="form-control" style="height:150px" name="users_id" placeholder="user"></textarea>
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <img src="/images/{{ Session::get('path') }}" width="300" />
                            <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}  
                        
                        <div class="form-group">
                            <strong>Selectionner une image</strong>
                            <td><input type="file" name="image" /></td>
                        </div>
                    </form>
                   </div>
                                     
            
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" value="Vider Champs" class="btn btn-warning">reset</button>

                    </div>
                </div>
               
            </form>
            @endsection
    </body>
</html>


