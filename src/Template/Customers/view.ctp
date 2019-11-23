<?php
//$this->set('para', 'lam');
//$this->extend('/Element/view');
////$this->extend('/Element/view2');
//$this->assign('title', 'Customer');
////$this->end();
?>

<?php
$this->Html->script('carousel', ['block' => true]);
$this->Html->css('carousel', ['block' => true]);
?>

<?php $this->assign('title', 'Lam Huynh') ?>

<?php
$this->Html->script('lam', ['block' => 'scriptBottom']);
$this->layout = '/Customer/view';
?>