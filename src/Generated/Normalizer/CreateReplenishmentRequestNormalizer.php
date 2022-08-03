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
class CreateReplenishmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\CreateReplenishmentRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\CreateReplenishmentRequest;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\CreateReplenishmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('deliveryInfo', $data)) {
            $object->setDeliveryInfo($data['deliveryInfo']);
        }
        if (\array_key_exists('labelingByBol', $data)) {
            $object->setLabelingByBol($data['labelingByBol']);
        }
        if (\array_key_exists('numberOfLoadCarriers', $data)) {
            $object->setNumberOfLoadCarriers($data['numberOfLoadCarriers']);
        }
        if (\array_key_exists('pickupAppointment', $data)) {
            $object->setPickupAppointment($data['pickupAppointment']);
        }
        if (\array_key_exists('lines', $data)) {
            $values = array();
            foreach ($data['lines'] as $value) {
                $values[] = $value;
            }
            $object->setLines($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['reference'] = $object->getReference();
        if (null !== $object->getDeliveryInfo()) {
            $data['deliveryInfo'] = $object->getDeliveryInfo();
        }
        $data['labelingByBol'] = $object->getLabelingByBol();
        $data['numberOfLoadCarriers'] = $object->getNumberOfLoadCarriers();
        if (null !== $object->getPickupAppointment()) {
            $data['pickupAppointment'] = $object->getPickupAppointment();
        }
        $values = array();
        foreach ($object->getLines() as $value) {
            $values[] = $value;
        }
        $data['lines'] = $values;
        return $data;
    }
}