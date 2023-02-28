@extends ('admin.layout')
@section('title', 'Country Details')
@section('country', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add </span>Country Details</h4>
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ Session::get('error') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Basic Layout -->
<div class="row">
<div class="col-xl">
<div class="card mb-4">
<div class="card-header d-flex justify-content-between align-items-center">
</div>
<div class="card-body">
<!-- <form> -->

<div class="col-xl-12">
<div class="nav-align-top mb-4">
<ul class="nav nav-pills mb-3 nav-fill" role="tablist">
<li class="nav-item">
<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-facts" aria-controls="navs-pills-justified-facts" aria-selected="true">Fast Facts </button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-admission" aria-controls="navs-pills-justified-admission" aria-selected="false">Admissions</button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-scholarship" aria-controls="navs-pills-justified-scholarship" aria-selected="false">Scholarship</button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-visa" aria-controls="navs-pills-justified-visa" aria-selected="false">Visa</button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-cost" aria-controls="navs-pills-justified-cost" aria-selected="false">Cost Of Living</button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-work" aria-controls="navs-pills-justified-work" aria-selected="false">Work Opportunities</button>
</li>
<li class="nav-item">
<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-faqs" aria-controls="navs-pills-justified-faqs" aria-selected="false">Faqs</button>
</li>
</ul>
<div class="tab-content">

{{-- Fast Facts Section Starts Here --}}
<div class="tab-pane fade active show" id="navs-pills-justified-facts" role="tabpanel">
<form action="{{ route('admin.country.details.fact-add', $country_id) }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="rowSection">
    @if(count($fact_list) > 0)
    @foreach($fact_list as $key => $fact)
<div class="rowBox row align-items-center" id="rowBox_{{$key}}">
    <input type="hidden" name="fact_attr[]" value="{{$fact->id}}" />
<div class="mb-3 col-2">
    @if($key < 1)
<label class="form-label" for="fact_title_{{$key}}">Title</label>
@endif
<input type="text" class="form-control" id="fact_title_{{$key}}" name="fact_title[]" value="{{ $fact->fact_title }}" placeholder="Title">
</div>
<div class="mb-3 col-3">
    @if($key < 1)
<label class="form-label" for="fact_content_{{$key}}">Content</label>
@endif
<input type="text" class="form-control" id="fact_content_{{$key}}" name="fact_content[]" value="{{ $fact->fact_content }}" placeholder="Content">
</div>
<div class="mb-3 col-4">
    @if($key < 1)
<label class="form-label" for="fact_image_{{$key}}">Image</label>
@endif
<input type="file" class="form-control" id="fact_image_{{$key}}" name="fact_image[]">
</div>
<div class="mb-3 col-1">
    @if($key < 1)
    <label class="form-label d-block" for="fact_image">&nbsp;</label>
    @endif
<div class="imgThumb form-control">
<img src="{{ asset('storage/uploads/facts/'.$fact->fact_image) }}" alt="" class="w-100">
</div>
</div>
<div class="mb-3 col-2 text-right">
    @if($key < 1)
    <label class="form-label d-block" for="fact_image">&nbsp;</label>
    <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreFacts(event);" >Add</a>
    @else
    <a href="javascript:void(0);" class="btn btn-danger" onclick="removeFacts(event, '{{$fact->id}}');" >Remove</a>
    @endif
   
</div>
</div>
@endforeach
@else
<div class="rowBox row" id="rowBox_0">
    <input type="hidden" name="fact_attr[]" value="" />
    <div class="mb-3 col-3">
    <label class="form-label" for="fact_title_0">Title</label>
    <input type="text" class="form-control" id="fact_title_0" name="fact_title[]" placeholder="Title">
    @if ($errors->has('fact_title[0]'))
    <span class="text-danger">{{ $errors->first('fact_title[0]') }}</span>
    @endif
    </div>
    <div class="mb-3 col-3">
    <label class="form-label" for="fact_content_0">Content</label>
    <input type="text" class="form-control" id="fact_content_0" name="fact_content[]" placeholder="Content">
    @if ($errors->has('fact_content[0]'))
    <span class="text-danger">{{ $errors->first('fact_content[0]') }}</span>
    @endif
    </div>
    <div class="mb-3 col-4">
    <label class="form-label" for="fact_image_0">Image</label>
    <input type="file" class="form-control" id="fact_image_0" name="fact_image[]">
    @if ($errors->has('fact_image[0]'))
    <span class="text-danger">{{ $errors->first('fact_image[0]') }}</span>
    @endif
    </div>
    <div class="mb-3 col-2 text-right">
        <label class="form-label d-block" for="fact_image">&nbsp;</label>
       <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreFacts(event);" >Add</a>
    </div>
    </div>
@endif
</div>
<button type="submit" class="btn btn-primary" name="fact_submit">Save</button>
</form>
</div>
{{-- Fast Facts Section Ends Here --}}

{{-- Admission Section Starts Here --}}
<div class="tab-pane fade" id="navs-pills-justified-admission" role="tabpanel">
    <form action="{{ route('admin.country.details.admission-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(count($admission_list) > 0)
    <div class="mb-3 col-12">
    <label class="form-label" for="admission_para">Head Description</label>
    <input type="text" class="form-control" id="admission_para" name="admission_para" value="{{ $admission_list[0]->admission_para }}" placeholder="Enter Head Description">
    @if ($errors->has('admission_para'))
    <span class="text-danger">{{ $errors->first('admission_para') }}</span>
    @endif
    </div>
    @else
    <div class="mb-3 col-12">
        <label class="form-label" for="admission_para">Head Description</label>
        <input type="text" class="form-control" id="admission_para" name="admission_para" value="" placeholder="Enter Head Description">
        @if ($errors->has('admission_para'))
        <span class="text-danger">{{ $errors->first('admission_para') }}</span>
        @endif
        </div>

    @endif
        <div class="admissionBox">
            @if(count($admission_list) > 0)
            @foreach ($admission_list as $key => $admission)
            <div class="rowBox row" id="admissionBox_{{$key}}">
                <input type="hidden" name="admission_attr[]" value="{{ $admission->id }}" />
                <div class="mb-3 col-5">
                    @if($key < 1)
                <label class="form-label" for="admission_title_{{$key}}">Title</label>
                @endif
                <input type="text" class="form-control" id="admission_title_{{$key}}" name="admission_title[]" value="{{ $admission->admission_title }}" placeholder="Admission Title">
                </div>
                <div class="mb-3 col-4">
                    @if($key < 1)
                <label class="form-label" for="admission_image_{{$key}}">Image</label>
                @endif
                <input type="file" class="form-control" id="admission_image_{{$key}}" name="admission_image[]">
                </div>
                <div class="mb-3 col-1">
                    @if($key < 1)
                    <label class="form-label d-block" for="admission_image">&nbsp;</label>
                    @endif
                <div class="imgThumb form-control">
                <img src="{{ asset('storage/uploads/admission/'.$admission->admission_image) }}" alt="" class="w-100">
                </div>
                </div>
                <div class="mb-3 col-2 text-right">
                    @if($key < 1)
                <label class="form-label d-block">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreAdmission(event);" >Add</a>
                    @else
                    <a href="javascript:void(0);" class="btn btn-danger" onclick="removeAdmission(event, '{{$admission->id}}');" >Remove</a>
                    @endif
            </div>
                </div>            
            @endforeach
                @else

                <div class="rowBox row" id="admissionBox_0">
                    <input type="hidden" name="admission_attr[]" value="" />
                    <div class="mb-3 col-5">
                    <label class="form-label" for="admission_title_0">Title</label>
                    <input type="text" class="form-control" id="admission_title_0" name="admission_title[]" placeholder="Admission Title">
                    @if ($errors->has('admission_title[0]'))
                    <span class="text-danger">{{ $errors->first('admission_title[0]') }}</span>
                    @endif
                    </div>
                    <div class="mb-3 col-5">
                    <label class="form-label" for="admission_image_0">Image</label>
                    <input type="file" class="form-control" id="admission_image_0" name="admission_image[]" >
                    @if ($errors->has('admission_image[0]'))
                    <span class="text-danger">{{ $errors->first('admission_image[0]') }}</span>
                    @endif
                    </div>
                    <div class="mb-3 col-2 text-right">
                    <label class="form-label d-block" for="admission_image">&nbsp;</label>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreAdmission(event);" >Add</a>
                    </div>
                    </div>

                @endif
        </div>
        <button type="submit" class="btn btn-primary" name="admission_submit">Save</button>
    </form>
</div>
{{-- Admission Section Starts Here --}}

{{-- Scholarship Section Starts Here --}}
<div class="tab-pane fade" id="navs-pills-justified-scholarship" role="tabpanel">
    <form action="{{ route('admin.country.details.scholarship-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(count($scholar_list) > 0)
        <input type="hidden" name="scholar_id" value="{{$scholar_list[0]->id}}" />
        <div class="mb-3 col-12">
            <label class="form-label" for="scholar_title">Title</label>
            <input type="text" class="form-control" id="scholar_title" name="scholar_title" value="{{$scholar_list[0]->scholar_title}}" placeholder="Scholarship Title">
            @if ($errors->has('scholar_title'))
            <span class="text-danger">{{ $errors->first('scholar_title') }}</span>
            @endif
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="scholar_desc">Description</label>
            <textarea  class="form-control" id="scholar_desc" name="scholar_desc" placeholder="Scholarship Description">{{$scholar_list[0]->scholar_desc}}</textarea>
            @if ($errors->has('scholar_desc'))
            <span class="text-danger">{{ $errors->first('scholar_desc') }}</span>
            @endif
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="scholar_image">Image</label>
            <img src="{{ asset('storage/uploads/scholar/'.$scholar_list[0]->scholar_image) }}" class="img-fluid form-control" />
        </div>
        <div class="mb-3 col-12">
            <input type="file" class="form-control" id="scholar_image" name="scholar_image" />
            <input type="hidden" class="form-control" name="temp_scholar_image" value="{{$scholar_list[0]->scholar_image}}" />
            @if ($errors->has('scholar_image'))
            <span class="text-danger">{{ $errors->first('scholar_image') }}</span>
            @endif
        </div>
        @else

        <input type="hidden" name="scholar_id"  />
        <div class="mb-3 col-12">
            <label class="form-label" for="scholar_title">Title</label>
            <input type="text" class="form-control" id="scholar_title" name="scholar_title"  placeholder="Scholarship Title">
            @if ($errors->has('scholar_title'))
            <span class="text-danger">{{ $errors->first('scholar_title') }}</span>
            @endif
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="scholar_desc">Description</label>
            <textarea  class="form-control" id="scholar_desc" name="scholar_desc" placeholder="Scholarship Description"></textarea>
            @if ($errors->has('scholar_desc'))
            <span class="text-danger">{{ $errors->first('scholar_desc') }}</span>
            @endif
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="scholar_image">Image</label>
            <input type="file" class="form-control" id="scholar_image" name="scholar_image" />
            @if ($errors->has('scholar_image'))
            <span class="text-danger">{{ $errors->first('scholar_image') }}</span>
            @endif
        </div>
        @endif
        <button type="submit" class="btn btn-primary" name="scholar_submit">Save</button>
    </form>
</div>
{{-- Scholarship Section Ends Here --}}

{{-- Visa Section Starts Here --}}
<div class="tab-pane fade" id="navs-pills-justified-visa" role="tabpanel">
    <form action="{{ route('admin.country.details.visa-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        <div class="visaBox">
        @csrf
        @if(count($visa_list) > 0)
        @foreach ($visa_list as $key => $visa)
        <div class="visaRow row" id="visaRow_{{$key}}">
            <input type="hidden" name="visa_id[]" value="{{$visa->id}}" />
            <div class="mb-3 col-3">
                @if($key < 1)
                <label class="form-label" for="visa_title_0">Title</label>
                @endif
                <input type="text" class="form-control" id="visa_title_0" name="visa_title[]" value="{{$visa->visa_title}}" placeholder="Visa Title">
            </div>
            <div class="mb-3 col-3">
                @if($key < 1)
                <label class="form-label" for="visa_cost_0">Cost</label>
                @endif
                <input type="text" class="form-control" id="visa_cost_0" name="visa_cost[]" value="{{$visa->visa_cost}}"  placeholder="Visa Cost">
            </div>
            <div class="mb-3 col-3">
                @if($key < 1)
                <label class="form-label" for="visa_type_0">Type</label>
                @endif
                <input type="text" class="form-control" id="visa_type_0" name="visa_type[]" value="{{$visa->visa_type}}" placeholder="Visa Type">
            </div>
            <div class="mb-3 col-3">
                @if($key < 1)
                <label class="form-label" for="visa_rating_0">Rating</label>
                @endif
                <input type="text" class="form-control" id="visa_rating_0" name="visa_rating[]" value="{{$visa->visa_rating}}" placeholder="Visa Rating">
            </div>
            <div class="mb-3 col-10">
                @if($key < 1)
                <label class="form-label" for="visa_desc_0">Description</label>
                @endif
                <textarea  class="form-control" id="visa_desc_0" name="visa_desc[]" placeholder="Visa Description">{{$visa->visa_short_desc}}</textarea>
            </div>
            <div class="mb-3 col-2">
                @if($key < 1)
                <label class="form-label" for="visa_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreVisa(event);" >Add</a>
                @else
                <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeVisa(event, '{{$visa->id}}');" >Remove</a>
                @endif
            </div>
        </div>      
        @endforeach
        @else

        <div class="visaRow row" id="visaRow_0">
            <input type="hidden" name="visa_id[]"  />
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_title_0">Title</label>
                <input type="text" class="form-control" id="visa_title_0" name="visa_title[]"  placeholder="Visa Title">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_cost_0">Cost</label>
                <input type="text" class="form-control" id="visa_cost_0" name="visa_cost[]"  placeholder="Visa Cost">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_type_0">Type</label>
                <input type="text" class="form-control" id="visa_type_0" name="visa_type[]"  placeholder="Visa Type">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_rating_0">Rating</label>
                <input type="text" class="form-control" id="visa_rating_0" name="visa_rating[]"  placeholder="Visa Rating">
            </div>
            <div class="mb-3 col-10">
                <label class="form-label" for="visa_desc_0">Description</label>
                <textarea  class="form-control" id="visa_desc_0" name="visa_desc[]" placeholder="Visa Description"></textarea>
            </div>
            <div class="mb-3 col-2">
                <label class="form-label" for="visa_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreVisa(event);" >Add</a>
            </div>
        </div>
        @endif
        
    </div>
    <button type="submit" class="btn btn-primary" name="visa_submit">Save</button>
    </form>
</div>
{{-- Visa Section Ends Here --}}

{{-- Cost Of Living Section Starts Here --}}

<div class="tab-pane fade" id="navs-pills-justified-cost" role="tabpanel">
    <form action="{{ route('admin.country.details.cost-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        <div class="costBox">
        @csrf
        @if(count($cost_list) > 0)
        @foreach ($cost_list as $key => $cost)
        <div class="costRow row" id="costRow_{{$key}}">
            <input type="hidden" name="cost_id[]" value="{{$cost->id}}" />
            <div class="mb-3 col-12 text-align-right">
                @if($key < 1)
                <label class="form-label" for="cost_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreCost(event, '{{$key}}');" >Add</a>
                @else
                <a href="javascript:void(0);" class="btn btn-danger" onclick="removeCost(event, '{{$cost->id}}');" >Remove</a>
                @endif
            </div>
            <div class="mb-3 col-10">
                @if($key < 1)
                <label class="form-label" for="cost_title_0">Title</label>
                @endif
                <input type="text" class="form-control" id="cost_title_0" name="cost_title[]" value="{{$cost->cost_title}}" placeholder="Cost Title">
            </div>
            <div class="mb-3 col-10">
                @if($key < 1)
                <label class="form-label" for="cost_desc_0">Description</label>
                @endif
                <textarea  class="form-control" id="cost_desc_0" rows="1" name="cost_desc[]" placeholder="Cost Description">{{$cost->cost_desc}}</textarea>
            </div>
            <div class="costQuesBox_{{$key}}">
              @php
                $quesAnswer = [];
                if ($cost->id) {
                    $quesAnswer = getCostQuestionAnswerById($cost->id);
                }
              @endphp
              
               @foreach ($quesAnswer as $que => $answer)
                <div class="row" id="costQues_{{$que}}{{$key}}">
                    
                    <input type="hidden" name="quest_id[{{$key}}][]" value="{{$answer->id}}" />
                    <div class="mb-3 col-5">
                        @if($que < 1)
                        <label class="form-label" for="cost_ques_{{$que}}">Question</label>
                        @endif
                        <input type="text" class="form-control" id="cost_ques_{{$que}}" value="{{$answer->question}}" name="cost_ques[{{$key}}][]"  placeholder="Cost Question">
                    </div>
                    <div class="mb-3 col-5">
                        @if($que < 1)
                        <label class="form-label" for="cost_ans_{{$que}}">Answer</label>
                        @endif
                        <textarea  class="form-control h40" rows="1" id="cost_ans_{{$que}}" name="cost_ans[{{$key}}][]" placeholder="Cost Answer">{{$answer->answer}}</textarea>
                    </div>
                    <div class="mb-3 col-2">
                        @if($que < 1)
                        <label class="form-label" for="cost_desc_{{$que}}">&nbsp;</label>
                        <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreQuestions(event, '{{$key}}');" ><i class="bx bx-plus"></i></a>
                        @else
                        <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeQuestions(event, '{{$answer->id}}');" ><i class='bx bx-minus'></i></a>
                        @endif
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>      
        @endforeach
        @else
        
        <div class="costRow row" id="costRow_0">
            <input type="hidden" name="cost_id[]"  />
            <div class="mb-3 col-12 text-align-right">
                <label class="form-label" for="cost_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success" onclick="addMoreCost(event, '0');" >Add</a>
            </div>
            <div class="mb-3 col-12">
                <label class="form-label" for="cost_title_0">Title</label>
                <input type="text" class="form-control" id="cost_title_0" name="cost_title[]"  placeholder="Faqs Title">
            </div>
            <div class="mb-3 col-12">
                <label class="form-label" for="cost_desc_0">Description</label>
                <textarea  class="form-control" id="cost_desc_0" name="cost_desc[]" placeholder="Cost Description"></textarea>
            </div>
            <div class="costQuesBox_0">
                <div class="row" id="costQues_0">
                    <input type="hidden" name="quest_id[][]"  />
                    <div class="mb-3 col-5">
                        <label class="form-label" for="cost_ques_0">Questiong</label>
                        <input type="text" class="form-control" id="cost_ques_0" name="cost_ques[0][]"  placeholder="Cost Questiong">
                    </div>
                    <div class="mb-3 col-5">
                        <label class="form-label" for="cost_ans_0">Answer</label>
                        <textarea  class="form-control h40" id="cost_ans_0" name="cost_ans[0][]" placeholder="Cost Answer"></textarea>
                    </div>
                    <div class="mb-3 col-2">
                        <label class="form-label" for="cost_desc_0">&nbsp;</label>
                        <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreQuestions(event, '0');" ><i class='bx bx-plus'></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </div>
    <button type="submit" class="btn btn-primary" name="scholar_submit">Save</button>
    </form>
</div>
{{-- Cost Of Living Section Ends Here --}}

{{-- Work Opportunity Section Starts Here --}}
<div class="tab-pane fade" id="navs-pills-justified-work" role="tabpanel">
    <form action="{{ route('admin.country.details.work-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="work_id" value="@if (count($work_list) > 0) {{ $work_list[0]->id }}}@endif" />
        <div class="mb-3 col-12">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="@if(count($work_list) > 0) {{ $work_list[0]->title}} @endif"  placeholder="Work Title">
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="content">Description</label>
            <textarea  class="form-control h40" id="content" name="content" placeholder="Description">@if(count($work_list) > 0) {{ $work_list[0]->content }} @endif</textarea>
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="part_title">Part-Time Title</label>
            <input type="text" class="form-control" id="part_title" name="part_title" value="@if(count($work_list) > 0) {{ $work_list[0]->part_title }} @endif"  placeholder="Part-Time Title">
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="part_content">Part-Time Description</label>
            <textarea  class="form-control h40" id="part_content" name="part_content" placeholder="Part-Time Description">@if(count($work_list) > 0) {{ $work_list[0]->part_content }} @endif</textarea>
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="study_title">Post-Study Title</label>
            <input type="text" class="form-control" id="study_title" name="study_title" value="@if(count($work_list) > 0) {{ $work_list[0]->study_title }} @endif" placeholder="Post-Study Title">
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="study_content">Post-Study Description</label>
            <textarea  class="form-control h40" id="study_content" name="study_content" placeholder="Post-Study Description">@if(count($work_list) > 0) {{ $work_list[0]->study_content }} @endif</textarea>
        </div>
        <div class="workBox">
            @php
            $workDetails = [];
            if(count($work_list) > 0)
            {
                $wId = $work_list[0]->id;
                $workDetails = getWorkExtraDetailsById($wId);
            }
               
            @endphp
            @if(count($workDetails) > 0)
            @foreach ($workDetails as $key => $works)
            <div class="workRow row" id="workRow_{{$key}}">
                <input type="hidden" name="work_detail_id[]" value="{{$works->id}}" />
                <div class="mb-3 col-4">
                    @if($key < 1)
                    <label class="form-label" for="work_title_{{$key}}">Work Title</label>
                    @endif
                    <input type="text" class="form-control" id="work_title_{{$key}}" name="work_title[]" value="{{$works->work_title}}"  placeholder="Work Title">
                </div>
                <div class="mb-3 col-4">
                    @if($key < 1)
                    <label class="form-label" for="work_image_{{$key}}">Work Image</label>
                    @endif
                    <input type="file" class="form-control" id="work_image_{{$key}}" name="work_image[]" >
                </div>
                <div class="mb-3 col-2">
                    <img class="form-control img-fluid" src="{{ asset('storage/uploads/works/'.$works->work_image) }}" alt="{{$works->work_title}}">
                </div>
                <div class="mb-3 col-2">
                    @if($key < 1)
                    <label class="form-label" for="work_add">&nbsp;</label>
                    <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreWorkDetails(event);" >Add</a>
                    @else
                    <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeWorkDetails(event, '{{$works->id}}');" >Remove</a>
                    @endif
                </div>
            </div>         
            @endforeach

            @else


            <div class="workRow row" id="workRow_0">
                <input type="hidden" name="work_detail_id[]" value="" />
                <div class="mb-3 col-4">
                    <label class="form-label" for="work_title_0">Work Title</label>
                    <input type="text" class="form-control" id="work_title_0" name="work_title[]" value=""  placeholder="Work Title">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label" for="work_image_0">Work Image</label>
                    <input type="file" class="form-control" id="work_image_0" name="work_image[]" >
                </div>
                <div class="mb-3 col-2">
                    
                </div>
                <div class="mb-3 col-2">
                   
                    <label class="form-label" for="work_add">&nbsp;</label>
                    <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreWorkDetails(event, '0');" >Add</a>
                </div>
            </div> 


            @endif
        </div>
            <button type="submit" class="btn btn-primary" name="work_submit">Save</button>
    </form>
