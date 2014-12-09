<?php

class Studioforty9_Recaptcha_Model_Source_Theme
{
    /**
     * Return the options for setting the theme.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            'light' => $this->__('Light'),
            'dark'  => $this->__('Dark')
        );
    }
}