<?php

namespace zaporylie\Vipps\Model\Payment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class MerchantInfo
 *
 * @package Vipps\Model\Payment
 */
class MerchantInfo
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $merchantSerialNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $callbackPrefix;

    protected $fallBack;
    protected $consentRemovalPrefix;
    protected $shippingDetailsPrefix;

    /**
     * Gets merchantSerialNumber value.
     *
     * @return string
     */
    public function getMerchantSerialNumber()
    {
        return $this->merchantSerialNumber;
    }

    /**
     * Sets merchantSerialNumber variable.
     *
     * @param string $merchantSerialNumber
     *
     * @return $this
     */
    public function setMerchantSerialNumber($merchantSerialNumber)
    {
        $this->merchantSerialNumber = $merchantSerialNumber;
        return $this;
    }

    /**
     * Gets callBack value.
     *
     * @return string
     */
    public function getCallbackPrefix()
    {
        return $this->callbackPrefix;
    }

    /**
     * Sets callBack variable.
     *
     * @param string $callbackPrefix
     *
     * @return $this
     */
    public function setCallbackPrefix($callbackPrefix)
    {
        $this->callbackPrefix = $callbackPrefix;
        return $this;
    }

    /**
     * @param mixed $fallBack
     * @return MerchantInfo
     */
    public function setFallBack($fallBack)
    {
        $this->fallBack = $fallBack;
        return $this;
    }

    /**
     * @param mixed $consentRemovalPrefix
     * @return MerchantInfo
     */
    public function setConsentRemovalPrefix($consentRemovalPrefix)
    {
        $this->consentRemovalPrefix = $consentRemovalPrefix;
        return $this;
    }

    /**
     * @param mixed $shippingDetailsPrefix
     * @return MerchantInfo
     */
    public function setShippingDetailsPrefix($shippingDetailsPrefix)
    {
        $this->shippingDetailsPrefix = $shippingDetailsPrefix;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFallBack()
    {
        return $this->fallBack;
    }

    /**
     * @return mixed
     */
    public function getConsentRemovalPrefix()
    {
        return $this->consentRemovalPrefix;
    }

    /**
     * @return mixed
     */
    public function getShippingDetailsPrefix()
    {
        return $this->shippingDetailsPrefix;
    }


}
