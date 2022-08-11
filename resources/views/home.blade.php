@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

<table class="table caption-top" id="dtble1">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
  @foreach (App\Models\User::all() as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
/* $(document).ready( function () {
    $('#dtble1').DataTable();
    
} ); */

/* $('#dtble1').dataTable( {
  "lengthMenu": [ 1, 5, 10, 15, 20 ]
} ); */

$(document).ready(function () {
    $('#dtble1').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json',
        },
    });
});
</script>
@endpush


