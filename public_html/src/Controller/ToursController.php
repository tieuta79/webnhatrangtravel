<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tours Controller
 *
 * @property \App\Model\Table\ToursTable $Tours
 *
 * @method \App\Model\Entity\Tour[] paginate($object = null, array $settings = [])
 */
class ToursController extends AppController
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
            'contain' => ['Users', 'Regions', 'Ratetours', 'Typetours', 'Liketours']
        ];
        $tours = $this->paginate($this->Tours);

        $this->set(compact('tours'));
        $this->set('_serialize', ['tours']);
    }

    /**
     * View method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tour = $this->Tours->get($id, [
            'contain' => ['Users', 'Regions', 'Ratetours', 'Liketours', 'Imagetours']
        ]);

        $this->loadModel('Ratetours');
        $ratetours = $this->Ratetours->find()
                ->contain(['Users'])
                ->where(['Ratetours.tour_id' => $tour->id]);
        $count_rate_1 = $this->Ratetours->find()
                        ->where(['Ratetours.tour_id' => $tour->id, 'Ratetours.status' => 1, 'Ratetours.point' => 1])->count();
        $count_rate_2 = $this->Ratetours->find()
                        ->where(['Ratetours.tour_id' => $tour->id, 'Ratetours.status' => 1, 'Ratetours.point' => 2])->count();
        $count_rate_3 = $this->Ratetours->find()
                        ->where(['Ratetours.tour_id' => $tour->id, 'Ratetours.status' => 1, 'Ratetours.point' => 3])->count();
        $count_rate_4 = $this->Ratetours->find()
                        ->where(['Ratetours.tour_id' => $tour->id, 'Ratetours.status' => 1, 'Ratetours.point' => 4])->count();
        $count_rate_5 = $this->Ratetours->find()
                        ->where(['Ratetours.tour_id' => $tour->id, 'Ratetours.status' => 1, 'Ratetours.point' => 5])->count();
        $sum_rate_tour = 0;
        foreach ($ratetours as $array) {
            $sum_rate_tour += $array->point;
        }
        //pr( round($sum__comment_tour/$count_comment_tour->count(),2));die();
        if ($ratetours->count() > 0) {
            $avg = round($sum_rate_tour / $ratetours->count(), 1);
            $count_rate = $ratetours->count();
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
                        'tour', 'ratetours', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
        ));
        $this->set('_serialize', [
            'tour', 'rateevents', 'avg',
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
        $tour = $this->Tours->newEntity();
        if ($this->request->is('post')) {
            $tour = $this->Tours->patchEntity($tour, $this->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour could not be saved. Please, try again.'));
        }
        $users = $this->Tours->Users->find('list', ['limit' => 200]);
        $regions = $this->Tours->Regions->find('list', ['limit' => 200]);
        $this->set(compact('tour', 'users', 'regions'));
        $this->set('_serialize', ['tour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tour = $this->Tours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tour = $this->Tours->patchEntity($tour, $this->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour could not be saved. Please, try again.'));
        }
        $users = $this->Tours->Users->find('list', ['limit' => 200]);
        $regions = $this->Tours->Regions->find('list', ['limit' => 200]);
        $this->set(compact('tour', 'users', 'regions'));
        $this->set('_serialize', ['tour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tour = $this->Tours->get($id);
        if ($this->Tours->delete($tour)) {
            $this->Flash->success(__('The tour has been deleted.'));
        } else {
            $this->Flash->error(__('The tour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
