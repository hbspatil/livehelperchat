<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhquestionary/search_ticketing_list.tpl.php');

$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionary.list', array('tpl' => & $tpl));

$pages = new lhPaginator();
$pages->serverURL = erLhcoreClassDesign::baseurl('questionary/searchticket');
$pages->items_total = erLhcoreClassQuestionary::getCount();
$pages->setItemsPerPage(20);
$pages->paginate();

$items = array();
if ($pages->items_total > 0) {
    $items = erLhcoreClassQuestionary::getList(array('offset' => $pages->low, 'limit' => $pages->items_per_page));
}

$tpl->set('items',$items);
$tpl->set('pages',$pages);


if (isset($_POST['SaveAction']))
{


	//echo ("Saveaction");
	$definition = array(
			'TicketId' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'EmailId' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			)
	);

	$form = new ezcInputForm( INPUT_POST, $definition );
	$Errors = array();

	//echo ("QuestionIntro".$form->QuestionIntro);
	if (!isset($_POST['csfr_token']) || !$currentUser->validateCSFRToken($_POST['csfr_token'])) {

		//echo ("test 1");
		//erLhcoreClassModule::redirect();
		//exit;
	}

	if ( !$form->hasValidData( 'TicketId' ) || $form->TicketId == '' )
	{
		$Errors[] =  erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/edit','TicketId');
	} else {
		$TicketId = $form->TicketId;
		do_alert("Not supported yet");
	}

	if (!$form->hasValidData( 'EmailId' ) || $form->EmailId == ''){

	}else {
		//echo ("emalid".$form->EmailId);
		makeCurlRequest($form->EmailId); 
	}

}


function makeCurlRequest($emailId){

	  $curl = curl_init();

	  curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://ticket.intentico.xyz/api/v1/authenticate",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{\n\t\n\t\"api_key\":\"AspVmuCyvJ6x8BBhKtgAwN9fYT24cdtE\",\n\t\"username\" :\"demo_admin\",\n\t\"password\" :\"password\"\n}",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache",
	    "content-type: application/json"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  //echo $response;
	  $jsonArray = json_decode($response,true);
	  //print ($jsonArray['token']);
	  getUserDetails($emailId, $jsonArray['token'] );
	}

}

function getUserDetails($emailId, $token){
	
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => "http://ticket.intentico.xyz/api/v1/helpdesk/customers?token=$token&search=$emailId",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
	"authorization: Basic c2hpdmFyYWpAaW50ZW50aWNvLmFpOlNhQHBhdGlsMw==",
	"cache-control: no-cache",
	"content-type: application/json"
	),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	    //echo $response;
	    $jsonArray = json_decode($response,true);
	   // print_r($jsonArray);
	    if($jsonArray['error'] != ""){
	    	do_alert("error try again");
	    }
	    else if (count($jsonArray['result']) == 0){
	    	do_alert("no user found");
	    }else {
	    	//echo ($jsonArray['result'][0]['id']);
	    	getTicketDetais($token,$jsonArray['result'][0]['id']);
	    }
	}

}


function getTicketDetais($token, $userid){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://ticket.intentico.xyz/api/v1/helpdesk/my-tickets-user?token=$token&user_id=$userid",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Basic c2hpdmFyYWpAaW50ZW50aWNvLmFpOlNhQHBhdGlsMw==",
		    "cache-control: no-cache",
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		    $jsonArray = json_decode($response,true);
	    	//print_r($jsonArray);
		    if (count($response['tickets']) == 0){
		    	do_alert("no tickets found by user id");
		    }else{
		    	
		    	$tpl = erLhcoreClassTemplate::getInstance( 'lhquestionary/search_ticketing_list.tpl.php');

				$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('<questionary class="search_ticketing_list"></questionary>', array('tpl' => & $tpl));

				//$tpl = erLhcoreClassTemplate::getInstance( 'lhquestionary/search_ticketing_list.tpl.php');
		    	$tpl->set('data',$jsonArray);
		  
				$Result['content'] = $tpl->fetch();
				$Result['path'] = array(array('url' => erLhcoreClassDesign::baseurl('questionary/searchticket'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/searchticket','Search Ticketing')));


		    }
		}
}

function do_alert($msg){
    echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
}


$Result['content'] = $tpl->fetch();
$Result['path'] = array(array('url' => erLhcoreClassDesign::baseurl('questionary/searchticket'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/searchticket','Search Ticketing')));

?>
