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
class CommissionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\Commission';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\Commission;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\Commission();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($data['condition']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
        }
        if (\array_key_exists('fixedAmount', $data)) {
            $object->setFixedAmount($data['fixedAmount']);
        }
        if (\array_key_exists('percentage', $data)) {
            $object->setPercentage($data['percentage']);
        }
        if (\array_key_exists('totalCost', $data)) {
            $object->setTotalCost($data['totalCost']);
        }
        if (\array_key_exists('totalCostWithoutReduction', $data)) {
            $object->setTotalCostWithoutReduction($data['totalCostWithoutReduction']);
        }
        if (\array_key_exists('reductions', $data)) {
            $values = array();
            foreach ($data['reductions'] as $value) {
                $values[] = $value;
            }
            $object->setReductions($values);
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
        $data['unitPrice'] = $object->getUnitPrice();
        $data['fixedAmount'] = $object->getFixedAmount();
        $data['percentage'] = $object->getPercentage();
        $data['totalCost'] = $object->getTotalCost();
        if (null !== $object->getTotalCostWithoutReduction()) {
            $data['totalCostWithoutReduction'] = $object->getTotalCostWithoutReduction();
        }
        $values = array();
        foreach ($object->getReductions() as $value) {
            $values[] = $value;
        }
        $data['reductions'] = $values;
        return $data;
    }
}