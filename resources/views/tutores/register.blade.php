@extends('layouts.main')

@section('title', 'register')

@section('content')

<body>
    <!--main-->
    <div class="main">
        <a href="/">
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
    <div class="content px-4 py-4">
        <form class="form.cadastro">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome</label>
                    <input type="text" id="inputName" class="form-control" placeholder="José" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSurname">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSurname" placeholder="Dias" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="josedias@email.com" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="123@abc" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Av Vinicius de Morais, 25" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Jardim Residencial Vilar I">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress2">Complemento</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, sítio...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <select id="inputState" class="form-control" required>
                        <option selected hidden>Escolha...</option>
                        <option value="Votuporanga">Votuporanga</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" required>
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
                    <label for="inputCep">Cep</label>
                    <input type="text" class="form-control" id="inputCep" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome do animal</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Sofia" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSurname">Raça</label>
                    <input type="text" class="form-control" id="inputSurname" placeholder="Duchshund" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputBirthDate">Data Nascimento</label>
                    <input type="date" class="form-control" id="inputBirhDate" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">MICROCHIP ID</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="123@abc" required>
                </div>
            </div>



            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <input type="text" name="" id="">


    </div>
    </div>

    </div>
</body>
@endsection