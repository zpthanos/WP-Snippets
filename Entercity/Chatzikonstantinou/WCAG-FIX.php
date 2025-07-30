function manage_achecker_log() {
    $log_file = ABSPATH . 'wp-content/uploads/achecker_log.txt';

 
    $ip_address = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $request_time = date("Y-m-d H:i:s");

 
    $achecker_patterns = ['python-requests', 'chrome/119.0.0.0'];

  
    foreach ($achecker_patterns as $pattern) {
        if (strpos(strtolower($user_agent), $pattern) !== false) {
            // If AChecker is detected, delete and recreate the log file
            if (file_exists($log_file)) {
                unlink($log_file); // Delete old log file
            }

            // Create a fresh log file with only the current request
            $log_entry = "Time: $request_time | IP: $ip_address | User-Agent: $user_agent" . PHP_EOL;
            file_put_contents($log_file, $log_entry);

            return; 
        }
    }
}

function get_achecker_scanning_ips() {
    $log_file = ABSPATH . 'wp-content/uploads/achecker_log.txt';
    $achecker_ips = [];

    if (file_exists($log_file)) {
        $log_lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($log_lines as $line) {
            
            if (strpos($line, 'python-requests') !== false || strpos($line, 'Chrome/119.0.0.0') !== false) {
                preg_match('/IP: ([0-9\.]+)/', $line, $ip_match);
                if (!empty($ip_match[1])) {
                    $achecker_ips[] = trim($ip_match[1]);
                }
            }
        }
    }

    return array_unique($achecker_ips);
}

function force_redirect_wcag_cached_page() {
    $ip_address = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $achecker_ips = get_achecker_scanning_ips(); // Read detected AChecker IPs from log file

    if (
        is_admin() ||
        strpos($_SERVER['REQUEST_URI'], '/wp-admin') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/wp-login.php') !== false ||
        defined('DOING_AJAX')
    ) {
        return; // Do nothing for admin users
    }

    if (in_array($ip_address, $achecker_ips)) {
        // Send no-cache headers
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Force PHP redirect
        wp_redirect(site_url('/wcag-cached.php'), 302);
        exit;
    }
}

add_action('template_redirect', 'force_redirect_wcag_cached_page', 1);
