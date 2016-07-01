<?php

namespace App\Controller;

class AdminController extends AppController{
	
	 public $paginate = [

        'limit' => 10,
        'order' => [
            'Inquries.inqury_id' => 'asc'
        ]
    ];

    private $session; 

	public function initialize(){

		parent::initialize();
		$this->viewBuilder()->layout('custom_layout');
		$this->loadModel('Account');
		$this->loadModel('Supplies');
		$this->loadModel('Inquries');
		$this->loadModel('Orders');
		$this->session = $this->request->session();
	
	}

	public function index(){
		

			if(!empty($this->session->read('Config.admin_account'))){ 
						
							return $this->redirect(['action'=>'dashboard']);
			}

		
				if($this->request->is('post')){
					

					$user = $_POST['username'];
		 			$pass = $_POST['password'];

		 			$useraccount = $this->Account->find('all', array('conditions'=>array('Account.username'=>$user)));

		 			foreach($useraccount as $data):
		 				if(sizeof($data->username)>0){
		 					
		 					if(password_verify($pass,$data->password)==1){
		 						
		 						$this->session->write('Config.admin_account',$user);
		 						return $this->redirect(['action' => 'dashboard']);

		 					}else{
		 						$this->Flash->error(__('Invalid Username or Password.'));
		 						return $this->redirect(['action' => 'index']);
		 					}
		 				}
		 			endforeach;
				}
		
		$dashboard = array(
			'page_title'=>'Admin Login'
			);
		$this->set('dashboard',$dashboard);
		
	}

	public function dashboard(){
		if(!empty($this->session->read('Config.admin_account'))){


					$dashboard = array(
			'page_title'=>'Admin dashboard'
			);

			$this->set('dashboard',$dashboard);
		}else{
			$this->Flash->error(__('Invalid Username or Password.'));
			return $this->redirect(['action'=>'index']);
		}
	}

	public function deletesupply(){
		if(!empty($this->session->read('Config.admin_account'))){
			$this->viewBuilder()->layout('blank_layout');
			if($this->request->is('post')){
				$id = $_POST['item_id'];

				$supply = $this->Supplies->get($id);
				if ($this->Supplies->delete($supply)) {
					echo "1";
				}else{
					echo "0";
				}
			}
		}

	}


	public function editsupply($id){
		if(!empty($this->session->read('Config.admin_account'))){
				$dashboard=array('page_title'=>'Admin Edit Supply',
					'supply_info'=>$this->Supplies->find('all', array('conditions'=>array('Supplies.supply_id'=>$id)))
					);
		 		
		 		$supply = $this->Supplies->get($id);
				if($this->request->is(['post','put'])){

					$file = $this->request->data['supply_img'];				
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
					$arr_ext = array('jpg', 'jpeg', 'gif','png'); 
					$setNewFileName = time() . "_" . rand(000000, 999999);

					if (in_array($ext, $arr_ext)) {
						 	$imageFileName = $setNewFileName . '.' . $ext;
						    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/uploads/' . $setNewFileName . '.' . $ext);
						}else{
							$imageFileName = $_POST['photo'];
						}
				
					$supply = $this->Supplies->patchEntity($supply, $this->request->data);
					$supply->supply_img = $imageFileName;
			        
			        if ($this->Supplies->save($supply)) {
			            $this->Flash->success(__('Item has been updated.'));

			            return $this->redirect(['action' => 'viewsupplies']);
			        }
			        	$this->Flash->error(__('Unable to update the item.'));
				}		

				$this->set('dashboard',$dashboard);
			}else{
				return $this->redirect(['action'=>'index']);
			}
	}

	 
	 public function inqueries(){

	 if(!empty($this->session->read('Config.admin_account'))){	
	 	$dashboard = array(
	 		'page_title'=>'Admin Inqueries',
	 		'inqueries'=>$this->Inquries->find('all')
	 		);

	 	$this->set('dashboard',$dashboard);
	 	}
	 	else{
				return $this->redirect(['action'=>'index']);
		}
    }

	
	public function logout(){
		  $this->session->delete('Config.admin_account');
		return $this->redirect(['action'=>'index']);
	}

	public function showeditdialog(){
		$this->viewBuilder()->layout('blank_layout');
	}

	public function addproduct(){
		
		if(!empty($this->session->read('Config.admin_account'))){

		

		$dashboard = array(
			'page_title'=>'Admin Add Supply'
			);
					
			$this->set('dashboard',$dashboard);

			if($this->request->is('post')){

				$file = $this->request->data['supply_img'];				
				$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
				$arr_ext = array('jpg', 'jpeg', 'gif','png'); 
				$setNewFileName = time() . "_" . md5(rand(000000, 999999));

				
				if (in_array($ext, $arr_ext)) {
				 
				    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/uploads/' . $setNewFileName . '.' . $ext);

				    
				   	 $imageFileName = $setNewFileName . '.' . $ext;

				   	 $item = $this->Supplies->newEntity();

				   	 $item = $this->Supplies->patchEntity($item, $this->request->data);

				   	 $item->supply_img = $imageFileName;

				   	 $this->Supplies->save($item);

				   	  $this->Flash->success(__('Item saved.'));
				 }else{
				 	  $this->Flash->error(__('Item not saved.'));	
				 }
			}

		}else{
			return $this->redirect(['action'=>'index']);
		}
							
	}
	

    public function viewsupplies(){
	
			if(!empty($this->session->read('Config.admin_account'))){
		    	$dashboard = array(
					'page_title'=>'Admin Supplies',
					'supplies' => $this->Supplies->find('all')
					);
			    			
				$this->set('dashboard',$dashboard);
			}
			else{
				return $this->redirect(['action'=>'index']);
			}

    }

    public function orders(){


    if(!empty($this->session->read('Config.admin_account'))){
		    	$dashboard = array(
					'page_title'=>'Customer Orders',
					'orders'=>$this->Orders->find('all')
					);
			    			
				$this->set('dashboard',$dashboard);
			}
			else{
				return $this->redirect(['action'=>'index']);
			}
    }


}