<h1>Add User</h1>
<div class="row colorlg inner-container">
	<div class="large-12 columns inner-container">
		<?php
		
			echo $this->Form->create('User', array('action'=>'add', 'inputDefaults' => array('label' => false,'div' => false
    )));

			//FIELDSET 1
			echo '<fieldset>';
				echo '<legend>Personal Information</legend>';
				//First, Middle Name
				echo '<div class="row">';
					echo '<div class="large-6 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">First Name</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('firstname', array('placeholder'=>'enter your first name'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="large-6 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Middle Name</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('middlename', array('placeholder'=>'enter your middle name'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				//Last, birthday Name
				echo '<div class="row">';
					echo '<div class="large-6 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Last Name</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('lastname', array('placeholder'=>'enter you last name'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="large-6 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Birthday</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('birthday', array('type'=>'date', 'class'=>'select', 'dateFormat'=>'YMD'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</fieldset>';
			
			//FIELDSET 1
			echo '<fieldset>';
				echo '<legend>System Information</legend>';
				//usaername, password, rule
				echo '<div class="row">';
					echo '<div class="large-4 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Username</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('username', array('placeholder'=>'Username:'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="large-4 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Password</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('password', array('placeholder'=>'Password:', 'type'=>'password'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="large-4 columns">';
						echo '<div class="row">';
							echo '
								<div class="small-3 columns">
									<label for="right-label" class="right inline">Role</label>
								</div>
							';
							echo '<div class="small-9 columns">';
								echo $this->Form->input('role_id', array('type'=>'select', 'options'=>$role, 'empty'=>'--No Value--'));
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</fieldset>';
			
			
			//submit, reset button
			echo '<div class="row">';
				echo '<div class="large-10 columns">';
					echo $this->Form->button('Reset', array('type' => 'reset', 'class'=>'right'));
				echo '</div>';
				echo '<div class="large-2 columns">';
					echo $this->Form->button('Submit', array('type' => 'submit', 'class'=>'right'));
				echo '</div>';
			echo '</div>';
		
		
			
		?>

		
		
	</div>
</div>

