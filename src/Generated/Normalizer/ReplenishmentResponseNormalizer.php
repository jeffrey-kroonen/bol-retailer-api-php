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
class ReplenishmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReplenishmentResponse';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReplenishmentResponse;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReplenishmentResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('replenishmentId', $data)) {
            $object->setReplenishmentId($data['replenishmentId']);
        }
        if (\array_key_exists('creationDateTime', $data)) {
            $object->setCreationDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDateTime']));
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('labelingByBol', $data)) {
            $object->setLabelingByBol($data['labelingByBol']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('deliveryInformation', $data)) {
            $object->setDeliveryInformation($data['deliveryInformation']);
        }
        if (\array_key_exists('pickupAppointment', $data)) {
            $object->setPickupAppointment($data['pickupAppointment']);
        }
        if (\array_key_exists('numberOfLoadCarriers', $data)) {
            $object->setNumberOfLoadCarriers($data['numberOfLoadCarriers']);
        }
        if (\array_key_exists('loadCarriers', $data)) {
            $values = array();
            foreach ($data['loadCarriers'] as $value) {
                $values[] = $value;
            }
            $object->setLoadCarriers($values);
        }
        if (\array_key_exists('lines', $data)) {
            $values_1 = array();
            foreach ($data['lines'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLines($values_1);
        }
        if (\array_key_exists('invalidLines', $data)) {
            $values_2 = array();
            foreach ($data['invalidLines'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setInvalidLines($values_2);
        }
        if (\array_key_exists('stateTransitions', $data)) {
            $values_3 = array();
            foreach ($data['stateTransitions'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setStateTransitions($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['replenishmentId'] = $object->getReplenishmentId();
        $data['creationDateTime'] = $object->getCreationDateTime()->format('Y-m-d\\TH:i:sP');
        $data['reference'] = $object->getReference();
        $data['labelingByBol'] = $object->getLabelingByBol();
        $data['state'] = $object->getState();
        $data['deliveryInformation'] = $object->getDeliveryInformation();
        if (null !== $object->getPickupAppointment()) {
            $data['pickupAppointment'] = $object->getPickupAppointment();
        }
        if (null !== $object->getNumberOfLoadCarriers()) {
            $data['numberOfLoadCarriers'] = $object->getNumberOfLoadCarriers();
        }
        $values = array();
        foreach ($object->getLoadCarriers() as $value) {
            $values[] = $value;
        }
        $data['loadCarriers'] = $values;
        $values_1 = array();
        foreach ($object->getLines() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['lines'] = $values_1;
        $values_2 = array();
        foreach ($object->getInvalidLines() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['invalidLines'] = $values_2;
        $values_3 = array();
        foreach ($object->getStateTransitions() as $value_3) {
            $values_3[] = $value_3;
        }
        $data['stateTransitions'] = $values_3;
        return $data;
    }
}