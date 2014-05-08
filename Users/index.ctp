<?php echo $this->Html->script('jquery-1.11.1.min');?>
<script type="text/javascript">
	$(document).ready(function(){
		
	})
</script>

<?php if ($logged_user['role_id'] == 2):?>
<!-- For Marketing -->
	<h1>Marketing View</h1>
	<h2>Configuration</h2>
	<ul>
		<li><?php echo $this->Html->link('Users', array('controller'=>'users', 'action'=>'list'));?></li>
		<li><?php echo $this->Html->link('House Model', array('controller'=>'housemodels', 'action'=>'index'));?></li>
		<li><?php echo $this->Html->link('Subdivision', array('controller'=>'subdivisions', 'action'=>'index'));?></li>
	</ul>
	<h2>Reservation</h2>
	<ul>
		<li><?php echo $this->Html->link('Add Reservation [New Client]', array('controller'=>'clients', 'action'=>'add'));?></li>
		<li><?php echo $this->Html->link('Add Reservation [Existing Client]', array('controller'=>'reservations', 'action'=>'add'));?></li>
	</ul>
<?php endif;?>