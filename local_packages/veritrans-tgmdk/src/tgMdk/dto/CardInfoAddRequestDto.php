<?php

namespace tgMdk\dto;

/**
 * カード情報追加要求リクエストDTO
 * @author Veritrans, Inc.
 */
class CardInfoAddRequestDto extends AbstractPayNowIdRequestDto
{

    public function __construct()
    {
        parent::__construct(PayNowIdConstants::SERVICE_TYPE_CARDINFO, PayNowIdConstants::SERVICE_COMMAND_ADD);
    }
}
