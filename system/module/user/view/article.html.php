<?php include '../../common/view/header.html.php';?>
<div class='page-user-control'>
  <div class='row'>
    <?php include './side.html.php';?>
    <div class='col-md-10'>
      <div class='panel'>
        <div class='panel-heading'><strong><i class='icon-share'></i> <?php echo $lang->user->article;?></strong>
            <div class='panel-actions'><?php echo html::a($this->createLink('article','frontcreate'), '<i class="icon-plus"></i> ' . $lang->article->create, 'class="btn btn-primary"');?></div>
        </div>
        <table class='table table-hover'>
          <thead>
           <tr>
        <?php $vars = "type=$type&categoryID=$categoryID&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}";?>
        <th class='text-center w-60px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->article->id);?></th>
        <th class='text-center'><?php commonModel::printOrderLink('title', $orderBy, $vars, $lang->article->title);?></th>
        <?php if($type != 'page'):?>
        <th class='text-center w-200px'><?php commonModel::printOrderLink('category', $orderBy, $vars, $lang->article->category);?></th>
        <?php endif;?>
        <th class='text-center w-160px'><?php commonModel::printOrderLink('addedDate', $orderBy, $vars, $lang->article->addedDate);?></th>
        <th class='text-center w-60px'><?php commonModel::printOrderLink('views', $orderBy, $vars, $lang->article->views);?></th>
        <th class='text-center w-150px'><?php echo $lang->actions;?></th>
      </tr>
          </thead>
          <tbody>
             <?php $maxOrder = 0; foreach($articles as $article):?>
      <tr>
        <td class='text-center'><?php echo $article->id;?></td>
        <td>
          <?php echo $article->title;?>
          <?php if($article->status == 'draft') echo '<span class="label label-xsm label-warning">' . $lang->article->statusList[$article->status] .'</span>';?>
        </td>
        <?php if($type != 'page'):?>
        <td class='text-center'><?php foreach($article->categories as $category) echo $category->name . ' ';?></td>
        <?php endif;?>
        <td class='text-center'><?php echo $article->addedDate;?></td>
        <td class='text-center'><?php echo $article->views;?></td>
        <td class='text-center'>
          <?php
          echo html::a($this->createLink('article', 'frontedit', "articleID=$article->id&type=$article->type"), $lang->edit);
          echo html::a($this->createLink('file', 'browse', "objectType=$article->type&objectID=$article->id"), $lang->article->files, "data-toggle='modal'");
          echo html::a($this->createLink('article', 'delete', "articleID=$article->id"), $lang->delete, 'class="deleter"');
          echo html::a($this->article->createPreviewLink($article->id), $lang->preview, "target='_blank'");
          ?>
        </td>
      </tr>
      <?php endforeach;?>
          </tbody>
          <tfoot><tr><td colspan='7'><?php $pager->show('right', 'short');?></td></tr></tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
