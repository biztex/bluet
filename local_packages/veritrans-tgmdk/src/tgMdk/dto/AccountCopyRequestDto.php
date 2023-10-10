<?php

namespace tgMdk\dto;

/**
 * 会員情報複製要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountCopyRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_COPY);
    }
}

