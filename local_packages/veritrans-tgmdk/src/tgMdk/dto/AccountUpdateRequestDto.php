<?php

namespace tgMdk\dto;

/**
 * 会員情報変更要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountUpdateRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_UPDATE);
    }
}
