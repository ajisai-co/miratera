<?php 
// 構造化データ用のJSON LDを作成する
// こちらのGoogle公式ドキュメントを参考
// https://developers.google.com/search/docs/advanced/structured-data/breadcrumb

function json_bread(){
    $position = 0;
    $json_ld = [];
    $schema_json = [];
    $queried_obj = get_queried_object();
    foreach(){
        $position++;
        $schema_json[] = [
            '@type'    => 'ListItem',
            'position' => $position,
            'item'     => [
                '@id'  => $data['url'], // ページのURL
                'name' => wp_strip_all_tags( $data['name'] ), // ページタイトル
            ],
        ];
    }

    // サイト トップページ情報を1階層目に入れる
    $schema_json[] = [
        '@type'    => 'ListItem',
        'position' => $position++,
        'item'     => [
            '@id'  => get_option( 'siteurl' ),
            'name' => get_option( 'blogname' ),
        ],
    ];

    if( is_front_page() ){

    }else if( is_home() ){

    }else if( is_archive() || is_home() ){

    }else if(  is_single() ){
        // 必要な情報を取得
        $single_id = $queried_obj->ID;
        $single_posttype = $queried_obj->post_type;

        if(  $single_posttype !== 'post'  ){
            // カスタム投稿の場合

            // カスタム投稿一覧ページ
            $schema_json[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'item'     => [
                    '@id'  => get_post_type_archive_link( $single_posttype ), // ページのURL
                    'name' => get_post_type_object( $the_post_type )->label, // ページタイトル
                ],
            ];

            // ターム情報を取得
            $terms_all = get_the_terms($single_id, $queried_obj->slug);
            // タームが設定されていたら、ターム一覧の階層を追加
            if( $terms_all !== false ){
                $schema_json[] = [
                    '@type'    => 'ListItem',
                    'position' => $position++,
                    'item'     => [
                        '@id'  => get_term_link($terms_all->slug), // ページのURL
                        'name' => $tax->name, // ページタイトル
                    ],
                ];
            }
        }else{
            // デフォルトの投稿タイプの場合
            // 投稿一覧ページの階層
            $schema_json[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'item'     => [
                    '@id'  => get_post_type_archive_link( 'post' ), // ページのURL
                    'name' => $tax->name, // ページタイトル
                ],
            ];
            // カテゴリ一覧ページの階層
            $terms_all = get_terms('category');
            $schema_json[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'item'     => [
                    '@id'  => get_term_link($terms_all->slug), // ページのURL
                    'name' => $terms_all->name, // ページタイトル
                ],
            ];
        }

        // 記事詳細ページの情報
        $schema_json[] = [
            '@type'    => 'ListItem',
            'position' => $position++,
            'item'     => [
                '@id'  => get_permalink($single_id), // ページのURL
                'name' => $queried_obj->post_title, // ページタイトル
            ],
        ];
    }else{

    }

    $json_ld = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $schema_json
    ];

    echo $json_ld;

?>