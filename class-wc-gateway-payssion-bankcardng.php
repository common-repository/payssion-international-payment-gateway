<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( 'class-wc-gateway-payssion.php' );

/**
 * Payssion 
 *
 * @class 		WC_Gateway_Payssion_Bankcardng
 * @extends		WC_Payment_Gateway
 * @author 		Payssion
 */
class WC_Gateway_Payssion_Bankcardng extends WC_Gateway_Payssion {
    public $title = 'Nigeria Credit/Debit Card';
	protected $pm_id = 'bankcard_ng';
}