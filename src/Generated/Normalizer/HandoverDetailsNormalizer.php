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
class HandoverDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\HandoverDetails';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\HandoverDetails;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\HandoverDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('meetsCustomerExpectation', $data)) {
            $object->setMeetsCustomerExpectation($data['meetsCustomerExpectation']);
        }
        if (\array_key_exists('latestHandoverDateTime', $data)) {
            $object->setLatestHandoverDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['latestHandoverDateTime']));
        }
        if (\array_key_exists('collectionMethod', $data)) {
            $object->setCollectionMethod($data['collectionMethod']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMeetsCustomerExpectation()) {
            $data['meetsCustomerExpectation'] = $object->getMeetsCustomerExpectation();
        }
        if (null !== $object->getLatestHandoverDateTime()) {
            $data['latestHandoverDateTime'] = $object->getLatestHandoverDateTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCollectionMethod()) {
            $data['collectionMethod'] = $object->getCollectionMethod();
        }
        return $data;
    }
}