<?php

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
    }

    // ------------------------------------------------- Test index page
    public function index() {
        $data = array(
            'title'   => 'MyTitle',
            'heading' => 'TestHeading',
            'message' => 'wow, this is a good play.',
            'list'    => array('shopping', 'sleeping'),
        );

        $data['query'] = $this->db->query('select * from article order by date desc limit 3');
        //echo '<html>';
        //$this->load->view('general/top_view');
        //$this->load->view('general/main_view', $data);
        $this->load->view('2bread/index_view', $data);
        //echo '</html>';
    }

    public function html5() {
        $this->load->view('general/html5_view');
    }

    public function gmap()
    {
        $this->load->view('general/googlemap_view');
    }

    public function gplace()
    {
        if ( isset($_POST['addr'])) {
            // get the geo of the addr
            $addr_base_url  = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=true&address=';
            $addr_query_url = $addr_base_url.$_POST['addr'];
            $addr_json      = $this->curl->simple_get($addr_query_url);
            $addr_array     = json_decode($addr_json,true);
            $location_array = $addr_array['results'][0]['geometry']['location'];
            $location       = $location_array['lat'].','.$location_array['lng'];
            //$location = '25.0494359,121.6159658';

            $base_url_search = 'https://maps.googleapis.com/maps/api/place/search/';
            $radius          = $_POST['radius'];
            $types           = $_POST['types'];
            $name            = $_POST['name'];
            $output          = 'json';
            $sensor          = 'false';
            $key             = 'AIzaSyDAMwyb1V3jXI1H-0gNzNl6xzVlLmTRq_o';

            $search_url = $base_url_search.$output.'?location='.$location.'&radius='.$radius.'&types='.$types.'&name='.$name.'&sensor='.$sensor.'&key='.$key;
            $search_json = $this->curl->simple_get($search_url);
            $data['search_array'] = json_decode($search_json,true);
        } else {
            $data = '';
        }
        $this->load->view('general/googleplace_view', $data);

        // Simple call to CI URI
        // $this->curl->simple_post('controller/method', array('foo'=>'bar'));

        // Set advanced options in simple calls
        // Can use any of these flags http://uk3.php.net/manual/en/function.curl-setopt.php
        //$this->curl->simple_get('http://example.com', array(CURLOPT_PORT => 8080));
        //$this->curl->simple_post('http://example.com', array('foo'=>'bar'), array(CURLOPT_BUFFERSIZE => 10));
    }

    public function gplace_details($third)
    {
        $base_url_details = 'https://maps.googleapis.com/maps/api/place/details/';
        $output           = 'json';
        $reference        = $third;
        $sensor           = 'false';
        $key              = 'AIzaSyDAMwyb1V3jXI1H-0gNzNl6xzVlLmTRq_o';

        $details_url = $base_url_details.$output.'?reference='.$reference.'&sensor='.$sensor.'&key='.$key;
        $details_json = $this->curl->simple_get($details_url);
        $data['details_array'] = json_decode($details_json,true);
        $this->load->view('general/googleplace_details_view', $data);
    }

    public function twitter()
    {
        // this example is not workable now since twitter api need OAuth now.
        $this->load->library(
            'rest',
            array(
                'server'    => 'http://api.twitter.com/',
                'http_user' => 'yienge@gmail.com',
                'http_pass' => '20010214h',
                'http_auth' => 'basic',
            )
        );

        $user = $this->rest->post('statuses/update.json', array('status' => 'Twitter API test codeigniter rest client test'));
        echo 'hihi so sad the twitter need OAuth now. but at leat the rest can work?';
    }

    // ------------------------------------------------- CSS & Javascript Test page

    public function show($third, $forth) {
        // URL will be like: http://192.168.0.101/index.php/main/show/gogo/haha
        echo $third;
        echo ' '.$forth;
        echo time() - 7 * 24 * 60 * 60;
        echo '=====';
        echo now();
        echo '=====';
    }

    public function onepageresume()
    {
        $this->load->view('OnePageResume/index_view');
    }

    public function remotelinking()
    {
        $this->load->view('RemoteLinking2/index');
    }

    public function googlemapslider()
    {
        $this->load->view('googlemapslider/index_view');
    }

    public function magicline()
    {
        $this->load->view('MagicLine/index_view');
    }

    // ------------------------------------------------- Base function implementation

    public function submit()
    {
        $this->load->view('general/submit_view');
    }
    public function article_submit()
    {
        $this->db->insert('article',$_POST);
        echo 'Insert succeed. Thank you!!';
    }

    public function submit_ok()
    {
        $this->load->view('general/ok_view');
    }

    public function login_page()
    {
        $this->load->view('general/login_view');
    }

    public function login()
    {
        $query = $this->db->query('select * from user where user_name="'.$_POST['user_name'].'"');
        $row = $query->result();
        $user_name = $row[0]->name;
        if ($row[0]->password == md5($_POST['password']) ) {
            //echo 'Login succeed.';
            // redirect is better than render a view since the url will not change by rendering a view.
            $cookie = array(
                'name'   => 'U',
                'value'  => $user_name,
                'expire' => '86500',
                'prefix' => 'yienge_',
            );
            $this->input->set_cookie($cookie);
            // $this->load->view('book_store/index_view');
            echo 'Login Success';
        } else {
            echo 'Login failed.';
            // redirect to main page;
        }
    }

    public function register_page()
    {
        // already add input validation
        $this->load->view('general/register_view');
    }

    public function register()
    {
        // how to set the key? the long is the coded cipher?
        // encode the password but encode is dynamic
        //$this->encrypt->set_key('23456');
        //$_POST['password'] = $this->encrypt->encode($_POST['password']);
        $this->db->insert('user', $_POST);
        echo "Thank you for your registration";
    }

    // ------------------------------------------------- Invisible function

    function _invisible()
    {
        echo 'This ftn will not work.';
    }

    public function test_garbage_collection() {
        $a = 'hihi';
        $b = &$a;
        echo '$a = '.$a."\n";
        echo '$b = '.$b."\n";

        $e = 'hihi';
        $f = &$e;
        unset($e);
        echo '$e = '.$e."\n";
        echo '$f = '.$f."\n";

        $c = 'yoyo';
        $d = &$c;
        $c = null;
        echo '$c = '.$c."\n";
        echo '$d = '.$d."\n";
        $if_c_is_null = ($c == null) ? 'YES' : 'NO';
        echo 'if_c_is_null = '.$if_c_is_null;
    }

    public function test_zend_cert() {
        $a = array('a', 'b');
        //array_push($a, array('1','2'));
        $a = array_merge($a, array('1','2'));
        print_r($a);

        preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=200[0-9])/', '21st March 2006', $matches);
        print_r($matches);

        $text = <<<EOT
