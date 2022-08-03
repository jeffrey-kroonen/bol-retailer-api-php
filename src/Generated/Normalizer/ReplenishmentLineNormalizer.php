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
class ReplenishmentLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReplenishmentLine';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReplenishmentLine;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReplenishmentLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('lineState', $data)) {
            $object->setLineState($data['lineState']);
        }
        if (\array_key_exists('quantityAnnounced', $data)) {
            $object->setQuantityAnnounced($data['quantityAnnounced']);
        }
        if (\array_key_exists('quantityReceived', $data)) {
            $object->setQuantityReceived($data['quantityReceived']);
        }
        if (\array_key_exists('quantityInProgress', $data)) {
            $object->setQuantityInProgress($data['quantityInProgress']);
        }
        if (\array_key_exists('quantityWithGradedState', $data)) {
            $object->setQuantityWithGradedState($data['quantityWithGradedState']);
        }
        if (\array_key_exists('quantityWithRegularState', $data)) {
            $object->setQuantityWithRegularState($data['quantityWithRegularState']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ean'] = $object->getEan();
        $data['lineState'] = $object->getLineState();
        $data['quantityAnnounced'] = $object->getQuantityAnnounced();
        $data['quantityReceived'] = $object->getQuantityReceived();
        $data['quantityInProgress'] = $object->getQuantityInProgress();
        $data['quantityWithGradedState'] = $object->getQuantityWithGradedState();
        $data['quantityWithRegularState'] = $object->getQuantityWithRegularState();
        return $data;
    }
}