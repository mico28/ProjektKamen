@extends('layouts.master')

@section('content')
  <form method="POST" action="{{url('kamens', [$kamen->id])}}" >
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <br/>
    <br/>
          <div class="form-group">
        <label for="kamenNaziv">kamenNaziv</label>
        <input type="text" value="{{$kamen->kamenNaziv}}" class="form-control" id="kamenNaziv" name="kamenNaziv" >
      </div>
     <div class="form-group">
       <label for="kamenDobavitelj">Dobavitelj</label>
       <input type="text" value="{{$kamen->kamenDobavitelj}}" class="form-control" id="kamenDobavitelj" name="kamenDobavitelj" >
     </div>

     @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
     @endif
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>


    
@endsection