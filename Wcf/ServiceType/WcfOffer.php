<?php

namespace Wcf\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Offer ServiceType
 * @package Wcf
 * @subpackage Services
 */
class WcfOffer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named offer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wcf\StructType\WcfOffer $parameters
     * @return \Wcf\StructType\WcfOfferResponse|bool
     */
    public function offer(\Wcf\StructType\WcfOffer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->offer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Wcf\StructType\WcfOfferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
