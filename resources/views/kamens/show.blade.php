@extends('layouts.master')


@section('content')
<p></p>
        <div class="starter-template">
          <h1>Bootstrap starter template</h1>
        <p>Kamen</p>

            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kamen</th>
                        <th scope="col">Dobavitelj</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$kamen->id}}</td>
                        <td>{{$kamen->kamenNaziv}}</td>
                        <td>{{$kamen->kamenDobavitelj}}</td>
                      </tr>
                    </tbody>
                  </table>
        </div>

@endsection
