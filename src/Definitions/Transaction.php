<?php

namespace Smatpay\Definitions;

use Smatpay\Base\SmatpayDefinition;

class Transaction extends SmatpayDefinition
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

    public function __construct(array $attributes)
    {
        parent::__construct($attributes);
    }
}
