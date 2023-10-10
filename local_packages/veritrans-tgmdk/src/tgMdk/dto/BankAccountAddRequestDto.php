<?php

namespace tgMdk\dto;

/**
 * 銀行口座情報追加リクエストDTO
 * @author Veritrans, Inc.
 */
class BankAccountAddRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_BANKACCOUNT, PayNowIdConstants::SERVICE_COMMAND_ADD);
    }
}
