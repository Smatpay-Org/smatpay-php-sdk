<?php

namespace Smatpay\Gateway;

use Smatpay\Base\PaymentProvider;
use Smatpay\Constants\WalletName;
use Smatpay\Contracts\PaymentGatewayInterface;

final class Innbucks extends PaymentProvider implements PaymentGatewayInterface
{
    protected function getWalletName(): string
    {
        return WalletName::INNBUCKS;
    }

    protected function getVerifyBuilder($transaction): array
    {
        return array(
            "transactionReference" => $transaction->getTransactionReference(),
            "transactionCode" => $transaction->getTransactionCode(),
            "walletName" => $this->getWalletName()
       );
    }
}
