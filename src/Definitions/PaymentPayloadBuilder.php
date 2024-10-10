<?php

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

final class PaymentPayloadBuilder extends SmatpayDefinition
{
    private $merchantId;

    private $merchantApiKey;

    private $merchantKey;

    private $paymentDescription;

    private $amount;

    private $paymentCurrency;

    private $payerName;

    private $payerReference;

    private $payerAccountId;

    private $profileId;

    private $payerMobile;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param mixed $merchantId
     * @return PaymentPayloadBuilder
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantApiKey()
    {
        return $this->merchantApiKey;
    }

    /**
     * @param mixed $merchantApiKey
     * @return PaymentPayloadBuilder
     */
    public function setMerchantApiKey($merchantApiKey)
    {
        $this->merchantApiKey = $merchantApiKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @param mixed $merchantKey
     * @return PaymentPayloadBuilder
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentDescription()
    {
        return $this->paymentDescription;
    }

    /**
     * @param mixed $paymentDescription
     * @return PaymentPayloadBuilder
     */
    public function setPaymentDescription($paymentDescription)
    {
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return PaymentPayloadBuilder
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentCurrency()
    {
        return $this->paymentCurrency;
    }

    /**
     * @param mixed $paymentCurrency
     * @return PaymentPayloadBuilder
     */
    public function setPaymentCurrency($paymentCurrency)
    {
        $this->paymentCurrency = $paymentCurrency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerName()
    {
        return $this->payerName;
    }

    /**
     * @param mixed $payerName
     * @return PaymentPayloadBuilder
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerReference()
    {
        return $this->payerReference;
    }

    /**
     * @param mixed $payerReference
     * @return PaymentPayloadBuilder
     */
    public function setPayerReference($payerReference)
    {
        $this->payerReference = $payerReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerAccountId()
    {
        return $this->payerAccountId;
    }

    /**
     * @param mixed $payerAccountId
     * @return PaymentPayloadBuilder
     */
    public function setPayerAccountId($payerAccountId)
    {
        $this->payerAccountId = $payerAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * @param mixed $profileId
     * @return PaymentPayloadBuilder
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerMobile()
    {
        return $this->payerMobile;
    }

    /**
     * @param mixed $payerMobile
     * @return PaymentPayloadBuilder
     */
    public function setPayerMobile($payerMobile)
    {
        $this->payerMobile = $payerMobile;
        return $this;
    }
}
