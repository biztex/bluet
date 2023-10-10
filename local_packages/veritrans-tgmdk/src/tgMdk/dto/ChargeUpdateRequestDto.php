<?php

namespace tgMdk\dto;

/**
 * 課金グループ変更要求リクエストDTO
 * @author Veritrans, Inc.
 */
class ChargeUpdateRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CHARGE, PayNowIdConstants::SERVICE_COMMAND_UPDATE);
    }
}
