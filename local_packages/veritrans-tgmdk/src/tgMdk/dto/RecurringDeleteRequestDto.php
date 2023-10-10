<?php

namespace tgMdk\dto;

/**
 * 課金情報削除要求リクエストDTO
 * @author Veritrans, Inc.
 */
class RecurringDeleteRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_RECURRING, PayNowIdConstants::SERVICE_COMMAND_DELETE);
    }
}
