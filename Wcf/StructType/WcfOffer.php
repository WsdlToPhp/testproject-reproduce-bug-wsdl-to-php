<?php

namespace Wcf\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for offer StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:offer
 * @package Wcf
 * @subpackage Structs
 */
class WcfOffer extends WcfOrder
{
    /**
     * The offerClassMember
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $offerClassMember;
    /**
     * The offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var order
     */
    public $offer;
    /**
     * Constructor method for offer
     * @uses WcfOffer::setOfferClassMember()
     * @uses WcfOffer::setOffer()
     * @param string $offerClassMember
     * @param order $offer
     */
    public function __construct($offerClassMember = null, order $offer = null)
    {
        $this
            ->setOfferClassMember($offerClassMember)
            ->setOffer($offer);
    }
    /**
     * Get offerClassMember value
     * @return string|null
     */
    public function getOfferClassMember()
    {
        return $this->offerClassMember;
    }
    /**
     * Set offerClassMember value
     * @param string $offerClassMember
     * @return \Wcf\StructType\WcfOffer
     */
    public function setOfferClassMember($offerClassMember = null)
    {
        $this->offerClassMember = $offerClassMember;
        return $this;
    }
    /**
     * Get offer value
     * @return order|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param order $offer
     * @return \Wcf\StructType\WcfOffer
     */
    public function setOffer(order $offer = null)
    {
        $this->offer = $offer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Wcf\StructType\WcfOffer
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
