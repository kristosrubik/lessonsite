<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Description Controller
 *
 * @property \App\Model\Table\DescriptionTable $Description
 *
 * @method \App\Model\Entity\Description[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DescriptionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects']
        ];
        $description = $this->paginate($this->Description);

        $this->set(compact('description'));
    }

    /**
     * View method
     *
     * @param string|null $id Description id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $description = $this->Description->get($id, [
            'contain' => ['Subjects']
        ]);

        $this->set('description', $description);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $description = $this->Description->newEntity();
        if ($this->request->is('post')) {
            $description = $this->Description->patchEntity($description, $this->request->getData());
            if ($this->Description->save($description)) {
                $this->Flash->success(__('The description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The description could not be saved. Please, try again.'));
        }
        $subjects = $this->Description->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('description', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Description id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $description = $this->Description->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $description = $this->Description->patchEntity($description, $this->request->getData());
            if ($this->Description->save($description)) {
                $this->Flash->success(__('The description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The description could not be saved. Please, try again.'));
        }
        $subjects = $this->Description->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('description', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Description id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $description = $this->Description->get($id);
        if ($this->Description->delete($description)) {
            $this->Flash->success(__('The description has been deleted.'));
        } else {
            $this->Flash->error(__('The description could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