</div>



{{-- Work Opportunity Section Ends Here --}}

{{-- Faqs Section Starts Heere --}}
<div class="tab-pane fade" id="navs-pills-justified-faqs" role="tabpanel">
    <form action="{{ route('admin.country.details.faqs-add', $country_id) }}" method="POST" enctype="multipart/form-data">
        <div class="faqsBox">
        @csrf
        @if(count($faqs_list) > 0)
        @foreach ($faqs_list as $key => $faqs)
        <div class="faqsRow row" id="faqsRow_{{$key}}">
            <input type="hidden" name="faqs_id[]" value="{{$faqs->id}}" />
            <div class="mb-3 col-5">
                @if($key < 1)
                <label class="form-label" for="faqs_title_0">Title</label>
                @endif
                <input type="text" class="form-control" id="faqs_title_0" name="faqs_title[]" value="{{$faqs->faqs_title}}" placeholder="Faqs Title">
            </div>
            <div class="mb-3 col-5">
                @if($key < 1)
                <label class="form-label" for="faqs_desc_0">Description</label>
                @endif
                <textarea  class="form-control" id="faqs_desc_0" name="faqs_desc[]" placeholder="Faqs Description">{{$faqs->faqs_desc}}</textarea>
            </div>
            <div class="mb-3 col-2">
                @if($key < 1)
                <label class="form-label" for="faqs_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreFaqs(event);" >Add</a>
                @else
                <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeFaqs(event, '{{$faqs->id}}');" >Remove</a>
                @endif
            </div>
        </div>      
        @endforeach
        @else

        <div class="faqsRow row" id="faqsRow_0">
            <input type="hidden" name="faqs_id[]"  />
            <div class="mb-3 col-5">
                <label class="form-label" for="faqs_title_0">Title</label>
                <input type="text" class="form-control" id="faqs_title_0" name="faqs_title[]"  placeholder="Faqs Title">
            </div>
            
            <div class="mb-3 col-5">
                <label class="form-label" for="faqs_desc_0">Description</label>
                <textarea  class="form-control" id="faqs_desc_0" name="faqs_desc[]" placeholder="Faqs Description"></textarea>
            </div>
            <div class="mb-3 col-2">
                <label class="form-label" for="faqs_desc_0">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreFaqs(event);" >Add</a>
            </div>
        </div>
        @endif
        
    </div>
    <button type="submit" class="btn btn-primary" name="scholar_submit">Save</button>
    </form>
