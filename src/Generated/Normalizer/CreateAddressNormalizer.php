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
class CreateAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\CreateAddress';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\CreateAddress;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\CreateAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('streetName', $data)) {
            $object->setStreetName($data['streetName']);
        }
        if (\array_key_exists('houseNumber', $data)) {
            $object->setHouseNumber($data['houseNumber']);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->setZipCode($data['zipCode']);
        }
        if (\array_key_exists('houseNumberExtension', $data)) {
            $object->setHouseNumberExtension($data['houseNumberExtension']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('attentionOf', $data)) {
            $object->setAttentionOf($data['attentionOf']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['streetName'] = $object->getStreetName();
        $data['houseNumber'] = $object->getHouseNumber();
        $data['zipCode'] = $object->getZipCode();
        if (null !== $object->getHouseNumberExtension()) {
            $data['houseNumberExtension'] = $object->getHouseNumberExtension();
        }
        $data['city'] = $object->getCity();
        if (null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        $data['attentionOf'] = $object->getAttentionOf();
        return $data;
    }
}