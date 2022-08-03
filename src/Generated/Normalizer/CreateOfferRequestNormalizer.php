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
class CreateOfferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\CreateOfferRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\CreateOfferRequest;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\CreateOfferRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($data['condition']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('onHoldByRetailer', $data)) {
            $object->setOnHoldByRetailer($data['onHoldByRetailer']);
        }
        if (\array_key_exists('unknownProductTitle', $data)) {
            $object->setUnknownProductTitle($data['unknownProductTitle']);
        }
        if (\array_key_exists('pricing', $data)) {
            $object->setPricing($data['pricing']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($data['stock']);
        }
        if (\array_key_exists('fulfilment', $data)) {
            $object->setFulfilment($data['fulfilment']);
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
        $data['condition'] = $object->getCondition();
        if (null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if (null !== $object->getOnHoldByRetailer()) {
            $data['onHoldByRetailer'] = $object->getOnHoldByRetailer();
        }
        if (null !== $object->getUnknownProductTitle()) {
            $data['unknownProductTitle'] = $object->getUnknownProductTitle();
        }
        $data['pricing'] = $object->getPricing();
        $data['stock'] = $object->getStock();
        $data['fulfilment'] = $object->getFulfilment();
        return $data;
    }
}