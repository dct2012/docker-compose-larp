<?php


namespace App;

use Redis;
use Exception;

class DB {
	const KEY_GREETING = 'greeting';

	protected Redis $Redis;

	public function __construct() {
		try {
			$this->Redis = new Redis();
			$this->Redis->connect( 'redis' );

			if( empty( $this->Redis->get( self::KEY_GREETING ) ) ) {
				$this->Redis->set( self::KEY_GREETING, 'Hello World, from Redis!' );
			}
		} catch( Exception $e ) {
			var_dump( $e->getMessage() );
		}
	}

	public function getGreeting(): string {
		return $this->Redis->get( self::KEY_GREETING ) ?? '';
	}
}