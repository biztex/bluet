<?php

namespace tgMdk\dto;

/**
 * 継続課金情報追加要求リクエストDTO
 * @author Veritrans, Inc.
 */
class RecurringAddRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_RECURRING, PayNowIdConstants::SERVICE_COMMAND_ADD);
    }
}
