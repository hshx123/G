<?php
/**
 * 大气
 *
 *
 * @package G
 * @author 季悠然
 * @version 2.4.6
 * @link https://gundam.exia.xyz/
 */

 $this->need('header.php');
 ?>
<div id="article" class="clear">
  <div id="article-content">

    <?php  $this->need('IndexSwitcher.php'); ?>

    <div id="pages" class="clear changePage">
      <?php $this->pageLink('下一页 >','next'); ?>
      <?php $this->pageLink('< 上一页','prev'); ?>
    </div>

  </div>
</div>




  <?php $this->need('footer.php'); ?>