The big bang bonged under the bung.
EOT;
        preg_match_all('@b.n?g@', $text, $matches);
        print_r($matches);

        $a = 2;
        $b = 3;
        $c = ($a++ * ++$b);
        echo $c;
    }

    public function test_reduce_quality(){
        // test1
        //$image_path1 = './images/i201310AM240006671_833260397.jpg';
        //$image_path1 = './images/i201310AM210003356_993968429.jpg';
        //$image_path1 = './images/i201310AM210003356_614147040.jpg';
        $image_path1 = './images/6190409875_fd831d2996_o.jpg';
        //$image_path1 = './images/5077374515_5db523fd93_o.jpg';
        $image = imagecreatefromjpeg($image_path1);

        for($i = 2; $i <= 10; $i++) {
            $quality = $i * 10;
            $target_path = sprintf('/tmp/test3_%s.jpg', $quality);
            imagejpeg($image, $target_path, $quality);
            $image_size = filesize($target_path);
            echo $target_path . ' : ' . round(($image_size / (1024))) . "KB \n";;
        }
        imagedestroy($image);
    }

    public function test_scan_dir(){
        $dir = '/tmp';
        $dh  = opendir($dir);
        while(false !== ($filename = readdir($dh))) {
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if(in_array($ext, array("jpg","jpeg","png","gif"))) {
                $images_in_dir[] = $filename;
            }
        }
        //print_r($images_in_dir);
        copy('/tmp/'.$images_in_dir[0], '/tmp/haha/'.$images_in_dir[0]);
        echo 'ok';
    }

    public function test_size_quality_mapping($image_size) {

        $size_quality_mapping = array(
            512  => 100,
            1024 => 80,
            2048 => 60
        );

        foreach($size_quality_mapping as $size => $quality) {
            if ($image_size <= $size) {
                return $quality;
            }
        }
        return 50;
    }

    public function test_size_quality() {
        var_dump($this->test_size_quality_mapping(61));
        var_dump($this->test_size_quality_mapping(643.15));
        var_dump($this->test_size_quality_mapping(800));
        var_dump($this->test_size_quality_mapping(1234));
        var_dump($this->test_size_quality_mapping(2555));
    }

    public function test_variable_method() {
        $something = 'test_size_quality_mapping';
        $value = $this->$something(1000);
        echo $value;
    }

    public function say($words) {
        echo $words;
    }

    public function test_getimagesize() {
        $image_path1 = './images/i201310AM240006671_833260397.jpg';
        $path_info_arr = pathinfo($image_path1);

        list($width, $height, $type, $size_string) = getimagesize($image_path1);
        $image_info_array = getimagesize($image_path1);

        print_r($path_info_arr);
        var_dump($path_info_arr['dirname'] . '/' . $path_info_arr['filename'] . '_100x100.' . $path_info_arr['extension']);
        //var_dump($width);
        //var_dump($height);
        //var_dump($image_info_array);
    }

    public function test_array_push() {
        $arr = array();
        $inserted_arr = array(
            'SM201300001' => array(
                'size' => '1024x768'
            )
        );
        $inserted_arr2 = array(
            'SM201300002' => array(
                'size' => '1024x768'
            )
        );
        $inserted_arr3 = array();
        $arr = array_merge($arr, $inserted_arr);
        $arr = array_merge($arr, $inserted_arr2);
        $arr = array_merge($arr, $inserted_arr3);
        print_r($arr);
    }

    public function test_preg_match() {
        var_dump(preg_match('/(\x{5c31}\x{8981}\x{91ac}\x{73a9})(\s)*[-:\x{ff1a}](\s)*/u' , '就要醬玩：櫻花蝦酥揚 酥香不油膩'));
        var_dump(preg_match('/(\x{5c31}\x{8981}\x{91ac}\x{73a9})(\s)*[-:\x{ff1a}](\s)*/u' , '就要醬玩 : 櫻花蝦酥揚 酥香不油膩'));
        var_dump(preg_match('/(\x{5c31}\x{8981}\x{91ac}\x{73a9})(\s)*[-:\x{ff1a}](\s)*/u' , '就要醬玩 - 櫻花蝦酥揚 酥香不油膩'));
        var_dump(preg_match('/(\x{5c31}\x{8981}\x{91ac}\x{73a9})(\s)*[-:\x{ff1a}](\s)*/u' , '櫻花蝦酥揚 酥香不油膩'));
        var_dump('測試字串中的冒號和dash和中文冒號可以正確比對到');

        // use mb_strlen then the following two word are all length 1
        var_dump(mb_strlen('黑'));
        var_dump(mb_strlen('1'));

        if (preg_match('/^(\d)*$/', '172r')) {
            echo 'it matches';
        }

        if (strpos('超好吃', '好') !== FALSE) {
            echo 'find it'."\n";
        }

        $keyword = '橘';
        $string = '橘,橘色';
        $test_arr = explode(',', $string);
        foreach($test_arr as $index => $item) {
            $pos = strpos($keyword, $item);
            var_dump($pos);
        }
    }

    public function test_chr() {
        // kill all symbols that chinese user may use
        var_dump(json_encode('§ ♫  ♪ ㊣ ❤ ♡ '));
        $keyword = preg_replace('/[\x{2000}-\x{3040}]/u' ,
            '',
            '《》＜＞ ○ ※ ◎ § ● ← ； 「 ＆ ＃ ＄ ％ ＠ █ ▼ ▲ △ ☆ ★ ㊣ ■ □ ♂ ♀ ※ 【上衣】');
        var_dump($keyword);

        $a = array('AM00213243243' => '300x200');
        $b = array('323' => '300x200');
        $c = array('AM00213234111' => '300x200');

        $f = array();
        $f = array_merge($f, $a);
        $f = array_merge($f, $b);
        $f = array_merge($f, $c);
        var_dump($f);

        // you can't even print these two chars
        // var_dump(chr(0x80));
        // var_dump(chr(0xFF));

        var_dump(json_encode('測試'));

        var_dump(preg_match('/^test/i', 'TestclayTest'));
        var_dump(preg_match('/test$/i', 'tEstclayTest'));
    }

    public function test_array_upper_limit() {
        $test_array = array();
        for ($i=0; $i< 300000; $i++) {
            $test_array[] = 'HelloThisIsATest';
        }
        var_dump(count($test_array));
    }
}
?>
