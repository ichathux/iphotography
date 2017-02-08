@extends('pages.master')
@section('aboutCon')


    

<div class="row">
<br>
<?php foreach ($News as $value) { ?>
  <div class="col-sm-6 col-md-4">
    <div style="height: 400px;" class="thumbnail">
    <br>
      <img style="height: 150px;" src="/upload/images/<?php echo $value->image; ?>">
      <div class="caption">
        <h3><?php echo $value->title; ?></h3>
        <p>   <?php
    echo $value->detail;
    ?></p>
        <p><a href="view_news&<?php echo $value->id; ?>" class="btn btn-primary" role="button">View</a> <a href="" class="btn btn-default" role="button">Share</a></p>
      </div>
    </div>
  </div>
  <?php  } ?>
</div>
  
@endsection