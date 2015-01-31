<?php 

 return array(
 
  'title' => 'Coupon',

  'single' => 'coupon',

 'model' => 'Coupon',

 'columns' => array(
    'title'=> array(
      'title' => 'Title'
    ),
    'description'=> array(
      'title' => 'Description'
    ),
    'category'=> array(
      'title' => 'Category'
    ),
    'expiration_date'=> array(
      'title' => 'Expiration date'
    ),
    'initial_price'=> array(
      'title' => 'Initial price'
    ),
    'price'=> array(
      'title' => 'Price'
    ),
    'discount_percentage'=> array(
      'title' => 'Discount percentage %'
    ),
    'availability'=> array(
      'title' => 'Availability'
    ),
    'path'=> array(
      'title' => 'Path'
    )
  ),

  'edit_fields' => array(
    'title'=> array(
      'title' => 'Title'
    ),
    'description'=> array(
      'type' => 'textarea',
      'title' => 'Description',
      'limit' => 300,
      'height' => 130
    ),
    'category'=> array(
      // 'type' => 'relationship',
      'title' => 'Category',
      // 'name_field' => 'category'
    ),
    'expiration_date'=> array(
      'type' => 'date',
      'title' => 'Expiration date',
      'date_format' => 'yy-mm-dd'
    ),
    'initial_price'=> array(
      'title' => 'Initial price'
    ),
    'price'=> array(
      'title' => 'Price'
    ),
    'discount_percentage'=> array(
      'title' => 'Discount percentage %'
    ),
    'availability'=> array(
      'title' => 'Availability'
    ),
    'path'=> array(
      'title' => 'Path'
    )
  )



)

?>