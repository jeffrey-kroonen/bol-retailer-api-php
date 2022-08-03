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
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Order';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Order;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Order();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderId', $data)) {
            $object->setOrderId($data['orderId']);
        }
        if (\array_key_exists('pickupPoint', $data)) {
            $object->setPickupPoint($data['pickupPoint']);
        }
        if (\array_key_exists('orderPlacedDateTime', $data)) {
            $object->setOrderPlacedDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['orderPlacedDateTime']));
        }
        if (\array_key_exists('shipmentDetails', $data)) {
            $object->setShipmentDetails($data['shipmentDetails']);
        }
        if (\array_key_exists('billingDetails', $data)) {
            $object->setBillingDetails($data['billingDetails']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = array();
            foreach ($data['orderItems'] as $value) {
                $values[] = $value;
            }
            $object->setOrderItems($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrderId()) {
            $data['orderId'] = $object->getOrderId();
        }
        if (null !== $object->getPickupPoint()) {
            $data['pickupPoint'] = $object->getPickupPoint();
        }
        if (null !== $object->getOrderPlacedDateTime()) {
            $data['orderPlacedDateTime'] = $object->getOrderPlacedDateTime()->format('Y-m-d\\TH:i:sP');
        }
        $data['shipmentDetails'] = $object->getShipmentDetails();
        if (null !== $object->getBillingDetails()) {
            $data['billingDetails'] = $object->getBillingDetails();
        }
        $values = array();
        foreach ($object->getOrderItems() as $value) {
            $values[] = $value;
        }
        $data['orderItems'] = $values;
        return $data;
    }
}