<form method="POST" action="{{ url('my-mailContact') }}" enctype="multipart/form-data" name="information">
    {{ csrf_field() }}

    <div class="form-group">
        <input id="fname" type="text" class="form-control" name="fname"
               value="{{ old('fname') }}" placeholder=" Name" autofocus>

        @if ($errors->has('fname'))
            <span class="help-block">
                <strong>{{ $errors->first('fname') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <input id="email" type="email" class="form-control" name="email"
               value="{{ old('email') }}" placeholder="Email" autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <input id="subject" type="text" class="form-control" name="subject"
               value="{{ old('subject') }}" placeholder="Subject" autofocus>

        @if ($errors->has('subject'))
            <span class="help-block">
                <strong>{{ $errors->first('subject') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <textarea id="comment" type="text" class="form-control" rows="5" name="comment"
                  value="{{ old('comment') }}" placeholder="Message" autofocus></textarea>

        @if ($errors->has('comment'))
            <span class="help-block">
                <strong>{{ $errors->first('comment') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </div>
</form>