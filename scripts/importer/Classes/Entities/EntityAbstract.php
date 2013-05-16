<?php

namespace Classes\Entities;

abstract class EntityAbstract{

	public $id;
	public $process;
	public $process_status;
	public $process_start_time;
	public $process_end_time;
	public $updated;
	public $created;
	public $error;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id;
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param string $process
	 */
	public function setProcess( $process ) {
		$this->process = $process;
	}

	/**
	 * @return string
	 */
	public function getProcess() {
		return $this->process;
	}

	/**
	 * @param string $status
	 */
	public function setProcessStatus( $process_status ) {
		$this->process_status = $process_status;
	}

	/**
	 * @return string
	 */
	public function getProcessStatus() {
		return $this->process_status;
	}


	/**
	 * @param field_type $process_start_time
	 */
	public function setProcessStartTime( $process_start_time ) {
		$this->process_start_time = $process_start_time;
	}

	/**
	 * @return string
	 */
	public function getProcessEndTime() {
		return $this-> 	process_end_time;
	}

	/**
	 * @param field_type $process_end_time
	 */
	public function setProcessEndTime( $process_end_time ) {
		$this->process_end_time = $process_end_time;
	}


	/**
	 * @return string
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * @param string $updated
	 */
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}


	/**
	 * @return string
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * @param string $created
	 */
	public function setCreated( $created ) {
		$this->created = $created;
	}


	/*
	 *
	*/
	public function SetAllPropertiesToNull(){
		foreach( $this as $property => $value) {
			$this->{$property} = null;
		}
	}


	/*
	 *
	*/
	public function exchangeArray( $data ){

		$this->id                 = ( !empty( $data[ 'id' ] ) ) ? $data[ 'id' ] : null;
		$this->process            = ( !empty( $data[ 'process' ] ) ) ? $data[ 'process' ] : null;
		$this->process_status     = ( !empty( $data[ 'process_status' ] ) ) ? $data[ 'process_status' ] : null;
		$this->process_start_time = ( !empty( $data[ 'process_start_time' ] ) ) ? $data[ 'process_start_time']  : null;
		$this->process_end_time   = ( !empty( $data[ 'process_end_time' ] ) ) ? $data[ 'process_end_time']  : null;
		$this->updated            = ( !empty( $data[ 'updated' ] ) ) ? $data[ 'updated']  : null;
		$this->created            = ( !empty( $data[ 'created' ] ) ) ? $data[ 'created']  : null;
		$this->error              = ( !empty( $data[ 'error'   ] ) ) ? $data[ 'error'  ] : null;


	}

}






































