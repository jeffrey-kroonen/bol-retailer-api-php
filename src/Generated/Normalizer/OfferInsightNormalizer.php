<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JeffreyKroonen\BolRetailer\Generated\Runtime\Normalizer\CheckArray;
use JeffreyKroonen\BolRetailer\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OfferInsightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\OfferInsight';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\OfferInsight;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\OfferInsight();
        if (\array_key_exists('total', $data) && \is_int($data['total'])) {
            $data['total'] = (float) $data['total'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('countries', $data)) {
            $values = [];
            foreach ($data['countries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\OfferInsightsCountry', 'json', $context);
            }
            $object->setCountries($values);
        }
        if (\array_key_exists('periods', $data)) {
            $values_1 = [];
            foreach ($data['periods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Periods', 'json', $context);
            }
            $object->setPeriods($values_1);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['name'] = $object->getName();
        $data['type'] = $object->getType();
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        $values = [];
        foreach ($object->getCountries() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['countries'] = $values;
        $values_1 = [];
        foreach ($object->getPeriods() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['periods'] = $values_1;

        return $data;
    }
}
