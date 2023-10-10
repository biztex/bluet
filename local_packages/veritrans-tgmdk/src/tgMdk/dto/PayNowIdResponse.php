<?php

namespace tgMdk\dto;

/**
 * PayNowIDオブジェクトのクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class PayNowIdResponse
{

    /**
     * PayNowID処理番号<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * PayNowID要求の実行結果<br/>
     * <br/>
     * "success" ：成功<br/>
     * "failure"：失敗<br/>
     */
    private $processId;

    /**
     * PayNowIDステータス<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * PayNowID要求処理を一意に識別する番号<br/>
     */
    private $status;

    /**
     * PayNowIDメッセージ<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * PayNowID要求の実行結果メッセージ<br/>
     */
    private $message;

    /**
     * 会員情報<br>
     * オブジェクト<br/>
     * 会員情報を格納するオブジェクト<br/>
     * <br/>
     */
    private $account;

    /**
     * PayNowID結果オプション<br>
     * オブジェクト配列<br/>
     */
    private $optionResults;


    /**
     * PayNowID処理番号を設定する<br>
     * @param string $processId PayNowID処理番号<br>
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;
    }

    /**
     * PayNowID処理番号を取得する<br>
     * @return string PayNowID処理番号<br>
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    /**
     * PayNowIDステータスを設定する<br>
     * @param string $status PayNowIDステータス<br>
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * PayNowIDステータスを取得する<br>
     * @return string PayNowIDステータス<br>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * PayNowIDメッセージを設定する<br>
     * @param string $message PayNowIDメッセージ<br>
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * PayNowIDメッセージを取得する<br>
     * @return string PayNowIDメッセージ<br>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 会員情報を設定する<br>
     * @param Account $account 会員情報<br>
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * 会員情報を取得する<br>
     * @return Account 会員情報<br>
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * PayNowID結果オプションを設定する<br>
     * @param OptionResults[] $optionResults PayNowID結果オプション<br>
     */
    public function setOptionResults($optionResults)
    {
        $this->optionResults = $optionResults;
    }

    /**
     * PayNowID結果オプションを取得する<br>
     * @return OptionResults[] PayNowID結果オプション<br>
     */
    public function getOptionResults()
    {
        return $this->optionResults;
    }


}
