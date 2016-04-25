<?php
namespace App\Controller;

class HomeController extends AppController{


   public $paginate = [

        'limit' => 25,
        'order' => [
            'Supplies.supply_id' => 'asc'
        ]
    ];

	public function initialize(){

		parent::initialize();
		$this->viewBuilder()->layout('custom_layout_front');
		$this->loadModel('Inquries');
		$this->loadComponent('Paginator');
	}

	public function index(){

	$front= array(
		'front' => 'HOME -  VA HARDWARE AND CONSTRUCTION SUPPLIES'
			);
 $this->set('front',$front); 
	}

	public function constructionsupplies(){

			$front=array(
				'front' => 'CONSTRUCTION SUPPLIES -  VA HARDWARE AND CONSTRUCTION SUPPLIES',
				'construction_supplies'=> $this->paginate('Supplies')
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
            	$this->Flash->error(__('Please complete the form fields.'));	
            }
            
        }
       


		$front= array(
		'front' => 'INQURIES -  VA HARDWARE AND CONSTRUCTION SUPPLIES'
			);

		$this->set('front',$front);
	}

}