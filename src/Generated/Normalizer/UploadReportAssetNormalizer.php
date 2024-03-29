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

class UploadReportAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\UploadReportAsset';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\UploadReportAsset;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\UploadReportAsset();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('labels', $data)) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $value;
            }
            $object->setLabels($values);
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['url'] = $object->getUrl();
        $values = [];
        foreach ($object->getLabels() as $value) {
            $values[] = $value;
        }
        $data['labels'] = $values;
        $data['status'] = $object->getStatus();
        if ($object->isInitialized('subStatus') && null !== $object->getSubStatus()) {
            $data['subStatus'] = $object->getSubStatus();
        }
        if ($object->isInitialized('subStatusDescription') && null !== $object->getSubStatusDescription()) {
            $data['subStatusDescription'] = $object->getSubStatusDescription();
        }

        return $data;
    }
}
