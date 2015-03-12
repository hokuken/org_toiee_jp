<?php
/**
*  haik テーマでカスタマイズ可能にするための定義
*
*
*/

return array (
	'bootstrap' => true,
	'default_layout' => "content",
	'content_layout' => "default",
	'article_layout' => "article",
	'fullpage_layout' => "fullpage",
	'custom_options' => array(
		'logo_text' =>	array(
			'type'			=> 'text',
			'value'			=> 'HAIK',

			'title'			=> 'ロゴテキスト',
			'description'	=> 'ロゴ部分に使うテキスト（任意）です',
		),
		'logo_type' => array(
			'type'		=> 'if',
			'value'		=> FALSE,

			'title'		=> 'ロゴ画像を使う',
			'description'	=> 'ロゴ画像を使用する設定になります'
		),
		'logo_img' => array(
			'type'			=> 'img',
			'value'			=> '',

			'title'			=> 'ロゴ画像',
			'description'	=> 'ロゴ部分に使う画像（任意）です',
			'follow'		=> 'logo_type',
		),

		'spacer1' => array('type' => 'spacer'),
		
		'default_eyecatch' => array(
			'type'        => 'if',
    			'value'       => TRUE,
    			'title'       => 'アイキャッチ',
			 'description' => 'ページタイトルを入れたアイキャッチを自動で表示する場合、有効にしてください',
		),
		'eyecatch_bgimage' => array(
    			'type'        => 'select_img',
    			'value'       => '//hokuken.sakura.ne.jp/qhmhaik/images/default-img01.jpg',
    			'title'       => 'アイキャッチ画像',
    			'description' => 'デフォルトアイキャッチの背景画像に使用する画像を指定できます',
    			'follow'      => 'default_eyecatch',
		),
		'eyecatch_color' => array(
    			'type'        => 'color',
    			'value'       => '#333',
    			'title'       => 'アイキャッチ文字色',
			'description' => 'デフォルトアイキャッチの文字色を指定できます',
			'follow'      => 'default_eyecatch',
		),

		'eyecatch_type' => array(
			'type'			=> 'if',
			'value'			=> TRUE,

			'title'			=> '専用のアイキャッチデザインを使う',
			'description'	=> 'ikk専用のアイキャッチデザインを使用します',
		),

		'spacer2' => array('type' => 'spacer'),

		'body_font'	=> array(
			'type'			=> 'font',
			'value'			=> '"ヒラギノ角ゴ ProN","Hiragino Kaku Gothic ProN","MS ゴシック","MS Gothic","MS Pゴシック","MS PGothic","メイリオ","Meiryo",sans-serif',
			'options'		=> array(
								 '"ヒラギノ角ゴ ProN","Hiragino Kaku Gothic ProN","MS ゴシック","MS Gothic","MS Pゴシック","MS PGothic","メイリオ","Meiryo",sans-serif',
								 '"ヒラギノ明朝 ProN","Hiragino Mincho ProN","MS P明朝","MS PMincho","MS 明朝","MS Mincho",serif',
								 '"ヒラギノ丸ゴ ProN","Hiragino Maru Gothic ProN", "メイリオ","Meiryo",sans-serif',
								),

			'title'			=> 'フォント',
			'description'	=> 'ロゴ部分に使う画像（任意）です',
		),

		'divider1' => array('type' => 'divider'),




		'custom_color_enable' => array(
			'type'	=> 'if',
			'value'	=> FALSE,

			'title'	=> 'カスタム色設定',
			'description'	=> 'サイトの色設定を設定します',
		),
		'body_base_color' => array(
			'type'		=> 'color',
			'value'		=> '#ffffff',

			'title'		=> '背景色',
			'description'	=> '背景の色を指定します',
			'follow'	=> 'custom_color_enable',
		),
		'nav_base_color' => array(
			'type'		=> 'color',
			'value'		=> '#ffffff',

			'title'		=> 'ナビの背景色',
			'description'	=> '背景の色を指定します',
			'follow'	=> 'custom_color_enable',
		),
		'footer_base_color' => array(
			'type'		=> 'color',
			'value'		=> '#ffffff',

			'title'		=> 'フッターの背景色',
			'description'	=> '背景の色を指定します',
			'follow'	=> 'custom_color_enable',
		),

		'spacer3' => array('type' => 'spacer'),

	)
);
