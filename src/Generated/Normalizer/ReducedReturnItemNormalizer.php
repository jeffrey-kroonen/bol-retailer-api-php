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
class ReducedReturnItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReducedReturnItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReturnItem;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReturnItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rmaId', $data)) {
            $object->setRmaId($data['rmaId']);
        }
        if (\array_key_exists('orderId', $data)) {
            $object->setOrderId($data['orderId']);
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('expectedQuantity', $data)) {
            $object->setExpectedQuantity($data['expectedQuantity']);
        }
        if (\array_key_exists('returnReason', $data)) {
            $object->setReturnReason($data['returnReason']);
        }
        if (\array_key_exists('handled', $data)) {
            $object->setHandled($data['handled']);
        }
        if (\array_key_exists('processingResults', $data)) {
            $values = array();
            foreach ($data['processingResults'] as $value) {
                $values[] = $value;
            }
            $object->setProcessingResults($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['rmaId'] = $object->getRmaId();
        $data['orderId'] = $object->getOrderId();
        $data['ean'] = $object->getEan();
        $data['expectedQuantity'] = $object->getExpectedQuantity();
        if (null !== $object->getReturnReason()) {
            $data['returnReason'] = $object->getReturnReason();
        }
        if (null !== $object->getHandled()) {
            $data['handled'] = $object->getHandled();
        }
        $values = array();
        foreach ($object->getProcessingResults() as $value) {
            $values[] = $value;
        }
        $data['processingResults'] = $values;
        return $data;
    }
}