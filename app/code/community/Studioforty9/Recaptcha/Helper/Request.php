<?php
/**
 * Studioforty9_Recaptcha
 *
 * @category  Studioforty9
 * @package   Studioforty9_Recaptcha
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @license   https://github.com/studioforty9/recaptcha/blob/master/LICENCE BSD
 * @version   1.5.7
 * @link      https://github.com/studioforty9/recaptcha
 */

use ReCaptcha\ReCaptcha;

/**
 * Studioforty9_Recaptcha_Helper_Request
 *
 * @category   Studioforty9
 * @package    Studioforty9_Recaptcha
 * @subpackage Helper
 * @author     StudioForty9 <info@studioforty9.com>
 */
class Studioforty9_Recaptcha_Helper_Request extends Mage_Core_Helper_Abstract
{
    public const REQUEST_RESPONSE = 'g-recaptcha-response';

    /**
     * Verify the details of the recaptcha request.
     *
     * @return Studioforty9_Recaptcha_Helper_Response
     */
    public function verify()
    {
        $secret = $this->_getHelper()->getSecretKey();
        $version = $this->_getHelper()->getVersion();
        $scoreThreshold = $this->_getHelper()->getScoreThreshold();
        $remoteIp = $this->_getRequest()->getClientIp();
        $gRecaptchaResponse = $this->_getRequest()->getPost(self::REQUEST_RESPONSE);

        $recaptcha = new ReCaptcha($secret);
        if ($version === 3) {
            $recaptcha->setScoreThreshold($scoreThreshold);
        }
        $response = $recaptcha->verify($gRecaptchaResponse, $remoteIp);

        return new Studioforty9_Recaptcha_Helper_Response($response->isSuccess(), $response->getErrorCodes());
    }

    /**
     * Get the module data helper.
     *
     * @codeCoverageIgnore
     * @return Studioforty9_Recaptcha_Helper_Data
     */
    private function _getHelper()
    {
        return Mage::helper('studioforty9_recaptcha');
    }
}
