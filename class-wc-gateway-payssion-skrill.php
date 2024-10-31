<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once( 'class-wc-gateway-payssion.php' );

/**
 * Payssion
 *
 * @class 		WC_Gateway_Payssion_Skrill
 * @extends		WC_Payment_Gateway
 * @author 		Payssion
 */
class WC_Gateway_Payssion_Skrill extends WC_Gateway_Payssion {
    public $title = 'Skrill';
    protected $pm_id = 'skrill';
}