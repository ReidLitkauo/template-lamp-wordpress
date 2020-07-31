<? #############################################################################
# /framework/template.php
# Handle all template rendering logic

function render_template($args = []) {

	global $endpoint;

	require_once $_SERVER['DOCUMENT_ROOT'] . '/../templates/$-template-bridge.php';

}
