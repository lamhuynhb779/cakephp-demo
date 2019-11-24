<center>WEATHER FORECAST</center>
<?php echo $this->Form->create(null, ['formnovalidate' => true, 'url'=>'/weather', 'type'=>'get']); ?>
<form>
    <table>
        <tr>
            <td>Latitude in decimal degrees:<i style="color:red">* require</i></td>
            <td><?php echo $this->Form->text("lat"); ?></td>
        </tr>
        <tr>
            <td>Longitude in decimal degrees:<i style="color:red">* require</i></td>
            <td><?php echo $this->Form->text("lng"); ?></td>
        </tr>
        <tr>
            <td>Date:</td>
            <td><?php //echo $this->Form->text('date',['type'=>'date']); ?></td>
        </tr>
        <tr>
            <td><center><?php echo $this->Form->button('GET',['id'=>'get-method']) ?></center></td>
        </tr>
        <tr>
            <td>Result:</td>
        <?php if(isset($gresponse)){ ?>
            <td><?php echo $gresponse; ?></td>    
        <?php } else {?>
            <td><?php echo "Error getting data." ?></td>        
        <?php }?>
        </tr>
    </table>
</form>