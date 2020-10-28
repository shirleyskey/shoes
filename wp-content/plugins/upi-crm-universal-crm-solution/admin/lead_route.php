<?phpif ( !class_exists('UpiCRMAdminLeadRoute') ):    class UpiCRMAdminLeadRoute{        /*         * Page Auto Lead Management is collected here         */        public function Render() {            $UpiCRMFields = new UpiCRMFields();            $UpiCRMLeadsRoute = new UpiCRMLeadsRoute();            $UpiCRMLeadsStatus = new UpiCRMLeadsStatus();            $UpiCRMUsers = new UpiCRMUsers();            $UpiCRMUIBuilder = new UpiCRMUIBuilder();            $UpiCRMMails = new UpiCRMMails();            $UpiCRMIntegrations = new UpiCRMIntegrations();                       $list_option = $UpiCRMUIBuilder->get_list_option_minimum();            if(isset($_GET['id'])) {                $id = (int) $_GET['id'];                if ( $id > 0 ) {                    $GetLeadsRouteOBJ = $UpiCRMLeadsRoute->get_by_id( $id );                }            }            if(isset($_POST['action'])) {                switch ( $_POST['action'] ) {                    case 'save_route':                        $this->saveRoute();                        $msg = __( 'changes saved successfully', 'upicrm' );                        break;                    case 'update_route':                        $this->updateRoute();                        $msg = __( 'update saved successfully', 'upicrm' );                        break;                }            }            if(isset($_GET['action'])) {                switch ( $_GET['action'] ) {                    case 'change_order':                        $this->changeOrder();                        $msg = __( 'update saved successfully', 'upicrm' );                        break;                }            }            require_once get_upicrm_template_path('lead_route_form');            require_once get_upicrm_template_path('lead_route_table');        }                function saveRoute() {            $UpiCRMLeadsRoute = new UpiCRMLeadsRoute();                        $field_id = explode('||exp||',upicrm_clean_data($_POST['field_id']));            $insertArr['lead_route_option'] = $field_id[0];            $insertArr['field_id'] = $field_id[1];                        if ($_POST['field_id2']) {                $field_id2 = explode('||exp||',upicrm_clean_data($_POST['field_id2']));                $insertArr['lead_route_option2'] = $field_id2[0] ? $field_id2[0] : 0;                $insertArr['field_id2'] = $field_id2[1] ? $field_id2[1] : 0;            }                        if ($_POST['field_id3']) {                $field_id3 = explode('||exp||',upicrm_clean_data($_POST['field_id3']));                $insertArr['lead_route_option3'] = $field_id3[0] ? $field_id3[0] : 0;                $insertArr['field_id3'] = $field_id3[1] ? $field_id3[1] : 0;            }                        $lead_route_and = 0;            if ($_POST['lead_route_and'] == 1) {                $lead_route_and++;            }            if ($_POST['lead_route_and2'] == 1) {                $lead_route_and++;            }                                    $insertArr['lead_route_type'] = upicrm_clean_data($_POST['lead_route_type']);            $insertArr['lead_route_value'] = upicrm_clean_data($_POST['lead_route_value']);            $insertArr['lead_route_type2'] = upicrm_clean_data($_POST['lead_route_type2']);            $insertArr['lead_route_value2'] = upicrm_clean_data($_POST['lead_route_value2']);            $insertArr['lead_route_type3'] = upicrm_clean_data($_POST['lead_route_type3']);            $insertArr['lead_route_value3'] = upicrm_clean_data($_POST['lead_route_value3']);            $insertArr['lead_route_and'] = $lead_route_and;            $insertArr['leads_route_rr_users'] = $UpiCRMLeadsRoute->users_ids_format($_POST['leads_route_rr_users']);            $insertArr['lead_status_id'] = upicrm_clean_data($_POST['lead_status_id']);            $insertArr['change_field_id'] = upicrm_clean_data($_POST['change_field_id']);            $insertArr['change_field_value'] = upicrm_clean_data($_POST['change_field_value']);            $insertArr['webservice_id'] = upicrm_clean_data($_POST['webservice_id']);            $insertArr['integration_id'] = upicrm_clean_data($_POST['integration_id']);            $insertArr['mail_id'] = upicrm_clean_data($_POST['mail_id']);            $insertArr['lead_route_email_to'] = upicrm_clean_data($_POST['lead_route_email_to']);            $insertArr['lead_route_mail_to_field_id'] = upicrm_clean_data($_POST['lead_route_mail_to_field_id']);            $insertArr['lead_route_mail_no_cc'] = $_POST['lead_route_mail_no_cc'] ? 1 : 0;            $insertArr['lead_route_order'] = upicrm_clean_data($_POST['lead_route_order']);                        $UpiCRMLeadsRoute->add($insertArr);        }                function changeOrder() {            $UpiCRMLeadsRoute = new UpiCRMLeadsRoute();            $updateArr['lead_route_order'] = $_GET['order'];            $UpiCRMLeadsRoute->update($updateArr,$_GET['id']);            echo '<script>window.location = "admin.php?page=upicrm_lead_route";</script>';        }                function updateRoute() {            $UpiCRMLeadsRoute = new UpiCRMLeadsRoute();            $field_id = explode('||exp||',upicrm_clean_data($_POST['field_id']));            if ($_POST['field_id2']) {                $field_id2 = explode('||exp||',upicrm_clean_data($_POST['field_id2']));                $updateArr['lead_route_option2'] = $field_id2[0] ? $field_id2[0] : 0;                $updateArr['field_id2'] = $field_id2[1] ? $field_id2[1] : 0;            }                         if ($_POST['field_id3']) {                $field_id3 = explode('||exp||',upicrm_clean_data($_POST['field_id3']));                $updateArr['lead_route_option3'] = $field_id3[0] ? $field_id3[0] : 0;                $updateArr['field_id3'] = $field_id3[1] ? $field_id3[1] : 0;            }                        $lead_route_and = 0;            if ($_POST['lead_route_and'] == 1) {                $lead_route_and++;            }            if ($_POST['lead_route_and2'] == 1) {                $lead_route_and++;            }                                    $updateArr['lead_route_option'] = $field_id[0];            $updateArr['field_id'] = $field_id[1];            $updateArr['lead_route_option2'] = $field_id2[0];            $updateArr['field_id2'] = $field_id2[1];            $updateArr['lead_route_option3'] = $field_id3[0];            $updateArr['field_id3'] = $field_id3[1];            $updateArr['lead_route_type'] = upicrm_clean_data($_POST['lead_route_type']);            $updateArr['lead_route_value'] = upicrm_clean_data($_POST['lead_route_value']);            $updateArr['lead_route_type2'] = upicrm_clean_data($_POST['lead_route_type2']);            $updateArr['lead_route_value2'] = upicrm_clean_data($_POST['lead_route_value2']);            $updateArr['lead_route_type3'] = upicrm_clean_data($_POST['lead_route_type3']);            $updateArr['lead_route_value3'] = upicrm_clean_data($_POST['lead_route_value3']);            $updateArr['lead_route_and'] = $lead_route_and;            $updateArr['lead_route_type'] = upicrm_clean_data($_POST['lead_route_type']);            $updateArr['lead_route_value'] = upicrm_clean_data($_POST['lead_route_value']);            $updateArr['leads_route_rr_users'] = $UpiCRMLeadsRoute->users_ids_format($_POST['leads_route_rr_users']);            $updateArr['lead_status_id'] = upicrm_clean_data($_POST['lead_status_id']);            $updateArr['change_field_id'] = upicrm_clean_data($_POST['change_field_id']);            $updateArr['change_field_value'] = upicrm_clean_data($_POST['change_field_value']);            $updateArr['webservice_id'] = upicrm_clean_data($_POST['webservice_id']);            $updateArr['integration_id'] = upicrm_clean_data($_POST['integration_id']);            $updateArr['mail_id'] = upicrm_clean_data($_POST['mail_id']);            $updateArr['lead_route_email_to'] = upicrm_clean_data($_POST['lead_route_email_to']);                $updateArr['lead_route_mail_to_field_id'] = upicrm_clean_data($_POST['lead_route_mail_to_field_id']);            $updateArr['lead_route_mail_no_cc'] = $_POST['lead_route_mail_no_cc'] ? 1 : 0;            $updateArr['lead_route_order'] = upicrm_clean_data($_POST['lead_route_order']);                        $UpiCRMLeadsRoute->update($updateArr,$_POST['upicrm_lead_id']);                    }                function wp_ajax_remove_lead_route_callback() {            $UpiCRMLeadsRoute = new UpiCRMLeadsRoute();            $UpiCRMLeadsRoute->remove($_POST['lead_route_id']);            die();        }    }    add_action( 'wp_ajax_remove_lead_route', array(new UpiCRMAdminLeadRoute,'wp_ajax_remove_lead_route_callback'));endif;