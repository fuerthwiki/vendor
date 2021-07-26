<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait MediaList {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * Handle an attempt to get a non-existing property on this
	 * object.  The default implementation raises an exception
	 * but the implementor can choose a different behavior:
	 * return null (like JavaScript), dynamically create the
	 * property, etc.
	 * @param string $prop the name of the property requested
	 * @return mixed
	 */
	protected function _getMissingProp( string $prop ) {
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "__get"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $prop .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * Handle an attempt to set a non-existing property on this
	 * object.  The default implementation raises an exception
	 * but the implementor can choose a different behavior:
	 * ignore the operation (like JavaScript), dynamically create
	 * the property, etc.
	 * @param string $prop the name of the property requested
	 * @param mixed $value the value to set
	 */
	protected function _setMissingProp( string $prop, $value ) : void {
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "__set"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $prop .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
	}

	// phpcs:enable

	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		switch ( $name ) {
			case "mediaText":
				return $this->getMediaText();
			case "length":
				return $this->getLength();
			default:
				break;
		}
		'@phan-var \Wikimedia\IDLeDOM\Helper\MediaList $this';
		// @var \Wikimedia\IDLeDOM\Helper\MediaList $this
		return $this->_getMissingProp( $name );
	}

	/**
	 * @param string $name
	 * @return bool
	 */
	public function __isset( string $name ) : bool {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		switch ( $name ) {
			case "mediaText":
				return true;
			case "length":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		switch ( $name ) {
			case "mediaText":
				$this->setMediaText( $value );
				return;
			default:
				break;
		}
		'@phan-var \Wikimedia\IDLeDOM\Helper\MediaList $this';
		// @var \Wikimedia\IDLeDOM\Helper\MediaList $this
		$this->_setMissingProp( $name, $value );
	}

	/**
	 * @param string $name
	 */
	public function __unset( string $name ) : void {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		switch ( $name ) {
			case "mediaText":
				break;
			case "length":
				break;
			default:
				return;
		}
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "__unset"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $name .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
	}

	/**
	 * @return string
	 */
	public function __toString() : string {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		return $this->getMediaText();
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset ): bool {
		return $this->offsetGet( $offset ) !== null;
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet( $offset ) {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		if ( is_numeric( $offset ) ) {
			return $this->item( $offset );
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "offsetGet" &&
			$trace[0]['function'] !== "offsetExists"
		) {
			array_shift( $trace );
		}
		while (
			count( $trace ) > 1 && (
			$trace[1]['function'] === "offsetGet" ||
			$trace[1]['function'] === "offsetExists"
		) ) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $offset .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet( $offset, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "offsetSet"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $offset .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset( $offset ) : void {
		'@phan-var \Wikimedia\IDLeDOM\MediaList $this';
		// @var \Wikimedia\IDLeDOM\MediaList $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "offsetUnset"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $offset .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
	}

}
