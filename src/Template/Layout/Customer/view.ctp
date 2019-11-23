<h1>In view layout</h1>
<?= $this->fetch('scriptBottom') ?>
<?php
    // Prepend to sidebar
    $this->prepend('sidebar', 'this content goes on top of sidebar');
    echo $this->fetch('sidebar');
?>
<?php
    echo $this->element('headings');
?>
<?php
    // for heading first
    echo $this->fetch('heading1', 'heading1 is empty');

    // for heading second.
    echo $this->fetch('heading2');
?>