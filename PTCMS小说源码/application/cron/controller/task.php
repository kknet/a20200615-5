<?php
class taskController extends Controller {
    protected $uri;
    public function init() {
        set_time_limit(0);
        $this->model = new CronModel();
        $this->response->disableRender();
        $this->uri = $this->config->get('cronurl') ? : $this->config->get('siteurl');
    }
    public function checkAction() {
        if ($this->model('cron')->check()) {
            echo date('Y-m-d H:i:s') . ' running';
        } else {
            echo date('Y-m-d H:i:s') . ' restart';
        }
    }
    public function masterAction() {
        $zym_18 = isset($_GET['backRun']);
        unset($GLOBALS, $_ENV, $zym_17, $_POST, $zym_16, $_GET, $zym_20, $_COOKIE, $zym_19, $zym_21, $_FILES, $zym_23, $_REQUEST);
        $GLOBALS['_cacheRead'] = $GLOBALS['_cacheWrite'] = $GLOBALS['_sqlnum'] = 0;
        cache::set('cron_master_pid', rand(1, 9999));
        $zym_22 = cache::get('cron_master_pid');
        while (true) {
            if ($zym_22 != cache::get('cron_master_pid')) exit('diff pid');
            if (!$this->model->getpower()) exit('cron stop');
            $zym_15 = $this->model->field('id,action,interval,lastruntime')->where(array(
                'status' => 1
            ))->select();
            cache::set('cron_master_time', time());
            foreach ($zym_15 as $zym_12 => $zym_27) {
                cache::set('cron_master_runtime', time());
                $zym_7 = $this->uri . U($zym_27['action'], array(
                    'id' => $zym_27['id'],
                    'backRun' => 1
                ));
                if (is_numeric($zym_27['interval'])) {
                    if ($zym_27['lastruntime'] + $zym_27['interval'] < time()) {
                        if (cache::get("cron_{$zym_27['id']}_status") != 'run' || ($zym_27['lastruntime'] + 20 * $zym_27['interval']) < time()) {
                            if (!$zym_18) dump(cache::get("cron_{$zym_27['id']}_status") . '--' . $zym_7 . '--' . date('Y-m-d H:i:s', $zym_27['lastruntime']));
                            http::trigger($zym_7);
                        }
                    }
                } else {
                    if (date('d', $zym_27['lastruntime']) != date('d') && date('H:i:s') > $zym_27['interval']) {
                        if (!$zym_18) dump($zym_7);
                        http::trigger($zym_7);
                    }
                }
            }
            if (!$zym_18) {
                dump(date("Y-m-d H:i:s"));
                ob_flush();
                flush();
            }
            sleep(1);
        }
    }
    public function setVisitAction() {
        $zym_24 = I('get.id', 'int', 0);
        if ($zym_24) {
            $zym_6 = cache::get("cron_{$zym_24}_time");
            if ($zym_6 + 86400 > NOW_TIME) exit('no need');
            M('novelsearch_info')->setvisit();
            cache::set("cron_{$zym_24}_time", NOW_TIME);
            $this->model->where(array(
                'id' => $zym_24
            ))->update(array(
                'lastruntime' => NOW_TIME
            ));
            exit('ok');
        }
    }
    public function collectAction() {
        $zym_24 = I('get.id', 'int', 0);
        if ($zym_24) {
            cache::set("cron_{$zym_24}_checktime", NOW_TIME);
            $zym_6 = cache::get("cron_{$zym_24}_time");
            $zym_5 = cache::get("cron_{$zym_24}_status");
            $zym_8 = dc::get('cron', $zym_24);
            $this->model->where(array(
                'id' => $zym_24
            ))->update(array(
                'lastruntime' => NOW_TIME
            ));
            if ($zym_5 == 'run' && $zym_6 + $zym_8['interval'] * 5 > NOW_TIME) exit('no need');
            cache::set("cron_{$zym_24}_time", NOW_TIME);
            cache::set("cron_{$zym_24}_status", "run");
            cache::set("cron_{$zym_24}_pid", rand(1, 9999));
            $zym_14 = new CollectModel($zym_8['param']);
            $zym_14->cron($zym_24);
            $this->model->where(array(
                'id' => $zym_24
            ))->update(array(
                'lastruntime' => time()
            ));
            cache::set("cron_{$zym_24}_status", "wait");
            cache::rm("cron_{$zym_24}_time");
        }
    }
    public function downAction() {
        $v_29 = I('get.id', 'int', 0);
        if ($v_29) {
            cache::set("cron_{$v_29}_checktime", NOW_TIME);
            $var_1595 = cache::get("cron_{$v_29}_time");
            $var_1596 = cache::get("cron_{$v_29}_status");
            $var_1597 = dc::get('cron', $v_29);
            $this->model->where(array(
                'id' => $v_29
            ))->update(array(
                'lastruntime' => NOW_TIME
            ));
            if ($var_1596 == 'run' && $var_1595 + $var_1597['interval'] * 5 > NOW_TIME) {
                exit('no need');
            }
            cache::set("cron_{$v_29}_time", NOW_TIME);
            cache::set("cron_{$v_29}_status", 'run');
            cache::set("cron_{$v_29}_pid", rand(1, 9999));
            $var_1598 = new DownModel($var_1597['param']);
            $var_1598->cron($v_29);
            $this->model->where(array(
                'id' => $v_29
            ))->update(array(
                'lastruntime' => time()
            ));
            cache::set("cron_{$v_29}_status", 'wait');
            cache::rm("cron_{$v_29}_time");
        }
    }
    public function pingAction() {
        $zym_24 = I('get.id', 'int', 0);
        $zym_26 = include APP_PATH . '/sitemap/config.php';
        if (!$zym_26['ping_power']) return;
        $zym_6 = cache::get('pingtime');
        if (!$zym_6) {
            $zym_6 = $_SERVER['REQUEST_TIME'] - 60;
        }
        cache::set('pingtime', $_SERVER['REQUEST_TIME']);
        $zym_25 = M('novelsearch_info')->field('id,pinyin,lastupdate')->where(array(
            'lastupdate' => array(
                '>',
                $zym_6
            )
        ))->select();
        F(CACHE_PATH . '/ping/' . $zym_6 . '.php', serialize($zym_25));
        $zym_7 = array(
            $this->config->get('siteurl') . '/sitemap/index/ping?key=' . $zym_6
        );
        $zym_13 = "http://data.zz.baidu.com/urls?site={$zym_26['ping_site']}&token={$zym_26['ping_token']}";
        $zym_9 = curl_init();
        $zym_11 = array(
            CURLOPT_URL => $zym_13,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $zym_7) ,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/plain'
            ) ,
        );
        curl_setopt_array($zym_9, $zym_11);
        $zym_10 = curl_exec($zym_9);
        $this->model->where(array(
            'id' => $zym_24
        ))->update(array(
            'lastruntime' => NOW_TIME
        ));
        var_dump(count($zym_7) , $zym_10, $zym_7);
        exit('ok');
    }
    public function wappingAction() {
        $zym_101 = I('get.id', 'int', 0);
        $zym_103 = include APP_PATH . '/wapsitemap/config.php';
        if (!$zym_103['ping_power']) return;
        $zym_100 = cache::get('pingtime');
        if (!$zym_100) {
            $zym_100 = $_SERVER['REQUEST_TIME'] - 60;
        }
        cache::set('pingtime', $_SERVER['REQUEST_TIME']);
        $zym_102 = M('novelsearch_info')->field('id,pinyin,lastupdate')->where(array(
            'lastupdate' => array(
                '>',
                $zym_100
            )
        ))->select();
        F(CACHE_PATH . '/wapping/' . $zym_100 . '.php', serialize($zym_102));
        $zym_104 = array(
            $this->config->get('wap_domain') . '/wap/sitemap/index/ping?key=' . $zym_100
        );
        $zym_105 = "http://data.zz.baidu.com/urls?site={$zym_103['ping_site']}&token={$zym_103['ping_token']}";
        $zym_106 = curl_init();
        $zym_107 = array(
            CURLOPT_URL => $zym_105,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $zym_104) ,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/plain'
            ) ,
        );
        curl_setopt_array($zym_106, $zym_107);
        $zym_108 = curl_exec($zym_106);
        $this->model->where(array(
            'id' => $zym_101
        ))->update(array(
            'lastruntime' => NOW_TIME
        ));
        var_dump(count($zym_104) , $zym_108, $zym_104);
        exit('ok');
    }
}         
                    
        
