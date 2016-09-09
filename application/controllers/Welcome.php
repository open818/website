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
            'background_color'  => '#F0000F',
            'position'  => 'fixed',
            'logo'  =>[
                'padding_left' => 100,
                'height'    => 75
            ],
            'menu'  =>[
                ['name'=>'菜单一','url'=>''],
                ['name'=>'菜单二','url'=>''],
                ['name'=>'菜单三','url'=>''],
                ['name'=>'菜单四','url'=>''],
                ['name'=>'菜单五','url'=>''],
            ]
        ];

        $banner = [
            'time'=>1000,
            'items'=>[
                [
                    'img'   => '/resource/img/banner-20160810.jpg',
                    'content'   => 'fadfasdfs',
                    'button'   => ['name'=>'按钮一','url'=>''],
                ],
                [
                    'img'   => '/resource/img/banner-20160810.jpg',
                    'content'   => 'fadfasdfs',
                    'button'   => ['name'=>'按钮二','url'=>''],
                ],
                [
                    'img'   => '/resource/img/banner-20160810.jpg',
                    'content'   => 'fadfasdfs<br/>',
                    'button'   => ['name'=>'按钮三','url'=>''],
                ],
            ]
        ];

		$this->load->view('templates/head', $head);
		$this->load->view('templates/header', $header);
        $this->load->view('templates/banner', $banner);
		$this->load->view('templates/footer');
		$this->load->view('templates/foot');
	}
}
