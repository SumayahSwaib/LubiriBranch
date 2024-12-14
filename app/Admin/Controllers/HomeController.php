<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Association;
use App\Models\Candidate;
use App\Models\Garden;
use App\Models\Group;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Location;
use App\Models\Person;
use App\Models\Product;
use App\Models\Renting;
use App\Models\Room;
use App\Models\Tenant;
use App\Models\TenantPayment;
use App\Models\Utils;
use Carbon\Carbon;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth;
use SplFileObject;

class HomeController extends Controller
{
    public function index(Content $content)
    {

        $u = Auth::user();
        $content
            ->title('LUBIRI APARTMENTS - Dashboard')
            ->description('Hello ' . $u->username . "!");
         
            $content->row(function (Row $row) {
                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-groundfloor', [
                       
                        'rooms' => Room::where('floor', 'Floor1')->get()
                    ]));
                });
                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-floor1', [
                        'rooms' => Room::where('floor', 'Floor2')->get()
                        
                    ]));
                });
                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-floor2', [
                        'rooms' => Room::where('floor', 'Floor3')->get()
                       
                    ]));
                });

               
            });

            $content->row(function (Row $row) {
                

                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-floor3', [
                        'rooms' => Room::where('floor', 'Floor4')->get()
                    ]));
                });
                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-floor4', [
                        'rooms' => Room::where('floor', 'Floor5')->get()
                        
                    ]));
                });
                $row->column(3, function (Column $column) {
                    $column->append(view('widgets.dashboard-floor5', [
                        'rooms' => Room::where('floor', 'Floor6')->get()
                        
                    ]));
                });
            });

            $content->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append(view('widgets.dashboard-title', [
                        'title' => 'RUBAGA APARTMENTS',
                        'sub_title' => 'Dashboard',
                        'icon' => 'fa fa-dashboard',
                        'color' => 'bg-aqua'
                    ]));
                });
            });


            $content->row(function (Row $row) {
         
           
                 $row->column(2, function (Column $column) {
                      $column->append(view('widgets.dashboard-image', [
                         
                      ]));
                  }); 
                  $row->column(2, function (Column $column) {
                      $column->append(view('widgets.dashboard-image1', [
                          
                      ]));
                  }); 
                  $row->column(2, function (Column $column) {
                      $column->append(view('widgets.dashboard-image2', [
                          
                      ]));
                  }); 
                  $row->column(2, function (Column $column) {
                      $column->append(view('widgets.dashboard-image3', [
                           'rooms' => Room::all(),
                          'tenants' => Tenant::all(),
                          'rentings' => Renting::all(),
                          'payments' => TenantPayment::all() 
                      ]));
                  });
                  $row->column(2, function (Column $column) {
                      $column->append(view('widgets.dashboard-image4', [
                          
                      ]));
                  });
                 /*  $row->column(1, function (Column $column) {
                      $column->append(view('widgets.dashboard-image5', [
                          
                      ]));
                  });  */
                 
              });

       /*  $content->row(function (Row $row) {
            
            $row->column(6, function (Column $column) {
               
                $column->append(view('widgets.dashboard-segment-1', [
                    'vacantR' => Room::where([
                        'status' => 'Vacant'
                    ])->count(),

                     'OcupiedR' => Room::where([
                        'status' => 'Occupied'
                    ])->count(), 

                      'my_tasks_count' => MedicalService::where([
                        "status" => "Pending"
                    ])->count(),  
                     'BalanceT' => TenantPayment::where(
                        "balance",
                        '<',
                        0
                    )->count(),
                     'BalanceAll' => TenantPayment::where(
                        "balance",
                        '<',
                        0
                    )->get(),
                     'vacantrooms' => room::where([
                        'status' => 'Vacant'
                    ])->limit(10)
                        ->get()    
                ]));
            
            
            }); 

            $row->column(6, function (Column $column) {

                $column->append(Dashboard::dashboard_calender());
            });


            
        }); */
        $content->row(function (Row $row) {
            /* $row->column(4, function (Column $column) {
                $column->append(view('widgets.dashboard-floor3', [
                    'rooms' => Room::where('floor', 'Floor4')->get()
                ]));
            });
            $row->column(4, function (Column $column) {
                $column->append(view('widgets.dashboard-floor4', [
                    'rooms' => Room::where('floor', 'Floor5')->get()
                    
                ]));
            });
            $row->column(4, function (Column $column) {
                $column->append(view('widgets.dashboard-floor5', [
                    'rooms' => Room::where('floor', 'Floor6')->get()
                    
                ]));
            }); */
           
        });
        // titlle
        
        
        $content->row(function (Row $row) {
         
           
          /* $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image', [
                   
                ]));
            }); 
            $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image1', [
                    
                ]));
            }); 
            $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image2', [
                    
                ]));
            }); 
            $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image3', [
                     'rooms' => Room::all(),
                    'tenants' => Tenant::all(),
                    'rentings' => Renting::all(),
                    'payments' => TenantPayment::all() 
                ]));
            });
            $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image4', [
                    
                ]));
            });
            $row->column(2, function (Column $column) {
                $column->append(view('widgets.dashboard-image5', [
                    
                ]));
            }); */
           
        });

        
        return $content;
    }

    }