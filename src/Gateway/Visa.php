<?php

namespace Smatpay\Gateway;

use Smatpay\Base\PaymentProvider;
use Smatpay\Constants\WalletName;
use Smatpay\Contracts\PaymentGatewayInterface;

final class Visa extends PaymentProvider implements PaymentGatewayInterface
{
    protected function getWalletName(): string
    {
        return WalletName::VISA;
    }

    protected function getVerifyBuilder($transaction): array
    {
        return array(
            "transactionReference" => $transaction->getTransactionReference(),
            "walletName" => $this->getWalletName()
        );
    }
}
