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
class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Promotion';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Promotion;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Promotion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('promotionId', $data)) {
            $object->setPromotionId($data['promotionId']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('startDateTime', $data)) {
            $object->setStartDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startDateTime']));
        }
        if (\array_key_exists('endDateTime', $data)) {
            $object->setEndDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['endDateTime']));
        }
        if (\array_key_exists('countries', $data)) {
            $values = array();
            foreach ($data['countries'] as $value) {
                $values[] = $value;
            }
            $object->setCountries($values);
        }
        if (\array_key_exists('promotionType', $data)) {
            $object->setPromotionType($data['promotionType']);
        }
        if (\array_key_exists('retailerSpecificPromotion', $data)) {
            $object->setRetailerSpecificPromotion($data['retailerSpecificPromotion']);
        }
        if (\array_key_exists('campaign', $data)) {
            $object->setCampaign($data['campaign']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['promotionId'] = $object->getPromotionId();
        $data['title'] = $object->getTitle();
        $data['startDateTime'] = $object->getStartDateTime()->format('Y-m-d\\TH:i:sP');
        $data['endDateTime'] = $object->getEndDateTime()->format('Y-m-d\\TH:i:sP');
        $values = array();
        foreach ($object->getCountries() as $value) {
            $values[] = $value;
        }
        $data['countries'] = $values;
        $data['promotionType'] = $object->getPromotionType();
        if (null !== $object->getRetailerSpecificPromotion()) {
            $data['retailerSpecificPromotion'] = $object->getRetailerSpecificPromotion();
        }
        if (null !== $object->getCampaign()) {
            $data['campaign'] = $object->getCampaign();
        }
        return $data;
    }
}