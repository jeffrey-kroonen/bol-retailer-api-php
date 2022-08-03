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
class ShipmentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ShipmentItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ShipmentItem;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ShipmentItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderItemId', $data)) {
            $object->setOrderItemId($data['orderItemId']);
        }
        if (\array_key_exists('fulfilment', $data)) {
            $object->setFulfilment($data['fulfilment']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($data['offer']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
        }
        if (\array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrderItemId()) {
            $data['orderItemId'] = $object->getOrderItemId();
        }
        if (null !== $object->getFulfilment()) {
            $data['fulfilment'] = $object->getFulfilment();
        }
        if (null !== $object->getOffer()) {
            $data['offer'] = $object->getOffer();
        }
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if (null !== $object->getUnitPrice()) {
            $data['unitPrice'] = $object->getUnitPrice();
        }
        if (null !== $object->getCommission()) {
            $data['commission'] = $object->getCommission();
        }
        return $data;
    }
}