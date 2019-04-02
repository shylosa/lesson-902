<?php

abstract class FormField
{

	/**
	 * @var string
	 */
	protected $value;

	/**
	 * @var string
	 */
	protected $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	abstract public function render(): string;

	public function getValue(): string
	{
		return $this->value;
	}

	public function setValue(string $value): void
	{
		$this->value = $value;
	}

	public function getName(): string
	{
		return $this->name;
	}

}
