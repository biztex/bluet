<?php

namespace tgMdk\dto;

/**
 * 課金グループ情報追加要求リクエストDTO
 * @author Veritrans, Inc.
 */
class ChargeAddRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CHARGE, PayNowIdConstants::SERVICE_COMMAND_ADD);
    }
}
