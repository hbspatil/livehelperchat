<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/ticket','Search Ticket');?></h1>

<a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('questionary/ticket')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','New Ticket');?></a>




<table class="table" cellpadding="0" cellspacing="0">


<?php if (isset($errors)) : ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<form method="post" action="<?php echo erLhcoreClassDesign::baseurl('questionary/searchticket')?>">

    <div class="form-group">

    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Ticket Id');?>*</label>
    <input class="form-control" type="text" name="TicketId"   value="<?php echo htmlspecialchars($question->question);?>" />
    
    
    </div>

      <div class="form-group">
        <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','OR');?></label>
    </div>

      <div class="form-group">

    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/form_question','Email Id');?>*</label>
    <input class="form-control" type="text" name="EmailId"  value="<?php echo htmlspecialchars($question->question);?>" /> 


</div>

   
<?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

<div class="btn-group" role="group" aria-label="...">
    <input type="submit" class="btn btn-default" name="SaveAction" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/searchticketlist','Search');?>"/>
    <!-- <input type="submit" class="btn btn-default" name="CancelAction" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/newquestion','Cancel');?>"/> -->
</div>

</table>

<?php include(erLhcoreClassDesign::designtpl('lhkernel/secure_links.tpl.php')); ?>


<?php //print_r($data['tickets']); ?>
    
<?php if (count($data['tickets']) > 0) : ?>
    <table class="table" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th width="30%"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Id');?></th>
        <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Question');?></th>
        <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Status');?></th>
        <th width="1%">&nbsp;</th>
        <th width="1%">&nbsp;</th>
    </tr>
    </thead>
    <?php foreach ($data['tickets'] as $val) : ?>
        <tr>
            <td><?php echo $val['ticket_number']?></td>
            <td><?php echo $val['title']?></td>
            <td><?php echo $val['ticket_status_name']?></td>
         <!--    
            <td><a href="<?php echo erLhcoreClassDesign::baseurl('questionary/edit')?>/<?php echo $item->id?>"><?php echo htmlspecialchars($item->question)?></a></td>
            <td><?php echo htmlspecialchars($item->location)?></td>
            <td><?php echo $item->priority?></td>
            <td><?php if ($item->active == 1) : ?><b><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Y');?></b><?php else : ?><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','N');?><?php endif;?></td>
            <td><?php echo $item->revote > 0 ? $item->revote : erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Off') ; ?></td>
            <td nowrap><a class="btn btn-default btn-xs" href="<?php echo erLhcoreClassDesign::baseurl('questionary/edit')?>/<?php echo $item->id?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Edit the Ticket');?></a></td>
            <td nowrap><a onclick="return confirm('<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('kernel/message','Are you sure?');?>')" class="csfr-required btn btn-danger btn-xs" href="<?php echo erLhcoreClassDesign::baseurl('questionary/delete')?>/<?php echo $item->id?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('questionary/list','Close the Ticket');?></a></td> -->
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif;?>