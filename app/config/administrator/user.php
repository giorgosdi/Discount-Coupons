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
        'title' => 'username'
      ),

      'email' => array(
        'title' => 'email'
      ),
    ),

    'edit_fields' => array(
      'username' => array(
        'title' => 'username'
      ),

      'email' => array(
        'title' => 'email'
      ),
    )

)

?>