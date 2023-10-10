<?php

namespace tgMdk\dto;

/**
 * カード情報取得要求リクエストDTO
 * @author Veritrans, Inc.
 */
class CardInfoGetRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CARDINFO, PayNowIdConstants::SERVICE_COMMAND_GET);
    }
}
