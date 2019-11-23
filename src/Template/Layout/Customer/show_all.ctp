<?= $this->fetch('customerCss') ?>

<center><h1>Customers</h1></center>

<a href="/customer/new" class="button button-red">Add new</a>

<table class='customers'>
<tr class="title-table">
<td>License</td>
<td>Account number</td>
<td>Name</td>
<td>Birthday</td>
<td>Sex</td>
<td>Career</td>
<td>Balance</td>
<td>Option</td>
</tr>
<?php
foreach($datas as $data){
?>
<tr>
<td><?= $data->license ?></td>
<td><?= $data->account->account_number ?></td>
<td><?= $data->full_name ?></td>
<td><?= $this->Date->formatDate($data->birthday) ?></td>
<td><?php if($data->sex) echo 'Male'; else echo 'Female'; ?></td>
<td><?= $data->career ?></td>
<td><?= $this->Money->formatMoney($data->account->money) ?></td>
<td>
    <a href="/customer/edit" title="edit"><?php echo $this->Html->image('edit.png', ['alt'=>'edit']) ?></a>
    <a href="/customer/remove" title="remove"><?php echo $this->Html->image('remove.png', ['alt'=>'remove']) ?></a>
</td>
</tr>
<?php
}
?>
</table>
