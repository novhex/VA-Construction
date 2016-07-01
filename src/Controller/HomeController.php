<?php




namespace App\Controller;
//include NekoCart class from vendor
require_once ROOT.DS."vendor".DS."NekoCart".DS."NekoCart.php";
use NekoCart\NekoCart;



class HomeController extends AppController{


   public $paginate = [

        'limit' => 12,
        'order' => [
            'Supplies.supply_id' => 'asc'
        ]
    ];

    private $neko_cart;
    


	public function initialize(){

		parent::initialize();
		$this->viewBuilder()->layout('custom_layout_front');
		$this->loadModel('Inquries');
		$this->loadComponent('Paginator');
		$this->neko_cart = new NekoCart();


	}

	public function index(){

	$front= array(
		'front' => 'HOME -  Novi Shop'
			);
 	$this->set('front',$front); 
	}


	 public function cart(){

		$front=array(
				'front' => 'MY CART -  Novi Shop',
				'cart_items'=>$this->neko_cart->showItems()
				);
  	     $this->set('front',$front); 

    }

	public function products(){

			$front=array(
				'front' => 'PRODUCTS -  Novi Shop',
				'products'=> $this->paginate('Supplies')
				);

  	        $this->set('front',$front);         

 
	}

	public function inquries(){



  		$post = $this->Inquries->newEntity();

        if ($this->request->is('post')) {
            $post = $this->Inquries->patchEntity($post, $this->request->data);
            
            

            if ($this->Inquries->save($post)) {
                $this->Flash->success(__('Your inquiry has been submitted.'));
                
            }else{
            	
            	$this->Flash->error(__('Please check the ff. fields.'));
            	//$this->Flash->error('Error');


            }
            
        }
       


	$front= array(
		'front' => 'INQUIRIES -  Novi Shop',
		'form_errors'=>$post->errors()
			);

		$this->set('front',$front);
	}


	public function addtocart(){
	
		
		$this->set('front',$front);
		
		$item_count = sizeof($_POST['qty']);

		for($i=0; $i<$item_count; $i++){

			if(!preg_match('/^[\-+]?[0-9]+$/', $_POST['qty'][$i]) || $_POST['qty'][$i]<=0 || $_POST['qty'][$i]==0){
				//skip zeros and evil values
			}else{
				$this->neko_cart->addItems(array($_POST['pr_name'][$i], $_POST['pr_price'][$i],$_POST['qty'][$i]));

			}
		
		}

	return $this->redirect(['action' => 'cart']);
	}

	public function clearcart(){
		$this->neko_cart->clearCart();
		return $this->redirect(['action' => 'cart']);
	}
	public function removecartitem($itemIndex){
		$this->neko_cart->removeItem($itemIndex);
		return $this->redirect(['action' => 'cart']);
	}


}