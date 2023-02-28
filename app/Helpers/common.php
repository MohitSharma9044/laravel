<?php
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Country\Country;
use App\Models\Admin\Country\CostQuestion;
use App\Models\Admin\Country\WorkDetail;
use App\Models\Admin\University\UniversityCoursesPoint;
use App\Models\Admin\University\UniversityCollegesPoint;
function getParentCountryById($id)
{
$country = DB::table('countries')->where(['id' => $id])->get();
$country_name = $country[0]->country_name;
return $country_name;
}
function getCostQuestionAnswerById($cost_id)
{
    $costQuesAns = CostQuestion::where(['cost_id' => $cost_id])->get();
    return $costQuesAns;
}

function getWorkExtraDetailsById($id)
{
    $workDetails = WorkDetail::where(['work_id' => $id])->get();
    return $workDetails;
}

function getUniversityCoursePointListById($course_id)
{
    $coursePoint = UniversityCoursesPoint::where(['uni_course_id' => $course_id])->get();
    return $coursePoint;
}

function getUniversityCollegePointListById($college_id)
{
    $collegePoint = UniversityCollegesPoint::where(['uni_college_id' => $college_id])->get();
    return $collegePoint;
}


function getTopNavBarMenu()
{
$country = Country::all();
$menuArr = [];
foreach($country as $key => $country_list)
{
    $menuArr[$country_list['id']]['country_name'] = $country_list['country_name'];
    $menuArr[$country_list['id']]['parent_id'] = $country_list['parent_id'];
}
    $menuList = buildTreeView($menuArr,0);
return $menuList;
}





    function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
    global $html;
    foreach($arr as $id=>$data){
    if($parent==$data['parent_id']){
    if($level>$prelevel){
    if($html==''){
    $html.='<ul class="nav navbar-nav">';
    }else{
    $html.='<ul class="dropdown-menu">';
    }
    }
    if($level==$prelevel){
    $html.='</li>';
    }
    $html.='<li><a href="#">'.$data['country_name'].'<span class="caret"></span></a>';
    if($level>$prelevel){
    $prelevel=$level;
    }
    $level++;
    buildTreeView($arr,$id,$level,$prelevel);
    $level--;
    }
    }
    if($level==$prelevel){
    $html.='</li></ul>';
    }
    return $html;
    }





?>