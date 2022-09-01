<?php

namespace App\Http\Controllers\Backend;

//use App\Charts\PerformanceChart;
//use App\Equipment;
use App\Http\Controllers\Controller;
//use App\Repositories\Equipment\EquipmentChecklistRepository;
//use App\Repositories\Equipment\EquipmentInspectionRepository;
//use App\Repositories\Service\ServiceRepository;
//use App\Repositories\WorkOrder\WorkOrderRepository;
//use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment_count = 0;
        $inspection_count = 0;
        $service_count = 0;
        $average_performance = 0;
        $pending_work_order = 0;
        $completed_work_order = 0;

        return view('backend.dashboard', [
            'equipment_count' => $equipment_count,
            'service_count' => $service_count,
            'inspection_count' => $inspection_count,
            'average_performance' => $average_performance,
            'pending_work_order' => $pending_work_order,
            'completed_work_order' => $completed_work_order,
        ]);
    }
}
