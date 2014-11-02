@section('content')
<div class="container" id="listings-page">
  <div class="row">
    <div class="col-sm-12 listing-wrapper listings-top listings-bottom">
      <div class="row">
        <div class="col-sm-7">
          <ol class="breadcrumb">
          <li><i class="fa fa-car"></i> {{link_to_action('ClassifiedsController@getByCategory', "Povratak na $classifiedCategory->title", $classifiedCategory->slug, array('class' => 'link-info'))}}
          </ol>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-7">
            <h1>{{$classified->title}}</h1>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-7">
          <div class="row">
            <div class="col-xs-3" style="width: 100px;">

            </div>
          </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-sm-7">
                <p>Objavljeno {{$classified->created_at}}</p>

                <p class="classified-details">
                  {{$classified->description}}
                </p>
            </div>
            <div class="col-sm-5 center zoom-gallery">
              <div class="row center">

                <div class="col-sm-12">
                  <a class="fancybox" rel="group" href="{{$classified->leadImageUrl}}">
                      <img alt="{{$classified->title}}" class="raised" src="{{$classified->leadImageUrl}}" style="width: 100%" />
                  </a>
                  <br />
                  <br />
                  <div class="row">
                      @foreach ($images as $key => $value)
                        <div class="col-xs-4" style="margin-bottom: 10px;">
                            <a href="{{URL::asset('/uploads/' . $classified->id . '/' . $value->getFilename()) }}" class="fancybox thumbnail" rel="group" >
                                <img alt="{{$classified->title}}" src="{{URL::asset('/uploads/' . $classified->id . '/' . $value->getFilename()) }}" style="width: 100%" />
                            </a>
                        </div>
                      @endforeach
                    </div>
                </div>
              </div>

            </div>
        </div>
    </div>
  </div>
</div>
@stop