<?php

class Bisnu_accordion extends \Elementor\Widget_Base {
	public function get_name() {
		return 'hello_world_widget_1';
	}

	public function get_title() {
		return esc_html__( 'Hello World 1', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {
		$this->start_controls_section( 'team-information', [
			'label' => 'Team Information',
			'tab'   => \Elementor\Controls_Manager::TAB_CONTENT
		] );

		$this->add_control( 'name', [
			'label'       => "Name",
			'placeholder' => "Enter Name",
			'default'     => "Bisnu Kundu",
			'label_block' => true
		] );
		$this->add_control( 'contact', [
			'label'       => "Contact No",
			'placeholer'  => "Enter Contact Number",
			"default"     => "017255672522",
			"label_block" => true
		] );


		$this->end_controls_section();
	}

	protected function render() {
		?>

        <p> Hello World </p>

		<?php
	}
}