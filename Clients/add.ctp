<?php //echo $this->Html->script('jquery-1.11.1.min');?>
<script>
	$(document).ready(function(){
		alert('test');
	});
</script
<h1>Add Clients</h1>
<div class="row colorlg inner-container">
	<div class="large-12 columns inner-container">
		<?php echo $this->Form->create('User', array('action'=>'add', 'inputDefaults'=>array('label'=>false, 'div'=>false)));?>
		
			<div class='row'>
				<!-- First Column -->
				<div class="large-6 columns">
					<fieldset>
						<legend>Applicant</legend>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">First Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_firstname', array('placeholder'=>'Type Applicant First Name'));?>
							</div>
						</div>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">Middle Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_middlename', array('placeholder'=>'Type Applicant Middle Name'));?>
							</div>
						</div>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">Last Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_lastname', array('placeholder'=>'Type Applicant Last Name'));?>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Employment</legend>
					</fieldset>
				</div>

				<!-- Second Column -->
				<div class="large-6 columns">
					<fieldset id='fieldset_spouse'>
						<legend>Spouse</legend>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">First Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_firstname', array('placeholder'=>'Type Applicant First Name'));?>
							</div>
						</div>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">Middle Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_middlename', array('placeholder'=>'Type Applicant Middle Name'));?>
							</div>
						</div>
						<div class="row">
							<div class="small-3 columns">
								<label for="right-label" class="right inline">Last Name</label>
							</div>
							<div class="small-9 columns">
								<?php echo $this->Form->input('app_lastname', array('placeholder'=>'Type Applicant Last Name'));?>
							</div>
						</div>
					</fieldset>
				</div>

				
			</div>

		<?php echo $this->Form->button('Save', array('class'=>'right', 'type'=>'submit'));?>
	</div>
</div>