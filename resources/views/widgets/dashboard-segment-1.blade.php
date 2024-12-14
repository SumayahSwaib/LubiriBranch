<?php
 /* if (!isset($tasks_done)) {
    $tasks_done = 0;
}

if (!isset($events_count)) {
    $events_count = 0;
}
if (!isset($project_count)) {
    $project_count = 0;
}
if (!isset($tasks_count)) {
    $tasks_count = 0;
}  */
?>

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-4">
                @include('widgets.box-6', [
                    'is_dark' => false,
                    'title' => 'VACANT ROOMS',
                    'icon' => 'box',
                    'number' =>$vacantR,
                    'link' => admin_url('rooms'),
                ])
            </div>
           <div class="col-md-4">
                @include('widgets.box-6', [
                    'is_dark' => false,
                    'title' => 'OCCUPIED ROOMS',
                    'icon' => 'list-task',
                    'number' =>$OcupiedR,
                    'link' => admin_url('rooms'),
                ])

            </div> 
             <div class="col-md-4">
                @include('widgets.box-6', [
                    'is_dark' => true,
                    'title' => 'TENANTS WITH <br> BALANCE',
                    'icon' => 'calendar-event-fill',
                    'number' =>$BalanceT,

                  /*   'number' => "$my_tasks_count", */
                    'link' => admin_url('tenantpayments'),
                ])
            </div> 
        </div>
    </div>
</div>
 <div class="row">
     <div class="col-md-6">
        @include('dashboard.recent-payments', [
           // 'items' => $BalanceAll, 
            'title' => 'Pending payments',
        ])
    </div>
      <div class="col-md-6">
        @include('dashboard.rooms', [
            'items' => $vacantrooms,
            'title' => 'Pending tasks',
        ])
    </div>  
</div>
