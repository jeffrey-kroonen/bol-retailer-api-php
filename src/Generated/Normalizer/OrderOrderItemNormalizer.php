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
class OrderOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JeffreyKroonen\\BolRetailer\\Generated\\Model\\OrderOrderItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \JeffreyKroonen\BolRetailer\Generated\Model\OrderOrderItem;
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
        $object = new \JeffreyKroonen\BolRetailer\Generated\Model\OrderOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderItemId', $data)) {
            $object->setOrderItemId($data['orderItemId']);
        }
        if (\array_key_exists('cancellationRequest', $data)) {
            $object->setCancellationRequest($data['cancellationRequest']);
        }
        if (\array_key_exists('fulfilment', $data)) {
            $object->setFulfilment($data['fulfilment']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($data['offer']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('quantityShipped', $data)) {
            $object->setQuantityShipped($data['quantityShipped']);
        }
        if (\array_key_exists('quantityCancelled', $data)) {
            $object->setQuantityCancelled($data['quantityCancelled']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
        }
        if (\array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $values = array();
            foreach ($data['additionalServices'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalServices($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrderItemId()) {
            $data['orderItemId'] = $object->getOrderItemId();
        }
        if (null !== $object->getCancellationRequest()) {
            $data['cancellationRequest'] = $object->getCancellationRequest();
        }
        if (null !== $object->getFulfilment()) {
            $data['fulfilment'] = $object->getFulfilment();
        }
        if (null !== $object->getOffer()) {
            $data['offer'] = $object->getOffer();
        }
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if (null !== $object->getQuantityShipped()) {
            $data['quantityShipped'] = $object->getQuantityShipped();
        }
        if (null !== $object->getQuantityCancelled()) {
            $data['quantityCancelled'] = $object->getQuantityCancelled();
        }
        if (null !== $object->getUnitPrice()) {
            $data['unitPrice'] = $object->getUnitPrice();
        }
        if (null !== $object->getCommission()) {
            $data['commission'] = $object->getCommission();
        }
        if (null !== $object->getAdditionalServices()) {
            $values = array();
            foreach ($object->getAdditionalServices() as $value) {
                $values[] = $value;
            }
            $data['additionalServices'] = $values;
        }
        return $data;
    }
}