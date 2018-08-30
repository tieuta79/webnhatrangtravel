<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vehicles Controller
 *
 * @property \App\Model\Table\VehiclesTable $Vehicles
 *
 * @method \App\Model\Entity\Vehicle[] paginate($object = null, array $settings = [])
 */
class VehiclesController extends AppController
{
	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Typevehicles', 'Regions', 'Ratevehicles', 'Likevehicles']
        ];
        $vehicles = $this->paginate($this->Vehicles);

        $this->set(compact('vehicles'));
        $this->set('_serialize', ['vehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => ['Users', 'Typevehicles', 'Regions', 'Imagevehicles', 'Ratevehicles', 'Likevehicles']
        ]);

        $this->loadModel('Ratevehicles');
        $ratevehicles = $this->Ratevehicles->find()
                ->contain(['Users'])
                ->where(['Ratevehicles.vehicle_id' => $vehicle->id]);
        $count_rate_1 = $this->Ratevehicles->find()
                        ->where(['Ratevehicles.vehicle_id' => $vehicle->id, 'Ratevehicles.status' => 1, 'Ratevehicles.point' => 1])->count();
        $count_rate_2 = $this->Ratevehicles->find()
                        ->where(['Ratevehicles.vehicle_id' => $vehicle->id, 'Ratevehicles.status' => 1, 'Ratevehicles.point' => 2])->count();
        $count_rate_3 = $this->Ratevehicles->find()
                        ->where(['Ratevehicles.vehicle_id' => $vehicle->id, 'Ratevehicles.status' => 1, 'Ratevehicles.point' => 3])->count();
        $count_rate_4 = $this->Ratevehicles->find()
                        ->where(['Ratevehicles.vehicle_id' => $vehicle->id, 'Ratevehicles.status' => 1, 'Ratevehicles.point' => 4])->count();
        $count_rate_5 = $this->Ratevehicles->find()
                        ->where(['Ratevehicles.vehicle_id' => $vehicle->id, 'Ratevehicles.status' => 1, 'Ratevehicles.point' => 5])->count();
        $sum_rate_vehicle = 0;
        foreach ($ratevehicles as $array) {
            $sum_rate_vehicle += $array->point;
        }
        //pr( round($sum__comment_vehicle/$count_comment_vehicle->count(),2));die();
        if ($ratevehicles->count() > 0) {
            $avg = round($sum_rate_vehicle / $ratevehicles->count(), 1);
            $count_rate = $ratevehicles->count();
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
                        'vehicle', 'ratevehicles', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
        ));
        $this->set('_serialize', [
            'vehicle', 'rateevents', 'avg',
            'count_rate', 'count_rate_1',
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
        $vehicle = $this->Vehicles->newEntity();
        if ($this->request->is('post')) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->getData());
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
        }
        $users = $this->Vehicles->Users->find('list', ['limit' => 200]);
        $typevehicles = $this->Vehicles->Typevehicles->find('list', ['limit' => 200]);
        $regions = $this->Vehicles->Regions->find('list', ['limit' => 200]);
        $this->set(compact('vehicle', 'users', 'typevehicles', 'regions'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->getData());
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
        }
        $users = $this->Vehicles->Users->find('list', ['limit' => 200]);
        $typevehicles = $this->Vehicles->Typevehicles->find('list', ['limit' => 200]);
        $regions = $this->Vehicles->Regions->find('list', ['limit' => 200]);
        $this->set(compact('vehicle', 'users', 'typevehicles', 'regions'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicle = $this->Vehicles->get($id);
        if ($this->Vehicles->delete($vehicle)) {
            $this->Flash->success(__('The vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
