<?php

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

class PaymentLinkBuilder extends SmatpayDefinition
{

    public $paymentLinkName;

    public $paymentLinkDescription;

    public $paymentLinkReference;

    public $paymentLinkAmount;

    public $paymentLinkType = 'ONCE_OFF_FIXED';

    public $paymentLinkImageType;

    public $paymentLinkProfileId;

    public $paymentLinkStartDate;

    public $paymentLinkEndDate;

    public $paymentLinkCurrency;

    public $paymentLinkCurrencyId;

    public $paymentLinkOtherCurrencies = false;

    public $paymentLinkCustomerRedirectUrl;

    public $paymentLinkImage;

    public function __construct(array $attributes)
    {
        parent::__construct($attributes);
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkName()
    {
        return $this->paymentLinkName;
    }

    /**
     * @param mixed $paymentLinkName
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkName($paymentLinkName)
    {
        $this->paymentLinkName = $paymentLinkName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkDescription()
    {
        return $this->paymentLinkDescription;
    }

    /**
     * @param mixed $paymentLinkDescription
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkDescription($paymentLinkDescription)
    {
        $this->paymentLinkDescription = $paymentLinkDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkReference()
    {
        return $this->paymentLinkReference;
    }

    /**
     * @param mixed $paymentLinkReference
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkReference($paymentLinkReference)
    {
        $this->paymentLinkReference = $paymentLinkReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkAmount()
    {
        return $this->paymentLinkAmount;
    }

    /**
     * @param mixed $paymentLinkAmount
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkAmount($paymentLinkAmount)
    {
        $this->paymentLinkAmount = $paymentLinkAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentLinkType(): string
    {
        return $this->paymentLinkType;
    }

    /**
     * @param string $paymentLinkType
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkType(string $paymentLinkType): PaymentLinkBuilder
    {
        $this->paymentLinkType = $paymentLinkType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkImageType()
    {
        return $this->paymentLinkImageType;
    }

    /**
     * @param mixed $paymentLinkImageType
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkImageType($paymentLinkImageType)
    {
        $this->paymentLinkImageType = $paymentLinkImageType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkProfileId()
    {
        return $this->paymentLinkProfileId;
    }

    /**
     * @param mixed $paymentLinkProfileId
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkProfileId($paymentLinkProfileId)
    {
        $this->paymentLinkProfileId = $paymentLinkProfileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkStartDate()
    {
        return $this->paymentLinkStartDate;
    }

    /**
     * @param mixed $paymentLinkStartDate
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkStartDate($paymentLinkStartDate)
    {
        $this->paymentLinkStartDate = $paymentLinkStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkEndDate()
    {
        return $this->paymentLinkEndDate;
    }

    /**
     * @param mixed $paymentLinkEndDate
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkEndDate($paymentLinkEndDate)
    {
        $this->paymentLinkEndDate = $paymentLinkEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkCurrency()
    {
        return $this->paymentLinkCurrency;
    }

    /**
     * @param mixed $paymentLinkCurrency
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkCurrency($paymentLinkCurrency)
    {
        $this->paymentLinkCurrency = $paymentLinkCurrency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkCurrencyId()
    {
        return $this->paymentLinkCurrencyId;
    }

    /**
     * @param mixed $paymentLinkCurrencyId
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkCurrencyId($paymentLinkCurrencyId)
    {
        $this->paymentLinkCurrencyId = $paymentLinkCurrencyId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentLinkOtherCurrencies(): bool
    {
        return $this->paymentLinkOtherCurrencies;
    }

    /**
     * @param bool $paymentLinkOtherCurrencies
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkOtherCurrencies(bool $paymentLinkOtherCurrencies): PaymentLinkBuilder
    {
        $this->paymentLinkOtherCurrencies = $paymentLinkOtherCurrencies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkCustomerRedirectUrl()
    {
        return $this->paymentLinkCustomerRedirectUrl;
    }

    /**
     * @param mixed $paymentLinkCustomerRedirectUrl
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkCustomerRedirectUrl($paymentLinkCustomerRedirectUrl)
    {
        $this->paymentLinkCustomerRedirectUrl = $paymentLinkCustomerRedirectUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkImage()
    {
        return $this->paymentLinkImage;
    }

    /**
     * @param mixed $paymentLinkImage
     * @return PaymentLinkBuilder
     */
    public function setPaymentLinkImage($paymentLinkImage)
    {
        $this->paymentLinkImage = $paymentLinkImage;
        return $this;
    }



}
