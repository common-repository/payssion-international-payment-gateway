<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( 'class-wc-gateway-payssion.php' );

/**
 * Payssion 
 *
 * @class 		WC_Gateway_Payssion_Cardbh
 * @extends		WC_Payment_Gateway
 * @author 		Payssion
 */
class WC_Gateway_Payssion_Cardbh extends WC_Gateway_Payssion {
    public $title = 'Bahrain Card';
	protected $pm_id = 'card_bh';
}