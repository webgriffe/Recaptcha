<?php

declare(strict_types=1);

final class Studioforty9_Recaptcha_Model_Source_Version
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $array = $this->toArray();
        return array_map(
            static function (string $value, string $label) {
                return ['value' => $value, 'label' => $label];
            },
            array_keys($array),
            $array
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            '2' => Mage::helper('studioforty9_recaptcha')->__('v2'),
            '3' => Mage::helper('studioforty9_recaptcha')->__('v3'),
        ];
    }
}
