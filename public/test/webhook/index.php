<?php

namespace EOT;

use EOT\Db\Adapter;
use EOT\Helpers\Util;
use EOT\Http\Response;

require '../../../vendor/autoload.php';
$config = require_once('../../config/Config.php');


//PHPMailer
//Tabelas basicas
//Documentaçao

//$adapter = new Adapter($config);
$util = new Util() ;
//$adapter->connect();

$webhook = new Response($config);
$webhook->getDataFile("arquivo.txt");


//print_r((array)$a);

//$util->buildQrcodeImage($webhook->getQrcode());
echo $util->base64ToFile($webhook->getBody(), $webhook->getMimetype(), $webhook->getFilesFolder());
die;

echo "<br/>getEvent() - " . $webhook->getEvent();
echo "<br/>getSession() - " . $webhook->getSession();
echo "<br/>getQrcode() - " . $webhook->getQrcode();
echo "<br/>getStatus() - " . $webhook->getStatus();
echo "<br/>getId() - " . $webhook->getId();
echo "<br/>getBody() - " . $webhook->getBody();
echo "<br/>getType() - " . $webhook->getType();
echo "<br/>getDate() - " . $webhook->getDate();
echo "<br/>getNotifyName() - " . $webhook->getNotifyName();
echo "<br/>getFrom() - " . $webhook->getFrom();
echo "<br/>getTo() - " . $webhook->getTo();
echo "<br/>getAuthor() - " . $webhook->getAuthor();
echo "<br/>getSelf() - " . $webhook->getSelf();
echo "<br/>getAck() - " . $webhook->getAck();
echo "<br/>getInvis() - " . $webhook->getInvis();
echo "<br/>getIsNewMsg() - " . $webhook->getIsNewMsg();
echo "<br/>getIsStar() - " . $webhook->getIsStar();
echo "<br/>getRecvFresh() - " . $webhook->getRecvFresh();
echo "<br/>getLocation() - " . $webhook->getLocation();
echo "<br/>getLatitude() - " . $webhook->getLatitude();
echo "<br/>getLongitude() - " . $webhook->getLongitude();
echo "<br/>getClientUrl() - " . $webhook->getClientUrl();
echo "<br/>getDeprecatedMms3Url() - " . $webhook->getDeprecatedMms3Url();
echo "<br/>getDirectPath() - " . $webhook->getDirectPath();
echo "<br/>getMimetype() - " . $webhook->getMimetype();
echo "<br/>getDuration() - " . $webhook->getDuration();
echo "<br/>getDuration() - " . $webhook->getUploadhash();
echo "<br/>getFilehash() - " . $webhook->getFilehash();
echo "<br/>getEncFilehash() - " . $webhook->getEncFilehash();
echo "<br/>getWidth() - " . $webhook->getWidth();
echo "<br/>getHeight() - " . $webhook->getHeight();
echo "<br/>getSize() - " . $webhook->getSize();
echo "<br/>getCaption() - " . $webhook->getCaption();
echo "<br/>getStreamingSidecar() - " . print_r($webhook->getStreamingSidecar());
echo "<br/>getMediaKey() - " . $webhook->getMediaKey();
echo "<br/>getMediaKeyTimestamp() - " . $webhook->getMediaKeyTimestamp();
echo "<br/>getIsFromTemplate() - " . $webhook->getIsFromTemplate();
echo "<br/>getBroadcast() - " . $webhook->getBroadcast();
echo "<br/>getMentionedJidList() - " . print_r($webhook->getMentionedJidList());
echo "<br/>getIsVcardOverMmsDocument() - " . $webhook->getIsVcardOverMmsDocument();
echo "<br/>getIsForwarded() - " . $webhook->getIsForwarded();
echo "<br/>getLabels() - " . print_r($webhook->getLabels());
echo "<br/>getProductHeaderImageRejected() - " . $webhook->getProductHeaderImageRejected();
echo "<br/>getIsDynamicReplyButtonsMsg() - " . $webhook->getIsDynamicReplyButtonsMsg();
echo "<br/>getIsMdHistoryMsg() - " . $webhook->getIsMdHistoryMsg();
echo "<br/>getChatId() - " . $webhook->getChatId();
echo "<br/>getFromMe() - " . $webhook->getFromMe();
echo "<br/>getSenderId() - " . $webhook->getSenderId();
echo "<br/>getSenderName() - " . $webhook->getSenderName();
echo "<br/>getSenderShortName() - " . $webhook->getSenderShortName();
echo "<br/>getSenderPushname() - " . $webhook->getSenderPushname();
echo "<br/>getSenderType() - " . $webhook->getSenderType();
echo "<br/>getSenderIsBusiness() - " . $webhook->getSenderIsBusiness();
echo "<br/>getSenderIsEnterprise() - " . $webhook->getSenderIsEnterprise();
echo "<br/>getSenderStatusMute() - " . $webhook->getSenderStatusMute();
echo "<br/>getSenderSectionHeader() - " . $webhook->getSenderSectionHeader();
echo "<br/>getSenderLabels() - " . print_r($webhook->getSenderLabels());
echo "<br/>getSenderFormattedName() - " . $webhook->getSenderFormattedName();
echo "<br/>getSenderIsMe() - " . $webhook->getSenderIsMe();
echo "<br/>getSenderIsPSA() - " . $webhook->getSenderIsPSA();
echo "<br/>getSenderIsUser() - " . $webhook->getSenderIsUser();
echo "<br/>getSenderIsWAContact() - " . $webhook->getSenderIsWAContact();
echo "<br/>getSenderProfilePicEurl() - " . $webhook->getSenderProfilePicEurl();
echo "<br/>getSenderProfilePicId() - " . $webhook->getSenderProfilePicId();
echo "<br/>getSenderProfilePicImg() - " . $webhook->getSenderProfilePicImg();
echo "<br/>getSenderProfilePicImgFull() - " . $webhook->getSenderProfilePicImgFull();
echo "<br/>getSenderProfilePicRam() - " . $webhook->getSenderProfilePicRam();
echo "<br/>getSenderProfilePicTag() - " . $webhook->getSenderProfilePicTag();
echo "<br/>getSenderMsgs() - " . $webhook->getSenderMsgs();
echo "<br/>getContent() - " . $webhook->getContent();
echo "<br/>getIsGroupMsg() - " . $webhook->getIsGroupMsg();
echo "<br/>getIsMedia() - " . $webhook->getIsMedia();
echo "<br/>getIsNotification() - " . $webhook->getIsNotification();
echo "<br/>getIsPSA() - " . $webhook->getIsPSA();
echo "<br/>getMediaDataType() - " . $webhook->getMediaDataType();
echo "<br/>getMediaDataMediaStage() - " . $webhook->getMediaDataMediaStage();
echo "<br/>getMediaDataAnimationDuration() - " . $webhook->getMediaDataAnimationDuration();
echo "<br/>getMediaDataAnimatedAsNewMsg() - " . $webhook->getMediaDataAnimatedAsNewMsg();
echo "<br/>getMediaDataIsViewOnce() - " . $webhook->getMediaDataIsViewOnce();
echo "<br/>getMediaDataSwStreamingSupported() - " . $webhook->getMediaDataSwStreamingSupported();
echo "<br/>getMediaDataListeningToSwSupport() - " . $webhook->getMediaDataListeningToSwSupport();
echo "<br/>getMediaDataIsVcardOverMmsDocument() - " . $webhook->getMediaDataIsVcardOverMmsDocument();
