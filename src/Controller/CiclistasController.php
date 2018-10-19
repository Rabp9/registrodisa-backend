<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Filesystem\File;

/**
 * Ciclistas Controller
 *
 * @property \App\Model\Table\CiclistasTable $Ciclistas
 *
 * @method \App\Model\Entity\Ciclista[] paginate($object = null, array $settings = [])
 */
class CiclistasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $estado_id = $this->request->getQuery('estado_id');
        $text = $this->request->getQuery('text');
        $items_per_page = $this->request->getQuery('items_per_page');
        
        $this->paginate = [
            'limit' => $items_per_page,
            'order' => [
                'Ciclistas.id' => 'asc'
            ]
        ];
        
        $query = $this->Ciclistas->find();
/*
        if ($estado_id) {
            $query->where(['Ciclistas.estado_id' => $estado_id]);
        }
*/        
        if ($text) {
            $query->where(['OR' => [
                'Ciclistas.nombres LIKE' => '%' . $text . '%',
                'Ciclistas.apellido_paterno LIKE' => '%' . $text . '%',
                'Ciclistas.apellido_materno LIKE' => '%' . $text . '%',
                'Ciclistas.dni LIKE' => '%' . $text . '%'
            ]]);
        }
        
        $ciclistas = $this->paginate($query);
        $paginate = $this->request->getParam('paging')['Ciclistas'];
        
        $pagination = [
            'totalItems' => $paginate['count'],
            'itemsPerPage' =>  $paginate['perPage']
        ];
        $this->set(compact('ciclistas', 'pagination'));
        $this->set('_serialize', ['ciclistas', 'pagination']);
    }

    /**
     * View method
     *
     * @param string|null $id Ciclista id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ciclista = $this->Ciclistas->get($id, [
            'contain' => []
        ]);

        $this->set('ciclista', $ciclista);
        $this->set('_serialize', ['ciclista']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        if ($this->request->is('post')) {
            $ciclista = $this->Ciclistas->newEntity($this->request->getData());

            if ($this->Ciclistas->save($ciclista)) {
                $code = 200;
                $message = 'Hola ' . $ciclista->nombres . ', gracias por registrarte y ser parte del equipo Trujillo Cletear Rutear.';
            } else {
                $message = 'El ciclista no fue registrado correctamente';
            }
        }
        $this->set(compact('ciclista', 'code', 'message'));
        $this->set('_serialize', ['ciclista', 'code', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ciclista id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ciclista = $this->Ciclistas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ciclista = $this->Ciclistas->patchEntity($ciclista, $this->request->getData());
            if ($this->Ciclistas->save($ciclista)) {
                $this->Flash->success(__('The ciclista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ciclista could not be saved. Please, try again.'));
        }
        $this->set(compact('ciclista'));
        $this->set('_serialize', ['ciclista']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ciclista id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ciclista = $this->Ciclistas->get($id);
        if ($this->Ciclistas->delete($ciclista)) {
            $this->Flash->success(__('The ciclista has been deleted.'));
        } else {
            $this->Flash->error(__('The ciclista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function getTotalRegistros() {
        $total_registros = $this->Ciclistas->find()->count();
        
        $this->set(compact('total_registros'));
        $this->set('_serialize', ['total_registros']);
    }
    
    public function upload() {
        if ($this->request->is("post")) {
            $imagen = $this->request->data["file"];

            $pathDst = WWW_ROOT . "img" . DS . "mensajes" . DS;
            $ext = pathinfo($imagen['name'], PATHINFO_EXTENSION);
            $filename = 'mensaje-' . $this->Random->randomString() . '.' . $ext;
            
            $filenameSrc = $imagen["tmp_name"];
            $fileSrc = new File($filenameSrc);
            if ($fileSrc->copy($pathDst . $filename)) {
                $code = 200;
                $message = 'La imagen fue subida correctamente';
            } else {
                $message = "La imagen no fue subida con éxito";
            }
            
            $this->set(compact("code", "message", "filename"));
            $this->set("_serialize", ["message", "filename"]);
        }
    }
    
    public function send() {
        if ($this->request->is("post")) {
            $mensaje = $this->request->getData();
                     
            $email = new Email('default');
            $ciclistas = $this->Ciclistas->find()
                ->select(['email']);
            
            foreach ($ciclistas as $ciclista) {
                if (!is_null($ciclista->email)) {
                    $email->from([$mensaje['desde'] => $mensaje['emisor']])
                        ->to($ciclista->email)
                        ->emailFormat('html')
                        ->subject($mensaje['asunto'])
                        ->send($mensaje['cuerpo']);
                }
            }
            
            $message =  [
                  'text' => __('El mesnaje fue enviado correctamente.'),
                  'type' => 'success',
            ];

            $this->set(compact('message'));
            $this->set('_serialize', ['message']);
        }
    }
}
