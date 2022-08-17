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
class ReducedReplenishmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReducedReplenishment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReplenishment;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReplenishment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('replenishmentId', $data)) {
            $object->setReplenishmentId($data['replenishmentId']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('creationDateTime', $data)) {
            $object->setCreationDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDateTime']));
        }
        if (\array_key_exists('lines', $data)) {
            $values = array();
            foreach ($data['lines'] as $value) {
                $values[] = $value;
            }
            $object->setLines($values);
        }
        if (\array_key_exists('invalidLines', $data)) {
            $values_1 = array();
            foreach ($data['invalidLines'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInvalidLines($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['replenishmentId'] = $object->getReplenishmentId();
        $data['reference'] = $object->getReference();
        $data['creationDateTime'] = $object->getCreationDateTime()->format('Y-m-d\\TH:i:sP');
        $values = array();
        foreach ($object->getLines() as $value) {
            $values[] = $value;
        }
        $data['lines'] = $values;
        $values_1 = array();
        foreach ($object->getInvalidLines() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['invalidLines'] = $values_1;
        return $data;
    }
}