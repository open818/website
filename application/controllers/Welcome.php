<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$head = [
			'website'	=> '微节点',
			'page_title'		=> '首页',
		];

        $header = [
            'max_height'    => 75,
            'padding_top'    => 10,
            'padding_bottom'    => 10,
            'background_color'  => '#FFFFFF',
            'position'  => 'fixed',
            'logo'  =>[
                'padding_left' => 100,
                'height'    => 55
            ],
            'menus'  =>[
                ['name'=>'首页','font_color'=>'#000000','hover_background_color'=>'#2E96D7','url'=>'/'],
                ['name'=>'联系我们','font_color'=>'#000000','hover_background_color'=>'#2E96D7','url'=>'#footer'],
            ]
        ];

        $banner = [
            'padding_top'=>75,
            'time'=>3000,
            'items'=>[
                [
                    'img'   => '/resource/img/upload/banner01.jpg',
                    'url'=>'http://www.baidu.com',
                ],
                [
                    'img'   => '/resource/img/upload/banner02.jpg',
                    'url'=>'',
                ],
                [
                    'img'   => '/resource/img/upload/banner03.jpg',
                    'url'=>'',
                ],
            ]
        ];


		$this->load->view('templates/head', $head);
		$this->load->view('templates/header', $header);
        $this->load->view('templates/banner', $banner);

        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/zp01.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/zp02.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/zp03.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/zp04.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/bbb.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%" src="/resource/img/upload/zp06.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);
        $standard = [
            'background_color'  => '#526678',
            'content'   => '<img style="max-width:100%;max-height: 100%;"  src="/resource/img/upload/zp07.jpg" alt="">'
        ];
        $this->load->view('templates/standard', $standard);

        $footer = [
            'name'  => 'footer',
            'background_color'  => '#000000',
            'theme' => '01',
            'items'  =>[
                ['icon'=>'glyphicon glyphicon-map-marker','icon_color'=>'#E96656','text'=>'深圳市宝安区定军山电影文化创意园2期博智中心大楼816','href'=>''],
                ['icon'=>'glyphicon glyphicon-envelope','icon_color'=>'#34D293','text'=>'394922275@qq.com','href'=>''],
                ['icon'=>'glyphicon glyphicon-earphone','icon_color'=>'#3AB0E2','text'=>'18520897604（彭先生）','href'=>''],
                ['icon'=>'glyphicon glyphicon-user','icon_color'=>'#AFA6F9','text'=>'网站开发者<br>QQ:137162562','href'=>''],
            ],
            'copyright' => '©2016-2017&nbsp;深圳微节点文化科技有限公司'
        ];

		$this->load->view('templates/footer', $footer);
		$this->load->view('templates/foot');
	}
}
