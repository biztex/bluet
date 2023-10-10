<?php

namespace tgMdk\dto;

/**
 * 継続課金情報取得リクエストDTO
 * @author Veritrans, Inc.
 */
class RecurringGetRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_RECURRING, PayNowIdConstants::SERVICE_COMMAND_GET);
    }
}
