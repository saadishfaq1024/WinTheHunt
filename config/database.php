<?php
class DATABASE_CONFIG {
	var $default = array(
		'driver'     => 'mysql',
		'persistent' => true,
		'host'       => '50.56.98.219',
		'login'      => 'APP2',
		'password'   => 'WinTheMoney$1',
		'database'   => 'WinTheHunt',
		'prefix'     => '',
	);

    function DATABASE_CONFIG(){
        $this->default = array(
            'driver'     => Configure::read('Database.driver'),
            'persistent' => Configure::read('Database.persistent'),
            'host'       => Configure::read('Database.host'),
            'login'      => Configure::read('Database.login'),
            'password'   => Configure::read('Database.password'),
            'database'   => Configure::read('Database.database'),
            'prefix'     => Configure::read('Database.prefix'),
            'encoding'   => Configure::read('Database.encoding')
        );
    }
}
?>