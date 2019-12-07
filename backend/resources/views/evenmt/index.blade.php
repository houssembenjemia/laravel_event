@extends('welcome')
 
@section('content1')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Evenement</h1> 
               
            </div>
            <br><br>
            <br><br>
            <div class="pull-right">
                    {{-- <a class="btn btn-success" href="{{ url('/#') }}">home</a> --}}

                    {{-- <br> <a class="btn btn-success" href="{{ route('evenmt.create') }}"> Creer une evenement</a> --}}
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>description</th>
            <th>date deb</th>
            <th>date fin</th>
            <th>image</th>
            <th>user</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($evenements as $evenmt)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $evenmt->text_desc }}</td>
            <td>{{ $evenmt->date_deb }}</td>
            <td>{{ $evenmt->date_fin }}</td>
            <td>{{ $evenmt->image }}</td>
            <td>{{ $evenmt->users_id }}</td>

            <td>
                 
                <form action="{{ route('evenmt.destroy',$evenmt->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('evenmt.show',$evenmt->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('evenmt.edit',$evenmt->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $evenements->links() !!}
      
@endsection
