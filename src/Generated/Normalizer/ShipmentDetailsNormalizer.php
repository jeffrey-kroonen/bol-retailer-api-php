<?php

namespace JeffreyKroonen\BolRetailer\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JeffreyKroonen\BolRetailer\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShipmentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ShipmentDetails';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ShipmentDetails;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ShipmentDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pickupPointName', $data)) {
            $object->setPickupPointName($data['pickupPointName']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('surname', $data)) {
            $object->setSurname($data['surname']);
        }
        if (\array_key_exists('streetName', $data)) {
            $object->setStreetName($data['streetName']);
        }
        if (\array_key_exists('houseNumber', $data)) {
            $object->setHouseNumber($data['houseNumber']);
        }
        if (\array_key_exists('houseNumberExtension', $data)) {
            $object->setHouseNumberExtension($data['houseNumberExtension']);
        }
        if (\array_key_exists('extraAddressInformation', $data)) {
            $object->setExtraAddressInformation($data['extraAddressInformation']);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->setZipCode($data['zipCode']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
        }
        if (\array_key_exists('deliveryPhoneNumber', $data)) {
            $object->setDeliveryPhoneNumber($data['deliveryPhoneNumber']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPickupPointName()) {
            $data['pickupPointName'] = $object->getPickupPointName();
        }
        if (null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getSurname()) {
            $data['surname'] = $object->getSurname();
        }
        if (null !== $object->getStreetName()) {
            $data['streetName'] = $object->getStreetName();
        }
        if (null !== $object->getHouseNumber()) {
            $data['houseNumber'] = $object->getHouseNumber();
        }
        if (null !== $object->getHouseNumberExtension()) {
            $data['houseNumberExtension'] = $object->getHouseNumberExtension();
        }
        if (null !== $object->getExtraAddressInformation()) {
            $data['extraAddressInformation'] = $object->getExtraAddressInformation();
        }
        if (null !== $object->getZipCode()) {
            $data['zipCode'] = $object->getZipCode();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getDeliveryPhoneNumber()) {
            $data['deliveryPhoneNumber'] = $object->getDeliveryPhoneNumber();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        return $data;
    }
}