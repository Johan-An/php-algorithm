<?php

class Student 
{
	protected $name = 'aaa';
	private   $age  = 18;
	// 获取名称
	public function getName()
	{
		return $this->name;
	}
	// 获取年龄
	public function getAge()
	{
		return $this->age;
	}
	// 魔术方法
	public function __set($property, $value)
	{
		$this->$property = $value;
	}
}

$person = new Student();
// 尝试赋值
$person->name = 'bbb'; // 没使用__set()时： PHP Fatal error:  Uncaught Error: Cannot access protected property Person::$name
$person->age  = 20;       // 没使用__set()时： PHP Fatal error:  Uncaught Error: Cannot access private property Person::$age
//输出
echo $person->getName();
echo PHP_EOL;
echo $person->getAge(); 
echo '---------------------------------------------------' . PHP_EOL;
class Collage
{
	protected $name = '北大';
	private   $location = '北京';
	// 获取名称
	public function getName()
	{
		return $this->name;
	}
	// 获取地点
	public function getLocation()
	{
		return $this->location;
	}
}


function initReferenceAttr(&$reference, $arr)
{
	
    if(!is_object($reference))
    {
        throw new Exception('reference must be object');
    }

    if(!is_array($arr))
    {
        throw new Exception('arr must be array');
    }
	
	$cls = get_class($reference);
	$reflectCls = new ReflectionClass ($cls); // 获取类的反射
 
    foreach($arr as $key => $val)
    {
        $pro = $reflectCls->getProperty($key); // 获取属性
		if($pro && ($pro->isPrivate() || $pro->isProtected())){
			$pro->setAccessible(true); // 设置属性为可访问的
			$pro->setValue($reference, $val); // 设置值
		}else{
			$reference->$key = $val;
		}
    }

    return true;
}

$school = new Collage();

$attr = ['name' => '复旦', 'location' => '上海'];

initReferenceAttr($school, $attr);

echo $school->getName();
echo PHP_EOL;
echo $school->getLocation(); 