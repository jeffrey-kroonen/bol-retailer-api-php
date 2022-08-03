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
class ReturnReasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReturnReason';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReturnReason;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReturnReason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mainReason', $data)) {
            $object->setMainReason($data['mainReason']);
        }
        if (\array_key_exists('detailedReason', $data)) {
            $object->setDetailedReason($data['detailedReason']);
        }
        if (\array_key_exists('customerComments', $data)) {
            $object->setCustomerComments($data['customerComments']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMainReason()) {
            $data['mainReason'] = $object->getMainReason();
        }
        if (null !== $object->getDetailedReason()) {
            $data['detailedReason'] = $object->getDetailedReason();
        }
        if (null !== $object->getCustomerComments()) {
            $data['customerComments'] = $object->getCustomerComments();
        }
        return $data;
    }
}