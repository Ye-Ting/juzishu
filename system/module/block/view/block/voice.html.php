<?php
/**
 * The about front view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license 
 * @author      Yidong wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
?>
<?php $voices = $this->loadModel('voice')->getList();?>
<?php 
if($voices):?>
<div id='voice' class='panel panel-default voice text-center'  style="padding:20px;font-size:18px;">
  <b><?php 
        $voice = $voices[date("w")];
        if (!$voice) {
          $voice =$voices[1];
        }
        echo $voice->content;
      ?></b>

</div>
<?php endif;?>
