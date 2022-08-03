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
class OrderFulfilmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\OrderFulfilment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\OrderFulfilment;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\OrderFulfilment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($data['method']);
        }
        if (\array_key_exists('distributionParty', $data)) {
            $object->setDistributionParty($data['distributionParty']);
        }
        if (\array_key_exists('latestDeliveryDate', $data)) {
            $object->setLatestDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['latestDeliveryDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('exactDeliveryDate', $data)) {
            $object->setExactDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['exactDeliveryDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('expiryDate', $data)) {
            $object->setExpiryDate(\DateTime::createFromFormat('Y-m-d', $data['expiryDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('timeFrameType', $data)) {
            $object->setTimeFrameType($data['timeFrameType']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMethod()) {
            $data['method'] = $object->getMethod();
        }
        if (null !== $object->getDistributionParty()) {
            $data['distributionParty'] = $object->getDistributionParty();
        }
        if (null !== $object->getLatestDeliveryDate()) {
            $data['latestDeliveryDate'] = $object->getLatestDeliveryDate()->format('Y-m-d');
        }
        if (null !== $object->getExactDeliveryDate()) {
            $data['exactDeliveryDate'] = $object->getExactDeliveryDate()->format('Y-m-d');
        }
        if (null !== $object->getExpiryDate()) {
            $data['expiryDate'] = $object->getExpiryDate()->format('Y-m-d');
        }
        if (null !== $object->getTimeFrameType()) {
            $data['timeFrameType'] = $object->getTimeFrameType();
        }
        return $data;
    }
}