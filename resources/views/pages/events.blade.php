@extends('pages.master')
@section('aboutCon')


   <br> <br>
   <div class="row">
   <?php
foreach ($Events as $value)
{
    
?>
        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4><?php echo($value->name); ?></h4>
                    <p>Date : <?php echo($value->date); ?><br></p>
                    <p>Time : <?php echo($value->start_time); ?></p>
                    <p>
                    <a href="#" class="btn btn-primary" role="button">View</a></p>
                </div>
                <img style="height: 200px;" src="/upload/events_images/<?php echo $value->image; ?>">
            </div>
        </div>
         <?php }?>
</div>
  <?php echo $Events->render();?>
@endsection