<?php

	function func($res)
	{
		switch($res){
			case 1:
				return '管理员';
				break;
			case 0:
				return '用户';
				break;
			default;
				return '未知状态';
				break;
		}

	}

	function funs($re)
	{
		switch($re){
			case 1:
				return '月牙白';
				break;
			case 2:
				return '玫瑰金';
				break;
			case 3:
				return '星际蓝';
				break;
			case 4:
				return '星空黑';
				break;
			case 5:
				return '月光银';
				break;
			case 6:
				return '粉色';
				break;
			case 7:
				return '香槟金';
				break;
			case 8:
				return '红色';
				break;	
			
		}
	}
	function funct($res)
	{
		switch($res){
			case 1:
				return '正常状态';
				break;
			case 2:
				return '激活状态';
				break;
			default;
				return '未知状态';
				break;
		}

	}

	function funcs($arr)
	{
		switch($arr){
			case 0:
				return '未发货';
				break;
			case 1:
				return '已发货';
				break;
			case 2:
				return '已收货';
				break;
			default;
				return '未知状态';
				break;
		}




	}

	function funcsa($arr)
	{
		switch($arr){
			case 1:
				return '正常';
				break;
			case 0:
				return '维护';
				break;
			
			default;
				return '未知状态';
				break;
		}

	}
	/**
	 * 通过id获取地址的名称
	 */
	
	function getName($id)
	{
		$res = DB::table('meizu_city')->where('id', $id)->first();
		return $res->name;
	}


	/**
	*获取密码附加随机字符
	*
	*/
	 function getPasswordRandStr($length = 8)
	{
		$getPasswordRandStr = '';
		$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
			
		for ($i=0; $i < $length  ; $i++) { 
			$getPasswordRandStr .=  $str[rand(0,strlen($str)-1)];
		}

		return $getPasswordRandStr;
	}

	/**
	*  生成订单号,
	*
	*/
	function getOrderNumber(){
		$time = time();
		$rand = rand(10,99);
		$id = 100000 + session('uid');
		$orderId = $time.$rand.$id;
		return $orderId;
	}

	/**
	*获取guid
	*
	*/
	function guid() {    
    if (function_exists('com_create_guid')) {        
        return com_create_guid();    
    } else {     
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true))); 
        $hyphen = chr(45);        
        $uuid   = chr(123)            
                 .substr($charid, 0, 8).$hyphen               
                 .substr($charid, 8, 4).$hyphen            
                 .substr($charid,12, 4).$hyphen            
                 .substr($charid,16, 4).$hyphen            
                 .substr($charid,20,12)            
                 .chr(125);
        return $uuid;    
    }
}

	