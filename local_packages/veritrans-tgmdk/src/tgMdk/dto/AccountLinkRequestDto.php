<?php

namespace tgMdk\dto;

/**
 * 会員情報ID紐付要求リクエストDTO
 * @author Veritrans, Inc.
 */
class AccountLinkRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_ACCOUNT, PayNowIdConstants::SERVICE_COMMAND_LINK);
    }
}
