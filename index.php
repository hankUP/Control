<?php
require_once "Configuracoes/Global.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/favicon.ico"></link>
    <link rel="stylesheet" href="Css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="Js/functions.js"></script>
    <title><?=TITULO_HOME?></title>
</head>
<body>
<section>
<script type="text/javascript">
    $(window).on('load',function(){
    $('#modalExemplo').modal('show'); });
</script>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seja bem vindo(a)!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Olá, seja muito bem vindo(a), este é um site criado com o único intuito de testar minhas habilidades.
        Caso tenha interesse, você pode acessar o código fonte deste projeto diretamente do meu GitHub: 
        Abraços!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</section>

<img loading="lazy" id="img_navbar" src="Img/control-2.png"><!--logo Navbar-->


<section class="container sticky-top"><!--NavBar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#topo">Control</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#sinopse">Sinopse <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#imagens">Imagens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#impressoes">Impressões</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <section class="container"><!--Player de Áudio-->
          <div class="teste">
              <audio controls="controls">
                  <source src="audio/TakeControl.mp3" type="audio/mpeg">
                  Seu navegador não suporta o elemento de áudio.
              </audio>
          </div>
      </section><!--fim Player de Áudio-->
      </form>
    </div>
  </nav>
</section><!--Fim NavBar-->

<section class="container mb-5"><!--Conteudo sinopse-->
    <div id="sinopse">
        <h2 class="display-4">Sinopse</h2>
        <p class="text-justify lead text-center">Jesse Faden (Courtney Hope),
             após uma experiência traumática durante 
             sua infância lhe ter concedido poderes sobrenaturais, 
             procura respostas no Departamento Federal de Controle, 
             uma agência governamental clandestina encarregada de estudar 
             e conter fenômenos sobrenaturais. Quando a sede do Departamento, 
             chamada de Antiga Casa, é invadida por uma força estranha conhecida 
             apenas como Ruído, Jesse se transforma na diretora da agência por meio 
             de um processo ritualístico. Ela passa a ser assombrada pelo ex-diretor 
             Zachariah Trench (James McCaffrey) e deve encontrar seu caminho através dos 
             corredores da Antiga Casa a fim de derrotar o Ruído e descobrir as respostas para o mistério.</p>
            <span class="d-flex justify-content-center">
                <img class="img_edit" src="Img/jesse-tiro-na-cabeca.jpg">
            </span>
    </div>
</section><!--fim Conteudo sinopse-->

<section class="container" id="imagens"><!--Conteudo Imagens-->
    <div>
        <h2 class="display-4">Imagens</h2>
        <span class="d-flex justify-content-center">
            <img loading="lazy" class="img_edit" src="Img/gameplay-1.jpg">
        </span>
        <span class="d-flex justify-content-center">
            <img loading="lazy" class="img_edit" src="Img/gameplay-2.jpg">
        </span>
        <span class="d-flex justify-content-center">
            <img loading="lazy" class="img_edit" src="Img/gameplay-3.jpg">
        </span>
    </div>
</section><!--fim Conteudo Impressões-->

<section class="container mt-5" id="impressoes"><!--Conteudo Impressões-->
    <div>
        <h2 class="display-4">Minhas Impressões</h2>
        <p class="text-justify lead text-center">Sem dúvidas, <b>Control</b> é um dos melhores jogos já lançados,
        possui uma história cativante, e bem construída, a história tem um andamento de uma forma bem amigavel,
        que faz com que você nunca fique enjoado de jogar.<br><br>

        Entretando, <b>Control</b>, não tem apenas coisas boas, a movimentação do jogo é um pouco complicada,
        não a questão de física, mas sim uma questão geografica, inúmeras vezes eu me perdia, ou passava vários
        minutos procurando alguma entrada que estava do meu lado.<br><br>

        Falando sobre a física do jogo, eu achei bem impressionante, várias paredes podem ser quebradas,
        tanto por inimigos, quanto por você, seja com a telecinese, ou com as armas.<br><br>

        O sistema de combate do jogo também é muito bom, no ínicio você passa umas dificuldades, entretanto quando
        você pega o "jeito", fica muito mais fácil, mas não se engane, o jogo é é difícil, não uma dificuldade
        que te fará quebrar seu Pc, ou seu Console, mas os "Chefões" são bem fortes e únicos, além de ser
        extremanente gratificante derrotá-los.
        </p>
    </div>
</section><!--fim Conteudo Imagens-->

<footer id="rodape">
    <div class="container">
        <div class="row">
            <div class='col-md-6 justify-content-center mb-3'>
            <i class="text-light fab fa-github"></i> <a href="" class="text-light"> GITHUB</a>
            </div>
            <div class='col-md-6 mb-3'>
            <i class="fab fa-linkedin"></i><a href="" class="text-light"> LINKEDIN</a>
            </div>
            <div class="col-md-12">
                <p class="text-light text-center">Esse site foi feito com o único objetivo de estudos, e caso queira você pode utilizar os códigos como bem entender.
                </p>
            </div>
        </div><!--fim Row-->
    </div>
</footer>
    
</body>
</html>