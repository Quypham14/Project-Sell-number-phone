<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mangdemo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $mang3 = array('sv01' => 'viet','sv02'=>'hung','svss'=>'hieu');
		// //echo $mang3['sv02'];
		// //để duyệt mảng này dùng vòng lặp foreach
		// foreach ($mang3 as $key => $value) {
		// 	// code...
		// 	echo "<pre>";
		// 	echo "Key :$key";
		// 	echo "</pre>";
		// 	echo "<pre>";
		// 	echo "Value :$value";
		// 	echo "</pre>";
		// }
		$thuc_don = array(
			'an_sang' =>array(
				'khai_vi'=> array(
					'sup'=>"luon",
					'ruou'=>"vodka",
				),
				'mon_chinh'=> array(
					'com'=>"com rang",
					'pho'=>"pho bo"
				)
			),
			'an_trua' =>array(
				'khai_vi'=> array(
					'sup'=>"rong bien",
					'ruou'=>"Champanh",
				),
				'mon_chinh'=> array(
					'com'=>"com cuon",
					'pho'=>"pho ga"
				)
			),
			'an_toi' =>array(
				'khai_vi'=> array(
					'salad'=>"rau song",
					'ruou'=>"nep",
				),
				'mon_chinh'=> array(
					'com'=>"com rang",
					'pho'=>"pho cuon"
				)
			)
		);
		//duyet cac phan tu trong mang
		foreach ($thuc_don as $key => $value) {
			// code...
			echo "<pre>";
			echo "Key : $key";
			echo "</pre>";
			foreach ($value as $key2 => $value2) {
					// code...
				echo "<pre>";
				echo "Key2 la: $key2";
				echo "</pre>";
				foreach ($value2 as $key3 => $value3) {
						// code...
					
					echo "Key3 la: $key3";
					echo "Value3 la: $value3";
				}
				
			}
		}
	}

}

/* End of file mangdemo.php */
/* Location: ./application/controllers/mangdemo.php */