</div>
{{-- Faqs Section Ends Here --}}






</div>
</div>
</div>



</div>
</div>
</div>
</div>
</div>

@endsection

@section('script')
<script>

CKEDITOR.replace('scholar_desc');


let fi = @php  
if(count($fact_list) > 0)
{
    echo count($fact_list);

}else{
echo 0;
}
 @endphp;
function addMoreFacts(event)
{
    fi++;
    let html = `<div class="rowBox row" id="rowBox_${fi}">
        <input type="hidden" name="fact_attr[]" value="" />
<div class="mb-3 col-3">
<input type="text" class="form-control" id="fact_title_${fi}" name="fact_title[]" placeholder="Title">
</div>
<div class="mb-3 col-3">
<input type="text" class="form-control" id="fact_content_${fi}" name="fact_content[]" placeholder="Content">
</div>
<div class="mb-3 col-4">
<input type="file" class="form-control" id="fact_image_${fi}" name="fact_image[]">
</div>
<div class="mb-3 col-2 text-right">
   <a href="javascript:void(0);" class="btn btn-danger" onclick="removeFacts(event, '${fi}');" >Remove</a>
</div>
</div>`;
$('.rowSection').append(html);
}

let adm = @php  
if(count($admission_list) > 0)
{
    echo count($admission_list);

}else{
echo 0;
}
 @endphp;
