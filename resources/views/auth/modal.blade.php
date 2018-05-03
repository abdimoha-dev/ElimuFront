<div class="modal" tabindex="-1" role="dialog"id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <h6 class="modal-title pull-left">Code</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url'=>'check/phone/confirmation', 'role' =>'form'])  }}
                @csrf
                <div class="form-group">
                    {{ Form::label('sms_code','SMS Code')  }}
                    {{ Form::number('sms_code',old('sms_code'), ['class'=>'form-control']) }}

                    @if($errors->has('sms_code'))
                        <p class="help-block text-danger">
                            <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('sms_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Verify Code</button>
                <button type="button" class="btn btn-secondary alert-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@push('footer-scripts')
<script>
    $(document).ready(function () {
        $('#myModal').modal('show');
    })
</script>
    @endpush