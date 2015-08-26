<?php

namespace Wcf\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderResponse StructType
 * @package Wcf
 * @subpackage Structs
 */
class WcfOrderResponse extends AbstractStructBase
{
    /**
     * The orderResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $orderResult;
    /**
     * Constructor method for orderResponse
     * @uses WcfOrderResponse::setOrderResult()
     * @param int $orderResult
     */
    public function __construct($orderResult = null)
    {
        $this
            ->setOrderResult($orderResult);
    }
    /**
     * Get orderResult value
     * @return int|null
     */
    public function getOrderResult()
    {
        return $this->orderResult;
    }
    /**
     * Set orderResult value
     * @param int $orderResult
     * @return \Wcf\StructType\WcfOrderResponse
     */
    public function setOrderResult($orderResult = null)
    {
        $this->orderResult = $orderResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Wcf\StructType\WcfOrderResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
