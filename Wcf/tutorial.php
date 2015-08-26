<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdl/Service1.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdl/Service1.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Wcf\WcfClassMap::classMap(),
);
/**
 * Samples for Order ServiceType
 */
$order = new \Wcf\ServiceType\WcfOrder($options);
/**
 * Sample call for order operation/method
 */
if ($order->order(new \Wcf\StructType\WcfOrder()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Samples for Offer ServiceType
 */
$offer = new \Wcf\ServiceType\WcfOffer($options);
/**
 * Sample call for offer operation/method
 */
if ($offer->offer(new \Wcf\StructType\WcfOffer()) !== false) {
    print_r($offer->getResult());
} else {
    print_r($offer->getLastError());
}
