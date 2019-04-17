    <nav class="navbar navbar-expand-lg navbar-light d-md-block">
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Equipe Escolar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Documentos</a>
                </li>
            </ul>
        </div>
    </nav>
    <img class="mx-auto d-none d-lg-block d-xl-block" src="<?= get_template_directory_uri() ?>/img/header-1000.png" />
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/" aria-expanded="false"><img src="<?= get_template_directory_uri() ?>/img/logo-etec.png" height="48px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown-cursos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown-cursos">
                <?php foreach(get_categories(['child_of' => get_category_by_slug('cursos')->term_id]) as $category): ?>
                <h6 class="dropdown-header"><?= $category->name ?></h6>
                    <?php foreach(get_posts(['category_name' => $category->name]) as $post): setup_postdata($post) ?>
                    <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php wp_reset_postdata(); ?>
                    <?php endforeach ?>
                <?php endforeach ?>

                <!-- <h6 class="dropdown-header">Ensino Médio</h6>
                <a class="dropdown-item" href="#">ETIM - Administração</a>
                <a class="dropdown-item" href="#">ETIM - nformática para Internet</a>
                <h6 class="dropdown-header">Ensino Técnico</h6>
                <a class="dropdown-item" href="#">Contabilidade</a>
                <a class="dropdown-item" href="#">Desenvolvimento de Sistemas</a>
                <a class="dropdown-item" href="#">Enfermagem</a>
                <a class="dropdown-item" href="#">Informática para Internet</a>
                <a class="dropdown-item" href="#">Recursos Humanos</a>
                <a class="dropdown-item" href="#">Serviços Jurídicos</a> -->
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown-noticias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notícias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown-noticias">
                <a class="dropdown-item" href="#">Eventos</a>
                <a class="dropdown-item" href="#">Palestras</a>
                <a class="dropdown-item" href="#">Visitas Técnicas</a>
                <a class="dropdown-item" href="#">Variedades</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Projetos</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown-mercado" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mercado de Trabalho</a>
            <div class="dropdown-menu" aria-labelledby="dropdown-mercado">
                <a class="dropdown-item" href="#">Cursos On-Line</a>
                <a class="dropdown-item" href="#">Teste Vocacional</a>
                <a class="dropdown-item" href="#">Vagas de Estágio</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contatos</a>
            </li>
        </ul>

        <ul class="navbar-nav d-lg-none">
            <li class="nav-item">
            <a class="btn btn-outline-light" href="/">Home</a>&nbsp;
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Biblioteca</a>&nbsp;
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Equipe Escolar</a>&nbsp;
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Documentos</a>&nbsp;
            </li>
        </ul>
        </div>
    </nav>