<p id="date">
  <span class="date"><?php echo __('On %%d%%',array('%%d%%' => format_date(time(), sfConfig::get('app_seller_date'))),'li_accounting') ?></span>
  <span class="time"><?php echo format_date(time(), 't') ?></span>
</p>
