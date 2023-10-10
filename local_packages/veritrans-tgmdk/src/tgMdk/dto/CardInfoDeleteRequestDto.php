<?php

namespace tgMdk\dto;

/**
 * カード情報削除要求リクエストDTO
 * @author Veritrans, Inc.
 */
class CardInfoDeleteRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CARDINFO, PayNowIdConstants::SERVICE_COMMAND_DELETE);
    }
}
