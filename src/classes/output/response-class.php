<?php

namespace Alexa\Output;
use Alexa\Output_Object;

/**
 * Class Response
 *
 * @since 1.0.0
 *
 * @package Alexa
 */
class Response implements Output_Object {
	/**
	 * Output Speech
	 *
	 * @since 1.0.0
	 *
	 * @var Output_Speech
	 */
	private $output_speech;

	/**
	 * Card
	 *
	 * @since 1.0.0
	 *
	 * @var Card
	 */
	private $card;

	/**
	 * Reprompt
	 *
	 * @since 1.0.0
	 *
	 * @var Reprompt
	 */
	private $reprompt;

	/**
	 * Accessing Output Speech Object
	 *
	 * @since 1.0.0
	 *
	 * @return Output_Speech
	 */
	public function output_speech() {
		if( empty ( $this->output_speech ) ) {
			$this->output_speech = new Output_Speech();
		}
		return $this->output_speech;
	}

	/**
	 * Accessing Card Object
	 *
	 * @since 1.0.0
	 *
	 * @return Card
	 */
	public function card() {
		if( empty ( $this->card ) ) {
			$this->card = new Card();
		}
		return $this->card;
	}

	/**
	 * Accessing Output Speech Object
	 *
	 * @since 1.0.0
	 *
	 * @return Reprompt
	 */
	public function reprompt() {
		if( empty ( $this->reprompt ) ) {
			$this->reprompt = new Reprompt();
		}
		return $this->reprompt;
	}

	/**
	 * Getting Object content
	 *
	 * @since 1.0.0
	 *
	 * @return \StdClass $object
	 */
	public function get() {
		$object = new \StdClass;

		if( $this->output_speech()->has_values() ) {
			$object->outputSpeech = $this->output_speech()->get();
		}

		if( $this->card()->has_values() ) {
			$object->card = $this->card()->get();
		}

		if( $this->reprompt()->has_values() ) {
			$object->reprompt = $this->reprompt()->get();
		}

		return $object;
	}
}