<?php
/*
* Neko Cart Class for CakePHP 3.x
* @Author: Novi
*/

namespace NekoCart;



class NekoCart{
	
	private $cart_name = 'neko_cart';
	private $remove_item_url='removecartitem';

	
	public function __construct(){
			session_start();
			$this->initializeCart();
	}

	public function test(){
		//just an annoying function anyways...
		echo 'Mabuhay Philippines!';
	}


	public function addItems($data){

	if(sizeof($_SESSION[$this->cart_name])==0){

			$_SESSION[$this->cart_name] = array();

			array_push($_SESSION[$this->cart_name], $data);

			$_SESSION['cart_count_items'] = (intval($_SESSION['cart_count_items'])+1);

			return 1;

		}
		else{
			array_push($_SESSION[$this->cart_name], $data);
			$_SESSION['cart_count_items'] = (intval($_SESSION['cart_count_items'])+1);

			return 1;
		}


	}

	public function cartItemCount(){
		return $_SESSION['cart_count_items'];
	}


	public function cartTotal(){
		
		$grand_total = 0;
		$payable_per_item = 0;


		foreach($_SESSION[$this->cart_name] as $index){
			
			if(isset($index[1]) && isset($index[2])){
				
				$payable_per_item = ($index[1] * $index[2]);
				$grand_total +=$payable_per_item;

			}
		}

		return $grand_total;

	}


	public function clearCart(){
		
		unset($_SESSION[$this->cart_name]);
		$_SESSION['cart_count_items'] = 0;
	}


	public function initializeCart(){

		if(!isset($_SESSION[$this->cart_name])){

            $_SESSION[$this->cart_name] = array();
            $_SESSION['cart_count_items'] = 0;
         }
	}

	public function removeItem($item_code){



		if($_SESSION['cart_count_items']==1){
			$this->clearCart();
		}else{
			
		unset($_SESSION[$this->cart_name][$item_code][0]);
		unset($_SESSION[$this->cart_name][$item_code][1]);
		unset($_SESSION[$this->cart_name][$item_code][2]);
		$_SESSION['cart_count_items'] = (intval($_SESSION['cart_count_items'])-1);	
		
		}
	}

	public function showItems(){

		$index =1;
		$item_index=0;
		
		$tpl = "<table border=0 id='neko_cart_table'>";
		$tpl .= "<thead>";
		$tpl .= "<tr>";
		$tpl .="<th> Item # </th>";
		$tpl .= "<th> Item Name </th>";
		$tpl .= "<th> Item Price </th>";
		$tpl .= "<th> Item Qty </th>";
		$tpl .="<th>Payable</th>";
		$tpl .="<th> Options </th>";
		$tpl .= "</tr>";
		$tpl .="</thead>";

		foreach($_SESSION[$this->cart_name] as $items){
		$item_index++;
		
		if(!isset($items[1]) && !isset($items[2])){

		}else{

			$tpl.="<tr>";
			$tpl.="<td>".$index++."</td>";
			$tpl.="<td>".$items[0]."</td>";
			$tpl.="<td>".$items[1]."</td>";
			$tpl.="<td>".$items[2]."</td>";
			$tpl.="<td>".($items[1] * $items[2])."</td>";
			$tpl.="<td><a class='btn btn-danger btn-sm' href=".$this->remove_item_url."/".($item_index-1)."><i class='fa fa-trash'></i> Remove From Cart </a></td>";
			$tpl.="</tr>";
		}

		
		}

		$tpl.="<tbody></table>";

		return $tpl;

	}


}