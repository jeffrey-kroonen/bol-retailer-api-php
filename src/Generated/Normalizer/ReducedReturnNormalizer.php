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
class ReducedReturnNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReducedReturn';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReturn;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReducedReturn();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('returnId', $data)) {
            $object->setReturnId($data['returnId']);
        }
        if (\array_key_exists('registrationDateTime', $data)) {
            $object->setRegistrationDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['registrationDateTime']));
        }
        if (\array_key_exists('fulfilmentMethod', $data)) {
            $object->setFulfilmentMethod($data['fulfilmentMethod']);
        }
        if (\array_key_exists('returnItems', $data)) {
            $values = array();
            foreach ($data['returnItems'] as $value) {
                $values[] = $value;
            }
            $object->setReturnItems($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['returnId'] = $object->getReturnId();
        $data['registrationDateTime'] = $object->getRegistrationDateTime()->format('Y-m-d\\TH:i:sP');
        $data['fulfilmentMethod'] = $object->getFulfilmentMethod();
        $values = array();
        foreach ($object->getReturnItems() as $value) {
            $values[] = $value;
        }
        $data['returnItems'] = $values;
        return $data;
    }
}