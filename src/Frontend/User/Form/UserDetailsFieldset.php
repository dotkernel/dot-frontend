<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-frontend
 * @author: n3vrax
 * Date: 7/18/2016
 * Time: 9:55 PM
 */

namespace Dot\Frontend\User\Form;

use Zend\Form\Fieldset;

/**
 * Class UserDetailsFieldset
 * @package Dot\Frontend\User\Form
 */
class UserDetailsFieldset extends Fieldset
{
    /**
     * UserDetailsFieldset constructor.
     * @param string $name
     * @param array $options
     */
    public function __construct($name = 'details', array $options = [])
    {
        parent::__construct($name, $options);
    }

    public function init()
    {
        $this->add([
            'type' => 'text',
            'name' => 'firstName',
            'options' => [
                'label' => 'First Name',
            ],
            'attributes' => [
                'placeholder' => 'First Name'
            ]
        ]);

        $this->add([
            'type' => 'text',
            'name' => 'lastName',
            'options' => [
                'label' => 'Last Name'
            ],
            'attributes' => [
                'placeholder' => 'Last Name'
            ]
        ]);

        $this->add([
            'type' => 'text',
            'name' => 'address',
            'options' => [
                'label' => 'Address'
            ],
            'attributes' => [
                'placeholder' => 'Address'
            ]
        ]);

        $this->add([
            'type' => 'text',
            'name' => 'phone',
            'options' => [
                'label' => 'Phone number'
            ],
            'attributes' => [
                'placeholder' => 'Phone number'
            ]
        ]);
    }
}
