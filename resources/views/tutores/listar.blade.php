@extends('layouts.main')

@section('title', 'Search')

@section('content')

<body>
    <div class="main">
        <a href="/register">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="person-add"></ion-icon>
                </div>
        </a>
        <!--search-->
        <div class="search">
            <label>
                <input type="text" placeholder="Procurar">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <!--userImg-->
        <div class="user">
            <img src="img/user.jpg">
        </div>
    </div>
    <div class="card-header ">
        <h5 class="m-0 font-weight-bold text-primary">Dashboard</h5>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Tutor</th>
                    <th>Endereço</th>
                    <th>Pets</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tutores as $tutor)
                <tr>
                    <td>{{ $tutor->nome_completo }}</td>
                    <td>{{ $tutor->endereco }}</td>
                    <td>{{ $tutor->pets()->count() }}</td>
                </tr>
            @endforeach
            </tbody>
    </div>
    </div>





</body>

@endsection