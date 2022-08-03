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
class UploadReportAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\UploadReportAttribute';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\UploadReportAttribute;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\UploadReportAttribute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('values', $data)) {
            $values = array();
            foreach ($data['values'] as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('subStatus', $data)) {
            $object->setSubStatus($data['subStatus']);
        }
        if (\array_key_exists('subStatusDescription', $data)) {
            $object->setSubStatusDescription($data['subStatusDescription']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $values = array();
        foreach ($object->getValues() as $value) {
            $values[] = $value;
        }
        $data['values'] = $values;
        $data['status'] = $object->getStatus();
        if (null !== $object->getSubStatus()) {
            $data['subStatus'] = $object->getSubStatus();
        }
        if (null !== $object->getSubStatusDescription()) {
            $data['subStatusDescription'] = $object->getSubStatusDescription();
        }
        return $data;
    }
}