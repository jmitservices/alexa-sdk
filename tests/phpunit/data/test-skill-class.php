<?php
/**
 * Simple Skill Class for testing
 */

use Alexa\Skill;

class Test_Skill_Class extends Skill {
	public function __construct( $application_id ) {
		parent::__construct( $application_id );
	}

	protected function interact( $intent ) {
		return $this->response_speak( 'An interaction' );
	}
}