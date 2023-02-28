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
    $html.='<ul class="country_ul">';
    }else{
    $html.='<li class="cd-dropdown-left js-cd-dropdown-left"> 
    <a href="javascript:void(0)" class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block">European Union</a>
    <div class="cd-dropdown-right">
    <div class="cd-dropdown-indv " id="european_union">
    <div class="row">
    <h3 class="menu-rightside-heading capture-none"><span class="menu-rightside-heading-span">European Union</span>
    </h3>
    </div>
    <div class="row">
    <div class="col-12 ">
    <div> 
    <div class="d-flex">
    <ul class="mr-2">';
    }
    }
    if($level==$prelevel){
    $html.='</li>';
    }
    $html.='<li class="d-block"><a href="study-abroad/switzerland.php" class="cd-drop-links ">'. $data['country_name'] .'</a>';
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