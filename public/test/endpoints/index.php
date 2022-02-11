<?php

namespace EOT;

use EOT\Helpers\Util;
use EOT\Http\Request;

session_start();

require '../../../vendor/autoload.php';
$config = require_once('../../config/Config.php');

$eot = new Request([
    'base_url' => 'http://192.168.1.222:8081',
    'secret_key' => 'My53cr3tKY',
    'session' => 'mySessionPHP'
]);
$util = new Util() ;

############################################################# TOKEN ################################################

# Function: Generated Token
# /api/:session/generate-token
//unset($_SESSION['token']);
if (isset($_SESSION['token'])) {
    $eot->options['token'] = $_SESSION['token'];
}

if (!isset($eot->options['token'])) :
    $response = $eot->generateToken([
        'session' => $eot->options['session'],
        'secret_key' => $eot->options['secret_key']
    ]);
    $response = $util->toArray($response);

    if (isset($response['status']) and $response['status'] == 'success') :
            $eot->options['token'] = $response['token'];
            $_SESSION['token'] = $response['token'];
    endif;

    #debug
    $util->debug($response);
endif;


############################################################# SESSION ################################################

if (isset($eot->options['token'])) :
    # Function: Start All Session
    # /api/:secretkey/start-all
    /*
    $response = $eot->startAll([
        'secret_key' => $eot->options['secret_key'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Show All Sessions
    # /api/:session/show-all-sessions
    /*
    $response = $eot->showAllSessions([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Start Session
    # /api/:session/start-session
    /*
    $response = $eot->startSession([
        'session' => $eot->options['session'],
        'webhook' => null,
        'waitQrCode' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Close Session
    # /api/:session/close-session
    /*
    $response = $eot->closeSession([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Logout Session
    # /api/:session/logout-session
    /*
    $response = $eot->LogoutSession([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Check Connection Session
    # /api/:session/check-connection-session
    /*
    $response = $eot->checkConnectionSession([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Get Media By Message
    # /api/:session/get-media-by-message/:messageId
    /*
    $response = $eot->getMediaByMessage([
        'session' => $eot->options['session'],
        'messageId' => 'true_5514997943471@c.us_3AC223BB534F2486C90D'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Status Session
    # /api/:session/status-session
    /*
    $response = $eot->statusSession([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Qrcode Session
    # /api/:session/qrcode-session
    /*
    $response = $eot->qrcodeSession([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Subcribe Presence
    # /api/:session/subscribe-presence
    /*
    $response = $eot->subscribePresence([
        'session' => $eot->options['session'],
        'isGroup' => false,
        'all' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ########################################################### MESSAGE ################################################

    # Function: Send Message
    # /api/:session/send-message
    /*
    $response = $eot->sendMessage([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'message' => 'Opa, funciona mesmo!',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Reply
    # /api/:session/send-reply
    /*
    $response = $eot->sendReply([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'message' => 'Ok Respondido',
        'messageId' => 'true_5514997943471@c.us_3EB0355A433D6EDE2309',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send File Base64
    # /api/:session/send-file-base64
    /*
    $response = $eot->sendFileBase64([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'filename' => 'Xpto',
        'base64' => $util->fileToBase64('xpto.jpg'),
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */


    # Function: Send Status
    # /api/:session/send-status
    /*
    $response = $eot->sendStatus([
        'session' => $eot->options['session'],
        'message' => 'Eot.ai',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Link Preview
    # /api/:session/send-link-preview
    /*
    $response = $eot->sendLinkPreview([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'url' => 'https://github.com/bgastaldi',
        'caption' => 'eotTeam',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Location
    # /api/:session/send-location
    /*
    $response = $eot->sendLocation([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'lat' => '-22.282027',
        'lng' => '-48.1280803',
        'title' => 'Cidade de Brotas',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Buttons
    # /api/:session/send-buttons
    /*
    $response = $eot->sendButtons([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'title' => 'Teste dos Botões',
        'footer' => 'Rodapé. Não obrigatório',
        'buttons' => [
            [
                'buttonId' => 'id1',
                'buttonText' => [
                    'displayText' => 'Legal'
                ],
                'type' => 1
            ],
            [
                'buttonId' => 'id2',
                'buttonText' => [
                    'displayText' => 'Muito Legal'
                ],
                'type' => 1
            ]
        ],
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Mentioned
    # /api/:session/send-mentioned
    /*
    $response = $eot->sendMentioned([
        'session' => $eot->options['session'],
        'phone' => '5519999999611-1624623083',
        'message' => 'Top @5514997943471@c.us',
        'mentioned' => ['@5514997943471@c.us'],
        'isGroup' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ############################################################# GROUP ################################################
    //OBS: CRIAR NOVO GRUPO
    # Function: Create Group (5519999999611-1624623083)
    # /api/:session/create-group
    /*
    $response = $eot->createGroup([
        'session' => $eot->options['session'],
        'participants' => '5519999999611@c.us',
        'name' => 'eot group'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Leave Group
    # /api/:session/leave-group
    /*
    $response = $eot->leaveGroup([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Join Code
    # /api/:session/join-code
    /*
    $response = $eot->joinCode([
        'session' => $eot->options['session'],
        'inviteCode' => 'https://chat.whatsapp.com/I8igXb5cGXB9AjvdgwyZqY'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Members
    # /api/:session/group-members/:groupId
    /*
    $response = $eot->groupMembers([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Add Participant Group
    # /api/:session/add-participant-group
    /*
    $response = $eot->addParticipantGroup([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'phone' => '5514997943471',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Remove Participant Group
    # /api/:session/remove-participant-group
    /*
    $response = $eot->removeParticipantGroup([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'phone' => '5514997943471',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Promote Participant Group
    # /api/:session/promote-participant-group
    /*
    $response = $eot->promoteParticipantGroup([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'phone' => '5514997943471',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Demote Participant Group
    # /api/:session/demote-participant-group
    /*
    $response = $eot->demoteParticipantGroup([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'phone' => '5514997943471',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Admins
    # /api/:session/group-admins/:groupId
    /*
    $response = $eot->groupAdmins([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Invite Link
    # /api/:session/group-invite-link/:groupId
    /*
    $response = $eot->groupInviteLink([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Broadcast List
    # /api/:session/all-broadcast-list
    /*
    $response = $eot->allBroadcastList([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Groups
    # /api/:session/all-groups
    /*
    $response = $eot->allGroups([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Info From Invite Link
    # /api/:session/group-info-from-invite-link
    /*
    $response = $eot->groupInfoFromInviteLink([
        'session' => $eot->options['session'],
        'inviteCode' => 'https://chat.whatsapp.com/BSQWHUrtjfqI3CRYxbqP4C'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Members Ids
    # /api/:session/group-members-ids/:groupId
    /*
    $response = $eot->groupMembersIds([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Description
    # /api/:session/group-description
    /*
    $response = $eot->groupDescription([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'description' => "nova descricao do grupo"
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Property
    # /api/:session/group-property
    /*
    $response = $eot->groupProperty([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'property' => 'announcement',
        'value' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Subject
    # /api/:session/group-subject
    /*
    $response = $eot->groupSubject([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'title' => 'eot system group'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Messages Admins Only
    # /api/:session/messages-admins-only
    /*
    $response = $eot->messagesAdminsOnly([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'value' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ############################################################ CHAT ################################################

    # Function: Archive Chat
    # /api/:session/archive-chat
    /*
    $response = $eot->archiveChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Clear Chat
    # /api/:session/clear-chat
    /*
    $response = $eot->clearChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Delete Chat
    # /api/:session/delete-chat
    /*
    $response = $eot->deleteChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Delete Message
    # /api/:session/delete-message
    /*
    $response = $eot->deleteMessage([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'messageId' => 'true_5514997943471@c.us_905AB1FB224C246FDCE33921FC870715'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Forward Messages
    # /api/:session/forward-messages
    /*
    $response = $eot->forwardMessages([
        'session' => $eot->options['session'],
        'phone' => '5519987372250',
        'messageId' => 'false_5514997943471@c.us_3A619E2740F201FB8005'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Chats
    # /api/:session/all-chats
    /*
    $response = $eot->allChats([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Chats With Messages
    # /api/:session/all-chats-with-messages
    /*
    $response = $eot->allChatsWithMessages([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Messages in Chat
    # /api/:session/all-messages-in-chat/:phone
    /*
    $response = $eot->allMessagesInChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        //'isGroup' => false,
        //'includeMe' => true,
        //'includeNotifications' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All New Messages
    # /api/:session/all-new-messages
    /*
    $response = $eot->allNewMessages([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Unread Messages
    # /api/:session/unread-messages
    /*
    $response = $eot->unreadMessages([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Unread Messages
    # /api/:session/all-unread-messages
    /*
    $response = $eot->allUnreadMessages([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Chat By Id
    # /api/:session/chat-by-id/:phone
    /*
    $response = $eot->chatById([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Chat Is Online
    # /api/:session/chat-is-online/:phone
    /*
    $response = $eot->chatIsOnline([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Last Seen
    # /api/:session/last-seen/:phone
    /*
    $response = $eot->lastSeen([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: List Mutes
    # /api/:session/list-mutes/:type
    /*
    $response = $eot->listMutes([
        'session' => $eot->options['session'],
        'type' => 'all'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Load Messages In Chat
    # /api/:session/load-messages-in-chat/:phone
    /*
    $response = $eot->loadMessagesInChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Mark Unseen
    # /api/:session/mark-unseen
    /*
    $response = $eot->markUnseen([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Pin Chat
    # /api/:session/pin-chat
    /*
    $response = $eot->pinChat([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'state' => true,
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Contact Vcard
    # /api/:session/contact-vcard
    /*
    $response = $eot->contactVcard([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'contactsId' => '5519993520005@c.us'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Mute
    # /api/:session/send-mute
    /*
    $response = $eot->sendMute([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'time' => 8,
        'type' => 'minutes'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Seen
    # /api/:session/send-seen
    /*
    $response = $eot->sendSeen([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Chat State
    # /api/:session/chat-state
    /*
    $response = $eot->chatState([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'chatstate' => 3
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Temporary Messages
    # /api/:session/temporary-messages
    /*
    $response = $eot->temporaryMessages([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'value' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Typing
    # /api/:session/typing
    /*
    $response = $eot->typing([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'value' => true,
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Star Message
    # /api/:session/star-message
    /*
    $response = $eot->starMessage([
        'session' => $eot->options['session'],
        'messageId' => 'false_5514997943471@c.us_3AE9C27BCADA15F2A05C',
        'star' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ########################################################### CONTACT ################################################

    # Function: Check Number Status
    # /api/:session/check-number-status/:phone
    /*
    $response = $eot->checkNumberStatus([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: All Contacts
    # /api/:session/all-contacts
    /*
    $response = $eot->allContacts([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Contact
    # /api/:session/contact/:phone
    /*
    $response = $eot->contact([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Profile
    # /api/:session/profile/:phone
    /*
    $response = $eot->profile([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Profile Pic
    # /api/:session/profile-pic/:phone
    /*
    $response = $eot->profilePic([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Profile Status
    # /api/:session/profile-status/:phone
    /*
    $response = $eot->profileStatus([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Block Contact
    # /api/:session/block-contact
    /*
    $response = $eot->blockContact([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Unblock Contact
    # /api/:session/unblock-contact
    /*
    $response = $eot->unblockContact([
        'session' => $eot->options['session'],
        'phone' => '5514997943471'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Blocklist
    # /api/:session/blocklist
    /*
    $response = $eot->blocklist([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ############################################################ DEVICE ################################################

    # Function: Get Battery Level
    # /api/:session/get-battery-level
    /*
    $response = $eot->getBatteryLevel([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Host Device
    # /api/:session/host-device
    /*
    $response = $eot->hostDevice([
        'session' => $eot->options['session'],
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    ############################################################ OUTROS ################################################

    # Function: Change Privacy Group
    # /api/:session/change-privacy-group
    /*
    $response = $eot->changePrivacyGroup([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'status' => true
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Download Media
    # /api/:session/download-media
    /*
    $response = $eot->downloadMedia([
        'session' => $eot->options['session'],
        'messageId' => 'false_5519999999611@c.us_..',
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Kill Service Workier
    # /api/:session/kill-service-workier
    /*
    $response = $eot->killServiceWorkier([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Restart Service
    # /api/:session/restart-service
    /*
    $response = $eot->restartService([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */
    ########################################################### PROFILE ################################################

    # Function: Profile Status
    # /api/:session/profile-status
    /*
    $response = $eot->setProfileStatus([
        'session' => $eot->options['session'],
        'status' => 'eot.ai'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Change Username
    # /api/:session/change-username
    /*
    $response = $eot->changeUsername([
        'session' => $eot->options['session'],
        'name' => 'Meu novo nome'
    ]);
    $response = $util->toArray($response);
    $util->debug($response);


    ##################################################################################################################
    ######################################################## NAO FUNCIONAM ###########################################
    ##################################################################################################################

    -- CONVERTER file/node em PHP CURFILE: NÃO FUNCIONA

    /api/:session/send-image
    /api/:session/send-file
    /api/:session/send-voice
    /api/:session/group-pic
    /api/:session/profile-pic

    # Function: Send Image
    # /api/:session/send-image
    /*
    $file = 'D:\webserver\whatsapp\eot\php\public\test\endpoints\xpto.jpg';
    $mimetype = mime_content_type($file);

    $response = $eot->sendImage([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'message' => 'Veja que imagem top',
        'filename' => 'xpto',
        'file' => new \CURLFILE('D:\webserver\whatsapp\eot\php\public\test\endpoints\xpto.jpg', $mimetype),
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send File
    # /api/:session/send-file
    /*
    $file = 'D:\webserver\whatsapp\eot\php\xpto.jpg';
    $mimetype = mime_content_type($file);

    $response = $eot->sendFile([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'message' => 'Veja o arquivo',
        'filename' => 'Xpto',
        'file' => new \CURLFILE('D:\webserver\whatsapp\eot\php\xpto.jpg', $mimetype),
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Send Voice
    # /api/:session/send-voice
    /*
    $response = $eot->sendVoice([
        'session' => $eot->options['session'],
        'phone' => '5514997943471',
        'url' => $eot->fileToBase64('xpto.mp3'),
        'isGroup' => false
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Profile Pic
    # /api/:session/profile-pic
    /*
    $response = $eot->setProfilePic([
        'session' => $eot->options['session']
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */

    # Function: Group Pic
    # /api/:session/group-pic
    /*
    $response = $eot->groupPic([
        'session' => $eot->options['session'],
        'groupId' => '5519999999611-1624623083',
        'path' => new \CURLFILE('D:\webserver\whatsapp\eot\php\xpto.jpg'),
    ]);
    $response = $util->toArray($response);
    $util->debug($response);
    */
endif;
