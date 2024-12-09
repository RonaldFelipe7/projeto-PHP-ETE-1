    <div class="container">
        <header class="header">
        <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
            <div class="headerBtnGroup">
            <?php include_once("menuTopo.php");?>
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
        <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
        <p class="sectionDescription">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
            preferido.</p>
        <section class="gridContainer">
            <div class="mainContent">
                <div class="categoryCard">
                    <img src="./assets/uploads/<?=$noticia['img']?>" alt="mainCardImg" class="mainCardImg">
                    <h1 class="mainCategoryCardTitle"><?=$noticia['titulo']?></h1>
                    <p class="mainCategoryCardDescription" Align="justify">
                        <?=$noticia['descricao']?>
                    </p>
                </div>
            </div>
        </section>
        <section >
            <div>
                <?php 
                    foreach($noticiasPorCategoria as $noticia_categoria):
                    ?>
                    <a class="pag-link" href="<?=constant('URL_LOCAL_SITE_DETALHE').$noticia_categoria['id']?>">
                    <div class="categoryCard2">
                        <img src="./assets/uploads/<?=$noticia_categoria['img']?>" alt="mainCardImg" class="mainCardImg2" width=150px height=150px>
                        <p class="mainCategoryCardTitle"><?=$noticia_categoria['titulo']?></p>
                        <p class="mainCategoryCardDescription"><?= reduzirStr($noticia_categoria['descricao'],180)?></p>
                    </div>
                    </a>
                <?php endforeach?>
            </div>
        </section>
        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>
    