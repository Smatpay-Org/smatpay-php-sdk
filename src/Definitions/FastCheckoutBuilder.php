<?php

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

class FastCheckoutBuilder extends SmatpayDefinition
{
    public $paymentLinkName;

    public $paymentLinkDescription;

    public $paymentLinkReference;

    public $paymentLinkAmount;

    public $paymentLinkType = "ONCE_OFF_FIXED";

    public $paymentLinkImageType;

    public $paymentLinkProfileId;

    public $paymentLinkStartDate;

    public $paymentLinkEndDate;

    public $paymentLinkCurrency;

    public $paymentLinkCurrencyId;

    public $paymentLinkOtherCurrencies;

    public $paymentLinkCustomerRedirectUrl;

    public $paymentCustomerFailRedirectUrl;

    public $paymentLinkEmail;

    public $paymentPayerFullNames;

    public $paymentPayerEmailAddress;

    public $paymentPayerAddress;

    public $paymentPayerMobile;

    public $paymentLinkImage;

    public function __construct(array $attributes = [])
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkType(string $paymentLinkType): FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
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
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkCurrencyId($paymentLinkCurrencyId)
    {
        $this->paymentLinkCurrencyId = $paymentLinkCurrencyId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkOtherCurrencies()
    {
        return $this->paymentLinkOtherCurrencies;
    }

    /**
     * @param mixed $paymentLinkOtherCurrencies
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkOtherCurrencies($paymentLinkOtherCurrencies)
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
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkCustomerRedirectUrl($paymentLinkCustomerRedirectUrl)
    {
        $this->paymentLinkCustomerRedirectUrl = $paymentLinkCustomerRedirectUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentCustomerFailRedirectUrl()
    {
        return $this->paymentCustomerFailRedirectUrl;
    }

    /**
     * @param mixed $paymentCustomerFailRedirectUrl
     * @return FastCheckoutBuilder
     */
    public function setPaymentCustomerFailRedirectUrl($paymentCustomerFailRedirectUrl)
    {
        $this->paymentCustomerFailRedirectUrl = $paymentCustomerFailRedirectUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentLinkEmail()
    {
        return $this->paymentLinkEmail;
    }

    /**
     * @param mixed $paymentLinkEmail
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkEmail($paymentLinkEmail)
    {
        $this->paymentLinkEmail = $paymentLinkEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPayerFullNames()
    {
        return $this->paymentPayerFullNames;
    }

    /**
     * @param mixed $paymentPayerFullNames
     * @return FastCheckoutBuilder
     */
    public function setPaymentPayerFullNames($paymentPayerFullNames)
    {
        $this->paymentPayerFullNames = $paymentPayerFullNames;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPayerEmailAddress()
    {
        return $this->paymentPayerEmailAddress;
    }

    /**
     * @param mixed $paymentPayerEmailAddress
     * @return FastCheckoutBuilder
     */
    public function setPaymentPayerEmailAddress($paymentPayerEmailAddress)
    {
        $this->paymentPayerEmailAddress = $paymentPayerEmailAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPayerAddress()
    {
        return $this->paymentPayerAddress;
    }

    /**
     * @param mixed $paymentPayerAddress
     * @return FastCheckoutBuilder
     */
    public function setPaymentPayerAddress($paymentPayerAddress)
    {
        $this->paymentPayerAddress = $paymentPayerAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPayerMobile()
    {
        return $this->paymentPayerMobile;
    }

    /**
     * @param mixed $paymentPayerMobile
     * @return FastCheckoutBuilder
     */
    public function setPaymentPayerMobile($paymentPayerMobile)
    {
        $this->paymentPayerMobile = $paymentPayerMobile;
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
     * @return FastCheckoutBuilder
     */
    public function setPaymentLinkImage($paymentLinkImage)
    {
        $this->paymentLinkImage = $paymentLinkImage;
        return $this;
    }

}
