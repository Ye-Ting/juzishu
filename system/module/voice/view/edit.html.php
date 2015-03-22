<?php
/**
 * The edit view file of voice of chanzhiEPS.
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
<?php include '../../common/view/kindeditor.html.php';?>
<?php
js::set('key', count($voice->label));
$colorPlates = '';
foreach (explode('|', $lang->voice->colorPlates) as $value)
{
    $colorPlates .= "<div class='color color-tile' data='#" . $value . "'><i class='icon-ok'></i></div>";
}
?>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-edit'></i> <?php echo $lang->voice->edit;?></strong></div>
  <div class='panel-body'>
    <form id='ajaxForm' method='post' enctype='multipart/form-data'>
      <table class='table table-form'>
        <tr>
          <th><?php echo $lang->voice->content;?></th>
          <td colspan='3'><?php echo html::textarea('content', $voice->content, 'class="form-control"');?></td>
        </tr>
        <tr>
          <td></td>
          <td colspan='3'>
            <?php echo html::hidden('id', $id);?>
            <?php echo html::hidden('image', $voice->image);?>
            <?php echo html::submitButton();?>
          </td>
        </tr>
      </table>
    </form>
  </div>

  <table class='hide'>
    <tbody id='button'>
      <tr>
        <th><?php echo $lang->voice->button;?></th>
        <td>
          <div class='input-group'>
            <?php echo html::input('label[key]', '', "class='form-control' placeholder='{$lang->voice->label}'");?>
            <div class='input-group-btn'>
              <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'><?php echo $lang->voice->buttonColor;?> <span class='caret'></span></button>
              <?php echo html::hidden('buttonClass[key]');?>
              <div class='dropdown-menu buttons'>
                  <li><button type='button' data-id='default' class='btn btn-block'><?php echo $lang->voice->label;?></button></li>
                  <li><button type='button' data-id='primary' class='btn btn-block btn-primary'><?php echo $lang->voice->label;?></button></li>
                  <li><button type='button' data-id='warning' class='btn btn-block btn-warning'><?php echo $lang->voice->label;?></button></li>
                  <li><button type='button' data-id='danger' class='btn btn-block btn-danger'><?php echo $lang->voice->label;?></button></li>
                  <li><button type='button' data-id='success' class='btn btn-block btn-success'><?php echo $lang->voice->label;?></button></li>
                  <li><button type='button' data-id='info' class='btn btn-block btn-info'><?php echo $lang->voice->label;?></button></li>
                </div>
            </div>
          </div>
        </td>
        <td><?php echo html::input('buttonUrl[key]', '', "class='form-control' placeholder='{$lang->voice->buttonUrl}'");?></td>
        <td><?php echo html::a('javascript:;', "<i class='icon-plus'></i>", "class='plus btn btn-mini'") . html::a('javascript:;', "<i class='icon-remove'></i>", "class='delete btn-mini btn'");?></td>
      </tr>
    </tbody>
  </table>
</div>

<?php include '../../common/view/footer.admin.html.php';?>
