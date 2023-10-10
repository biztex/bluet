<?php

namespace tgMdk\dto;

/**
 * 会員情報復元要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountRestoreRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_RESTORE);
    }
}
