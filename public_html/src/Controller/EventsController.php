<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Hash;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[] paginate($object = null, array $settings = [])
 */
class EventsController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Rateevents', 'Likeevents']
        ];
        $events = $this->paginate($this->Events);
        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'Imageevents', 'Likeevents', 'Rateevents']
        ]);
        $this->loadModel('Rateevents');
        $rateevents = $this->Rateevents->find()
                ->contain(['Users'])
                ->where(['Rateevents.event_id' => $event->id]);
        $count_rate_1 = $this->Rateevents->find()
                        ->where(['Rateevents.event_id' => $event->id, 'Rateevents.status' => 1, 'Rateevents.point' => 1])->count();
        $count_rate_2 = $this->Rateevents->find()
                        ->where(['Rateevents.event_id' => $event->id, 'Rateevents.status' => 1, 'Rateevents.point' => 2])->count();
        $count_rate_3 = $this->Rateevents->find()
                        ->where(['Rateevents.event_id' => $event->id, 'Rateevents.status' => 1, 'Rateevents.point' => 3])->count();
        $count_rate_4 = $this->Rateevents->find()
                        ->where(['Rateevents.event_id' => $event->id, 'Rateevents.status' => 1, 'Rateevents.point' => 4])->count();
        $count_rate_5 = $this->Rateevents->find()
                        ->where(['Rateevents.event_id' => $event->id, 'Rateevents.status' => 1, 'Rateevents.point' => 5])->count();
        $sum_rate_event = 0;
        foreach ($rateevents as $array) {
            $sum_rate_event += $array->point;
        }
        //pr( round($sum__comment_event/$count_comment_event->count(),2));die();
        if ($rateevents->count() > 0) {
            $avg = round($sum_rate_event / $rateevents->count(), 1);
            $count_rate = $rateevents->count();
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
                        'event', 'rateevents', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
        ));
        $this->set('_serialize', [
            'event', 'rateevents', 'avg',
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
    public function add() {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
