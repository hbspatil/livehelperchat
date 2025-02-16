<?php

$fieldsSearch = array();

$fieldsSearch['email'] = array (
    'type' => 'text',
    'trans' => 'Sort by',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'like',
    'filter_table_field' => 'email',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'string'
    )
);

$fieldsSearch['bot_ids'] = array (
    'type' => 'text',
    'trans' => 'Bot ID',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterin',
    'filter_table_field' => 'gbot_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['country_ids'] = array (
    'type' => 'text',
    'trans' => 'Country IDS',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterin',
    'filter_table_field' => 'country_code',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'string', array(), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['cls_us'] = array (
    'type' => 'text',
    'trans' => 'Visitor status',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'cls_us',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0)
    )
);

$fieldsSearch['online_user_id'] = array (
    'type' => 'text',
    'trans' => 'Online user ID',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'online_user_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
    )
);

$fieldsSearch['has_unread_op_messages'] = array (
    'type' => 'text',
    'trans' => 'Has unread operator messages',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'has_unread_op_messages',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0)
    )
);

$fieldsSearch['chat_status_ids'] = array (
    'type' => 'text',
    'trans' => 'Chat status',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterin',
    'filter_table_field' => 'status',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['no_operator'] = array (
    'type' => 'boolean',
    'trans' => 'groupby',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'manual',
    'filter_table_field' => ['filter' => ['user_id' => 0]],
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['has_operator'] = array (
    'type' => 'boolean',
    'trans' => 'groupby',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'manual',
    'filter_table_field' => ['filtergt' => ['user_id' => 0]],
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['with_bot'] = array (
    'type' => 'boolean',
    'trans' => 'groupby',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'manual',
    'filter_table_field' => ['filtergt' => ['gbot_id' => 0]],
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['without_bot'] = array (
    'type' => 'boolean',
    'trans' => 'groupby',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'manual',
    'filter_table_field' => ['filter' => ['gbot_id' => 0]],
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['nick'] = array (
    'type' => 'text',
    'trans' => 'Nick',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'like',
    'filter_table_field' => 'nick',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
    )
);

$fieldsSearch['ip'] = array (
    'type' => 'text',
    'trans' => 'Nick',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'ip',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
    )
);

$fieldsSearch['chat_id'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'multiple_id' => true,
    'filter_type' => 'filter',
    'filter_table_field' => '`lh_chat`.`id`',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'string'
    )
);

$fieldsSearch['visitor_id'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'multiple_id' => true,
    'filter_type' => 'filter',
    'filter_table_field' => '`lh_chat`.`online_user_id`',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'string'
    )
);

$fieldsSearch['subject_id'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => false,
    'filter_table_field' => 'id',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'int'
    )
);

$fieldsSearch['invitation_id'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'invitation_id',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'int', array('min_range' => 1)
    )
);

$fieldsSearch['wait_time_from'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filtergt',
    'filter_table_field' => 'wait_time',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'int'
    )
);

$fieldsSearch['wait_time_till'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterlte',
    'filter_table_field' => 'wait_time',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'int'
    )
);

$fieldsSearch['chat_duration_from'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filtergt',
    'filter_table_field' => 'chat_duration',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'int'
    )
);

$fieldsSearch['chat_duration_till'] = array (
    'type' => 'text',
    'trans' => 'id',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterlte',
    'filter_table_field' => 'chat_duration',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'int'
    )
);

$fieldsSearch['timefrom'] = array (
    'type' => 'text',
    'trans' => 'Timefrom',
    'required' => false,
    'valid_if_filled' => false,
    'datatype' => 'datetime',
    'filter_type' => 'filtergte',
    'filter_table_field' => 'time',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'string'
    )
);

$fieldsSearch['timeto'] = array (
    'type' => 'text',
    'trans' => 'Timeto',
    'required' => false,
    'valid_if_filled' => false,
    'datatype' => 'datetime',
    'filter_type' => 'filterlte',
    'filter_table_field' => 'time',
    'validation_definition' => new ezcInputFormDefinitionElement (
            ezcInputFormDefinitionElement::OPTIONAL, 'string'
    )
);

$fieldsSearch['department_id'] = array (
	'type' => 'text',
	'trans' => 'Department',
	'required' => false,
	'valid_if_filled' => false,
	'filter_type' => 'filter',
	'filter_table_field' => 'dep_id',
	'validation_definition' => new ezcInputFormDefinitionElement(
		ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
	)
);

