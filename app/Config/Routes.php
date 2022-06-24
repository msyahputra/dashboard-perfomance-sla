<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('login/', 'Auth::index');
$routes->get('/', 'Dashboard::index');
$routes->get('/kejadian-penting', 'Notes::index');
$routes->get('/request', 'Request::Index');
$routes->get('/trend', 'Trend::index');
$routes->get('/qm-score', 'Qmscore::index');
$routes->get('/qm-score/l0-voice', 'Qmscore::voice');
$routes->get('/qm-score/t2-indihome', 'Qmscore::indihome');
$routes->get('/qm-score/t2-datin', 'Qmscore::datin');
$routes->get('/qm-score/email', 'Qmscore::email');
$routes->get('/qm-score/socmed', 'Qmscore::socmed');
$routes->get('/qm-score/chat', 'Qmscore::chat');
$routes->get('/mystery-omni', 'MysteryOmni::index');
$routes->get('/mystery-omni/voice', 'MysteryOmni::voice');
$routes->get('/mystery-omni/email', 'MysteryOmni::email');
$routes->get('/mystery-omni/socmed', 'MysteryOmni::socmed');
$routes->get('/service-level', 'ServiceLevel::index');
$routes->get('/service-level/voice', 'ServiceLevel::voice');
$routes->get('/service-level/indihome', 'ServiceLevel::indihome');
$routes->get('/service-level/datin', 'ServiceLevel::datin');
$routes->get('/service-level/vdn-1-71513', 'ServiceLevel::vdn_1_71513');
$routes->get('/service-level/pots', 'ServiceLevel::pots');
$routes->get('/service-level/global', 'ServiceLevel::global');
$routes->get('/service-level/imes', 'ServiceLevel::imes');
$routes->get('/service-level/pertamina', 'ServiceLevel::pertamina');
$routes->get('/service-level/billing', 'ServiceLevel::billing');
$routes->get('/service-level/psb', 'ServiceLevel::psb');
$routes->get('/service-level/ip', 'ServiceLevel::ip');
$routes->get('/service-level/vdn-1-71507', 'ServiceLevel::vdn_1_71507');
$routes->get('/respone-time', 'RespTime::index');
$routes->get('/respone-time/email', 'RespTime::email');
$routes->get('/respone-time/socmed', 'RespTime::socmed');
$routes->get('/respone-time/socmed/facebook', 'RespTime::facebook');
$routes->get('/respone-time/socmed/twitter', 'RespTime::twitter');
$routes->get('/respone-time/socmed/chat', 'RespTime::chat');
$routes->get('/update-regular-customer', 'UpRegularCust::index');
$routes->get('/update-regular-customer/datin', 'UpRegularCust::datin');
$routes->get('/update-regular-customer/non-datin', 'UpRegularCust::non_datin');
$routes->get('/follow-up-proactive', 'FollowupPro::index');
$routes->get('/follow-up-proactive/nms', 'FollowupPro::nms');
$routes->get('/ttr-loker-agent', 'TtrLokerAgent::index');
$routes->get('/ttr-compliance', 'TtrCompliance::index');
$routes->get('/ttr-compliance/post', 'TtrCompliance::voice');
$routes->get('/ttr-compliance/indihome', 'TtrCompliance::indihome');
$routes->get('/ttr-compliance/datin', 'TtrCompliance::datin');
$routes->get('/ttr-compliance/imes', 'TtrCompliance::imes');
$routes->get('/pencapaian-kpi-agent', 'KpiAgent::index');
$routes->get('/pencapaian-kpi-agent/agent-t1', 'KpiAgent::agent-t1');
$routes->get('/pencapaian-kpi-agent/agent-t2', 'KpiAgent::agent-t2');
$routes->get('/pencapaian-kpi-agent/agent-t2-violet', 'KpiAgent::agent-t2_violet');
$routes->get('/pencapaian-kpi-agent/agent-t2-global', 'KpiAgent::agent-t2_global');
$routes->get('/pencapaian-kpi-agent/agent-outbond', 'KpiAgent::agent_outbond');
$routes->get('/pencapaian-kpi-agent/agent-digital', 'KpiAgent::agent_digital');
$routes->get('/pencapaian-kpi-agent/imes', 'KpiAgent::imes');
$routes->get('/caring-terkonfirmasi', 'CaringConfir::index');
$routes->get('/caring-terkonfirmasi/tiket-all', 'CaringConfir::tiket_all');
$routes->get('/caring-terkonfirmasi/post', 'CaringConfir::voice');
$routes->get('/caring-terkonfirmasi/indihome', 'CaringConfir::indihome');
$routes->get('/caring-terkonfirmasi/datin', 'CaringConfir::datin');
$routes->get('/caring-terkonfirmasi/rfo', 'CaringConfir::rfo');
$routes->get('/customer-satisfaction-score', 'CustScore::index');
$routes->get('/fcr', 'Fcr::index');
$routes->get('/data-voice/', 'DataVoice::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
