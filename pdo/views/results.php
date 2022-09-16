<style>
  .option {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
  }

  .option-text {
    text-align: right;
  }

  .bar {
    color: #cccccc;
    padding: 5px 10px;
    background-color: #166E6A;
    border-radius: 5px;
  }

  .bar-select {
    background-color: #0f3d3c;
  }
</style>
<div class="option">
  <?php
  $percentageBar = $percentage * 10;
  $style = "";
  if ($survey->getOptionSelected() == $language['option']) {
    $style = "bar-select";
  }
  ?>
  <span class="option-text"><?php echo strtoupper($language['option']) ?></span>
  <div class="bar <?php echo $style ?>" style="width: <?php echo $percentageBar ?>px">
    <?php echo $percentage . '%' ?>
  </div>
  <?php
  ?>
</div>