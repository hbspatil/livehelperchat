<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/ticket',' Create a Ticket');?></h1>

<a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('questionary/searchticket')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Search Ticket');?></a>

<?php if ($pages->items_total > 0) : ?>

<table class="table" cellpadding="0" cellspacing="0">


<?php if (isset($errors)) : ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<form method="post" action="<?php echo erLhcoreClassDesign::baseurl('questionary/newticket')?>">

    <div class="form-group">

    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Requester');?>*</label>
    <input class="form-control" type="text" name="Requester"  required= "true"  value="<?php echo htmlspecialchars($question->question);?>" />
    


    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Email id');?>*</label>
    <input class="form-control" type="text" name="EmailId"  required= "true"  value="<?php echo htmlspecialchars($question->question);?>" />



    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Phone number');?>*</label>
    <input class="form-control" type="text" name="PhoneNumber"  required= "true"  value="<?php echo htmlspecialchars($question->question);?>" />


    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Subject');?>*</label>
    <input class="form-control" type="text" required= "true"  name="Question" value="<?php echo htmlspecialchars($question->question);?>" />
    </div>

    <div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Details');?></label>
    <textarea class="form-control" required= "true" name="QuestionIntro"><?php echo htmlspecialchars($question->question_intro);?></textarea>
    </div>

    <div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Type');?></label>
        <select name="Type" required="true">
            <option value="1">Question</option>
        </select>
    </div>

    <div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Priority');?>*</label>
        
        <select name="Priority" required="true">
            <option value="1">Low</option>
            <option value="2">High</option>
            <option value="3">Normal</option>
            <option value="4">Emergency</option>
        </select>

    </div>

    <div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Help Topic');?></label>
        
        <select name="HelpTopic" required="true">
            <option value="1">Support Query</option>
        </select>

    </div>

    <?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

<div class="btn-group" role="group" aria-label="...">
    <input type="submit" class="btn btn-default" name="SaveAction" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/newticket','Save');?>"/>
    <!-- <input type="submit" class="btn btn-default" name="CancelAction" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/newquestion','Cancel');?>"/> --></div>
</div>

</table>

<?php include(erLhcoreClassDesign::designtpl('lhkernel/secure_links.tpl.php')); ?>


<?php if (isset($pages)) : ?>
  
<?php endif;?>

<?php else : ?>

<?php endif;?>
