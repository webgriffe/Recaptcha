<?php

declare(strict_types=1);

final class Studioforty9_Recaptcha_Model_Source_Version
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 2, 'label'=>Mage::helper('studioforty9_recaptcha')->__('v2')),
            array('value' => 3, 'label'=>Mage::helper('studioforty9_recaptcha')->__('v3')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            2 => Mage::helper('studioforty9_recaptcha')->__('v2'),
            3 => Mage::helper('studioforty9_recaptcha')->__('v3'),
        );
    }
}
