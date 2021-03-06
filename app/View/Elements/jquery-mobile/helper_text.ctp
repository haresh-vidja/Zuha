<!-- /views/elements/admin/helper_text.ctp -->
<?php $url = $this->request->params['plugin'].'.'.$this->request->params['controller'].'.'.$this->request->params['action']; ?>

<div id="helperText">
<?php if (isset($_GET['e']) && $_GET['e'] == 'sent') { ?>
	<p>Thank you for the suggestion.</p>    
<?php } else if (!empty($helper_text_for_layout)) { ?>
     <?php echo $helper_text_for_layout; ?>        
<?php } else if ($url == 'users.user_groups.admin_index') { ?>
	<p>Group users into departments and/or and group themselves for social networking. <a href="#" class="toggleClick" name="helperForm">Suggest Help Text Improvement</a></p>
<?php } else { ?>
  <p>No help text available for this page. <a href="#" class="toggleClick" name="helperForm">Please make a suggestion</a></p> 	
<?php } ?>  
	<div style="display: none; margin: 1em 0 0 0;" id="helperForm">
		<form action="/js/ckeditor/email_process.php" method="post">
	    	<div class="inputs">
	     		<input type="hidden" name="subject" value="Zuha Helper Text Suggestion" />
		     	<input type="hidden" name="page" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
		      	<input type="hidden" name="sendto" value="admin@zuha.com" />
		      	<input type="hidden" name="redirectUrl" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
		      	<label for="suggestedHelpText">Your Suggestion</label>
		      	<textarea name="suggestedHelpText"></textarea>
		      	<input type="submit" name="submit" value="Submit" />
			</div>
	    </form>
	</div>
  	<a href="#" id="helpClose" title="Turns off help text for this browser through out the system."> Turn Off </a>
</div>