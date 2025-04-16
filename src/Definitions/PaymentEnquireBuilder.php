<?php

declare(strict_types=1);

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

class PaymentEnquireBuilder extends SmatpayDefinition
{
    public $transactionReference;

    public $paymentMobile;

    public $transactionCode;

    public $merchantId;

    public $merchantApiKey;

    public $merchantKey;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * @return mixed
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * @param mixed $transactionReference
     * @return PaymentEnquireBuilder
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMobile()
    {
        return $this->paymentMobile;
    }

    /**
     * @param mixed $paymentMobile
     * @return PaymentEnquireBuilder
     */
    public function setPaymentMobile($paymentMobile)
    {
        $this->paymentMobile = $paymentMobile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionCode()
    {
        return $this->transactionCode;
    }

    /**
     * @param mixed $transactionCode
     * @return PaymentEnquireBuilder
     */
    public function setTransactionCode($transactionCode)
    {
        $this->transactionCode = $transactionCode;
        return $this;
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
     * @return PaymentEnquireBuilder
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
     * @return PaymentEnquireBuilder
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
     * @return PaymentEnquireBuilder
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        return $this;
    }

}
