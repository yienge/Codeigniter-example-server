<?php
class Cookies {

    private $prefix = 'yienge_';

    public function set_prefix($prefix) {
        $this->prefix = $prefix;
        return $this->prefix;
    }

    public function get_prefix($prefix) {
        return $this->prefix;
    }

    public function set_cookie($name, $value, $expire_time = '86500') {
        $cookie = array(
            'name'   => $name,
            'value'  => $value,
            'expire' => $expire_time,
            'prefix' => 'yienge_',
            'domain' => '.some-domain.com',
            'path'   => '/',
            'secure' => TRUE
        );
        $this->input->set_cookie($cookie);
        return 0;
    }

    public function get_cookie($name) {
        $cookie = $this->input->cookie($name);
        return $cookie;
    }

}
?>
