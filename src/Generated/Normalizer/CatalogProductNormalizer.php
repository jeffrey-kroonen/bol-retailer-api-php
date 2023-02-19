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

class CatalogProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\CatalogProduct';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\CatalogProduct;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\CatalogProduct();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('published', $data)) {
            $object->setPublished($data['published']);
        }
        if (\array_key_exists('gpc', $data)) {
            $object->setGpc($this->denormalizer->denormalize($data['gpc'], 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Gpc', 'json', $context));
        }
        if (\array_key_exists('enrichment', $data)) {
            $object->setEnrichment($this->denormalizer->denormalize($data['enrichment'], 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Enrichment', 'json', $context));
        }
        if (\array_key_exists('attributes', $data)) {
            $values = [];
            foreach ($data['attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Attributes', 'json', $context);
            }
            $object->setAttributes($values);
        }
        if (\array_key_exists('parties', $data)) {
            $values_1 = [];
            foreach ($data['parties'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Party', 'json', $context);
            }
            $object->setParties($values_1);
        }
        if (\array_key_exists('audioTracks', $data)) {
            $values_2 = [];
            foreach ($data['audioTracks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\AudioTracks', 'json', $context);
            }
            $object->setAudioTracks($values_2);
        }
        if (\array_key_exists('series', $data)) {
            $values_3 = [];
            foreach ($data['series'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Serie', 'json', $context);
            }
            $object->setSeries($values_3);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['published'] = $object->getPublished();
        $data['gpc'] = $this->normalizer->normalize($object->getGpc(), 'json', $context);
        if ($object->isInitialized('enrichment') && null !== $object->getEnrichment()) {
            $data['enrichment'] = $this->normalizer->normalize($object->getEnrichment(), 'json', $context);
        }
        $values = [];
        foreach ($object->getAttributes() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['attributes'] = $values;
        $values_1 = [];
        foreach ($object->getParties() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['parties'] = $values_1;
        if ($object->isInitialized('audioTracks') && null !== $object->getAudioTracks()) {
            $values_2 = [];
            foreach ($object->getAudioTracks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['audioTracks'] = $values_2;
        }
        if ($object->isInitialized('series') && null !== $object->getSeries()) {
            $values_3 = [];
            foreach ($object->getSeries() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['series'] = $values_3;
        }

        return $data;
    }
}
