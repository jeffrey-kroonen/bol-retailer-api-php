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
class PickupAppointmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\PickupAppointment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\PickupAppointment;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\PickupAppointment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('commentToTransporter', $data)) {
            $object->setCommentToTransporter($data['commentToTransporter']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('pickupTimeSlot', $data)) {
            $object->setPickupTimeSlot($data['pickupTimeSlot']);
        }
        if (\array_key_exists('pickupDateTime', $data)) {
            $object->setPickupDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['pickupDateTime']));
        }
        if (\array_key_exists('cancellationReason', $data)) {
            $object->setCancellationReason($data['cancellationReason']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCommentToTransporter()) {
            $data['commentToTransporter'] = $object->getCommentToTransporter();
        }
        $data['address'] = $object->getAddress();
        $data['pickupTimeSlot'] = $object->getPickupTimeSlot();
        if (null !== $object->getPickupDateTime()) {
            $data['pickupDateTime'] = $object->getPickupDateTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCancellationReason()) {
            $data['cancellationReason'] = $object->getCancellationReason();
        }
        return $data;
    }
}