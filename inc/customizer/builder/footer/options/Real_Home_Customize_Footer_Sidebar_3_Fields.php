<?php
/**
 * Real Home Theme Customizer Footer Sidebar 3 settings
 *
 * @package Real_Home
 */

class Real_Home_Customize_Footer_Sidebar_3_Fields extends Real_Home_Customize_Base_Field {

    /**
     * Arguments for fields.
     *
     * @return void
     */
    public function init() {
        $this->args = [
            // Heading One
            'real_home_footer_sidebar_3_widgets_note' => [
                'type'              => 'heading',
                'label'             => esc_html__( 'NOTE', 'real-home' ),
				'description'       => sprintf(__( 'Drag and Drop Widgets to <a data-type="section" data-id="sidebar-widgets-footer-sidebar-3" class="customizer-focus"><strong> Footer Sidebar 3 </strong></a>widget area.', 'real-home' )),
                'section'           => 'footer_sidebar_3',
                'priority'          => 5,
            ]
        ];
    }

}

new Real_Home_Customize_Footer_Sidebar_3_Fields();
