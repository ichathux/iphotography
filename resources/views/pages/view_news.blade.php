@extends('pages.master')
@section('aboutCon')


    

<div class="row" style="height: 500px;">
<?php 
foreach ($News as $value) {
  

 ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width: 800px;">
      <img src="upload/images/<?php echo $value->image; ?>" alt="...">
      <div class="caption">
        <h3><?php echo $value->title; ?></h3>
        <p><?php
          echo $value->detail;
        ?></p>
        <p><a href="upload/images/<?php echo $value->image; ?>" class="btn btn-primary" role="button" download>Download images</a> </p>
      </div>
    </div>
  </div>
  <?php }?>
</div>
  
@endsection