<?php

namespace tgMdk;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * TGMDK_Logger ログ出力クラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 */
final class TGMDK_Logger
{

    /**
     * ロガー保持変数
     * @var LoggerInterface $logger
     */
    private $logger;

    /** 当クラスのインスタンスを保持する変数 */
    private static $instance = NULL;

    /**
     * コンストラクタ（getInstanceのみインスタンス化が可能）
     *
     * @access private
     * @param LoggerInterface|null $logger
     */
    private function __construct(?LoggerInterface $logger)
    {
        if ($logger == null) {
            $this->logger = new NullLogger();
        } else {
            $this->logger = $logger;
        }
    }


    /**
     * @param LoggerInterface $logger
     */
    public static function setLogger(LoggerInterface $logger): void
    {
        if (self::$instance == NULL) {
            self::$instance = new TGMDK_Logger($logger);
        }
    }

    /**
     * 静的なインスタンスを返す
     *
     * @access public
     * @static
     * @return TGMDK_Logger ロガー
     */
    public static function getInstance(): TGMDK_Logger
    {
        if (self::$instance == NULL) {
            self::$instance = new TGMDK_Logger(null);
        }
        return self::$instance;
    }

    /**
     *
     * Debugレベルでログを出力
     *
     * @access public
     * @param mixed $message : ログ出力するメッセージ
     * @param mixed $throwable : ログに出力するExceptionオブジェクト(stack traceを含む)
     */
    public function debug($message, $throwable = NULL)
    {
        if ($throwable != null) {
            $this->logger->debug($message, array('exception' => $throwable));
        } else {
            $this->logger->debug($message);
        }
    }

    /**
     *
     * Infoレベルでログを出力
     *
     * @access public
     * @param mixed $message : ログ出力するメッセージ
     * @param mixed $throwable : ログに出力するExceptionオブジェクト(stack traceを含む)
     */
    public function info($message, $throwable = NULL)
    {
        if ($throwable != null) {
            $this->logger->info($message, array('exception' => $throwable));
        } else {
            $this->logger->info($message);
        }
    }

    /**
     *
     * Warnレベルでログを出力
     *
     * @access public
     * @param mixed $message : ログ出力するメッセージ
     * @param mixed $throwable : ログに出力するExceptionオブジェクト(stack traceを含む)
     */
    public function warn($message, $throwable = NULL)
    {
        if ($throwable != null) {
            $this->logger->warning($message, array('exception' => $throwable));
        } else {
            $this->logger->warning($message);
        }
    }

    /**
     *
     * Errorレベルでログを出力
     *
     * @access public
     * @param mixed $message : ログ出力するメッセージ
     * @param mixed $throwable : ログに出力するExceptionオブジェクト(stack traceを含む)
     */
    public function error($message, $throwable = NULL)
    {
        if ($throwable != null) {
            $this->logger->error($message, array('exception' => $throwable));
        } else {
            $this->logger->error($message);
        }
    }

    /**
     *
     * Fatalレベルでログを出力
     *
     * @access public
     * @param mixed $message : ログ出力するメッセージ
     * @param mixed $throwable : ログに出力するExceptionオブジェクト(stack traceを含む)
     */
    public function fatal($message, $throwable = NULL)
    {
        if ($throwable != null) {
            $this->logger->emergency($message, array('exception' => $throwable));
        } else {
            $this->logger->emergency($message);
        }
    }
}
