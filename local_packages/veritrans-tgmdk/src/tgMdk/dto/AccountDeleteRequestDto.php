<?php

namespace tgMdk\dto;

/**
 * 会員情報削除要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountDeleteRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_DELETE);
    }
}

