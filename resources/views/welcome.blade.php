@extends('layouts.main')

@section('title', 'Home')

@section('content')

<!--main-->

<body>
    <div class="main">
        <div class="card-header ">
            <h5 class="m-0 font-weight-bold text-primary">Dashboard</h5>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Name do Tutor</th>
                    <th>Endereço</th>
                    <th>Nome do Animal</th>
                    <th>Raça</th>
                </tr>
            </thead>
    </div>
    </div>
</body>
@endsection