<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CustomTicketForm extends BaseForm
{
    public function configure(){
        
        $param = $this->getOption('param');
        $font = array("Lucida"=>"Lucida", "Verdana"=>"Verdana", "Helvetica"=>"Helvetica", "Lucida-Console"=>"Lucida Console");
        $size = array();
        for ($i = 6; $i < 20; $i++) {
            $size[$i] = $i;
        }
         
        foreach ($param as $key => $value) {
           if($value['optional']&&$value['displayed']){
               $this->setWidget($key, new sfWidgetFormInputCheckbox(array(),array('disabled'=>false, 'checked'=>false)));
           }else if (! $value['optional']){
               $this->setWidget($key, new sfWidgetFormInputCheckbox(array(),array('disabled'=>true, 'checked'=>true)));
           }else continue;
           $this->setWidget($key.'.font', new sfWidgetFormChoice(array(
                                                'choices'  => $font,
                                                
                                                    )));
           $this->setWidget($key.'.size', new sfWidgetFormChoice(array(
                                                'choices'  => $size,
                                                
                                                    )));
        }
        
    }
    //        if($value['optional']&&$value['displayed']){
//            $str.=false;
//            $optDispl++;
//        }else if (! $value['optional']){
//            $str.='true disabled';
//            $notOpt++;
//        }else{
//            $optNotDispl++;
//            continue;
//            
//        }
}