function addMoreAdmission(event)
{
    adm++;
    html = `<div class="rowBox row" id="admissionBox_${adm}">
            <input type="hidden" name="admission_attr[]" value="" />
            <div class="mb-3 col-5">
            <input type="text" class="form-control" id="admission_title_${adm}" name="admission_title[]" placeholder="Admission Title">
            </div>
            <div class="mb-3 col-5">
            <input type="file" class="form-control" id="admission_image_${adm}" name="admission_image[]">
            </div>
            <div class="mb-3 col-2 text-right">
            <a href="javascript:void(0);" class="btn btn-danger" onclick="removeAdmission(event, '${adm}');" >Remove</a>
            </div>
            </div>`;
    $('.admissionBox').append(html);
}

let vis = @php  
if(count($visa_list) > 0)
{
    echo count($visa_list);

}else{
echo 0;
}
 @endphp;
function addMoreVisa(event)
{
    vis++;
    html = `<div class="visaRow row" id="visaRow_${vis}">
            <input type="hidden" name="visa_id[]"  />
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_title_${vis}">Title</label>
                <input type="text" class="form-control" id="visa_title_${vis}" name="visa_title[]"  placeholder="Visa Title">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_cost_${vis}">Cost</label>
                <input type="text" class="form-control" id="visa_cost_${vis}" name="visa_cost[]"  placeholder="Visa Cost">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_type_${vis}">Type</label>
                <input type="text" class="form-control" id="visa_type_${vis}" name="visa_type[]"  placeholder="Visa Type">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="visa_rating_${vis}">Rating</label>
                <input type="text" class="form-control" id="visa_rating_${vis}" name="visa_rating[]"  placeholder="Visa Rating">
            </div>
            <div class="mb-3 col-10">
                <label class="form-label" for="visa_desc_${vis}">Description</label>
                <textarea  class="form-control" id="visa_desc_${vis}" name="visa_desc[]" placeholder="Visa Description"></textarea>
            </div>
            <div class="mb-3 col-2">
                <label class="form-label" for="visa_desc_${vis}">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeVisa(event, '${vis}');" >Remove</a>
            </div>
        </div>`;
    $('.visaBox').append(html);
}



