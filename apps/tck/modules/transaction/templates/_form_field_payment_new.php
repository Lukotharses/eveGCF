<?php echo $form->renderFormTag(url_for('transaction/complete?id='.$transaction->id), array(
  'autocomplete' => 'off',
  'target' => '_blank',
  'method' => 'get',
)) ?>
<?php echo $form->renderHiddenFields() ?>
<p class="field_created_at field">
  <?php echo $form['created_at']->renderLabel() ?>
  <?php echo $form['created_at'] ?>
</p>
<p class="field_value field">
  <?php echo $form['value']->renderLabel() ?>
  <?php echo $form['value']->render(array('class' => 'for-board')) ?>
</p>
<p class="field_detail field">
  <?php echo $form['detail']->renderLabel() ?>
  <?php echo $form['detail']->render(array('class' => 'for-board')) ?>
</p>
<?php if ( $sf_user->hasCredential('tck-payment') ): ?>
<div class="field_payment_method_id field">
  <?php echo $form['payment_method_id'] ?>
</div>
<ul class="field_payment_method_pictures">
  <?php foreach ( Doctrine::getTable('PaymentMethod')->createQuery('pm')
    ->leftJoin('pm.Picture p')
    ->andWhere('p.id IS NOT NULL')
    ->execute() as $method ):
  ?>
  <li data-payment-method-id="<?php echo $method->id ?>"><?php echo $method->Picture->render() ?></li>
  <?php endforeach ?>
</ul>
<?php endif ?>
<p class="submit">
  <button name="s" value="" class="ui-widget-content ui-state-default ui-corner-all ui-widget fg-button"><?php echo __('Add') ?></button>
</p>
</form>

<div id="ept-transaction" style="display: none">
  <p><?php echo __('EPT transaction...') ?></p>
  <button id="cancel-ept-transaction"><?php echo __('Cancel') ?></button>
</div>
