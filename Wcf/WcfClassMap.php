<?php

namespace Wcf;

/**
 * Class which returns the class map definition
 * @package Wcf
 */
class WcfClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function classMap()
    {
        return array(
            'order' => '\Wcf\StructType\WcfOrder',
            'offer' => '\Wcf\StructType\WcfOffer',
            'orderResponse' => '\Wcf\StructType\WcfOrderResponse',
            'offerResponse' => '\Wcf\StructType\WcfOfferResponse',
        );
    }
}
