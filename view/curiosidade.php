<div class="container">
    <header class="header">
      <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
      <div class="headerBtnGroup">
      <?php include_once("menuTopo.php");?>
        <div>
          <input type="checkbox" class="check" id="chk" />
        
          <label class="label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="bola"></div>
          </label>
        </div>
      </div>
      <div class="hamburguer-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </header>
    <section class="main">
      <div class="box-content">
        <form method="POST" action="#">
          <h1>Curiosidades Esportivas!</h1>
          <div class="name">
            <label for="nome"></label>
            <input type="text" placeholder="titulo da sua Curiosidades" id="nome" name="titulo" >
            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">titulo da sua Curiosidades</p>
            
            <input type="text" placeholder="Cadastre sua Curiosidades Aqui" id="nome" name="curiosidade" >
            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Cadastre sua Curiosidades Aqui</p>
            <label for="nome"></label>
          </div>
          
          <button class="btn-concluir">Concluir</button>

        </form>
      </div>
    </section>
    <footer class="footer">
      <span>Info Sports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>
