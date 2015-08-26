<?php

namespace Wcf\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for order StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:order
 * @package Wcf
 * @subpackage Structs
 */
class WcfOrder extends AbstractStructBase
{
    /**
     * The orderClassMember
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $orderClassMember;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Wcf\StructType\WcfOrder
     */
    public $order;
    /**
     * Constructor method for order
     * @uses WcfOrder::setOrderClassMember()
     * @uses WcfOrder::setOrder()
     * @param string $orderClassMember
     * @param \Wcf\StructType\WcfOrder $order
     */
    public function __construct($orderClassMember = null, \Wcf\StructType\WcfOrder $order = null)
    {
        $this
            ->setOrderClassMember($orderClassMember)
            ->setOrder($order);
    }
    /**
     * Get orderClassMember value
     * @return string|null
     */
    public function getOrderClassMember()
    {
        return $this->orderClassMember;
    }
    /**
     * Set orderClassMember value
     * @param string $orderClassMember
     * @return \Wcf\StructType\WcfOrder
     */
    public function setOrderClassMember($orderClassMember = null)
    {
        $this->orderClassMember = $orderClassMember;
        return $this;
    }
    /**
     * Get order value
     * @return \Wcf\StructType\WcfOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param \Wcf\StructType\WcfOrder $order
     * @return \Wcf\StructType\WcfOrder
     */
    public function setOrder(\Wcf\StructType\WcfOrder $order = null)
    {
        $this->order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Wcf\StructType\WcfOrder
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
