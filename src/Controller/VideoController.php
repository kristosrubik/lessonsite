<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Video Controller
 *
 * @property \App\Model\Table\VideoTable $Video
 *
 * @method \App\Model\Entity\Video[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VideoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Themes']
        ];
        $video = $this->paginate($this->Video);

        $this->set(compact('video'));
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $video = $this->Video->get($id, [
            'contain' => ['Subjects']
        ]);

        $this->set('video', $video);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $video = $this->Video->newEntity();
        if ($this->request->is('post')) {
            $video = $this->Video->patchEntity($video, $this->request->getData());
            if ($this->Video->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $themes = $this->Video->Themes->find('list', ['limit' => 200]);
        $this->set(compact('video', 'themes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $video = $this->Video->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Video->patchEntity($video, $this->request->getData());
            if ($this->Video->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $themes = $this->Video->Themes->find('list', ['limit' => 200]);
        $this->set(compact('video', 'themes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Video->get($id);
        if ($this->Video->delete($video)) {
            $this->Flash->success(__('The video has been deleted.'));
        } else {
            $this->Flash->error(__('The video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
