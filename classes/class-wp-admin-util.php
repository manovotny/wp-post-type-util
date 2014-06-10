<?php
/**
 * @package WP_Admin_Util
 * @author Michael Novotny <manovotny@gmail.com>
 */

class WP_Admin_Util {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Admin_Util
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Admin_Util Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /**
     * Determines whether or not post meta can be saved.
     *
     * @param int $post_id The id of the post being saved.
     * @param string $action The feature's action.
     * @param string $nonce The feature's nonce.
     * @return boolean Whether the post meta can saved or not.
     */
    public function can_save_post_meta( $post_id, $action, $nonce ) {

        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ $nonce ] ) && wp_verify_nonce( $_POST[ $nonce ], $action ) );

        return ! ( $is_autosave || $is_revision ) && $is_valid_nonce;

    }

    /**
     * Determines if the current screen is the add or edit screen for a given post type.
     *
     * @param string $post_type Post type of screen to check.
     * @return boolean Whether or not the current screen is the add or edit screen for a given post type.
     */
    public function is_add_or_edit_screen( $post_type ) {

        $screen = get_current_screen();

        return
            $post_type === $screen->post_type
            && ( 'add' === $screen->action || ( array_key_exists( 'action', $_REQUEST ) && 'edit' === $_REQUEST[ 'action' ] ) );

    }

}