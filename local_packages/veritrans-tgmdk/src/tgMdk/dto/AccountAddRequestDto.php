<?php

namespace tgMdk\dto;

/**
 * 会員情報追加要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountAddRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_ADD);
    }
}
