<?php
class CalController extends AppController {

    var $name = 'Cal';
    var $uses = array('Calendar.Vevent');

    /**
     * beforeFilter
     *
     * @return
     */
    function beforeFilter(){
        parent::beforeFilter();
        $this->set(array('rrule_freqs' => array('daily' => 'daily',
                                                'weekly' => 'weekly',
                                                'monthly' => 'monthly',
                                                'yearly' => 'yearly',
                                                )));
    }

    function index($year = null, $month = null) {
        if (!$year) {
            $year = date('Y');
        }
        if (!$month) {
            $month = date('m');
        }
        $events = $this->Vevent->findByMonth($month, $year);
        $this->set(array('year' => $year,
                         'month' => $month,
                         'events' => $events,
                         ));
    }

    function view($uid = null) {
        if (!$uid) {
            $this->Session->setFlash(__('Invalid vevent', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('vevent', $this->Vevent->findByUid($uid));
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->Vevent->setEvent($this->data)) {
                $this->Session->setFlash(__('The vevent has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vevent could not be saved. Please, try again.', true));
            }
        }
    }

    function edit($uid = null) {
        if (!$uid && empty($this->data)) {
            $this->Session->setFlash(__('Invalid vevent', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Vevent->setEvent($this->data)) {
                $this->Session->setFlash(__('The vevent has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vevent could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Vevent->findByUid($uid);
        }
    }

    function delete($uid = null) {
        if (!$uid) {
            $this->Session->setFlash(__('Invalid id for vevent', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Vevent->dropEvent($uid)) {
            $this->Session->setFlash(__('Vevent deleted', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash(__('Vevent was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
}
