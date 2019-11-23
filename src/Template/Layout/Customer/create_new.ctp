<?= $this->fetch('customerCss') ?>

<center><h2>New customer</h2></center>
<?php echo $this->Form->create($customer, ['formnovalidate' => true]) ?>

<form >
<table class='customers'>
<tr>
    <td>First name:</td>
    <td><?php echo $this->Form->text('firstname') ?></td>
</tr>
<tr>
    <td>Last name:</td>
    <td><?php echo $this->Form->text('lastname') ?></td>
</tr>
<tr>
    <td>License:</td>
    <td><?php echo $this->Form->text('license') ?></td>
</tr>
<tr>
    <td>Birthday:</td>
    <td><?php echo $this->Form->text('birthday',['type'=>'date']) ?></td>
</tr>
<tr>
    <td>Sex:</td>
<td><?php echo $this->Form->select('sex-group',['Male', 'Female']) ?></td>
</tr>
<tr>
    <td>Career:</td>
<td><?php echo $this->Form->text('career') ?></td>
</tr>
</table>
<?php echo $this->Form->button('Create',['class'=>'button button-red']) ?>
</form>