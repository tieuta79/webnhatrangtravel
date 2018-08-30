<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Places Controller
 *
 * @property \App\Model\Table\PlacesTable $Places
 *
 * @method \App\Model\Entity\Place[] paginate($object = null, array $settings = [])
 */
class PlacesController extends AppController
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
            'contain' => ['Typeplaces', 'Regions', 'Rateplaces', 'LikePlaces']
        ];
        $places = $this->paginate($this->Places);

        $this->set(compact('places'));
        $this->set('_serialize', ['places']);
    }

    /**
     * View method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => ['Typeplaces', 'Regions', 'Rateplaces', 'Details', 'Imageplaces']
        ]);

        $this->loadModel('Rateplaces');
        $rateplaces = $this->Rateplaces->find()
                ->contain(['Users'])
                ->where(['Rateplaces.place_id' => $place->id]);
        $count_rate_1 = $this->Rateplaces->find()
                        ->where(['Rateplaces.place_id' => $place->id, 'Rateplaces.status' => 1, 'Rateplaces.point' => 1])->count();
        $count_rate_2 = $this->Rateplaces->find()
                        ->where(['Rateplaces.place_id' => $place->id, 'Rateplaces.status' => 1, 'Rateplaces.point' => 2])->count();
        $count_rate_3 = $this->Rateplaces->find()
                        ->where(['Rateplaces.place_id' => $place->id, 'Rateplaces.status' => 1, 'Rateplaces.point' => 3])->count();
        $count_rate_4 = $this->Rateplaces->find()
                        ->where(['Rateplaces.place_id' => $place->id, 'Rateplaces.status' => 1, 'Rateplaces.point' => 4])->count();
        $count_rate_5 = $this->Rateplaces->find()
                        ->where(['Rateplaces.place_id' => $place->id, 'Rateplaces.status' => 1, 'Rateplaces.point' => 5])->count();
        $sum_rate_place = 0;
        foreach ($rateplaces as $array) {
            $sum_rate_place += $array->point;
        }
        //pr( round($sum__comment_place/$count_comment_place->count(),2));die();
        if ($rateplaces->count() > 0) {
            $avg = round($sum_rate_place / $rateplaces->count(), 1);
            $count_rate = $rateplaces->count();
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
                        'place', 'rateplaces', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
        ));
        $this->set('_serialize', [
            'place', 'rateplaces', 'avg',
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
        $place = $this->Places->newEntity();
        if ($this->request->is('post')) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $typeplaces = $this->Places->Typeplaces->find('list', ['limit' => 200]);
        $regions = $this->Places->Regions->find('list', ['limit' => 200]);
        $this->set(compact('place', 'typeplaces', 'regions'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $typeplaces = $this->Places->Typeplaces->find('list', ['limit' => 200]);
        $regions = $this->Places->Regions->find('list', ['limit' => 200]);
        $this->set(compact('place', 'typeplaces', 'regions'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $place = $this->Places->get($id);
        if ($this->Places->delete($place)) {
            $this->Flash->success(__('The place has been deleted.'));
        } else {
            $this->Flash->error(__('The place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
