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
class LoadCarrierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\LoadCarrier';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\LoadCarrier;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\LoadCarrier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sscc', $data)) {
            $object->setSscc($data['sscc']);
        }
        if (\array_key_exists('transportLabelTrackAndTrace', $data)) {
            $object->setTransportLabelTrackAndTrace($data['transportLabelTrackAndTrace']);
        }
        if (\array_key_exists('transportState', $data)) {
            $object->setTransportState($data['transportState']);
        }
        if (\array_key_exists('transportStateUpdateDateTime', $data)) {
            $object->setTransportStateUpdateDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['transportStateUpdateDateTime']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSscc()) {
            $data['sscc'] = $object->getSscc();
        }
        if (null !== $object->getTransportLabelTrackAndTrace()) {
            $data['transportLabelTrackAndTrace'] = $object->getTransportLabelTrackAndTrace();
        }
        $data['transportState'] = $object->getTransportState();
        $data['transportStateUpdateDateTime'] = $object->getTransportStateUpdateDateTime()->format('Y-m-d\\TH:i:sP');
        return $data;
    }
}