<?php include '../../common/view/header.html.php'; ?>
<?php if(isset($node)) $common->printPositionBar($node->origins);?>
<div class='row'>
  <div class='col-md-3'>
    <nav class='booksNav'>
      <ul class='nav nav-primary nav-stacked'>
        <li class='nav-heading'><?php echo $lang->book->list;?></li>
        <?php
        if(!empty($books))
        {
            foreach($books as $menu)
            {
                echo '<li' . (($menu->title == $book->title) ? " class='active'" : '') . '>' . html::a(inlink('browse', "bookID=$menu->id", "book=$menu->alias"), '<i class="icon-book"></i> &nbsp;' . $menu->title . '<i class="icon-chevron-right"></i>') . '</li>';
            }
        }
        ?>
      </ul>
    </nav>
    <?php $this->block->printRegion($layouts, 'book_browse', 'side');?>
  </div>

  <div class='col-md-9'>
    <div class='panel panel-block'>
      <?php if(!empty($book) && $book->title): ?>
      <div class='panel-heading'>
        <h4 class='title'><?php echo $book->title;?></h4>
      </div>
      <?php endif; ?>
      <div class='panel-body'>
        <div  class='books'><?php if(!empty($catalog)) echo $catalog;?></div>
      </div>
    </div>
  </div>
</div>  
<?php include '../../common/view/footer.html.php';?>
