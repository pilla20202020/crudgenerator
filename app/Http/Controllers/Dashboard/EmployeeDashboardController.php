<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Form4\Recommendationfoodindustryestablishment;
use App\Models\Form7\Newlicenseissue;
use App\Models\Hr\Employee;
use App\Models\Form7\NewlicenseSubstance;
use App\Models\Hr\Leaveapplication;
use App\Models\Master\Leavetype;
use App\Models\Master\PaidLeave;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeDashboardController extends Controller
{
    //
    public function calculateRemainingPaidLeave($employeeId)
    {
        $employeeData = Employee::where('employee_id', auth()->user()->employee->employee_id)->first();
        $currentDate = Carbon::now()->format('Y-m-d');
        $employeeJoinFrom = Carbon::parse($employeeData->joiningDate)->format('Y-m-d');

        $remainingPaidLeaveDays = 0;
        $extraPaidLeaveTaken = 0;
        $totalLeaveDays = 0;
        //paid leave allocated per month
        $paidLeaveAllocation = PaidLeave::where('organization_id', $employeeData->organization_id)->first()->paidLeave ?? 0;

        if ($paidLeaveAllocation != 0) {
            $period = CarbonPeriod::create($employeeJoinFrom, '1 month', $currentDate);

            //calculating total paid leave earned
            //getting total days he joined the company till current date
            $employeeJoinedDaysTillCurrent = Carbon::parse($employeeJoinFrom)->diffInDays($currentDate);

            $totalMonthsStayed = intval($employeeJoinedDaysTillCurrent / 30);

            $totalPaidLeaveAccumulated = $totalMonthsStayed * intval($paidLeaveAllocation);

            //end of calculating total paid leave earned
            $leaveRequestApproved = Leaveapplication::where([
                ['employee_id', $employeeData->employee_id], ['leaveApplication_status', 'Approved'], ['leavetype_id', 0]
            ])->whereDate('created_at', '>=', $employeeJoinFrom)->get();

            foreach ($leaveRequestApproved as $data) {
                if ($data->leaveStart == $data->leaveEnd) {
                    $leaveDays = 1;
                } else {
                    $leaveDays = Carbon::parse($data->leaveStart)->diffInDays($data->leaveEnd) + 1;
                }
                $totalLeaveDays += $leaveDays;
            }
            $remainingPaidLeaveDays = $totalPaidLeaveAccumulated - $totalLeaveDays;

            if ($remainingPaidLeaveDays < 0) {
                $extraPaidLeaveTaken = abs($remainingPaidLeaveDays);

                $remainingPaidLeaveDays = 0;
            } else {
                $extraPaidLeaveTaken = 0;
            }
        }
        return [$paidLeaveAllocation, $remainingPaidLeaveDays, $extraPaidLeaveTaken, $totalLeaveDays];
    }

    public function leaveTakenDays($leavetype_id, $employeeId)
    {

        if ($leavetype_id == 0) {
            //then its paid leave
            $totalDays = $this->calculateRemainingPaidLeave($employeeId)[1];
        } else {
            $leaveRequests = Leaveapplication::where([
                ['leavetype_id', $leavetype_id], ['employee_id', $employeeId], ['leaveApplication_status', 'Approved']
            ])->get();
            $totalDays = 0;
            foreach ($leaveRequests as $data) {
                $leaveDays = Carbon::parse($data->startDate)->diffInDays($data->endDate) + 1;
                $totalDays += $leaveDays;
            }
        }
        return $totalDays;
    }

    public function dashboard()
    {
        // $employeeDashboardActive = 'active';
        // $employeeId = auth()->user()->employee->employee_id;
        // $employeeData = Employee::where('employee_id', $employeeId)->first();

        // $leave = Leavetype::where('organization_id', $employeeData->organization_id)->get();
        // $leaveType = [];
        // $leaveCount = [];
        // $leaveColor = [];
        // $totalLeave = 0;
        // $leaveDetails = [];
        // $totalLeaveTaken = 0;

        // foreach ($leave as $key => $data) {
        //     array_push($leaveType, $data->leaveType);
        //     array_push($leaveCount, $data->leaveCount);
        //     array_push($leaveColor, $data->colorCode);
        //     $totalLeave += $data->leaveCount;
        //     $leaveDetails[$key]['leaveType'] = $data->leaveType;
        //     $leaveDetails[$key]['leavetype_id'] = $data->leavetype_id;
        //     //getting the leave taken
        //     $leaveDetails[$key]['leaveTaken'] = $this->leaveTakenDays($data->leavetype_id, $employeeId);
        //     $totalLeaveTaken += $leaveDetails[$key]['leaveTaken'];
        //     $leaveDetails[$key]['leaveColor'] = $data->colorCode;
        // }


        // //leave request taken
        // $leaveRequests = Leaveapplication::where([
        //     ['employee_id', $employeeData->employee_id], ['leaveApplication_status', 'Approved']
        // ])->orderBy('created_at', 'desc')->get();

        // //total leave taken
        // $totalLeaveRequestApproved = count($leaveRequests);
        // $remainingLeave = $totalLeave - $totalLeaveTaken;
        // $remainingLeavePercentage = intval(($remainingLeave / $totalLeave) * 100);
        // //end of total leave taken
        // //calculating paid leave
        // $paidLeaveDetails = $this->calculateRemainingPaidLeave($employeeId);

        // $paidLeaveTaken = $paidLeaveDetails[3];
        // $leaveLeft = $paidLeaveDetails[1];
        // $totalLeaveTaken += $paidLeaveTaken;

        // return view('employee.dashboard',compact('leaveType', 'leaveCount', 'leaveColor', 'totalLeave', 'employeeData', 'leaveRequests',
        // 'totalLeaveRequestApproved', 'totalLeaveTaken', 'leaveDetails', 'remainingLeave',
        // 'remainingLeavePercentage', 'paidLeaveDetails', 'leaveLeft', 'paidLeaveTaken'));
        // $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->consumer->employee_id)->first();
        // $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->consumer->employee_id)->first();
        // dd($newlisence);
        $recommendationfoodindustryestablishment = Recommendationfoodindustryestablishment::orderBy('created_at', 'desc')->get();
        $newregistration = null ;
        $newlicense = Newlicenseissue::orderBy('created_at', 'desc')->get();
        return view('employee.dashboard',compact('newregistration','newlicense','recommendationfoodindustryestablishment'));
        
    }
}
