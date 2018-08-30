<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Event\Event;
use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Utility\Hash;

/**
 * Uploads behavior
 */
class UploadsSlidesBehavior extends Behavior {

    /**
     * Default configuration.
     *
     * @var array
     */
    public $path_upload = ROOT . DS . 'webroot' . DS . 'uploads' . DS . 'slides';
    protected $_defaultConfig = [
        'fields' => []
    ];

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {

        
        if (is_string($this->config('fields'))) {
            if (isset($data[$this->config('fields')]) && !empty($data[$this->config('fields')])) {
                $data[$this->config('fields')] = $this->upload($data[$this->config('fields')]);
            }
        } else {
            foreach ($this->config('fields') as $field) {
                if (isset($data[$field]) && !empty($data[$field])) {
                    $data[$field] = $this->upload($data[$field]);
                }
            }
        }
    }
    public function upload($file) { 
        $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
        $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
        $filename = $file['name'];
        if (in_array($ext, $arr_ext)) {
            if (file_exists($this->path_upload . DS . $file['name'])) {
                $filename = date('d-m-Y-H-i-s') . '-' . $filename;
            }
            move_uploaded_file($file['tmp_name'], $this->path_upload . DS . $filename);
            return $filename;
        } else {
            //die();
        }
        
    }

    public function afterDelete(Event $event, EntityInterface $entity, ArrayObject $options) {
        if (is_string($this->config('fields'))) {
            if (file_exists($this->path_upload . DS . $entity->{$this->config('fields')})) {
                @unlink($this->path_upload . DS . $entity->{$this->config('fields')});
            }
        } else {
            foreach ($this->config('fields') as $field) {
                if (file_exists($this->path_upload . DS . $entity->{$field})) {
                    @unlink($this->path_upload . DS . $entity->{$field});
                }
            }
        }
    }

    public function beforeSave(Event $event, Entity $entity, ArrayObject $options) {
        if ($entity->isNew() != 1) {
            if (!empty($entity->get('image'))) {
                @unlink($this->path_upload . DS . $entity->getOriginal('image'));
            } else {
                $entity->set('image', $entity->getOriginal('image'));
            }
        }
    }

}
