<?php
use App\Categorys;
use App\Products;
use App\Options;
use App\Members;
use App\OrderDetails;

function GetCat($parentid , $space = "", $trees = array()) {
    $data = Categorys::Select('id','name','parent_id')->where('parent_id',$parentid)->get()->toArray();
    foreach($data as  $row){
        $trees[] = array(
            'id' => $row['id'],
            'name' => $space . $row['name'],
        );
        $trees = GetCat($row['id'], $space . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $trees);
    }
    return $trees;
}

function getMenu($data, $class = 'menu', $id = '') {
    echo "<ul id='$id' class='$class'>";
    foreach($data as $dt)  {
    ?>
    <li><a href="<?=$dt['customSelect']?>" title="<?=$dt['title']?>"><?=$dt['title']?></a></li>
    <?php
        if(isset($dt['children'])) {
            getMenu($dt['children']);
        }
    }
    echo "</ul>";
}

function getOP($id) {
    $op =  Products::find($id)->poptions->toArray(); 
    foreach($op as $o) { 
    echo $o['name'].': '.$o['value'].'<br />';
    }
}
function getCatVal($cat_id, $name) {
    $cat = Categorys::Select()->where('id',$cat_id)->get()->first();
    echo $cat->$name;
}

function getCatName($cat_id) {
    $cat = Categorys::Select()->where('id',$cat_id)->get()->first();
    echo $cat->name;
}
function getCatAlias($cat_id) {
    $cat = Categorys::Select()->where('id',$cat_id)->get()->first();
    echo $cat->alias;
}

function getProductRelax($cat_id) {
    return $product = Products::where('cat_id', $cat_id )->take(4)->get()->toArray();
    
}

function getOption($name) {
    $value = Options::select()->where('name', $name )->get()->first();
    echo  $value->value;
}

function returnOption($name) {
    $value = Options::select()->where('name', $name )->get()->first();
    return  $value->value;
}

function getProName($id) {
    $pro = Products::Select()->where('id',$id)->get()->first();
    echo $pro->name;
}

function getMember($id) {
    $member = Members::where('id',$id)->get()->first();
    return $member;
}

function getTotal($order_id) {
    $details = OrderDetails::where('order_id',$order_id)->get()->toArray();
    $tongtien = 0;
    foreach ($details as $value) {
        $tongtien+=($value['qty']*$value['price']); 
    }
    return $tongtien;
}

function sentFBNotification($facebook_id, $link, $msg){
    $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
    $post = $fb->POST('/'.$facebook_id.'/notifications/',  array(
      'access_token' => env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET'),
      'href' => $link,  //this does link to the app's root
      'template' => $msg,
      'ref' => 'Notification sent ',//this is for Facebook's insight
    ));
    
}

function live_chat_facebook() {
    if(returnOption('livechat-status') == 1) {
        define("LIVE_CHAT_FACEBOOK_BACKGROUD", returnOption('livechat-bg'));
        define("LIVE_CHAT_FACEBOOK_OPEN", "Open Chat");
        define("LIVE_CHAT_FACEBOOK_TITLE", returnOption('livechat-title'));
        define("LIVE_CHAT_FACEBOOK_TEXT", returnOption('livechat-hello'));
        define("LIVE_CHAT_FACEBOOK_START", "Start");
        define("LIVE_CHAT_FACEBOOK_LANG", returnOption('livechat-lang'));
        ?>
        <link rel="stylesheet" type="text/css" href="http://timemart.dev/public/home/css/live_chat_facbook.css" >
        <script type="text/javascript" src="http://timemart.dev/public/home/js/live_chat_facbook.js"></script>
        <style type="text/css">
            #b-c-facebook .chat-f-b, #chat_f_b_smal, #f_bt_start_chat {
                background: <?php echo LIVE_CHAT_FACEBOOK_BACKGROUD ?>;
            }
        </style>
        <a title="<?php echo LIVE_CHAT_FACEBOOK_OPEN ?>" id="chat_f_b_smal" onclick="chat_f_show()" class="chat_f_vt"><?php echo LIVE_CHAT_FACEBOOK_OPEN ?></a>
        <div id="b-c-facebook" class="chat_f_vt">
            <div id="chat-f-b" onclick="b_f_chat()" class="chat-f-b">
                <img class="chat-logo" src="http://timemart.dev/public/home/images/facebook.png" alt="logo chat" />
                <label>
                    <?php echo LIVE_CHAT_FACEBOOK_TITLE ?>
                </label>
                <span id="fb_alert_num">
                    1
                </span>

                <div id="t_f_chat">
                    <a title="Close Chat" href="javascript:;" onclick="chat_f_close()" id="chat_f_close" class="chat-left-5"><img src="http://timemart.dev/public/home/images/close.png" alt="Close chat" title="Close chat" /></a>
                </div>
            </div>
            <div id="f-chat-conent" class="f-chat-conent">
                <div class="fb-page" data-tabs="messages" data-href="<?php getOption('livechat-page'); ?>" data-width="250" data-height="310" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true"
                    data-show-facepile="false" data-show-posts="true">
                </div>
                <div id="fb_chat_start">
                    <div id="f_enter_1" class="msg_b fb_hide">
                        <?php echo LIVE_CHAT_FACEBOOK_TEXT ?>
                    </div>

                    <p id="f_enter_3" class="fb_hide" align="center">
                        <a href="javascript:;" onclick="f_bt_start_chat()" id="f_bt_start_chat"><?php echo LIVE_CHAT_FACEBOOK_START ?></a>
                    </p>

                </div>

            </div>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo LIVE_CHAT_FACEBOOK_LANG ?>/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

<?php
    }
}

