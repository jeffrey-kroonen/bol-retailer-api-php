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
class ReturnItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReturnItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReturnItem;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReturnItem();
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
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('expectedQuantity', $data)) {
            $object->setExpectedQuantity($data['expectedQuantity']);
        }
        if (\array_key_exists('returnReason', $data)) {
            $object->setReturnReason($data['returnReason']);
        }
        if (\array_key_exists('trackAndTrace', $data)) {
            $object->setTrackAndTrace($data['trackAndTrace']);
        }
        if (\array_key_exists('transporterName', $data)) {
            $object->setTransporterName($data['transporterName']);
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
        if (\array_key_exists('customerDetails', $data)) {
            $object->setCustomerDetails($data['customerDetails']);
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
        $data['title'] = $object->getTitle();
        $data['expectedQuantity'] = $object->getExpectedQuantity();
        if (null !== $object->getReturnReason()) {
            $data['returnReason'] = $object->getReturnReason();
        }
        if (null !== $object->getTrackAndTrace()) {
            $data['trackAndTrace'] = $object->getTrackAndTrace();
        }
        if (null !== $object->getTransporterName()) {
            $data['transporterName'] = $object->getTransporterName();
        }
        $data['handled'] = $object->getHandled();
        $values = array();
        foreach ($object->getProcessingResults() as $value) {
            $values[] = $value;
        }
        $data['processingResults'] = $values;
        $data['customerDetails'] = $object->getCustomerDetails();
        return $data;
    }
}