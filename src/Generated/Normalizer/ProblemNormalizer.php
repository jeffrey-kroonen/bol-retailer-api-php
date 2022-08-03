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
class ProblemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Problem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Problem;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Problem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('detail', $data)) {
            $object->setDetail($data['detail']);
        }
        if (\array_key_exists('host', $data)) {
            $object->setHost($data['host']);
        }
        if (\array_key_exists('instance', $data)) {
            $object->setInstance($data['instance']);
        }
        if (\array_key_exists('violations', $data)) {
            $values = array();
            foreach ($data['violations'] as $value) {
                $values[] = $value;
            }
            $object->setViolations($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        if (null !== $object->getHost()) {
            $data['host'] = $object->getHost();
        }
        if (null !== $object->getInstance()) {
            $data['instance'] = $object->getInstance();
        }
        $values = array();
        foreach ($object->getViolations() as $value) {
            $values[] = $value;
        }
        $data['violations'] = $values;
        return $data;
    }
}