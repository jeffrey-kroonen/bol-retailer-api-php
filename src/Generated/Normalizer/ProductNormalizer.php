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
class ProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Product';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Product;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Product();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('relevanceScores', $data)) {
            $values = array();
            foreach ($data['relevanceScores'] as $value) {
                $values[] = $value;
            }
            $object->setRelevanceScores($values);
        }
        if (\array_key_exists('maximumPrice', $data)) {
            $object->setMaximumPrice($data['maximumPrice']);
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
        if (null !== $object->getRelevanceScores()) {
            $values = array();
            foreach ($object->getRelevanceScores() as $value) {
                $values[] = $value;
            }
            $data['relevanceScores'] = $values;
        }
        if (null !== $object->getMaximumPrice()) {
            $data['maximumPrice'] = $object->getMaximumPrice();
        }
        return $data;
    }
}