let faq = @php  
if(count($faqs_list) > 0)
{
    echo count($faqs_list);

}else{
echo 0;
}
 @endphp;
function addMoreFaqs(event)
{
    faq++;
    html = `<div class="faqsRow row" id="faqsRow_${faq}">
            <input type="hidden" name="faqs_id[]"  />
            <div class="mb-3 col-5">
                <input type="text" class="form-control" id="faqs_title_${faq}" name="faqs_title[]"  placeholder="Faqs Title">
            </div>
            
            <div class="mb-3 col-5">
                <textarea  class="form-control" id="faqs_desc_${faq}" name="faqs_desc[]" placeholder="Faqs Description"></textarea>
            </div>
            <div class="mb-3 col-2">
                <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeFaqs(event, '${faq}');" >Remove</a>
            </div>
        </div>`;
    $('.faqsBox').append(html);
}


let cost = @php  
if(count($cost_list) > 0)
{
    echo count($cost_list);

}else{
echo 0;
}
 @endphp;
function addMoreCost(event, key)
{
    cost++;
    key++;
    html = `<div class="costRow row" id="costRow_${key}">
            <input type="hidden" name="cost_id[]"  />
            <div class="mb-3 col-12 text-align-right">
                <label class="form-label" for="cost_desc_${cost}">&nbsp;</label>
                <a href="javascript:void(0);" class="btn btn-danger" onclick="removeCost(event, '${cost}');" >Remove</a>
            </div>
            <div class="mb-3 col-12">
                <label class="form-label" for="cost_title_${cost}">Title</label>
                <input type="text" class="form-control" id="cost_title_${cost}" name="cost_title[]"  placeholder="Faqs Title">
            </div>
            <div class="mb-3 col-12">
                <label class="form-label" for="cost_desc_${cost}">Description</label>
                <textarea  class="form-control" id="cost_desc_${cost}" name="cost_desc[]" placeholder="Cost Description"></textarea>
            </div>
            <div class="costQuesBox_${key}">
                <div class="row" id="costQues_${cost}${key}">
                    <input type="hidden" name="quest_id[${key}][]" value="" />
                    <div class="mb-3 col-5">
                        <label class="form-label" for="cost_ques_${cost}">Questiong</label>
                        <input type="text" class="form-control" id="cost_ques_${cost}" name="cost_ques[${key}][]"  placeholder="Cost Questiong">
                    </div>
                    <div class="mb-3 col-5">
                        <label class="form-label" for="cost_ans_${cost}">Answer</label>
                        <textarea  class="form-control h40" id="cost_ans_${cost}" name="cost_ans[${key}][]" placeholder="Cost Answer"></textarea>
                    </div>
                    <div class="mb-3 col-2">
                        <label class="form-label" for="cost_desc_${cost}">&nbsp;</label>
                        <a href="javascript:void(0);" class="btn btn-success form-control" onclick="addMoreQuestions(event, '${key}');" ><i class='bx bx-plus'></i></a>
                    </div>
                </div>
            </div>
        </div>`;
    $('.costBox').append(html);
}

