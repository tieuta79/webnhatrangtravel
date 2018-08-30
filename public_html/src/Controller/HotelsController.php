<?php
namespace App\Controller;

use App\Controller\AppController;
/**
 * Hotels Controller
 *
 * @property \App\Model\Table\HotelsTable $Hotels
 *
 * @method \App\Model\Entity\Hotel[] paginate($object = null, array $settings = [])
 */
class HotelsController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add','edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Regions', 'Typehotels', 'Ratehotels', 'Likehotels']
        ];
        $hotels = $this->paginate($this->Hotels);

        $this->set(compact('hotels'));
        $this->set('_serialize', ['hotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => ['Users', 'Regions', 'Imagehotels', 'Rooms', 'Likehotels', 'Ratehotels']
        ]);
        $this->loadModel('Ratehotels');
        $ratehotels = $this->Ratehotels->find()
                ->contain(['Users'])
                ->where(['Ratehotels.hotel_id' => $hotel->id]);
        $count_rate_1 = $this->Ratehotels->find()
                        ->where(['Ratehotels.hotel_id' => $hotel->id, 'Ratehotels.status' => 1, 'Ratehotels.point' => 1])->count();
        $count_rate_2 = $this->Ratehotels->find()
                        ->where(['Ratehotels.hotel_id' => $hotel->id, 'Ratehotels.status' => 1, 'Ratehotels.point' => 2])->count();
        $count_rate_3 = $this->Ratehotels->find()
                        ->where(['Ratehotels.hotel_id' => $hotel->id, 'Ratehotels.status' => 1, 'Ratehotels.point' => 3])->count();
        $count_rate_4 = $this->Ratehotels->find()
                        ->where(['Ratehotels.hotel_id' => $hotel->id, 'Ratehotels.status' => 1, 'Ratehotels.point' => 4])->count();
        $count_rate_5 = $this->Ratehotels->find()
                        ->where(['Ratehotels.hotel_id' => $hotel->id, 'Ratehotels.status' => 1, 'Ratehotels.point' => 5])->count();
        $sum_rate_hotel = 0;
        foreach ($ratehotels as $array) {
            $sum_rate_hotel += $array->point;
        }
        //pr( round($sum__comment_hotel/$count_comment_hotel->count(),2));die();
        if ($ratehotels->count() > 0) {
            $avg = round($sum_rate_hotel / $ratehotels->count(), 2);
            $count_rate = $ratehotels->count();
            $percent_rate_1 = round($count_rate_1 / $count_rate * 100, 0);
            $percent_rate_2 = round($count_rate_2 / $count_rate * 100, 0);
            $percent_rate_3 = round($count_rate_3 / $count_rate * 100, 0);
            $percent_rate_4 = round($count_rate_4 / $count_rate * 100, 0);
            $percent_rate_5 = round($count_rate_5 / $count_rate * 100, 0);
        } else {
            $avg = 0;
            $count_rate = 0;
            $percent_rate_1 = 0;
            $percent_rate_2 = 0;
            $percent_rate_3 = 0;
            $percent_rate_4 = 0;
            $percent_rate_5 = 0;
        }

        $this->set(compact(
                'hotel', 'ratehotels', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
                ));
        $this->set('_serialize', [
            'hotel', 'ratehotels', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
            ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $hotel = $this->Hotels->newEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $users = $this->Hotels->Users->find('list', ['limit' => 200]);
        $regions = $this->Hotels->Regions->find('list', ['limit' => 200]);
        $typehotels = $this->Hotels->Typehotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'regions', 'typehotels'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res = array();
        $hotel = $this->Hotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $$res['status'] = 1;
                $res['msg'] = 'Thành công.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $users = $this->Hotels->Users->find('list', ['limit' => 200]);
        $regions = $this->Hotels->Regions->find('list', ['limit' => 200]);
        $typehotels = $this->Hotels->Typehotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'regions', 'typehotels'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotels->get($id);
        if ($this->Hotels->delete($hotel)) {
            $res['status'] = 1;
            $res['msg'] = 'Thành công.';
        } else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }

        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }
}
