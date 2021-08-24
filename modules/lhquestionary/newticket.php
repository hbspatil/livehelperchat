<?php

/*$Data = new erLhcoreClassModelQuestion();

$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionary.new', array('questionary' => $Data));

$tpl = erLhcoreClassTemplate::getInstance( 'lhquestionary/newquestion.tpl.php');*/

if (isset($_POST['SaveAction']))
{

	

	$definition = array(
			'Question' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'QuestionIntro' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'Requester' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'Type' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'Priority' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'HelpTopic' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'EmailId' => new ezcInputFormDefinitionElement(
					ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
			),
			'PhoneNumber' => new ezcInputFormDefinitionElement(
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

	if ( !$form->hasValidData( 'Question' ) || $form->Question == '' )
	{
		$Errors[] =  erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/edit','Subject');
	} else {
		$subject = $form->Question;
	}

	if ( $form->hasValidData( 'QuestionIntro' ) )
	{
		$introduction= $form->QuestionIntro;
	}

	if ( $form->hasValidData( 'Requester' ) )
	{
		$RequesterName = $form->Requester;
	} 

	if ( $form->hasValidData( 'Priority' ) )
	{
		$Priority = $form->Priority;
	} 

	if ( $form->hasValidData( 'HelpTopic' ) ) {
		$HelpTopic = $form->HelpTopic;
	} 
	
	if ( $form->hasValidData( 'Type' ) ) {
		$Type = $form->Type;
	} 

	if ( $form->hasValidData( 'EmailId' ) ) {
		$EmailId = $form->EmailId;
	}


	if ( $form->hasValidData( 'PhoneNumber' ) ) {
		$PhoneNumber = $form->PhoneNumber;
	}


	$data  = array( "api_key" => "AspVmuCyvJ6x8BBhKtgAwN9fYT24cdtE" ,
					"user_id" => "1",
					"subject" => $subject,
					"body"	=> $introduction,
					"helptopic" => $HelpTopic,
					"priority" => $Priority,
					"email" => $EmailId,
					"first_name" => $RequesterName,
					"phone_number" => $PhoneNumber
				);
	$dataJson = json_encode($data,true);
	//echo ("dataJson".$dataJson);
	//echo ("email".$form->PhoneNumber);	
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
	    "content-type: application/json",
	    "postman-token: 5cf1b0ba-1f3d-fd2e-5bc7-b91c42437f98"
	  ),
	));

	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  //echo $response;
	  $jsonArray = json_decode($response,true);
	  print ($jsonArray['token']);
	  raiseTicket($jsonArray['token'],$dataJson);
	}

	if (count($Errors) == 0) {

		//$Data->saveThis();
		//echo ("subject"+$subject);
		//erLhcoreClassModule::redirect('questionary/list');
		//exit ;

	} else {
		// /echo ("subject"+$subject);
		//$tpl->set('errors',$Errors);
	}


}

/*$tpl->set('question',$Data);

$Result['content'] = $tpl->fetch();
$Result['path'] = array(
		array('url' => erLhcoreClassDesign::baseurl('questionary/list'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Tikcet')),
		array('url' => erLhcoreClassDesign::baseurl('questionary/newquestion'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/newquestion','New Ticket')))*/


function raiseTicket($token, $data){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://ticket.intentico.xyz/api/v1/helpdesk/create?token=$token",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Basic c2hpdmFyYWpAaW50ZW50aWNvLmFpOlNhQHBhdGlsMw==",
		    "cache-control: no-cache",
		    "content-type: application/json",
		    "postman-token: 675c6d63-9903-c24f-f923-a23b22862b77"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		    //echo $response;
		    do_alert("Ticket created successfully & mail has been sent");
		    //erLhcoreClassModule::redirect();
		}
}


function do_alert($msg) 
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }
?>