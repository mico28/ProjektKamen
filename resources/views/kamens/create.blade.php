@extends('layouts.master')

@section('content')
<div class="com-sm8 blog-main">

    <h1>Dodaj nov kamen</h1>
    <hr>
    <form method="POST" action="/kamens">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="label" for="kamenNaziv">kamen</label>
            <input type="text" class="form-control" id="kamenNaziv" name="kamenNaziv" required> 
          </div>

          <div class="form-group">
                  <label for="kamenDobavitelj">Dobavitelj</label>
                  <input type="text" class="form-control" id="kamenDobavitelj" name="kamenDobavitelj" required> 
                </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          @include('layouts.errors')
        </form>
</div>

@endsection