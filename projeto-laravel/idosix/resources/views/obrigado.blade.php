@extends('layout.layout')
@section('content')
<main class="container-fluid">
  <div class="row justify-content-around" class="Obrigado">
    <div class="col-6">
      <h2 class="content-txt">Obrigado!</h2>
    </div>
    <img class="content-txt-img" src="./assets/images/curved-lines.svg">
  </div>
    <div class="row justify-content-around">
        <div class="col-7">
            <h2 class="conteudo">Agendamento confirmado!</h2>
      </div>
	<div class="col-7">
            <p class="card-text conteudo">Nosso profissional irá se apresentar no horário e data marcados.</p>
      </div>
	<div class="col-7">
            <p class="conteudo">Não se esqueça de comunicar o cancelamento com antecedência caso ocorra algum problema.</p>
      </div>
	<div class="col-7">
            <p class="conteudo">A equipe !dosix agradece.</p>
      </div>
    </div>
</main>
@endsection