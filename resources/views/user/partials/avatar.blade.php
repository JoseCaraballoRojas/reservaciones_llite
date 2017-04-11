<div class="card-panel">
    <h4 class="header2">@lang('app.avatar')</h4>
    <div class="panel-body avatar-wrapper">
        <div class="spinner">
            <div class="spinner-dot"></div>
            <div class="spinner-dot"></div>
            <div class="spinner-dot"></div>
        </div>
        <div id="avatar"></div>
        <div>
            <img class="avatar-preview img-circle"
                 src="{{ $edit ? $user->present()->avatar : url('assets/img/profile.png') }}">
                 <div class="col s12 ">
                       <div id="change-picture" class="btn cyan waves-effect waves-light"
                            data-toggle="modal" data-target="#choose-modal">
                             <i class="mdi-image-camera-alt"></i>
                               @lang('app.change_photo')
                       </div>
                 </div>
          {{--  <div id="change-picture" class="btn btn-default btn-block"
                 data-toggle="modal" data-target="#choose-modal">
                <i class="mdi-image-camera-alt"></i>
                @lang('app.change_photo')
            </div> --}}
          {{--  <div class="row avatar-controls">
                <div class="col s6">
                    <div id="cancel-upload" style="text-align: center;"
                          class=" btn waves-effect waves-light red darken-2">
                        <i class="mdi-av-not-interested"></i> @lang('app.cancel')
                    </div>
                </div>
                <div class="col s6">
                  <button type="submit" id="save-photo" style="text-align: center;"
                          class="btn green waves-effect waves-light">
                      <i class="mdi-content-save"></i>
                        @lang('app.save')
                  </button>
                </div>
            </div>--}}
        </div>
    </div>
</div>

<div class="modal fade" id="choose-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 avatar-source" id="no-photo"
                         data-url="{{ $updateUrl }}">
                        <img src="{{ url('assets/img/profile.png') }}" class="img-circle">
                        <p>@lang('app.no_photo')</p>
                    </div>
                    <div class="col-md-4 avatar-source">
                        <div class="btn btn-default btn-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" name="avatar" id="avatar-upload">
                        </div>
                        <p>@lang('app.upload_photo')</p>
                    </div>
                    @if ($edit)
                        <div class="col-md-4 avatar-source source-external"
                             data-url="{{ $updateUrl }}">
                            <img src="{{ $user->gravatar() }}" class="img-circle">
                            <p>@lang('app.gravatar')</p>
                        </div>
                    @endif
                </div>

                @if ($edit && count($socialLogins))
                    @foreach ($socialLogins->chunk(3) as $socialLoginsSet)
                        <br>
                        <div class="row">
                            @foreach($socialLoginsSet as $login)
                                <div class="col-md-4 avatar-source source-external"
                                     data-url="{{ $updateUrl }}">
                                    <img src="{{ $login->avatar }}" class="img-circle" style="width: 120px;">
                                    <p>{{ ucfirst($login->provider) }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div style="display: none;">
    <input type="hidden" name="points[x1]" id="points_x1">
    <input type="hidden" name="points[y1]" id="points_y1">
    <input type="hidden" name="points[x2]" id="points_x2">
    <input type="hidden" name="points[y2]" id="points_y2">
</div>
