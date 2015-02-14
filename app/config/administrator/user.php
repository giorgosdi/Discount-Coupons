<?php

return array(


    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Users',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'user',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'User',

    /**
     * Model's fields
     */

    'columns' => array(
      'username' => array(
        'title' => 'Username'
      ),

      'first_name' => array(
          'title' => 'First name'
        ), 
      'last_name' => array(
          'title' => 'Last name'
        ),

      'email' => array(
        'title' => 'Email'
      ),
      'type' => array(
          'title' => 'Type'
        ),
    ),

    'edit_fields' => array(
      'username' => array(
        'title' => 'Username'
      ),

      'first_name' => array(
          'title' => 'First name'
        ), 
      'last_name' => array(
          'title' => 'Last name'
        ),

      'email' => array(
        'title' => 'Email'
      ),     
      'type' => array(
          'title' => 'Type'
        ),
    )

)

?>