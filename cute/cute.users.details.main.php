<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.details.main
[END_COT_EXT]
==================== */

/**
* @package cute
* @version 1.00
* @author Dmitri 'Kort' Beliavski
* @copyright 2023 sed.by
* @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$mskin = cot_tplfile(array('users', 'details', ($cfg['plugin']['cute']['tpl_type'] == 1) ? 'id' . $urr['user_id'] : $urr['user_name']), 'module');
