<?php
return array(
    'user_field'=>'email',
    'password_field'=>'password',
    'user_collection'=>'members',
    'invalidchars'=>array('%','&','|',' ','"',':',';','\'','\\','?','#','(',')','/'),
    'default_theme'=>'default',

    'salutation'=>array(
            'Mr'=>'Mr',
            'Mrs'=>'Mrs',
            'Ms'=>'Ms',
        ),

    'admin_roles'=>array(
        'root'=>'Superadmin',
        'admin'=>'Admin',
        'editor'=>'Content Editor'
        ),
    'send_options'=>array(
            'immediately'=>'Send Now',
            'atdate'=>'At Specified Date',
            'onceaweek'=>'Once A Week',
            'onceamonth'=>'Once A Month'
        ),

    );