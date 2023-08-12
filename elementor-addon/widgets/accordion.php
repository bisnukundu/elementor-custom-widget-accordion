<?php

class Bisnu_accordion extends \Elementor\Widget_Base {
	public function get_name() {
		return 'hello_world_widget_1';
	}

	public function get_title() {
		return esc_html__( 'Bisnu Accordion', 'elementor-addon' );
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
		$this->start_controls_section( 'accor_bisnu', [
			'tab'   => Elementor\Controls_Manager::TAB_CONTENT,
			'label' => 'Bisnu Accordion'
		] );

		$this->add_control( 'accro_repeat', [
			'id'          => 'bisnu_accordion',
			'label'       => 'Add Accordion',
			'type'        => 'repeater',
			'fields'      => [
				[
					'name'        => 'question_bisnu',
					'label'       => 'Question',
					'type'        => Elementor\Controls_Manager::TEXT,
					'placeholder' => 'Enter Your Question..',
					'label_block' => true,
					'default'     => 'Your Question...'

				],
				[
					'name'        => 'answers_bisnu',
					'label'       => 'Answers',
					'type'        => Elementor\Controls_Manager::TEXTAREA,
					'placeholder' => 'Enter Your Question Answers...',
					'label_block' => true,
					'default'     => 'True is always true'
				],

			],
			'default'     => [
				[
					'question_bisnu' => 'Your Question...',
				]
			],
			'title_field' => '{{{ question_bisnu }}}'


		] );
		$this->end_controls_section();

		$this->start_controls_section( 'accor_icons', [
			'label' => 'Accordion Icons',
			'tab'   => Elementor\Controls_Manager::TAB_CONTENT
		] );
		$this->add_control( 'open_arro_icons', [
			'id'    => 'open_icon_bisnu',
			'label' => 'Open Icon',
			'type'  => Elementor\Controls_Manager::ICONS,
		] );

		$this->add_control( 'close_arro_icons', [
			'id'    => 'close_icon_bisnu',
			'label' => 'Close Icon',
			'type'  => Elementor\Controls_Manager::ICONS,
		] );

		$this->end_controls_section();
	}

	function render() {
		$accordion_data = $this->get_settings_for_display();
//		echo "<pre>";
//		var_dump( $accordion_data['accro_repeat'] );
//		echo "<pre>";
		$acc_html = '';
		foreach ( $accordion_data['accro_repeat'] as $accordion ) {
			$acc_html .= ' <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">';

			$acc_html .= '<div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">';
			$acc_html .= '<div class="p-5 rounded-md border ">';
			$acc_html .= '<details class="group">';
			$acc_html .= ' <summary class="flex justify-between items-center font-medium cursor-pointer list-none">';
			$acc_html .= "<span>" . $accordion['question_bisnu'] . "</span>";
			$acc_html .= '<span class="transition group-open:rotate-180" >';
			$acc_html .= '             <svg fill             = "none" height = "24" shape - rendering = "geometricPrecision" stroke = "currentColor"
                     stroke - linecap = "round" stroke - linejoin = "round" stroke - width = "1.5" viewBox = "0 0 24 24" width = "24" ><path
                            d = "M6 9l6 6 6-6" ></path >
</svg >';
			$acc_html .= '</span >';
			$acc_html .= '</summary >';
			$acc_html .= "<p class='text-neutral-600 mt-3 group-open:animate-fadeIn' >" . $accordion['answers_bisnu'] . "</p >";
			$acc_html .= '</details >';
			$acc_html .= '</div >';
			$acc_html .= '</div >';
			$acc_html .= '</div >';
		};
		echo $acc_html;
	}
}