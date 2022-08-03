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
class ShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Shipment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Shipment;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Shipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentId', $data)) {
            $object->setShipmentId($data['shipmentId']);
        }
        if (\array_key_exists('shipmentDateTime', $data)) {
            $object->setShipmentDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['shipmentDateTime']));
        }
        if (\array_key_exists('shipmentReference', $data)) {
            $object->setShipmentReference($data['shipmentReference']);
        }
        if (\array_key_exists('pickupPoint', $data)) {
            $object->setPickupPoint($data['pickupPoint']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (\array_key_exists('shipmentDetails', $data)) {
            $object->setShipmentDetails($data['shipmentDetails']);
        }
        if (\array_key_exists('billingDetails', $data)) {
            $object->setBillingDetails($data['billingDetails']);
        }
        if (\array_key_exists('shipmentItems', $data)) {
            $values = array();
            foreach ($data['shipmentItems'] as $value) {
                $values[] = $value;
            }
            $object->setShipmentItems($values);
        }
        if (\array_key_exists('transport', $data)) {
            $object->setTransport($data['transport']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getShipmentId()) {
            $data['shipmentId'] = $object->getShipmentId();
        }
        if (null !== $object->getShipmentDateTime()) {
            $data['shipmentDateTime'] = $object->getShipmentDateTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getShipmentReference()) {
            $data['shipmentReference'] = $object->getShipmentReference();
        }
        if (null !== $object->getPickupPoint()) {
            $data['pickupPoint'] = $object->getPickupPoint();
        }
        $data['order'] = $object->getOrder();
        if (null !== $object->getShipmentDetails()) {
            $data['shipmentDetails'] = $object->getShipmentDetails();
        }
        if (null !== $object->getBillingDetails()) {
            $data['billingDetails'] = $object->getBillingDetails();
        }
        $values = array();
        foreach ($object->getShipmentItems() as $value) {
            $values[] = $value;
        }
        $data['shipmentItems'] = $values;
        if (null !== $object->getTransport()) {
            $data['transport'] = $object->getTransport();
        }
        return $data;
    }
}