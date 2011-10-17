<div class="vevents view">
<h2><?php  __('Vevent');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uid'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['uid']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Summary'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['summary']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['description']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['location']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Categories'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['categories']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dtstart'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['dtstart']; ?>
            -
            <?php echo $vevent['Vevent']['dtend']; ?>
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rrule Freq'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['rrule_freq']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rrule Count'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['rrule_count']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rrule Interval'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['rrule_interval']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rrule Byday'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['rrule_byday']; ?>
            &nbsp;
        </dd>        
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rrule Until'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['rrule_until']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['created']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $vevent['Vevent']['modified']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Vevent', true), array('action' => 'edit', $vevent['Vevent']['uid'])); ?> </li>
        <li><?php echo $this->Html->link(__('Delete Vevent', true), array('action' => 'delete', $vevent['Vevent']['uid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vevent['Vevent']['uid'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Vevents', true), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Vevent', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
