@extends('layouts.master')


@section('content')
<main role="main" class="container">

        <div class="starter-template">
          <h1>Bootstrap starter template</h1>
        <p>Kamen</p>
        <td><a href="/kamens/create"><button class="btn btn-primary">Add</button></a></td>
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kamen</th>
                        <th scope="col">Dobavitelj</th>
                        <th colspan="2">Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($kamens as $kamen)
                      <tr>
                        <td>{{$kamen->id}}</td>
                        <td>{{$kamen->kamenNaziv}}</td>
                        <td>{{$kamen->kamenDobavitelj}}</td>
                        <td><a href="{{action('KamenController@edit', $kamen['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td>
                        <td>
                          <form action="{{action('KamenController@destroy', $kamen['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
        </div>

        
@endsection
