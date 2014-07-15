@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">

                <h2>Contact information</h2><br/>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Contact[email]" value="{{ $contact->email }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" name="Contact[telephone]" value="{{ $contact->telephone }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="Contact[mobile]" value="{{ $contact->mobile }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="Contact[city]" value="{{ $contact->city }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="Contact[address]" value="{{ $contact->address }}" class="form-control" required>
                </div>

                <hr/>

                <h2>Social links</h2><br/>

                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="Social[facebook]" value="{{ $social->facebook }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="Social[twitter]" value="{{ $social->twitter }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Google +</label>
                    <input type="text" name="Social[google]" value="{{ $social->google }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" name="Social[youtube]" value="{{ $social->youtube }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="Social[instagram]" value="{{ $social->instagram }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Vimeo</label>
                    <input type="text" name="Social[vimeo]" value="{{ $social->vimeo }}" class="form-control">
                </div>

                <hr/>

                <h2>Footer video</h2><br/>

                <div class="form-group">
                    <label>Youtube url</label>
                    <input type="text" name="FooterVideo[url]" value="{{ $footerVideo->url }}" class="form-control" required>
                </div>

                <hr/>

                <h2>Emails to notify when users contact us</h2><br/>

                <div class="form-group">
                    <label>Emails <small>Seperate with comma ,</small></label>
                    <input type="text" name="emails" value="{{ $concatedEmails }}" class="form-control" required>
                </div>


                <div class="clearfix"></div>
                <div class="btn-toolbar list-toolbar">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop