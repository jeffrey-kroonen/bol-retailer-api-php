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
class DeliveryOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\DeliveryOption';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\DeliveryOption;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\DeliveryOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shippingLabelOfferId', $data)) {
            $object->setShippingLabelOfferId($data['shippingLabelOfferId']);
        }
        if (\array_key_exists('recommended', $data)) {
            $object->setRecommended($data['recommended']);
        }
        if (\array_key_exists('validUntilDate', $data)) {
            $object->setValidUntilDate(\DateTime::createFromFormat('Y-m-d', $data['validUntilDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('transporterCode', $data)) {
            $object->setTransporterCode($data['transporterCode']);
        }
        if (\array_key_exists('labelType', $data)) {
            $object->setLabelType($data['labelType']);
        }
        if (\array_key_exists('labelDisplayName', $data)) {
            $object->setLabelDisplayName($data['labelDisplayName']);
        }
        if (\array_key_exists('labelPrice', $data)) {
            $object->setLabelPrice($data['labelPrice']);
        }
        if (\array_key_exists('packageRestrictions', $data)) {
            $object->setPackageRestrictions($data['packageRestrictions']);
        }
        if (\array_key_exists('handoverDetails', $data)) {
            $object->setHandoverDetails($data['handoverDetails']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['shippingLabelOfferId'] = $object->getShippingLabelOfferId();
        $data['recommended'] = $object->getRecommended();
        if (null !== $object->getValidUntilDate()) {
            $data['validUntilDate'] = $object->getValidUntilDate()->format('Y-m-d');
        }
        $data['transporterCode'] = $object->getTransporterCode();
        $data['labelType'] = $object->getLabelType();
        $data['labelDisplayName'] = $object->getLabelDisplayName();
        $data['labelPrice'] = $object->getLabelPrice();
        $data['packageRestrictions'] = $object->getPackageRestrictions();
        if (null !== $object->getHandoverDetails()) {
            $data['handoverDetails'] = $object->getHandoverDetails();
        }
        return $data;
    }
}