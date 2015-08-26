<?php

namespace Wcf\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for offerResponse StructType
 * @package Wcf
 * @subpackage Structs
 */
class WcfOfferResponse extends AbstractStructBase
{
    /**
     * The offerResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $offerResult;
    /**
     * Constructor method for offerResponse
     * @uses WcfOfferResponse::setOfferResult()
     * @param int $offerResult
     */
    public function __construct($offerResult = null)
    {
        $this
            ->setOfferResult($offerResult);
    }
    /**
     * Get offerResult value
     * @return int|null
     */
    public function getOfferResult()
    {
        return $this->offerResult;
    }
    /**
     * Set offerResult value
     * @param int $offerResult
     * @return \Wcf\StructType\WcfOfferResponse
     */
    public function setOfferResult($offerResult = null)
    {
        $this->offerResult = $offerResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Wcf\StructType\WcfOfferResponse
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
