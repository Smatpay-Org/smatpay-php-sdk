<?php

namespace Smatpay\Gateway;

use Smatpay\Base\PaymentProvider;
use Smatpay\Constants\WalletName;
use Smatpay\Contracts\PaymentGatewayInterface;

final class Ecocash extends PaymentProvider implements PaymentGatewayInterface
{
    protected function getWalletName(): string
    {
        return WalletName::ECOCASH;
    }

    protected function getVerifyBuilder($transaction): array
    {
        return array(
            "transactionReference" => $transaction->getTransactionReference(),
            "paymentMobile" => $transaction->getPaymentMobile(),
            "walletName" => $this->getWalletName(),
        );
    }
}
