<?php
/*
Plugin Name: WooCommerce Payssion
Plugin URI: http://www.payssion.com
Description: Integrate your Payssion payment gateway into your WooCommerce installation.
Version: 1.2.7
Author: Payssion
Text Domain: payssion
Author URI: http://www.payssion.com
*/
add_action('plugins_loaded', 'init_payssion_gateway', 0);

function init_payssion_gateway() {
	if( !class_exists('WC_Payment_Gateway') )  return;
	
	require_once('class-wc-gateway-payssion.php');
	require_once('class-wc-gateway-payssion-affinepgmy.php');
	require_once('class-wc-gateway-payssion-airtm.php');
	require_once('class-wc-gateway-payssion-alfamartid.php');
	require_once('class-wc-gateway-payssion-alipay.php');
	require_once('class-wc-gateway-payssion-alipayhk.php');
	require_once('class-wc-gateway-payssion-ambmy.php');
	require_once('class-wc-gateway-payssion-applepaysa.php');
	require_once('class-wc-gateway-payssion-atmid.php');
	require_once('class-wc-gateway-payssion-atmtw.php');
	require_once('class-wc-gateway-payssion-banamex.php');
	require_once('class-wc-gateway-payssion-bancochile.php');
	require_once('class-wc-gateway-payssion-bancodobrasil.php');
	require_once('class-wc-gateway-payssion-bancomer.php');
	require_once('class-wc-gateway-payssion-bancontactbe.php');
	require_once('class-wc-gateway-payssion-bankcardin.php');
	require_once('class-wc-gateway-payssion-bankcardng.php');
	require_once('class-wc-gateway-payssion-bankcardtr.php');
	require_once('class-wc-gateway-payssion-banktransfereu.php');
	require_once('class-wc-gateway-payssion-bcppe.php');
	require_once('class-wc-gateway-payssion-bitcashjp.php');
	require_once('class-wc-gateway-payssion-bitcoin.php');
	require_once('class-wc-gateway-payssion-blikpl.php');
	require_once('class-wc-gateway-payssion-boleto.php');
	require_once('class-wc-gateway-payssion-boostmy.php');
	require_once('class-wc-gateway-payssion-boacompra.php');
	require_once('class-wc-gateway-payssion-caixabr.php');
	require_once('class-wc-gateway-payssion-cardae.php');
	require_once('class-wc-gateway-payssion-cardbh.php');
	require_once('class-wc-gateway-payssion-cardkw.php');
	require_once('class-wc-gateway-payssion-cardom.php');
	require_once('class-wc-gateway-payssion-cardqa.php');
	require_once('class-wc-gateway-payssion-cardru.php');
	//require_once('class-wc-gateway-payssion-cashu.php');
	require_once('class-wc-gateway-payssion-cimbmy.php');
	require_once('class-wc-gateway-payssion-creditcardbr.php');
	//require_once('class-wc-gateway-payssion-creditcardjp.php');
	require_once('class-wc-gateway-payssion-creditcardkr.php');
	require_once('class-wc-gateway-payssion-creditcardmx.php');
	//require_once('class-wc-gateway-payssion-creditcardtw.php');
	require_once('class-wc-gateway-payssion-creditcardza.php');
	//require_once('class-wc-gateway-payssion-docomojp.php');
	require_once('class-wc-gateway-payssion-dokuid.php');
	require_once('class-wc-gateway-payssion-dotpaypl.php');
	require_once('class-wc-gateway-payssion-dragonpay.php');
	require_once('class-wc-gateway-payssion-ebankingin.php');
	require_once('class-wc-gateway-payssion-ebankingkr.php');
	require_once('class-wc-gateway-payssion-ebankingth.php');
	require_once('class-wc-gateway-payssion-ebankingza.php');
	require_once('class-wc-gateway-payssion-efectyco.php');
	require_once('class-wc-gateway-payssion-enets.php');
	require_once('class-wc-gateway-payssion-epsat.php');
	require_once('class-wc-gateway-payssion-fawryeg.php');
	require_once('class-wc-gateway-payssion-fpxmy.php');
	require_once('class-wc-gateway-payssion-gcashph.php');
	require_once('class-wc-gateway-payssion-giropayde.php');
	require_once('class-wc-gateway-payssion-grabpaymy.php');
	require_once('class-wc-gateway-payssion-grabpayph.php');
	require_once('class-wc-gateway-payssion-hlbmy.php');
	require_once('class-wc-gateway-payssion-idealnl.php');
	require_once('class-wc-gateway-payssion-interbankpe.php');
	require_once('class-wc-gateway-payssion-itaubr.php');
	require_once('class-wc-gateway-payssion-kakaopaykr.php');
	require_once('class-wc-gateway-payssion-klarna.php');
	require_once('class-wc-gateway-payssion-konbinijp.php');
	require_once('class-wc-gateway-payssion-madasa.php');
	require_once('class-wc-gateway-payssion-maybank2umy.php');
	//require_once('class-wc-gateway-payssion-mercadopago.php');
	require_once('class-wc-gateway-payssion-mercadopagomx.php');
	//require_once('class-wc-gateway-payssion-molpay.php');
	require_once('class-wc-gateway-payssion-multibancopt.php');
	require_once('class-wc-gateway-payssion-naverpaykr.php');
	require_once('class-wc-gateway-payssion-neosurf.php');
	require_once('class-wc-gateway-payssion-netcashjp.php');
	//require_once('class-wc-gateway-payssion-nganluong.php');
	require_once('class-wc-gateway-payssion-onecard.php');
	//require_once('class-wc-gateway-payssion-openbucks.php');
	require_once('class-wc-gateway-payssion-ovoid.php');
	require_once('class-wc-gateway-payssion-oxxo.php');
	require_once('class-wc-gateway-payssion-p24pl.php');
	require_once('class-wc-gateway-payssion-pagoefectivope.php');
	require_once('class-wc-gateway-payssion-pagofacilar.php');
	require_once('class-wc-gateway-payssion-paybybankappgb.php');
	require_once('class-wc-gateway-payssion-paycokr.php');
	require_once('class-wc-gateway-payssion-payeasyjp.php');
	require_once('class-wc-gateway-payssion-payidau.php');
	require_once('class-wc-gateway-payssion-payinstoretw.php');
	require_once('class-wc-gateway-payssion-paynowsg.php');
	require_once('class-wc-gateway-payssion-paysafecard.php');
	require_once('class-wc-gateway-payssion-paysera.php');
	require_once('class-wc-gateway-payssion-paytmin.php');
	require_once('class-wc-gateway-payssion-payupl.php');
	require_once('class-wc-gateway-payssion-pixbr.php');
	require_once('class-wc-gateway-payssion-poli.php');
	require_once('class-wc-gateway-payssion-pseco.php');
	require_once('class-wc-gateway-payssion-qiwi.php');
	require_once('class-wc-gateway-payssion-qrisid.php');
	require_once('class-wc-gateway-payssion-rapipagoar.php');
	require_once('class-wc-gateway-payssion-razergold.php');
	require_once('class-wc-gateway-payssion-redcompra.php');
	require_once('class-wc-gateway-payssion-redpagosuy.php');
	require_once('class-wc-gateway-payssion-rhbmy.php');
	require_once('class-wc-gateway-payssion-samsungpaykr.php');
	require_once('class-wc-gateway-payssion-santander.php');
	require_once('class-wc-gateway-payssion-santanderar.php');
	require_once('class-wc-gateway-payssion-santandermx.php');
	//require_once('class-wc-gateway-payssion-sberbankru.php');
	require_once('class-wc-gateway-payssion-sberpayru.php');
	require_once('class-wc-gateway-payssion-sbpru.php');
	require_once('class-wc-gateway-payssion-skrill.php');
	require_once('class-wc-gateway-payssion-sofort.php');
	require_once('class-wc-gateway-payssion-speimx.php');
	require_once('class-wc-gateway-payssion-ssgpaykr.php');
	require_once('class-wc-gateway-payssion-stcpaysa.php');
	//require_once('class-wc-gateway-payssion-tamarasa.php');
	require_once('class-wc-gateway-payssion-tenpay.php');
	require_once('class-wc-gateway-payssion-touchngomy.php');
	require_once('class-wc-gateway-payssion-trustly.php');
	require_once('class-wc-gateway-payssion-trustpay.php');
	require_once('class-wc-gateway-payssion-twintch.php');
	require_once('class-wc-gateway-payssion-unionpay.php');
	require_once('class-wc-gateway-payssion-upiin.php');
	require_once('class-wc-gateway-payssion-usdt.php');
	require_once('class-wc-gateway-payssion-vietqrvn.php');
	require_once('class-wc-gateway-payssion-vtcpay.php');
	require_once('class-wc-gateway-payssion-walletin.php');
	require_once('class-wc-gateway-payssion-webmoney.php');
	require_once('class-wc-gateway-payssion-webmoneyjp.php');
	require_once('class-wc-gateway-payssion-webpaycl.php');
	//require_once('class-wc-gateway-payssion-yamoney.php');
	require_once('class-wc-gateway-payssion-yoomoneyru.php');
	
	// Add the gateway to WooCommerce
	function add_payssion_gateway( $methods )
	{
		return array_merge($methods, 
				array(
				    'WC_Gateway_Payssion',
				    'WC_Gateway_Payssion_Affinepgmy',
				    'WC_Gateway_Payssion_Airtm',
				    'WC_Gateway_Payssion_Alfamartid',
				    'WC_Gateway_Payssion_Alipay',
				    'WC_Gateway_Payssion_Alipayhk',
				    'WC_Gateway_Payssion_Ambmy',
				    'WC_Gateway_Payssion_Applepaysa',
				    'WC_Gateway_Payssion_Atmid',
				    'WC_Gateway_Payssion_Atmtw',
				    'WC_Gateway_Payssion_Banamex',
				    'WC_Gateway_Payssion_Bancochile',
				    'WC_Gateway_Payssion_Bancodobrasil',
				    'WC_Gateway_Payssion_Bancomer',
				    'WC_Gateway_Payssion_Bancontactbe',
				    'WC_Gateway_Payssion_Bankcardin',
				    'WC_Gateway_Payssion_Bankcardng',
				    'WC_Gateway_Payssion_Bankcardtr',
				    'WC_Gateway_Payssion_Banktransfereu',
				    'WC_Gateway_Payssion_Bcppe',
				    'WC_Gateway_Payssion_BitCashjp',
				    'WC_Gateway_Payssion_Bitcoin',
				    'WC_Gateway_Payssion_Blikpl',
				    'WC_Gateway_Payssion_Boleto',
				    'WC_Gateway_Payssion_Boostmy',
				    'WC_Gateway_Payssion_Boacompra',
				    'WC_Gateway_Payssion_Caixabr',
				    'WC_Gateway_Payssion_Cardae',
				    'WC_Gateway_Payssion_Cardbh',
				    'WC_Gateway_Payssion_Cardkw',
				    'WC_Gateway_Payssion_Cardom',
				    'WC_Gateway_Payssion_Cardqa',
				    'WC_Gateway_Payssion_Cardru',
				    //'WC_Gateway_Payssion_CashU',
				    'WC_Gateway_Payssion_Cimbmy',
				    'WC_Gateway_Payssion_Creditcardbr',
				    //'WC_Gateway_Payssion_CreditCardjp',
				    'WC_Gateway_Payssion_Creditcardkr',
				    //'WC_Gateway_Payssion_Creditcardtw',
				    'WC_Gateway_Payssion_Creditcardmx',
				    'WC_Gateway_Payssion_Creditcardza',
				    'WC_Gateway_Payssion_Dokuid',
				    'WC_Gateway_Payssion_Dotpaypl',
				    'WC_Gateway_Payssion_Dragonpay',
				    'WC_Gateway_Payssion_Ebankingin',
				    'WC_Gateway_Payssion_Ebankingkr',
				    'WC_Gateway_Payssion_Ebankingth',
				    'WC_Gateway_Payssion_Ebankingza',
				    'WC_Gateway_Payssion_Efectyco',
				    'WC_Gateway_Payssion_Enets',
				    'WC_Gateway_Payssion_Epsat',
				    'WC_Gateway_Payssion_Fawryeg',
				    'WC_Gateway_Payssion_Fpxmy',
				    'WC_Gateway_Payssion_Gcashph',
				    'WC_Gateway_Payssion_Giropayde',
				    'WC_Gateway_Payssion_Grabpaymy',
				    'WC_Gateway_Payssion_Grabpayph',
				    'WC_Gateway_Payssion_Hlbmy',
				    'WC_Gateway_Payssion_Idealnl',
				    'WC_Gateway_Payssion_Interbankpe',
				    'WC_Gateway_Payssion_Itaubr',
				    'WC_Gateway_Payssion_Kakaopaykr',
				    'WC_Gateway_Payssion_Klarna',
				    'WC_Gateway_Payssion_Konbinijp',
				    'WC_Gateway_Payssion_Madasa',
				    'WC_Gateway_Payssion_Maybank2umy',
				    //'WC_Gateway_Payssion_MercadoPago',
				    'WC_Gateway_Payssion_MercadoPagomx',
				    //'WC_Gateway_Payssion_Molpay',
				    'WC_Gateway_Payssion_Multibancopt',
				    'WC_Gateway_Payssion_Naverpaykr',
				    'WC_Gateway_Payssion_Neosurf',
				    'WC_Gateway_Payssion_NetCashjp',
				    //'WC_Gateway_Payssion_Nganluong',
				    'WC_Gateway_Payssion_OneCard',
				    //'WC_Gateway_Payssion_Openbucks',
				    'WC_Gateway_Payssion_Ovoid',
				    'WC_Gateway_Payssion_OXXO',
				    'WC_Gateway_Payssion_P24pl',
				    'WC_Gateway_Payssion_Pagoefectivope',
				    'WC_Gateway_Payssion_Pagofacilar',
				    'WC_Gateway_Payssion_Paybybankappgb',
				    'WC_Gateway_Payssion_Paycokr',
				    'WC_Gateway_Payssion_Payeasyjp',
				    'WC_Gateway_Payssion_Payidau',
				    'WC_Gateway_Payssion_Payinstoretw',
				    'WC_Gateway_Payssion_Paynowsg',
				    'WC_Gateway_Payssion_Paysafecard',
				    'WC_Gateway_Payssion_Paysera',
				    'WC_Gateway_Payssion_Paytmin',
				    'WC_Gateway_Payssion_Payupl',
				    'WC_Gateway_Payssion_Pixbr',
				    'WC_Gateway_Payssion_POLi',
				    'WC_Gateway_Payssion_PSEco',
				    'WC_Gateway_Payssion_QIWI',
				    'WC_Gateway_Payssion_Qrisid',
				    'WC_Gateway_Payssion_Rapipagoar',
				    'WC_Gateway_Payssion_Razergold',
				    'WC_Gateway_Payssion_Redcompra',
				    'WC_Gateway_Payssion_Redpagosuy',
				    'WC_Gateway_Payssion_Rhbmy',
				    'WC_Gateway_Payssion_Samsungpaykr',
				    'WC_Gateway_Payssion_Santander',
				    'WC_Gateway_Payssion_Santanderar',
				    'WC_Gateway_Payssion_Santandermx',
				    //'WC_Gateway_Payssion_Sberbankru',
				    'WC_Gateway_Payssion_Sberpayru',
				    'WC_Gateway_Payssion_Sbpru',
				    'WC_Gateway_Payssion_Skrill',
				    'WC_Gateway_Payssion_SOFORT',
				    'WC_Gateway_Payssion_Speimx',
				    'WC_Gateway_Payssion_Ssgpaykr',
				    'WC_Gateway_Payssion_Stcpaysa',
				    //'WC_Gateway_Payssion_Tamarasa',
				    'WC_Gateway_Payssion_Tenpay',
				    'WC_Gateway_Payssion_Touchngomy',
				    'WC_Gateway_Payssion_Trustly',
				    //'WC_Gateway_Payssion_Trustpay',
				    'WC_Gateway_Payssion_Twintch',
				    'WC_Gateway_Payssion_Unionpay',
				    'WC_Gateway_Payssion_Upiin',
				    'WC_Gateway_Payssion_Usdt',
				    'WC_Gateway_Payssion_Vietqrvn',
				    'WC_Gateway_Payssion_VTCPay',
				    'WC_Gateway_Payssion_Walletin',
				    'WC_Gateway_Payssion_WebMoney',
				    'WC_Gateway_Payssion_WebMoneyjp',
				    'WC_Gateway_Payssion_Webpaycl',
				    //'WC_Gateway_Payssion_Yamoney',
				    'WC_Gateway_Payssion_Yoomoneyru'
				));
	}
	add_filter('woocommerce_payment_gateways', 'add_payssion_gateway' );
	
	function wc_payssion_plugin_edit_link( $links ){
		return array_merge(
				array(
						'settings' => '<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout&section=wc_gateway_payssion') . '">'.__( 'Settings', 'alipay' ).'</a>'
				),
				$links
		);
	}
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wc_payssion_plugin_edit_link' );
}

// Register new status
function register_payssion_paid_partial_order_status() {
	register_post_status( 'wc-paid-partial', array(
			'label'                     => 'Paid partial',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => _n_noop( 'Paid partial (%s)', 'Paid partial (%s)' )
	) );
}
add_action( 'init', 'register_payssion_paid_partial_order_status' );
function add_payssion_order_statuses( $order_statuses ) {
	$order_statuses['wc-paid-partial'] = _x( 'Paid partial', 'WooCommerce Order status', 'text_domain' );
	return $order_statuses;
}
add_filter( 'wc_order_statuses', 'add_payssion_order_statuses' );

/**
 * Change a currency symbol
 */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'HKD': $currency_symbol = 'HK$'; break;
    }
    return $currency_symbol;
}
?>
