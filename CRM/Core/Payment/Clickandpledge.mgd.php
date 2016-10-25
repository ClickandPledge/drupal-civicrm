<?php

return array(
  0 => array(
    'name' => 'clickandpledge',
    'entity' => 'PaymentProcessorType',
    'params' => array(
      'version' => 3,
      'name' => 'clickandpledge',
      'title' => 'ClickAndPledge',
      'description' => 'Recurring payments payment processor for ClickAndPledge',
      'user_name_label' => 'Account ID',
      'password_label' => 'API Account GUID',
      'subject_label' => '',
      'class_name' => 'Payment_Clickandpledge',
      'billing_mode' => 1,
      'url_site_default' => 'https://manual.clickandpledge.com/',
      'payment_type' => 1,
      'is_recur' => 1,
      'url_recur_default' => 'https://manual.clickandpledge.com/',
      'url_site_test_default' => 'https://manual.clickandpledge.com/',
      'url_recur_test_default' => 'https://manual.clickandpledge.com/',
    ),
  ),
);

