<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typefoods Controller
 *
 * @property \App\Model\Table\TypefoodsTable $Typefoods
 *
 * @method \App\Model\Entity\Typefood[] paginate($object = null, array $settings = [])
 */
class TypefoodsController extends AppController
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
        $typefoods = $this->paginate($this->Typefoods);

        $this->set(compact('typefoods'));
        $this->set('_serialize', ['typefoods']);
    }

    /**
     * View method
     *
     * @param string|null $id Typefood id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typefood = $this->Typefoods->get($id, [
            'contain' => ['Foods']
        ]);

        $this->set('typefood', $typefood);
        $this->set('_serialize', ['typefood']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typefood = $this->Typefoods->newEntity();
        if ($this->request->is('post')) {
            $typefood = $this->Typefoods->patchEntity($typefood, $this->request->getData());
            if ($this->Typefoods->save($typefood)) {
                $this->Flash->success(__('The typefood has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typefood could not be saved. Please, try again.'));
        }
        $this->set(compact('typefood'));
        $this->set('_serialize', ['typefood']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typefood id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typefood = $this->Typefoods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typefood = $this->Typefoods->patchEntity($typefood, $this->request->getData());
            if ($this->Typefoods->save($typefood)) {
                $this->Flash->success(__('The typefood has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typefood could not be saved. Please, try again.'));
        }
        $this->set(compact('typefood'));
        $this->set('_serialize', ['typefood']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typefood id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typefood = $this->Typefoods->get($id);
        if ($this->Typefoods->delete($typefood)) {
            $this->Flash->success(__('The typefood has been deleted.'));
        } else {
            $this->Flash->error(__('The typefood could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
