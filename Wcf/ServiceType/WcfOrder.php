<?php

namespace Wcf\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Order ServiceType
 * @package Wcf
 * @subpackage Services
 */
class WcfOrder extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named order
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wcf\StructType\WcfOrder $parameters
     * @return \Wcf\StructType\WcfOrderResponse|bool
     */
    public function order(\Wcf\StructType\WcfOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->order($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Wcf\StructType\WcfOrderResponse
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
