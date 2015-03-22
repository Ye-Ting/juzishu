<?php
/**
 * The admin browse view file of voice module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Xiying Guan<guanxiying@xirangit.com>
 * @package     voice
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<div class='panel'>
  <div class='panel-heading'>
    <strong><i class='icon-comment'></i> <?php echo $lang->voice->admin;?></strong>
    <div class='panel-actions'>
      <?php echo html::a($this->inlink('create'), '<i class="icon-plus"></i> ' . $lang->voice->create, "class='btn btn-primary'");?>
    </div>
  </div>
  <form id='sortForm' action='<?php echo inLink('sort')?>' method='post'>
    <table class='table'>
      <tbody>
        <?php 
           $week = 0 ;
           $weekarray=array("日","一","二","三","四","五","六");
        ?>
        <?php foreach($voices as  $key => $voice):?>
        <?php if($voice->backgroundType == 'color') $voice->height = $voice->height ? $voice->height : 180; ?>
        <tr class='text-middle'>
          <td>
          <?php echo "星期".$weekarray[$week]; $week++; ?>
            <?php echo html::hidden("order[{$voice->id}]", $key);?> 
            <div class='carousel voice mg-0'>
              <div class='carousel-inner' style="text-align:center">
              
              <?php echo $voice->content;?>
               
              </div>
            </div>
          </td>
          <td class='w-50px text-center'>
            <a href='javascript:;' class='btn btn-move-up btn-sm'><i class='icon-arrow-up'></i></a>
            <a href='javascript:;' class='btn btn-move-down btn-sm'><i class='icon-arrow-down'></i></a>
            <?php echo html::a($this->createLink('voice', 'edit', "id=$voice->id"), "<i class='icon-pencil'></i>", "class='btn btn-sm' title='{$lang->edit}'");?>
            <?php echo html::a($this->createLink('voice', 'delete', "id=$voice->id"), "<i class='icon-remove'></i>", "class='deleter btn btn-sm' title='{$lang->delete}'");?>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </form>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
