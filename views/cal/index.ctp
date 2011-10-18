<div class="vevents index">
    <h2><?php echo date('Y-m', mktime(0,0,0, $month, 1, $year)); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <th>
                Sun
            </th>
            <th>
                Mon
            </th>
            <th>
                Tue
            </th>
            <th>
                Wed
            </th>
            <th>
                Thu
            </th>
            <th>
                Fri
            </th>
            <th>
                Sat
            </th>
        </thead>
        <tbody>
            <?php
              $cal = range(0,6);
              $w = date('w', mktime(0, 0, 0, $month, 1, $year));
              for($i = 0; $i < $w; $i++) {
              $cal[$i] = array(array());
              }
              foreach($events as $date => $event) {
              $w = date('w', strtotime($date));
              if (!is_array($cal[$w])) {
              $cal[$w] = array();
              }
              $cal[$w][]= array($date => $event);
              }
            ?>
            <?php for($i = 0;$i < 6;$i++): ?>
            <tr>
                <?php for($j = 0;$j < 7;$j++): ?>
                <td>
                    <?php if(!empty($cal[$j][$i])): ?>
                    <?php $date = key($cal[$j][$i]); ?>
                    <div class="date">
                        <?php echo $date; ?>
                    </div>
                    <?php foreach($cal[$j][$i][$date] as $event): ?>
                    <div class="event <?php if($event['Vevent']['id'] % 2 == 0): ?>even<?php else: ?>odd<?php endif; ?>">
                        <strong><?php echo $this->Html->link($event['Vevent']['summary'], array('controller' => 'cal', 'action' => 'view', $event['Vevent']['uid'])); ?></strong>
                        <p>
                            <strong>DTSTART: </strong><?php echo $event['Vevent']['dtstart']; ?>
                        </p>
                        <p>
                            <strong>DTEND: </strong><?php echo $event['Vevent']['dtend']; ?>
                        </p>
                        <p>
                            <strong>Event Start: </strong><?php echo $event['Vevent']['event_start']; ?>
                        </p>
                        <p>
                            <strong>Event End: </strong><?php echo $event['Vevent']['event_end']; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    -
                    <?php endif; ?>
                </td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <div class="paging">
        <?php echo $this->Html->link('<< ' . __('previous', true), array('action' => 'index', $year, $month - 1)); ?>
        |
        <?php echo $this->Html->link(__('next', true) . ' >>', array('action' => 'index', $year, $month + 1)); ?>
    </div>

</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Vevent', true), array('action' => 'add')); ?></li>
    </ul>
</div>