<?php
add_theme_support('menus');
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home()
{
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Seção 1',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Principal',
        'id' => 'tituloh1',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Onde eu trabalho atualmente',
        'id' => 'trabalho_atual',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Imagem Principal',
        'id' => 'imagem_principal',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);

    //Seção 2 working on

    $cmb = new_cmb2_box([
        'id' => 'working_on',
        'title' => 'Seção 2',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título da seção 2',
        'id' => 'titulo_secao2',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Título trabalho',
        'id' => 'titulo_trabalho',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Texto trabalho',
        'id' => 'texto_trabalho',
        'type' => 'textarea',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Link para o Figma',
        'id' => '_Figma',
        'type' => 'text_url',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Imagem Trabalho',
        'id' => 'imagem_trabalho',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);

    //Seção 3 - Random Works
    $cmb = new_cmb2_box([
        'id' => 'random_works',
        'title' => 'Seção 3',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título da seção 3',
        'id' => 'titulo_secao3',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Imagem 1 Random Works',
        'id' => 'imagem_random1',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => 'Imagem 2 Random Works',
        'id' => 'imagem_random2',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);

    //Seção 4 - Footer
    $cmb = new_cmb2_box([
        'id' => 'footer',
        'title' => 'Footer Typer',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Chamada para novos projetos',
        'id' => 'titulo_footer',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Textos para o Typer',
        'id' => 'textos_typer',
        'type' => 'text',
        'attributes' => array()
    ]);


    //Seção 4 - Footer Coluna 1
    $cmb = new_cmb2_box([
        'id' => 'footer_col1',
        'title' => 'Footer Coluna 1',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Titulo coluna 1 - Footer',
        'id' => 'titulo_col1_footer',
        'type' => 'text',
        'attributes' => array()
    ]);

    $cmb->add_field([
        'name' => 'Imagem 1 Footer coluna 1',
        'id' => 'imagem1_footer',
        'type' => 'file',
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => 'Imagem 2 Footer coluna 1',
        'id' => 'imagem2_footer',
        'type' => 'file',
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => 'Imagem 3 Footer coluna 1',
        'id' => 'imagem3_footer',
        'type' => 'file',
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => 'Imagem 4 Footer coluna 1',
        'id' => 'imagem4_footer',
        'type' => 'file',
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);


    //Seção 4 - Footer Coluna 2
    $cmb = new_cmb2_box([
        'id' => 'footer_col2',
        'title' => 'Footer Coluna 2',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);
    $cmb->add_field([
        'name' => 'Titulo coluna 2 - Footer',
        'id' => 'titulo_col2_footer',
        'type' => 'text',
        'attributes' => array()
    ]);
    $group_field_id = $cmb->add_field(array(
        'name' => 'Links de contato',
        'id'          => 'links',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Link {#}', 'cmb2'),
            'add_button'        => __('Adicionar outro link', 'cmb2'),
            'remove_button'     => __('Remover link', 'cmb2'),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Nome do link',
        'id'   => 'nome',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'URL',
        'id'   => 'url',
        'type' => 'text_url',
    ));



    //Seção 4 - Footer Coluna 3
    $cmb = new_cmb2_box([
        'id' => 'footer_col3',
        'title' => 'Footer Coluna 3',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);
    $cmb->add_field([
        'name' => 'Titulo coluna 3 - Footer',
        'id' => 'titulo_col3_footer',
        'type' => 'text',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Imagem Livro 1',
        'id' => 'imagem_livro1',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => ' livro 1',
        'id' => '_livro1',
        'type' => 'text_url',
        'attributes' => array()
    ]);
    $cmb->add_field([
        'name' => 'Imagem Livro 2',
        'id' => 'imagem_livro2',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'attributes' => array(),
        'query_args'   => array(
            'type' => array(
                'image/svg',
            ),
        ),
    ]);
    $cmb->add_field([
        'name' => ' livro 2',
        'id' => '_livro2',
        'type' => 'text_url',
        'attributes' => array()
    ]);
}