let wrks = 0;
function addMoreWorkDetails(event)
{
    wrks++;
    let html = `<div class="workRow row" id="workRow_${wrks}">
                <input type="hidden" name="work_detail_id[]" value="" />
                <div class="mb-3 col-4">
                    <input type="text" class="form-control" id="work_title_${wrks}" name="work_title[]"  placeholder="Work Title">
                </div>
                <div class="mb-3 col-4">
                    <input type="file" class="form-control" id="work_image_${wrks}" name="work_image[]" >
                </div>
                <div class="mb-3 col-2"></div>
                <div class="mb-3 col-2">
                    <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeWorkDetails(event, '${wrks}');" >Remove</a>
                </div>
            </div>`;
            $('.workBox').append(html);
}
let ques =0;
function addMoreQuestions(event, key)
{
ques++;
let html = `<div class="row" id="costQues_${ques}${key}">
<input type="hidden" name="quest_id[${key}][]" value="" />
<div class="mb-3 col-5">
<input type="text" class="form-control" id="cost_ques_${ques}" name="cost_ques[${key}][]"  placeholder="Cost Questiong">
</div>
<div class="mb-3 col-5">
<textarea  class="form-control h40" id="cost_ans_${ques}" name="cost_ans[${key}][]" placeholder="Cost Answer"></textarea>
</div>
<div class="mb-3 col-2">
<label class="form-label" for="cost_desc_${ques}">&nbsp;</label>
<a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeQuestions(event, '${ques}');" ><i class='bx bx-minus'></i></a>
</div>
</div>`;
$('.costQuesBox_'+key).append(html);
}
</script>
    
@endsection