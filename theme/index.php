<? #############################################################################
# /theme/index.php
# Main controller for ALL site traffic.

require_once $_SERVER['DOCUMENT_ROOT'] . '/../framework/$.php';

################################################################################
# urlconf
# Patterns against which URI requests are tested, are mapped to the endpoints
# those URI requests should be sent to.
# Drop all leading and trailing slashes from test and endpoint.
# As an example, use the following entry:
# '/^posts\/(.*)$/' => '/posts/render',
# The request '/posts/my-post' would match the above,
# and $urlparams would contain 'my-post'.

$urlconf = [
	'/^$/' => 'index',
	'/^phpinfo$/' => 'phpinfo',
];

################################################################################
# Process the client's request

# Grab/filter the request URI, trimming leading and trailing slashes
$request_uri = trim($_SERVER['REQUEST_URI'], '/');

# Test all urlconf options, include the appropriate file
foreach ($urlconf as $urltest => $endpoint) {

	if (preg_match($urltest, $request_uri, $urlparams)) {
		require_once "{$_SERVER['DOCUMENT_ROOT']}/../endpoints/$endpoint.php";
		exit();
	}

}

# No pattern matched, handle 404
http_response_code(404);
exit();
