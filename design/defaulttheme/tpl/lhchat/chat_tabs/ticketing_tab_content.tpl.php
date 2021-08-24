<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/operator_screenshot_pre.tpl.php')); ?>
<?php if ($operator_screenshot_enabled == true && erLhcoreClassUser::instance()->hasAccessTo('lhchat','take_screenshot')) : ?>
<div role="tabpanel" class="tab-pane<?php if ($chatTabsOrderDefault == 'operator_screenshot_tab') print ' active';?>" id="main-user-info-ticketing-<?php echo $chat->id?>">
    <div class="btn-group" role="group" aria-label="...">
      <a href="https://support.intentico.xyz/index.php/site_admin/questionary/ticket"> <input type="button" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/screenshot','Raise a Ticket')?>" class="btn btn-default" onclick="lhinst.addRemoteCommand('<?php echo $chat->id?>','lhc_screenshot')" />
      </a>


	<a href="https://support.intentico.xyz/index.php/site_admin/questionary/searchticket"> 
      <input type="button" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/screenshot','Search Ticket')?>" class="btn btn-default" onclick="lhinst.addRemoteCommand('<?php echo $chat->id?>','lhc_screenshot')" />

	</a>
      <!-- <input type="button" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/screenshot','Update Ticket')?>" class="btn btn-default" onclick="lhinst.addRemoteCommand('<?php echo $chat->id?>','lhc_screenshot')" /> -->
      
    </div>
       
    
</div>
<?php endif;?>