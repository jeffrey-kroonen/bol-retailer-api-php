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
class CreateProductContentSingleRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\CreateProductContentSingleRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\CreateProductContentSingleRequest;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\CreateProductContentSingleRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
        }
        if (\array_key_exists('attributes', $data)) {
            $values = array();
            foreach ($data['attributes'] as $value) {
                $values[] = $value;
            }
            $object->setAttributes($values);
        }
        if (\array_key_exists('assets', $data)) {
            $values_1 = array();
            foreach ($data['assets'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAssets($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['language'] = $object->getLanguage();
        $values = array();
        foreach ($object->getAttributes() as $value) {
            $values[] = $value;
        }
        $data['attributes'] = $values;
        if (null !== $object->getAssets()) {
            $values_1 = array();
            foreach ($object->getAssets() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['assets'] = $values_1;
        }
        return $data;
    }
}