<?php

declare(strict_types=1);

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

class BulkPaymentBuilder extends SmatpayDefinition
{
     public $merchantId;

     public $merchantApiKey;

     public $merchantKey;

     public $paymentDescription;

     public $amount;

     public $paymentCurrency;

     public $payerName;

     public $payerReference;

     public $payerAccountId;

     public $walletName;

     public $profileId;

     public $dynamicPaidList;

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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
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
     * @return BulkPaymentBuilder
     */
    public function setPayerAccountId($payerAccountId)
    {
        $this->payerAccountId = $payerAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWalletName()
    {
        return $this->walletName;
    }

    /**
     * @param mixed $walletName
     * @return BulkPaymentBuilder
     */
    public function setWalletName($walletName)
    {
        $this->walletName = $walletName;
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
     * @return BulkPaymentBuilder
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDynamicPaidList()
    {
        return $this->dynamicPaidList;
    }

    /**
     * @param $dynamicMerchantId
     * @param $dynamicPayoutPercentage
     * @return BulkPaymentBuilder
     */
    public function setDynamicPaidList($dynamicMerchantId, $dynamicPayoutPercentage)
    {
        $this->dynamicPaidList[] = [
            "dynamicMerchantId" => $dynamicMerchantId,
            "dynamicPayoutPercentage" => $dynamicPayoutPercentage
        ];
        return $this;
    }


}
