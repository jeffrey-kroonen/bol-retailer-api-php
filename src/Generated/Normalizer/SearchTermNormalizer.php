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
class SearchTermNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\SearchTerm';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\SearchTerm;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\SearchTerm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchTerm', $data)) {
            $object->setSearchTerm($data['searchTerm']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('countries', $data)) {
            $values = array();
            foreach ($data['countries'] as $value) {
                $values[] = $value;
            }
            $object->setCountries($values);
        }
        if (\array_key_exists('periods', $data)) {
            $values_1 = array();
            foreach ($data['periods'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPeriods($values_1);
        }
        if (\array_key_exists('relatedSearchTerms', $data)) {
            $values_2 = array();
            foreach ($data['relatedSearchTerms'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRelatedSearchTerms($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['searchTerm'] = $object->getSearchTerm();
        $data['type'] = $object->getType();
        $data['total'] = $object->getTotal();
        $values = array();
        foreach ($object->getCountries() as $value) {
            $values[] = $value;
        }
        $data['countries'] = $values;
        $values_1 = array();
        foreach ($object->getPeriods() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['periods'] = $values_1;
        if (null !== $object->getRelatedSearchTerms()) {
            $values_2 = array();
            foreach ($object->getRelatedSearchTerms() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['relatedSearchTerms'] = $values_2;
        }
        return $data;
    }
}