<div class="vevents form">
<?php echo $this->Form->create('Vevent',
  array('url' => array('controller' => 'cal'), 'inputDefaults' => array('dateFormat' => 'YMD', 'timeFormat' => 24)));?>
    <fieldset>
        <legend><?php __('Add Vevent'); ?></legend>
    <?php
        echo $this->Form->input('summary', array('type' => 'text'));
        echo $this->Form->input('description');
        echo $this->Form->input('location', array('type' => 'text'));
        echo $this->Form->input('categories', array('type' => 'text'));
        echo $this->Form->input('dtstart');
        echo $this->Form->input('dtend');
        echo $this->Form->input('rrule_freq', array('type' => 'select', 'options' => $rrule_freqs, 'empty' => true));
        echo $this->Form->input('rrule_count', array('type' => 'text'));
        echo $this->Form->input('rrule_interval', array('type' => 'text'));
        echo $this->Form->input('rrule_byday', array('type' => 'text'));
        echo $this->Form->input('rrule_until', array('empty' => true));        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Vevents', true), array('action' => 'index'));?></li>
    </ul>
</div>