@extends('master.layout')
@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, </h1>
            <p>Essa é uma API para uma aplicação da <b>LessClick</b> com a devida documentação de como usar e seus respectivos EndPoints.</p>
            <p><a class="btn btn-primary btn-lg" href={{route('documentation')}} role="button">Learn more &raquo;</a></p>
        </div>
    </div>

</main>
@endsection
