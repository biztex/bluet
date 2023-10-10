<?php

namespace tgMdk\dto;

/**
 * 継続課金情報変更要求リクエストDTO
 * @author Veritrans, Inc.
 */
class RecurringUpdateRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_RECURRING, PayNowIdConstants::SERVICE_COMMAND_UPDATE);
    }
}
