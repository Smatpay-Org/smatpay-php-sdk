<?php

namespace Smatpay\Constants;

class SmatpayURL
{
    const SANDBOX_PAYMENT_URL = 'https://dev.smatpay.africa:8443/sandbox/init/authenticate/merchant/wallet';

    const PROD_PAYMENT_URL = 'https://smatpay.africa:8443/sandbox/init/authenticate/merchant/wallet';

    const SANDBOX_ENQUIRE_URL = 'https://dev.smatpay.africa:8443/sandbox/api/getPaymentDetails';

    const PROD_ENQUIRE_URL = 'https://smatpay.africa:8443/sandbox/api/getPaymentDetails';

    const SANDBOX_AUTH_URL = 'https://dev.smatpay.africa:8443/auth/authenticate/sandbox/merchant';

    const PROD_AUTH_URL = 'https://smatpay.africa:8443/auth/authenticate/sandbox/merchant';

}
