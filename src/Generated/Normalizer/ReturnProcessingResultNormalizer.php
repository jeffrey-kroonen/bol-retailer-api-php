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
class ReturnProcessingResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\ReturnProcessingResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\ReturnProcessingResult;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\ReturnProcessingResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('processingResult', $data)) {
            $object->setProcessingResult($data['processingResult']);
        }
        if (\array_key_exists('handlingResult', $data)) {
            $object->setHandlingResult($data['handlingResult']);
        }
        if (\array_key_exists('processingDateTime', $data)) {
            $object->setProcessingDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['processingDateTime']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['quantity'] = $object->getQuantity();
        if (null !== $object->getProcessingResult()) {
            $data['processingResult'] = $object->getProcessingResult();
        }
        $data['handlingResult'] = $object->getHandlingResult();
        $data['processingDateTime'] = $object->getProcessingDateTime()->format('Y-m-d\\TH:i:sP');
        return $data;
    }
}