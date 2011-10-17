# Sample Application for the CakePHP Calendar Plugin #

## Installation ##

1. add calendar plugin

        git submodule add git://github.com/k1LoW/calendar.git plugins/calendar        
        git submodule init
        git submodule update

2. run schema for vevents

        cake schema create -path app/plugins/calendar/config/schema
