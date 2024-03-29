<?php
/**********************************************************************************
*
*	    This file is part of e-venement.
*
*    e-venement is free software; you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation; either version 2 of the License.
*
*    e-venement is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with e-venement; if not, write to the Free Software
*    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*
*    Copyright (c) 2006-2011 Baptiste SIMON <baptiste.simon AT e-glop.net>
*    Copyright (c) 2006-2011 Libre Informatique [http://www.libre-informatique.fr/]
*
***********************************************************************************/
?>
<?php
    $form = new BaseForm;
    $form->setValidator('othercode', new sfValidatorString(array('max_length' => 255, 'min_length' => 4)));
    
    foreach ( $request->getParameter('ticket') as $id => $ticket )
    {
      if ( intval($id) > 0 )
      {
        $ticket['_csrf_token'] = $request->getParameter('ticket_csrf_token');
        $form->bind($ticket);
        $t = Doctrine::getTable('Ticket')->findOneById($id);
        if ( $t )
        {
          $errors = $form->getGlobalErrors();
          foreach ( $errors as $key => $error )
            error_log('Tickets RFID: '.$key.' => '.$error);
          
          if ( $form->isValid() )
          {
            $t->othercode = $ticket['othercode'];
            if ( $request->hasParameter('reset-barcodes') )
              $t->barcode = md5(rand(-9999999999999999999999999999,0));
          }
          else
          {
            $t->printed_at = NULL;
            $t->integrated_at = NULL;
          }
          $t->save();
        }
      }
      
      $this->setLayout('empty');
      $this->setTemplate('close');
    }
