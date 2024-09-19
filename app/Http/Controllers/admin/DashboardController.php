<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    use ResponseTrait;
    // Index
    public function index(){
        return view('admin.dashboard.index');
    }

    // List Users
    public function listUsers()
    {
        $user =  User::latest();
        return DataTables::eloquent($user)
            ->addIndexColumn()
            ->addColumn('profile',function ($row){
                $img = asset(PROFILE_PLACEHOLDER);
                    return '<td class="text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="flex-shrink-0">
                                        <a href="'.$img.'" data-fancybox="">
                                            <img src="'.$img.'" onerror="userPlaceholder(this);" alt="" class="avatar-sm rounded-circle image_src object-cover border" />
                                        </a>
                                    </div>
                                </div>
                            </td>';
            })
            ->addColumn('created_at', function ($row) {
                return dateToHuman($row->created_at,'d M Y');
            })
            ->addColumn('action',function ($row){
//                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
//                                <a class="text-success view-item-btn" href="Javascript:void(0);">
//                                    <i class="ri-eye-fill fs-16" data-id="13"></i>
//                                </a>
//                            </li>
//                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
//                                <a class="text-warning edit-item-btn text-warning" data-bs-toggle="modal" href="#showModal" >
//                                    <i class="ri-pencil-fill fs-16 editCategory"></i>
//                                </a>
//                            </li>
                return '<ul class="list-inline mb-0 d-flex justify-content-center text-center">
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                <button type="button" onclick="removeUser('.$row->id.',this)" class="text-danger d-inline-block remove-item-btn deleteProduct">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </button>
                            </li>
                        </ul>';
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }

    // Remove User
    public function removeUser(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user_id' => 'required|numeric|exists:users,id',
        ]);
        if($validator->fails()){
            return $this->sendValidationError($validator->errors());
        }

        $remove = User::where('id',$request->user_id)->delete();
        if($remove){
            return $this->sendSuccess('User has been removed successfully.');
        }else{
            return $this->sendError("Unable to remove user");
        }
    }
}
