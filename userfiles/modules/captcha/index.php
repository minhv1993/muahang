<?php


$form_id = uniqid('cap');


$template = get_option('data-template', $params['id']);

if (($template == false or ($template == '')) and isset($params['template'])) {

    $template = $params['template'];

}


$template_file = false;
if ($template != false and strtolower($template) != 'none') {
    $template_file = module_templates($config['module'], $template);
}
if ($template_file == false) {
    $template_file = module_templates($config['module'], 'default');
}




if ($template_file != false and is_file($template_file)) {
    include($template_file);
}

