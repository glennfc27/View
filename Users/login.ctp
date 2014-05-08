<?php echo $this->Html->script('jquery-1.11.1.min');?>

<script type="text/javascript">
	$(document).ready(function(){
		$('a#home-login').click(function(e){
			e.preventDefault();
			$('div#div_login').show();
		})
	})
</script>
<h1>About Prestige</h1>


<div id="home-login" class="reveal-modal medium" data-reveal>
	<h1 class="subheader">Login</h1>
	<?php
		echo $this->Form->create('User', array('action'=>'login'));
		
		echo '<div class="row">';
			echo $this->Form->input('username', array('type'=>'text', 'label'=>'Username', 'div'=>'small-12 medium-12 large-6 columns'));
			echo $this->Form->input('password', array('type'=>'password', 'label'=>'Password', 'div'=>'small-12 medium-12 large-6 columns'));
		echo '</div>';
		
		//submit, reset
		echo '<div class="row">';
			echo '<div class="small-12 medium-12 large-12 columns">';
				echo $this->Form->button('Submit', array('type' => 'submit', 'class'=>'button expand'));
				echo $this->Form->button('Reset', array('type' => 'reset', 'class'=>'button expand'));
			echo '</div>';
		echo '</div>';
	?>
</div>


