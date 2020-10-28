<?phpif ( !class_exists('UpiCRMAdminWebServices') ):    class UpiCRMAdminWebServices{        public function Render() {	    $UpiCRMOptions = new UpiCRMOptions();            $UpiCRMUIBuilder = new UpiCRMUIBuilder();            $UpiCRMWebServiceLib = new UpiCRMWebServiceLib();            $UpiCRMWebService = NEW UpiCRMWebService();        if(isset($_POST['action'])) {            switch ($_POST['action']) {                case 'save_webservice':                    $this->saveWebService();                    $msg = __('changes saved successfully', 'upicrm');                    break;                case 'update_webservice':                    $this->updateWebService();                    $msg = __('changes saved successfully', 'upicrm');                    break;                case 'post_service':                    $this->updatePostService();                    $msg = __('changes saved successfully', 'upicrm');                    break;            }        }            $webs_OBJ = $UpiCRMWebService->get_by_id(1);            require_once get_upicrm_template_path('webservices');        }        function saveWebService() {            $UpiCRMWebService = new UpiCRMWebService();            $insertArr['webservice_method'] = $_POST['webservice_method'];            $insertArr['webservice_status'] = $_POST['webservice_status'];            $insertArr['webservice_url'] = $_POST['webservice_url'];            $insertArr['webservice_charset'] = $_POST['webservice_charset'];            $insertArr['webservice_log'] = $_POST['webservice_log'];            $insertArr['webservice_header_value1'] = $_POST['webservice_header_value1'];            $insertArr['webservice_header_value2'] = $_POST['webservice_header_value2'];            $insertArr['webservice_header_value3'] = $_POST['webservice_header_value3'];            $insertArr['webservice_header_key1'] = $_POST['webservice_header_key1'];            $insertArr['webservice_header_key2'] = $_POST['webservice_header_key2'];            $insertArr['webservice_header_key3'] = $_POST['webservice_header_key3'];            $UpiCRMWebService->add($insertArr);                        $this->updateWebServiceOptions();        }        function updateWebService() {            $UpiCRMWebService = new UpiCRMWebService();            $updateArr['webservice_method'] = $_POST['webservice_method'];            $updateArr['webservice_status'] = $_POST['webservice_status'];            $updateArr['webservice_url'] = $_POST['webservice_url'];            $updateArr['webservice_charset'] = $_POST['webservice_charset'];            $updateArr['webservice_log'] = $_POST['webservice_log'];            $updateArr['webservice_header_value1'] = $_POST['webservice_header_value1'];            $updateArr['webservice_header_value2'] = $_POST['webservice_header_value2'];            $updateArr['webservice_header_value3'] = $_POST['webservice_header_value3'];            $updateArr['webservice_header_key1'] = $_POST['webservice_header_key1'];            $updateArr['webservice_header_key2'] = $_POST['webservice_header_key2'];            $updateArr['webservice_header_key3'] = $_POST['webservice_header_key3'];                        $UpiCRMWebService->update($updateArr,$_POST['webservice_id']);                        $this->updateWebServiceOptions();        }                function updateWebServiceOptions() {            update_option('upicrm_ws_user_agent',$_POST['upicrm_ws_user_agent']);        }	function updatePostService() {	    $UpiCRMOptions = new UpiCRMOptions();	    if (isset($_POST['enable_post_service']) && (isset($_POST['apikey']) && !empty($_POST['apikey']) )) {		$UpiCRMOptions->add('enable_post_service', '1');	    } else {		$UpiCRMOptions->add('enable_post_service', '0');	    }    	    $UpiCRMOptions->add('post_service_apikey', $_POST['apikey']);	}        function updateLeadRecieving () {        }        function wp_ajax_remove_integration_callback() {            $UpiCRMIntegrations = new UpiCRMIntegrations();            $UpiCRMIntegrations->remove($_POST['integration_id']);            die();        }    }endif;?>