<?php
  
  return array(

    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Categories',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'category',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Category',

    'columns' => array(
      'title' => array(
        'title' => 'Title'
      )
    ),

    'edit_fields' => array(
      'title' => array(
        'title' => 'Title'
      ),
    )

  )

?>