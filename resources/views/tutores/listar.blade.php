@extends('layouts.main')

@section('title', 'Search')

@section('content')

<body>
    <div class="main">
        <a href="/tutores/cadastro">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="person-add"></ion-icon>
                </div>
        </a>
        <!--search-->
        <div class="search">
            <label>
                <input id="pesquisa" type="text" placeholder="Procurar" onchange="buscarTutor()">
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($tutores as $tutor)
                <tr
                    class="tutor-tr"
                    data-nome="{{ $tutor->nome_completo }}"
                    data-email="{{ $tutor->email }}"
                    data-endereco="{{ $tutor->endereco }}"
                >
                    <td>
                        {{ $tutor->nome_completo }}<br>
                        {{ $tutor->email }}
                    </td>
                    <td>{{ $tutor->endereco }}</td>
                    <td>{{ $tutor->pets()->count() }}</td>
                    <td>
                        <a href="/tutores/{{ $tutor->id }}">Editar</a><br>
                        <a href="#" onclick="removerTutor({{ $tutor->id }},'{{ $tutor->nome_completo }}')">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </div>
    </div>
    <script>
        function removerTutor(tutorId, nomeTutor) {
            const vaiRemover = confirm(`Tem certeza que deseja remover o tutor ${nomeTutor}?`);

            if (vaiRemover) {
                window.open(`/tutores/${tutorId}/remover`, '_self');
            }
        }

        function buscarTutor() {
            const pesquisa = document.getElementById("pesquisa").value.trim().toLowerCase();
            const tutores = document.getElementsByClassName("tutor-tr");

            for (let tutorTr of tutores) {
                tutorTr.classList.remove("d-none");
                const { nome, endereco, email } = tutorTr.dataset;
                const temNome = nome.toLowerCase().search(pesquisa) > -1;
                const temEndereco = endereco.toLowerCase().search(pesquisa) > -1;
                const temEmail = email.toLowerCase().search(pesquisa) > -1;

                if (!temNome && !temEndereco && !temEmail) {
                    tutorTr.classList.add("d-none");
                }
            }
        }
    </script>
</body>

@endsection