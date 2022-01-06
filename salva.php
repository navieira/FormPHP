<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>
            <strong>Mini Horta</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

  <main>
    <div class="py-5 bg-light">
      <div class="container">
        <h1>Teste do Formulário</h1>
      </div>

      <div class="container"></div>

      <form action="salva.php" method="post">
       <div class="campo">
        <label for="N°">N°</label>
        <input type="text" class="form-control"  required >
       </div>

       <div class="campo">
        <label for="firma">Firma</label>
        <input type="text" class="form-control" required >
    </div>
     
      

      <div class="campo">
       <label for="data">Data</label>
       <input type="date", name="date", id="date", size="20">
      </div>

      <div class="col-12">
       <label for="inputComplemento" class="form-label">Endereço</label>
       <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Voluntários da Pátria" required>
      </div>

      <div class="col-12">
       <label for="inputComplemento" class="form-label">Complemento</label>
       <input type="text" class="form-control" id="inputComplemento" placeholder="Número, Apartamento, Comdominio" required>
      </div>

      <div class="col-md-6">
       <label for="inputCidade6" class="form-label">Cidade</label>
       <input type="text" class="form-control" id="inputCidade6">
      </div>

  <div class="col-md-4">
    <label for="inputUF" class="form-label">UF</label>
    <select id="inputUF" class="form-select" required>
      <option value="">Selecione</option>
      <option value="AC">Acre</option>
      <option value="AL">Alagoas</option>
      <option value="AP">Amapá</option>
      <option value="AM">Amazonas</option>
      <option value="BA">Bahia</option>
      <option value="CE">Ceará</option>
      <option value="DF">Distrito Federal</option>
      <option value="ES">Espirito Santo</option>
      <option value="GO">Goiás</option>
      <option value="MA">Maranhão</option>
      <option value="MS">Mato Grosso do Sul</option>
      <option value="MT">Mato Grosso</option>
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


  <div class="col-md-6">
    <label for="inputCEP2" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCEP2" required>
   </div>

   <div class="col-md-6">
    <label for="inputCNPJ" class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="inputCNPJ" required>
   </div>

   <div class="col-md-6">
    <label for="inputInscr3" class="col-sm-2 col-form-label">Inscr</label>
    <input type="text" class="form-control" id="inputInscr3" required>
   </div>   


   <div class="col-md-6">
    <label for="inputTel3" class="col-sm-2 col-form-label">Tel</label>
      <input type="tel" class="form-control" id="inputTel3" required>
    </div>

    <div class="col-md-6">
      <label for="inputCelular3" class="col-sm-2 col-form-label">Celular</label>
      <input type="tel" class="form-control" id="inputCelular" required>
      </div>

      <div class="col-md-6">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" required>
        </div>


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirma-me
      </label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
        
    


  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>