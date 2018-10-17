<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ciclista Entity
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $dni
 * @property \Cake\I18n\FrozenDate $fecha_nac
 * @property string $direccion
 * @property string $email
 * @property string $celular
 * @property string $perteneces_grupo
 * @property string $grupo
 * @property string $tipo1
 * @property string $tipo2
 * @property string $tipo3
 * @property string $tipo4
 * @property string $tipo5
 * @property string $tipo6
 * @property string $tipo7
 * @property string $tipo8
 * @property string $tipo9
 * @property string $tipo10
 * @property string $tipo11
 * @property string $tipo12
 * @property string $tipo13
 */
class Ciclista extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
    
    protected $_virtual = ['full_name'];
    
    protected function _getFullName() {
        return $this->_properties['apellido_paterno'] . ' ' . $this->_properties['apellido_materno'] . ', ' . $this->_properties['nombres'];
    }
     
}
