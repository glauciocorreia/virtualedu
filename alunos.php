<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VirtualEdu | Início</title>

  <!-- CSS Principal -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Bootstrap 4 + Jquery -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!---->
  <!-- Font Awesome 5.5.0 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <!---->
</head>

<body>
  <?php include 'header.php' ?>
  <?php include 'sidebar.php' ?>

  <section class="sectionVirtualEdu">
    <div class="container">
      <div class="row">
        <div class="col-12 pl-3 mt-5">
          <h1>ALUNOS</h1>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center mt-5 mb-5">
        <button type="button" name="addAluno" id="addAluno" class="addButton btn btn-primary btn-lg btn-block">Adicionar
          Aluno</button>
      </div>
      <div id="accordion" class="listaElementos">
        <div class="card">
          <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <h5 class="mb-0">
              Junin de Mirajimbomba de Cruzes
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="col-12 d-flex">
                <div class="col-9">
                  <p>
                    Matrícula:<br />
                    <span>18536214</span>
                  </p>
                  <p>
                    CPF:<br />
                    <span>088.654.985-12</span>
                  </p>
                  <p>Nome do Pai:<br>
                    <span>Adamastor de Princesa</span>
                  </p>
                  <p>Nome da Mãe:<br>
                    <span>Princesa de Adamastor</span>
                  </p>
                  <p>Data de Nascimento:<br>
                    <span>01/05/1999</span>
                  </p>
                  <p>Turma:<br>
                    <span>1</span>
                  <p>
                </div>
                <div class="col-3">
                  <button type="button" name="editAluno" id="editAluno" class="btn btn-info btn-xs btn-block">Editar</button>
                  <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <h5 class="mb-0">
              Mélquias de Forganso
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <div class="col-12 d-flex">
                <div class="col-9">
                  <p>
                    Matrícula:<br />
                    <span>18536214</span>
                  </p>
                  <p>
                    CPF:<br />
                    <span>088.654.985-12</span>
                  </p>
                  <p>Nome do Pai:<br>
                    <span>Adamastor de Princesa</span>
                  </p>
                  <p>Nome da Mãe:<br>
                    <span>Princesa de Adamastor</span>
                  </p>
                  <p>Data de Nascimento:<br>
                    <span>01/05/1999</span>
                  </p>
                  <p>Turma:<br>
                    <span>1</span>
                  <p>
                </div>
                <div class="col-3">
                  <button type="button" name="editAluno" id="editAluno" class="btn btn-info btn-xs btn-block">Editar</button>
                  <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <h5 class="mb-0">
              Joanita de João Joelio
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <div class="col-12 d-flex">
                <div class="col-9">
                  <p>
                    Matrícula:<br />
                    <span>18536214</span>
                  </p>
                  <p>
                    CPF:<br />
                    <span>088.654.985-12</span>
                  </p>
                  <p>Nome do Pai:<br>
                    <span>Adamastor de Princesa</span>
                  </p>
                  <p>Nome da Mãe:<br>
                    <span>Princesa de Adamastor</span>
                  </p>
                  <p>Data de Nascimento:<br>
                    <span>01/05/1999</span>
                  </p>
                  <p>Turma:<br>
                    <span>1</span>
                  <p>
                </div>
                <div class="col-3">
                  <button type="button" name="editAluno" id="editAluno" class="btn btn-info btn-xs btn-block">Editar</button>
                  <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

</body>

</html>