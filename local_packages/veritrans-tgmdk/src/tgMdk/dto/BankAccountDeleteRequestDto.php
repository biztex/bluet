<?php

namespace tgMdk\dto;

/**
 * 銀行口座情報削除リクエストDTO
 * @author Veritrans, Inc.
 */
class BankAccountDeleteRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_BANKACCOUNT, PayNowIdConstants::SERVICE_COMMAND_DELETE);
    }
}
