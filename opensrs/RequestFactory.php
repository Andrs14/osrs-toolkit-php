<?php

namespace opensrs;

class RequestFactory
{
    public static $RequestRoutes = array(
        'premiumdomain' => 'opensrs\domains\lookup\PremiumDomain',
        'lookupdomain' => 'opensrs\domains\lookup\LookupDomain',
        'lookupgetdomain' => 'opensrs\domains\lookup\GetDomain',
        'lookupgetbalance' => 'opensrs\domains\lookup\GetBalance',
        'lookupgetdeleteddomains' => 'opensrs\domains\lookup\GetDeletedDomains',
        'lookupgetdomansbyexpiry' => 'opensrs\domains\lookup\GetDomansByExpiry',
        'lookupgetdomainscontacts' => 'opensrs\domains\lookup\GetDomainsContacts',
        'lookupgetnotes' => 'opensrs\domains\lookup\GetNotes',
        'lookupgetorderinfo' => 'opensrs\domains\lookup\GetOrderInfo',
        'lookupgetordersbydomain' => 'opensrs\domains\lookup\GetOrdersByDomain',
        'lookupgetprice' => 'opensrs\domains\lookup\GetPrice',
        'lookupnamesuggest' => 'opensrs\domains\lookup\NameSuggest',
        'suggestdomain' => 'opensrs\domains\lookup\SuggestDomain',
        'lookupbelongstorsp' => 'opensrs\domains\lookup\BelongsToRsp',
        'allinonedomain' => 'opensrs\domains\lookup\AllInOneDomain',
        'lookupgetcablockerlist' => 'opensrs\domains\lookup\GetCaBlockerList',
        'getregistrantverificationstatus' => 'opensrs\domains\lookup\GetRegistrantVerificationStatus',
        'provswregister' => 'opensrs\domains\provisioning\SWRegister',
        'provactivate' => 'opensrs\domains\provisioning\ProvisioningActivate',
        'provcancelactivate' => 'opensrs\domains\provisioning\ProvisioningCancelActivate',
        'provcancelpending' => 'opensrs\domains\provisioning\ProvisioningCancelPending',
        'provmodify' => 'opensrs\domains\provisioning\ProvisioningModify',
        'provprocesspending' => 'opensrs\domains\provisioning\ProvisioningProcessPending',
        'provqueryqueuedrequest' => 'opensrs\domains\provisioning\ProvisioningQueryQueuedRequest',
        'provrenew' => 'opensrs\domains\provisioning\ProvisioningRenew',
        'provrevoke' => 'opensrs\domains\provisioning\ProvisioningRevoke',
        'provsendciraapproval' => 'opensrs\domains\provisioning\ProvisioningSendCIRAApproval',
        'provupdateallinfo' => 'opensrs\domains\provisioning\ProvisioningUpdateAllInfo',
        'provupdatecontacts' => 'opensrs\domains\provisioning\ProvisioningUpdateContacts',
        'sendregistrantverificationemail' => 'opensrs\domains\provisioning\SendRegistrantVerificationEmail',
        'subrescreate' => 'opensrs\domains\subreseller\SubresellerCreate',
        'subresget' => 'opensrs\domains\subreseller\SubresellerGet',
        'subresmodify' => 'opensrs\domains\subreseller\SubresellerModify',
        'subrespay' => 'opensrs\domains\subreseller\SubresellerPay',
        'subuseradd' => 'opensrs\domains\subuser\SubuserAdd',
        'subuserdelete' => 'opensrs\domains\subuser\SubuserDelete',
        'subuserget' => 'opensrs\domains\subuser\SubuserGet',
        'subusergetinfo' => 'opensrs\domains\subuser\SubuserGetInfo',
        'subusermodify' => 'opensrs\domains\subuser\SubuserModify',
        'transcancel' => 'opensrs\domains\transfer\TransferCancel',
        'transcheck' => 'opensrs\domains\transfer\TransferCheck',
        'transgetaway' => 'opensrs\domains\transfer\TransferGetAway',
        'transgetin' => 'opensrs\domains\transfer\TransferGetIn',
        'transprocess' => 'opensrs\domains\transfer\TransferProcess',
        'transRsp2Rsp' => 'opensrs\domains\transfer\TransferRsp2Rsp',
        'transsendpass' => 'opensrs\domains\transfer\TransferSendPassword',
        'transtradedomain' => 'opensrs\domains\transfer\TransferTradeDomain',
        'fastdomainlookup' => 'opensrs\fastlookup\FastDomainLookup',
        'authchangeownership' => 'opensrs\domains\authentication\AuthenticationChangeOwnership',
        'authchangepassword' => 'opensrs\domains\authentication\AuthenticationChangePassword',
        'authcheckversion' => 'opensrs\domains\authentication\AuthenticationCheckVersion',
        'authsendauthcode' => 'opensrs\domains\authentication\AuthenticationSendAuthCode',
        'authsendpassword' => 'opensrs\domains\authentication\AuthenticationSendPassword',
        'bulkchange' => 'opensrs\domains\bulkchange\BulkChange',
        'bulksubmit' => 'opensrs\domains\bulkchange\BulkSubmit',
        'bulktransfer' => 'opensrs\domains\bulkchange\BulkTransfer',
        'cookiedelete' => 'opensrs\domains\cookie\CookieDelete',
        'cookiequit' => 'opensrs\domains\cookie\CookieQuit',
        'cookieset' => 'opensrs\domains\cookie\CookieSet',
        'cookieupdate' => 'opensrs\domains\cookie\CookieUpdate',
        'dnscreate' => 'opensrs\domains\dnszone\DnsCreate',
        'dnsdelete' => 'opensrs\domains\dnszone\DnsDelete',
        'dnsforce' => 'opensrs\domains\dnszone\DnsForce',
        'dnsget' => 'opensrs\domains\dnszone\DnsGet',
        'dnsreset' => 'opensrs\domains\dnszone\DnsReset',
        'dnsset' => 'opensrs\domains\dnszone\DnsSet',
        'fwdcreate' => 'opensrs\domains\forwarding\ForwardingCreate',
        'fwddelete' => 'opensrs\domains\forwarding\ForwardingDelete',
        'fwdget' => 'opensrs\domains\forwarding\ForwardingGet',
        'fwdset' => 'opensrs\domains\forwarding\ForwardingSet',
        'nsadvancedupdt' => 'opensrs\domains\nameserver\NameserverAdvancedUpdate',
        'nscreate' => 'opensrs\domains\nameserver\NameserverCreate',
        'nsdelete' => 'opensrs\domains\nameserver\NameserverDelete',
        'nsget' => 'opensrs\domains\nameserver\NameserverGet',
        'nsmodify' => 'opensrs\domains\nameserver\NameserverModify',
        'nsregistryadd' => 'opensrs\domains\nameserver\NameserverRegistryAdd',
        'nsregistrycheck' => 'opensrs\domains\nameserver\NameserverRegistryCheck',
        'persdelete' => 'opensrs\domains\personalnames\PersonalNamesDelete',
        'persnamesuggest' => 'opensrs\domains\personalnames\PersonalNamesNameSuggest',
        'persquery' => 'opensrs\domains\personalnames\PersonalNamesQuery',
        'perssuregister' => 'opensrs\domains\personalnames\PersonalNamesSURegister',
        'persupdate' => 'opensrs\domains\personalnames\PersonalNamesUpdate',
        'pubcreate' => 'opensrs\publishing\Create',
        'pubdelete' => 'opensrs\publishing\Delete',
        'pubdisable' => 'opensrs\publishing\Disable',
        'pubenable' => 'opensrs\publishing\Enable',
        'pubgenerateredirectioncode' => 'opensrs\publishing\GenerateRedirectionCode',
        'pubgetcontrolpanelurl' => 'opensrs\publishing\GetControlPanelUrl',
        'pubgetserviceinfo' => 'opensrs\publishing\GetServiceInfo',
        'publetexpire' => 'opensrs\publishing\LetExpire',
        'pubupdate' => 'opensrs\publishing\Update',
        'trustswregister' => 'opensrs\trust\SWRegister',
        'trustcancelorder' => 'opensrs\trust\CancelOrder',
        'trustcreatetoken' => 'opensrs\trust\CreateToken',
        'trustgetorderinfo' => 'opensrs\trust\GetOrderInfo',
        'trustproductinfo' => 'opensrs\trust\ProductInfo',
        'trustparsecsr' => 'opensrs\trust\ParseCSR',
        'trustprocesspending' => 'opensrs\trust\ProcessPending',
        'trustqueryapproverlist' => 'opensrs\trust\QueryApproverList',
        'trustrequestondemandscan' => 'opensrs\trust\RequestOnDemandScan',
        'trustresendapproveremail' => 'opensrs\trust\ResendApproverEmail',
        'trustresendcertemail' => 'opensrs\trust\ResendCertEmail',
        'trustupdateorder' => 'opensrs\trust\UpdateOrder',
        'trustupdateproduct' => 'opensrs\trust\UpdateProduct',
        'mailauthentication' => 'opensrs\mail\Authentication',
        'mailchangedomain' => 'opensrs\mail\ChangeDomain',
        'mailcreatedomainalias' => 'opensrs\mail\CreateDomainAlias',
        'mailcreatedomain' => 'opensrs\mail\CreateDomain',
        'mailcreatedomainwelcomeemail' => 'opensrs\mail\CreateDomainWelcomeEmail',
        'mailcreatemailboxforwardonly' => 'opensrs\mail\CreateMailboxForwardOnly',
        'mailcreatemailbox' => 'opensrs\mail\CreateMailbox',
        'maildeletedomainalias' => 'opensrs\mail\DeleteDomainAlias',
        'maildeletedomain' => 'opensrs\mail\DeleteDomain',
        'maildeletedomainwelcomeemail' => 'opensrs\mail\DeleteDomainWelcomeEmail',
        'maildeletemailbox' => 'opensrs\mail\DeleteMailbox',
        'mailgetcompanydomains' => 'opensrs\mail\GetCompanyDomains',
        'mailgetdomainallowlist' => 'opensrs\mail\GetDomainAllowList',
        'mailgetdomainblocklist' => 'opensrs\mail\GetDomainBlockList',
        'mailgetdomainmailboxes' => 'opensrs\mail\GetDomainMailboxes',
        'mailgetdomainmailboxlimits' => 'opensrs\mail\GetDomainMailboxLimits',
        'mailgetdomain' => 'opensrs\mail\GetDomain',
        'mailgetnumdomainmailboxes' => 'opensrs\mail\GetNumDomainMailboxes',
        'mailsetdomainadmin' => 'opensrs\mail\SetDomainAdmin',
        'mailsetdomainallowlist' => 'opensrs\mail\SetDomainAllowList',
        'mailsetdomainblocklist' => 'opensrs\mail\SetDomainBlockList',
        'mailsetdomaindisabledstatus' => 'opensrs\mail\SetDomainDisabledStatus',
        'mailsetdomainmailboxlimits' => 'opensrs\mail\SetDomainMailboxLimits',
        'poll' => 'opensrs\events\Poll',
        'ack' => 'opensrs\events\ACK'
    );

    public static function build($func, $type, $dataObject)
    {
        $route = '';
        $routeKey = strtolower($func);
        $returnFullResponse = true;

        if (array_key_exists($routeKey, self::$RequestRoutes)) {
            $route = self::$RequestRoutes[$routeKey];
        }

        $class = $route;

        if (class_exists($class)) {
            if (!isset($dataObject->attributes)) {
                $dataconversionRoute = '\opensrs\backwardcompatibility\dataconversion\\'.$route;

                if (class_exists($dataconversionRoute)) {
                    $dc = new $dataconversionRoute();

                    $dataObject = $dc->convertDataObject($dataObject);

                    $returnFullResponse = false;
                }
            }

            unset($dataObject->func);

            return new $class($type, $dataObject, $returnFullResponse);
        } else {
            throw new Exception("OSRS Error - $func is unsupported.");
        }
    }
}