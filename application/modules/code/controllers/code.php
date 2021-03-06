<?php

class CodeController extends MY_Module{
    protected
        $view = 'code/'
    ;
    
    public function __construct(){
        parent::__construct( 'code' );
        user_can_rule();
        $this->load->model( array('code') );
    }
        
    /**
     *
     * @param type $post_id
     * @param type $module_id
     * @return type 
     */    
    public function show(){
        if( !empty($this->module_id) ){
            $this->data['code'] = $this->code->find( $this->module_id, 1 );
            return $this->template->render( $this->view.'show', $this->data );
        }else{
            return '--- empty ---';
        }
    }
    
    /**
     *
     * @param type $post_id
     * @param type $module_id
     * @return type 
     */
    public function form(){
        $this->data['languages'] = $this->settings['languages'];
        $this->data['code'] = $this->code->find( $this->module_id, 1 );
        return $this->template->render( $this->view.'form', $this->data );
    }
    
    /**
     * 
     */
    public function save( $post_id, $module_id ){
        $data = array();
        $data['module_id'] = $module_id;
        $data['language'] = param('language');
        $data['full']     = param('full', FALSE, FALSE);
        $this->code->save( $data ); // keep in safe place ;)
        set_flash_ok('Код сохранён');
        redirect( 'post/form/'.$post_id.'/'.$module_id.'#mod-'.$module_id );
    }
    
    /**
     * 
     */
    public function delete( $post_id='', $module_id='' ){
        if( empty($module_id) ) $module_id = $this->data['module_id'];                
        $this->code->delete( $module_id );
        return TRUE;
    }
    
}