$fieldsSearch['department_group_id'] = array (
    'type' => 'text',
    'trans' => 'Department group',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => false,
    'filter_table_field' => 'dep_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
    )
);

$fieldsSearch['group_id'] = array (
    'type' => 'text',
    'trans' => 'Group',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => false,
    'filter_table_field' => 'user_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
    )
);

$fieldsSearch['user_id'] = array (
	'type' => 'text',
	'trans' => 'User',
	'required' => false,
	'valid_if_filled' => false,
	'filter_type' => 'filter',
	'filter_table_field' => 'user_id',
	'validation_definition' => new ezcInputFormDefinitionElement(
		ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
	)
);

$fieldsSearch['product_id'] = array (
	'type' => 'text',
	'trans' => 'Product',
	'required' => false,
	'valid_if_filled' => false,
	'filter_type' => 'filter',
	'filter_table_field' => 'product_id',
	'validation_definition' => new ezcInputFormDefinitionElement(
		ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1)
	)
);

$fieldsSearch['fbst'] = array (
	'type' => 'text',
	'trans' => 'Feedback status',
	'required' => false,
	'valid_if_filled' => false,
	'filter_type' => 'filter',
	'filter_table_field' => 'fbst',
	'validation_definition' => new ezcInputFormDefinitionElement(
		ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0)
	)
);

$fieldsSearch['chat_status'] = array (
	'type' => 'text',
	'trans' => 'Chats status',
	'required' => false,
	'valid_if_filled' => false,
	'filter_type' => 'filter',
	'filter_table_field' => 'status',
	'validation_definition' => new ezcInputFormDefinitionElement(
		ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0,'max_range' => 1000)
	)
);

$fieldsSearch['hum'] = array (
    'type' => 'checkbox',
    'trans' => 'Group results',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'has_unread_messages',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['una'] = array (
    'type' => 'checkbox',
    'trans' => 'Group results',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'unanswered_chat',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldsSearch['anonymized'] = array (
    'type' => 'checkbox',
    'trans' => 'Anonymized',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filter',
    'filter_table_field' => 'anonymized',
    'validation_definition' => new ezcInputFormDefinitionElement (
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);


$fieldsSearch['department_ids'] = array (
    'type' => 'text',
    'trans' => 'Department',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterin',
    'filter_table_field' => 'dep_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['department_group_ids'] = array (
    'type' => 'text',
    'trans' => 'Group',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => false,
    'filter_table_field' => 'dep_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['user_ids'] = array (
    'type' => 'text',
    'trans' => 'Department',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'filterin',
    'filter_table_field' => 'user_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 0), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['group_ids'] = array (
    'type' => 'text',
    'trans' => 'Group',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => false,
    'filter_table_field' => 'dep_id',
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'int', array( 'min_range' => 1), FILTER_REQUIRE_ARRAY
    )
);

$fieldsSearch['abandoned_chat'] = array (
    'type' => 'boolean',
    'trans' => 'groupby',
    'required' => false,
    'valid_if_filled' => false,
    'filter_type' => 'manual',
    'filter_table_field' => ['customfilter' => ['( (`lh_chat`.`pnd_time` > `lh_chat`.`last_op_msg_time`) OR (`lh_chat`.`gbot_id` = 0 AND `lh_chat`.`user_id` = 0 AND `status_sub` IN (' . erLhcoreClassModelChat::STATUS_SUB_SURVEY_SHOW . ',' . erLhcoreClassModelChat::STATUS_SUB_CONTACT_FORM  . ',' . erLhcoreClassModelChat::STATUS_SUB_USER_CLOSED_CHAT . ',' . erLhcoreClassModelChat::STATUS_SUB_SURVEY_COMPLETED . ')) OR (`lsync` < (`pnd_time` + `wait_time`)))']],
    'validation_definition' => new ezcInputFormDefinitionElement(
        ezcInputFormDefinitionElement::OPTIONAL, 'boolean'
    )
);

$fieldSortAttr = array (
'field'      => false,
'default'    => false,
'serialised' => true,
'disabled'   => true,
'options'    => array()
);

return array(
    'filterAttributes' => $fieldsSearch,
    'sortAttributes'   => $fieldSortAttr
);