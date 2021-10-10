<?php if($this->session->flashdata('registered')): ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_success')): ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_failed')): ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('noaccess')): ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('noaccess'); ?></p>
<?php endif; ?>
<h1> Welcome to myTodo</h1>
<p>myTodo is a simple</p>

<h3>My Latest Lists</h3>
<table class="table table-striped" width="50%" cellspacing="5" cellpadding="5">
    <tr>
        <th>List Name</th>
        <th>Created On</th>
        <th>View</th>
    </tr>
    <?php if(isset($lists)) : ?>
    <?php foreach($lists as $list) : ?>
    <tr>
        <td><?php echo $list->list_name; ?></td>
        <td><?php echo $list->create_date; ?></td>
        <td><a href="<?php echo base_url(); ?>lists/show/<?php echo $list->id; ?>">View List</a></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
