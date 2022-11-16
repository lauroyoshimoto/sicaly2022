@extends('layouts.main')

@section('title', 'register')

@section('content')

<body>
    <!--main-->
    <div class="main">
        <a href="/tutores">
            <div class="topbar">
                <div class="toggle">
                <ion-icon name="arrow-back"></ion-icon>
                </div>
        </a>
    </div>
    <div class="content px-4 py-4">
        <form class="form.cadastro" action="{{ !!$tutor ? '/tutores/'. $tutor->id : '/tutores/cadastro' }}" method="POST">
            @csrf {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="José"
                        name="nome_completo"
                        required
                        value="{{ $tutor->nome_completo ?? '' }}"
                    />
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="josedias@email.com" required value="{{ $tutor->email ?? '' }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="123@abc" required value="{{ $tutor->senha ?? '' }}">
                </div>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" placeholder="Av Vinicius de Morais, 25" required value="{{ $tutor->endereco ?? '' }}">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Jardim Residencial Vilar I" value="{{ $tutor->bairro ?? '' }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Complemento</label>
                    <input type="text" name="complemento" class="form-control" placeholder="Apartamento, casa, sítio..." value="{{ $tutor->complemento ?? '' }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Nome da cidade" value="{{ $tutor->cidade ?? '' }}">
                </div>

                <div class="form-group col-md-4">
                    <label>Estado</label>
                    <select name="estado" class="form-control" required value="{{ $tutor->estado ?? '' }}">
                        <option selected hidden>Escolha...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>Cep</label>
                    <input name="cep" type="text" class="form-control" required value="{{ $tutor->cep ?? '' }}">
                </div>

                <div class="form-group col-md-6">
                    <label>Data de Nascimento</label>
                    <input name="nascimento" type="date" class="form-control" required value="{{ $tutor->nascimento ?? '' }}">
                </div>

                <div class="form-group col-md-6">
                    <label>Sexo</label><br>
                    <label for="masculino">Masculino</label>
                    <input name="sexo" type="radio" value="M" {{ $tutor && $tutor->sexo == 'M' ? 'checked' : '' }} id="masculino">

                    <label for="feminino">Feminino</label>
                    <input name="sexo" type="radio" value="F" {{ $tutor && $tutor->sexo == 'F' ? 'checked' : '' }} id="feminino">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </div>

    </div>
</body>
@endsection