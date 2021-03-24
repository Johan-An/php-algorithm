<?php
class cup {
    // 名称
    public $name;
    // 材质
	public $material;
	// 颜色
	public $color;
	// 容量
	public $volume;
	// 重量
	public $weight;
	// 合格标准
	public static $standard = [
		// 塑料杯
		"plastic"  => 1,
		// 玻璃杯
		"glass"    => 2,
		// 陶瓷杯
		"ceramics" => 3
	];
	CONST CUP_HEIGNT = 20;
	// 构造
	public function __construct($name, $material, $color = "", $volume = "", $weight = "")
	{
		$this->name     = $name;
		$this->material = $material;
		$this->color    = $color;
		$this->volume   = $volume;
		$this->weight   = $weight;
	}
}

$cup1 = new cup("cup1", "plastic");
$cup1->color = "red";
var_dump($cup1);
var_dump(cup::$standard['plastic']);