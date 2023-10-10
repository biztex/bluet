<?php

namespace tgMdk\dto;

/**
 * カード情報変更要求リクエストDTO
 * @author Veritrans, Inc.
 */
class CardInfoUpdateRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CARDINFO, PayNowIdConstants::SERVICE_COMMAND_UPDATE);
    }
}
