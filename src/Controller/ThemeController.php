<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Theme Controller
 *
 * @property \App\Model\Table\ThemeTable $Theme
 *
 * @method \App\Model\Entity\Theme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThemeController extends AppController
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
        $theme = $this->paginate($this->Theme);

        $this->set(compact('theme'));
    }

    /**
     * View method
     *
     * @param string|null $id Theme id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $theme = $this->Theme->get($id, [
            'contain' => ['Subjects', 'Tests', 'Video']
        ]);

        $this->set('theme', $theme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $theme = $this->Theme->newEntity();
        if ($this->request->is('post')) {
            $theme = $this->Theme->patchEntity($theme, $this->request->getData());
            if ($this->Theme->save($theme)) {
                $this->Flash->success(__('The theme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The theme could not be saved. Please, try again.'));
        }
        $subjects = $this->Theme->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('theme', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Theme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $theme = $this->Theme->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $theme = $this->Theme->patchEntity($theme, $this->request->getData());
            if ($this->Theme->save($theme)) {
                $this->Flash->success(__('The theme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The theme could not be saved. Please, try again.'));
        }
        $subjects = $this->Theme->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('theme', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Theme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $theme = $this->Theme->get($id);
        if ($this->Theme->delete($theme)) {
            $this->Flash->success(__('The theme has been deleted.'));
        } else {
            $this->Flash->error(__('The theme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
